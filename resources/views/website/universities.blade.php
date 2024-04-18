@extends("layouts.master")
@section('content')    
    <!-- breadcrumb start -->
    <div class="container-xxl bg-primary page-header"
        style="background-image: url('/website/img/public/xx.jpg'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="bread-container">
                <div>Home</div>
                <div class="divider"> / </div>
                <div>universities </div>
            </div>
            <div class="b-title">Universities</div>
        </div>
    </div>
    <!-- breadcrumb end -->
    <?php
    $country = [];
    $degree = [];
    $proficiency = [];
    foreach($slug1->childs as $universities){
        if (isset($universities->long_content)){
            $content = $universities->long_content; 
            // $degree_one = $universities->short_content;
            // print_r($content);
            // print_r($degree_one);

            // Split the content by <br /> to separate each part
            $parts = explode('<br />', $content);

            $i = 0;
            foreach ($parts as $part) {
                $i += 1;
                // Split each part by ":" to separate the key and value
                $pair = explode(':', $part, 2);

                // Trim whitespace from the key and value
                $key = trim($pair[0]);
                $value = isset($pair[1]) ? trim($pair[1]) : '';

                // $result[$key] = $value;
                if ($i ==1 ) {
                    $country[] = $value;
                }
                elseif ($i==2) {
                    $proficiencys = explode(',', $value);
                    foreach ($proficiencys as $deg) {
                        $proficiency[] = trim($deg);
                    }
                }
                elseif($i==3){
                    $degrees = explode(',', $value);
                    foreach ($degrees as $deg) {
                        $degree[] = trim($deg);
                    }
                }

            }
        }
    }

        // Remove duplicates and reindex the arrays
    $country = array_values(array_unique($country));
    $degree = array_values(array_unique($degree));
    $proficiency = array_values(array_unique($proficiency));

    ?>
    <!-- Universities Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="univ-container">
                <div class="personal-details apply-n" style="width: 100%;">
                    <div class="input-fields apply-n">
                        <div class="input-field apply-n">
                            <div class="label apply-n">Country</div>
                            <!-- Replace input type="text" with select element -->
                            <select id="countrySelect" style="font-weight: 400; font-size: 12px; font-family: Inter; height: 38px; border-radius: 4px; border: 1px solid rgba(61, 61, 61, 0.24);">
                                <!-- Add options for countries -->
                                <option value="" selected disabled>Select...</option>
                                @foreach ($country as $c)
                                    @if($c != '')
                                        <option value="{{$c}}">{{$c}}</option>
                                    @endif
                                @endforeach
                                <!-- Add more options for other countries -->
                            </select>
                        </div>
                        <div class="input-field apply-n">
                            <div class="label apply-n">Degree</div>
                            <select id="degreeSelect" type="text"
                                style="font-weight: 400; font-size: 12px; font-family: Inter; height: 38px; border-radius: 4px; border: 1px solid rgba(61, 61, 61, 0.24);">
                                <!-- Add options for countries -->
                                <option value="" selected disabled>Select...</option>
                                @foreach ($degree as $c)
                                    @if($c != '')
                                        <option value="{{$c}}">{{$c}}</option>
                                    @endif
                                @endforeach
                                <!-- Add more options for other countries -->
                            </select>
                        </div>
                        <div class="input-field apply-n">
                            <div class="label apply-n">English Proficiency Test</div>
                            <select id="proficiencySelect" type="text"
                                style="font-weight: 400; font-size: 12px; font-family: Inter; height: 38px; border-radius: 4px; border: 1px solid rgba(61, 61, 61, 0.24);">
                                <!-- Add options for countries -->
                                <option value="" selected disabled>Select...</option>
                                @foreach ($proficiency as $c)
                                    @if($c != '')
                                        <option value="{{$c}}">{{$c}}</option>
                                    @endif
                                @endforeach
                                <!-- Add more options for other countries -->
                            </select>
                        </div>

                    </div>
                </div>
            </div>

            <div class="sec-univ-container">
                <div class="row">
                    @foreach($slug1->childs as $universities)
                        <div class="col-md-6 col-lg-3 which">
                            <a href="@if (count($universities->childs) != 0) {{$slug1->nav_name}}/{{$universities->nav_name}} @else # @endif">
                                <div class="sec-univ-card">
                                    <div class="sec-univ-image">
                                        <img src="{{$universities->banner_image ?? ""}}" alt="University Image">
                                    </div>
                                    <div class="sec-univ-details">
                                        <?php
                                            $country = [];
                                            $degree = [];
                                            $proficiency = [];

                                            $content = $universities->long_content; 
                                            $parts = explode('<br />', $content);

                                            $i = 0;
                                            foreach ($parts as $part) {
                                                $i += 1;
                                                $pair = explode(':', $part, 2);

                                                $key = trim($pair[0]);
                                                $value = isset($pair[1]) ? trim($pair[1]) : '';

                                                if ($i ==1 ) {
                                                    $country[] = $value;
                                                }
                                                elseif ($i==2) {
                                                    $proficiencys = explode(',', $value);
                                                    foreach ($proficiencys as $deg) {
                                                        $proficiency[] = trim($deg);
                                                    }
                                                }
                                                elseif($i==3){
                                                    $degrees = explode(',', $value);
                                                    foreach ($degrees as $deg) {
                                                        $degree[] = trim($deg);
                                                    }
                                                }

                                            }
                                            $country = array_values(array_unique($country));
                                            $degree = array_values(array_unique($degree));
                                            $proficiency = array_values(array_unique($proficiency));
                                        ?>

                                        <div class="sec-univ-country" style="display: none">{{ implode(', ', $country) ?? ""}}</div>
                                        <div class="sec-univ-degree" style="display: none">{{ implode(', ', $degree) ?? ""}}</div>
                                        <div class="sec-univ-proficiency" style="display: none">{{ implode(', ', $proficiency) ?? ""}}</div>
                                        <div class="sec-univ-name">{{$universities->caption ?? ""}}</div>
                                        <div class="sec-univ-location">
                                            {{-- {{$universities->short_content ? explode(':', $universities->short_content)[1] : ""}} --}}
                                            @php
                                            $shortContentArray = explode(':', $universities->short_content);
                                            $location = isset($shortContentArray[1]) ? $shortContentArray[1] : "";
                                            @endphp
                                            {{$location}}
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var countrySelect = document.querySelector("#countrySelect");
            var degreeSelect = document.querySelector("#degreeSelect");
            var proficiencySelect = document.querySelector("#proficiencySelect");
            var secUnivCards = document.querySelectorAll(".which");

            function filterSecUnivCards() {
                var selectedCountry = countrySelect.value;
                var selectedDegree = degreeSelect.value;
                var selectedProficiency = proficiencySelect.value;

                secUnivCards.forEach(function(card) {
                    var cardCountry = card.querySelector(".sec-univ-country").textContent.trim();
                    var cardDegree = card.querySelector(".sec-univ-degree").textContent.trim();
                    var cardProficiency = card.querySelector(".sec-univ-proficiency").textContent.trim();

                    // Check if selectedCountry matches cardCountry
                    var countryMatch = selectedCountry === "" || cardCountry === selectedCountry;

                    // Check if selectedDegree matches any part of cardDegree
                    var degreeParts = cardDegree.split(",").map(part => part.trim());
                    var degreeMatch = selectedDegree === "" || degreeParts.includes(selectedDegree);

                    // Check if selectedProficiency matches any part of cardProficiency
                    var proficiencyParts = cardProficiency.split(",").map(part => part.trim());
                    var proficiencyMatch = selectedProficiency === "" || proficiencyParts.includes(selectedProficiency);

                    // If all matches are successful, display the card; otherwise, hide it
                    if (countryMatch && degreeMatch && proficiencyMatch) {
                        card.style.display = "block";
                    } else {
                        card.style.display = "none";
                    }
                });
            }

            // Attach filterSecUnivCards function to change events of select elements
            countrySelect.addEventListener("change", filterSecUnivCards);
            degreeSelect.addEventListener("change", filterSecUnivCards);
            proficiencySelect.addEventListener("change", filterSecUnivCards);

            // Initially filter the cards based on the default selections
            filterSecUnivCards();
        });
    // 
        // document.addEventListener("DOMContentLoaded", function() {
        //     var countrySelect = document.querySelector("#countrySelect"); // Assuming the ID of your country select element is "countrySelect"
        //     var degreeSelect = document.querySelector("#degreeSelect"); // Assuming the ID of your country select element is "countrySelect"
        //     var proficiencySelect = document.querySelector("#proficiencySelect"); // Assuming the ID of your country select element is "countrySelect"
        //     var secUnivCards = document.querySelectorAll(".which"); // Select all sec-univ-card elements
    
        //     countrySelect.addEventListener("change", function() {
        //         var selectedCountry = countrySelect.value; // Get the selected country value
    
        //         // Loop through each sec-univ-card
        //         secUnivCards.forEach(function(card) {
        //             var card_country = card.querySelector(".sec-univ-country").textContent.trim(); // Get the location of the current card
    
        //             // If the location matches the selected country, show the card; otherwise, hide it
        //             if (card_country === selectedCountry) {
        //                 card.style.display = "block";
        //             } else {
        //                 card.style.display = "none";
        //             }
        //         });
        //     });

        //     degreeSelect.addEventListener("change", function() {
        //         var selectedCountry = degreeSelect.value; // Get the selected country value
    
        //         // Loop through each sec-univ-card
        //         secUnivCards.forEach(function(card) {
        //             var all_card_country = card.querySelector(".sec-univ-degree").textContent.trim(); // Get the location of the current card
        //             var card_country  = all_card_country.split(',').map(country => country.trim());
        //             // Flag to check if any match found
        //             var matchFound = false;

        //             // Iterate through each country in the array
        //             card_country.forEach(function(country) {
        //                 // If any part of the card_country matches the selectedCountry, set matchFound to true
        //                 if (country.trim() === selectedCountry) {
        //                     matchFound = true;
        //                 }
        //                 // alert(country.trim()+"--"+selectedCountry)
        //             });
        //             // If match found, show the card; otherwise, hide it
        //             if (matchFound) {
        //                 card.style.display = "block";
        //             } else {
        //                 card.style.display = "none";
        //             }
        //         });
        //     });

        //     proficiencySelect.addEventListener("change", function() {
        //         var selectedCountry = proficiencySelect.value; // Get the selected country value
    
        //         // Loop through each sec-univ-card
        //         secUnivCards.forEach(function(card) {
        //             var all_card_country = card.querySelector(".sec-univ-proficiency").textContent.trim(); // Get the location of the current card
        //             var card_country  = all_card_country.split(',').map(country => country.trim());
        //             // Flag to check if any match found
        //             var matchFound = false;

        //             // Iterate through each country in the array
        //             card_country.forEach(function(country) {
        //                 // If any part of the card_country matches the selectedCountry, set matchFound to true
        //                 if (country.trim() === selectedCountry) {
        //                     matchFound = true;
        //                 }
        //             });
        //             // If match found, show the card; otherwise, hide it
        //             if (matchFound) {
        //                 card.style.display = "block";
        //             } else {
        //                 card.style.display = "none";
        //             }
        //         });
        //     });
        // });
    </script>
    
@endsection
    <!--End Universities Start -->