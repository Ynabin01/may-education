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
                            <select style="font-weight: 400; font-size: 12px; font-family: Inter; height: 38px; border-radius: 4px; border: 1px solid rgba(61, 61, 61, 0.24);">
                                <!-- Add options for countries -->
                                <option value="" selected disabled>Select...</option>
                                @foreach ($country as $c)
                                    <option value="{{$c}}">{{$c}}</option>
                                @endforeach
                                <!-- Add more options for other countries -->
                            </select>
                        </div>
                        <div class="input-field apply-n">
                            <div class="label apply-n">Degree</div>
                            <select type="text"
                                style="font-weight: 400; font-size: 12px; font-family: Inter; height: 38px; border-radius: 4px; border: 1px solid rgba(61, 61, 61, 0.24);">
                                <!-- Add options for countries -->
                                <option value="" selected disabled>Select...</option>
                                @foreach ($degree as $c)
                                    <option value="{{$c}}">{{$c}}</option>
                                @endforeach
                                <!-- Add more options for other countries -->
                            </select>
                        </div>
                        <div class="input-field apply-n">
                            <div class="label apply-n">English Proficiency Test</div>
                            <select type="text"
                                style="font-weight: 400; font-size: 12px; font-family: Inter; height: 38px; border-radius: 4px; border: 1px solid rgba(61, 61, 61, 0.24);">
                                <!-- Add options for countries -->
                                <option value="" selected disabled>Select...</option>
                                @foreach ($proficiency as $c)
                                    <option value="{{$c}}">{{$c}}</option>
                                @endforeach
                                <!-- Add more options for other countries -->
                            </select>
                        </div>

                    </div>
                </div>
            </div>

            <div class="sec-univ-container">

                @foreach($slug1->childs as $universities)
                    <a href="{{$slug1->nav_name}}/{{$universities->nav_name}}">
                        <div class="sec-univ-card">
                            <div class="sec-univ-image">
                                <img src="{{$universities->banner_image ?? ""}}" alt="University Image">
                            </div>
                            <div class="sec-univ-details">
                                <div class="sec-univ-name">{{$universities->caption ?? ""}}</div>
                                <div class="sec-univ-location">{{$universities->short_content ? explode(':', $universities->short_content)[1] : ""}}</div>
                            </div>
                        </div>
                    </a>
                @endforeach

                {{-- <div class="sec-univ-card">
                    <div class="sec-univ-image">
                        <img src="img/img2.PNG" alt="University Image">
                    </div>
                    <div class="sec-univ-details">
                        <div class="sec-univ-name">Anderson University</div>
                        <div class="sec-univ-location">South Carolina</div>
                    </div>
                </div>
                <div class="sec-univ-card">
                    <div class="sec-univ-image">
                        <img src="img/img3.PNG" alt="University Image">
                    </div>
                    <div class="sec-univ-details">
                        <div class="sec-univ-name">American Collegiate DC- Only UG</div>
                        <div class="sec-univ-location">Washington</div>
                    </div>
                </div>
                <div class="sec-univ-card">
                    <div class="sec-univ-image">
                        <img src="img/img4.PNG" alt="University Image">
                    </div>
                    <div class="sec-univ-details">
                        <div class="sec-univ-name">Avilla University</div>
                        <div class="sec-univ-location">Missouri</div>
                    </div>
                </div>
                <div class="sec-univ-card">
                    <div class="sec-univ-image">
                        <img src="img/img5.PNG" alt="University Image">
                    </div>
                    <div class="sec-univ-details">
                        <div class="sec-univ-name">Avilla University</div>
                        <div class="sec-univ-location">Missouri</div>
                    </div>
                </div>
                <div class="sec-univ-card">
                    <div class="sec-univ-image">
                        <img src="img/img6.PNG" alt="University Image">
                    </div>
                    <div class="sec-univ-details">
                        <div class="sec-univ-name">Avilla University</div>
                        <div class="sec-univ-location">Missouri</div>
                    </div>
                </div>
                <div class="sec-univ-card">
                    <div class="sec-univ-image">
                        <img src="img/img8.PNG" alt="University Image">
                    </div>
                    <div class="sec-univ-details">
                        <div class="sec-univ-name">Avilla University</div>
                        <div class="sec-univ-location">Missouri</div>
                    </div>
                </div>
                <div class="sec-univ-card">
                    <div class="sec-univ-image">
                        <img src="img/img9.PNG" alt="University Image">
                    </div>
                    <div class="sec-univ-details">
                        <div class="sec-univ-name">Avilla University</div>
                        <div class="sec-univ-location">Missouri</div>
                    </div>
                </div>
                <div class="sec-univ-card">
                    <div class="sec-univ-image">
                        <img src="img/img10.PNG" alt="University Image">
                    </div>
                    <div class="sec-univ-details">
                        <div class="sec-univ-name">Avilla University</div>
                        <div class="sec-univ-location">Missouri</div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
    <!--End Universities Start -->