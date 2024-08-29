@php
    $normal_gallary_notice = App\Models\Navigation::query()
        ->where('nav_category', 'Main')
        ->where('page_type', 'Normal')
    
        ->orderBy('position', 'ASC')
        ->get();
    
    $menus = App\Models\Navigation::query()
        ->where('nav_category', 'Main')
        ->where('page_type', '!=', 'Job')
        ->where('page_type', '!=', 'Notice')
        ->where('parent_page_id', 0)
        ->where('page_status', '1')
        ->orderBy('position', 'ASC')
        ->get();
    $global_setting = App\Models\GlobalSetting::all()->first();
    if (isset($normal)) {
        $seo = $normal;
    } elseif (isset($job)) {
        $seo = $job;
    }
    
@endphp


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>May - Edu. Cont.</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-0QBRaD9QWDmh//qgWJx0ZjjWnENSEgOr6Zyay3q9oCKoLU/OrH0d9TH9AXWswGzj" crossorigin="anonymous">


    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/website/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/website/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link id="theme-style" rel="stylesheet" href="/website/assets/css/theme-1.css">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="/website/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/website/css/style.css" rel="stylesheet">

    
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <!-- <link href="css/maxcdn.css" rel="stylesheet"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
</head>

<body>
        <div class="container" style="margin-bottom: 7px; margin-top: 7px;">
            <div class="row">
                <div class="col-md-6 col-sm-12 for-small">
                    <p style="margin-top: 10px; margin-bottom: 10px;" class="chota-size">
                        <span>&nbsp;<i class="fas fa-envelope text-black"></i> <a href="mailto:info@may.edu.np"
                                style="color: black;">{{ $global_setting->site_email }}</a></span>
                        <span style="margin-left: 10px;"><i class="fas fa-phone-alt text-black"></i> <a
                                href="tel:+977 01-4240108" style="color: black;">{{ $global_setting->phone }}</a></span>
                    </p>
                    <div class="top-bar-social v-social office-where-show" style="display: inline-block; ">
                        <a href="{{ $global_setting->facebook ?? '#' }}" target="_blank"><i class="fab fa-facebook-f"
                                style="margin-right: 10px;"></i></a>
                        <a href="{{ $global_setting->twitter ?? '#' }}" target="_blank"><i class="fab fa-twitter"
                                style="margin-right: 10px;"></i></a>
                        <a href="{{ $global_setting->linkedin ?? '#' }}" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                
                </div>
                <div class="office-where col-md-6 col-sm-6 col-xs-6 text-right d-none d-sm-block v-social-text-align f-links" style="
                flex-direction: row;
                justify-content: flex-end;
                align-items: center;
            ">
                    <div class="top-bar-social v-social" style="display: inline-block; ">
                        <a href="{{ $global_setting->facebook ?? '#' }}" target="_blank"><i class="fab fa-facebook-f"
                                style="margin-right: 10px;"></i></a>
                        <a href="{{ $global_setting->twitter ?? '#' }}" target="_blank"><i class="fab fa-twitter"
                                style="margin-right: 10px;"></i></a>
                        <a href="{{ $global_setting->linkedin ?? '#' }}" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="vertical-line"
                        style="display: inline-block; margin-left: 10px; margin-right: 10px; height: 28px; border-left: 2px solid #000;">
                    </div>
                    <div class="nav-item dropdown" style="display: inline-block;">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                            style="color: black; margin-left: -18px;">Putalisadak Office</a>
                        <div class="dropdown-menu m-0" style="min-width: 100px;"> <!-- Adjust min-width as needed -->
                            <!--<a href="#" class="dropdown-item" style="color: black;">Koteshwor Office</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
     <!--  end .container -->
    <!-- Navbar & Hero Start -->
    <div class="container-xxl position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-0 upri-navbar"
            style="background-color: rgba(207, 19, 18, 1); height: 60px;">
            <a href="/" class="image-hder navbar-brand d-flex justify-content-center align-items-center p-0"
                style="height: 100%; width: 160px; margin-left: 60px;">
                <img src="/uploads/icons/{{ $global_setting->site_logo }}" alt="Logo" style="width: 120px;">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>

            <style>
                /* Custom CSS for navigation */
                .navbar-nav .nav-link {
                    margin-bottom: 5px;
                    /* Decrease distance between navigation items */
                    color: black;
                    /* Set default text color */
                    transition: color 0.3s;
                    /* Smooth transition for color change */
                }

                .navbar-nav .nav-link:hover {
                    color: red;
                    /* Change text color on hover */
                }
            </style>
            <div class="collapse navbar-collapse nav-border-small" id="navbarCollapse" style="">
                <div class="navbar-nav ms-auto py-0" style="width: 100%; padding:15px; margin-bottom: 10px;">
                    <a href="/" class="nav-item nav-link active">Home</a>
                    
                    @foreach ($menus as $menu)
                        <div class="nav-item @if ($menu->childs->count() > 0) dropdown @endif">
                            <a href="@if($menu->nav_name=='aboutus' || $menu->nav_name=='notice' || $menu->nav_name=='notice' || $menu->nav_name=='gallery') # @elseif ($menu->nav_name=='blog') /{{ $menu->nav_name }}?content=blogs @else /{{ $menu->nav_name }} @endif" class="nav-link @if ($menu->childs->count() > 0 && $menu->id != '2752' && $menu->id != '2751' && $menu->id != '2756') dropdown-toggle @endif" @if ($menu->childs->count() > 0 && $menu->id != '2752' && $menu->id != '2751' && $menu->id != '2756') data-bs-toggle="dropdown" @endif>
                                {{ $menu->caption }}
                            </a>
                            @if ($menu->childs->count() > 0 && $menu->id != '2415' && $menu->id != '2537' && $menu->id != '2752' && $menu->id != '2751' && $menu->id != '2756')
                                <div class="dropdown-menu m-0" style="background-color: white;">
                                    @if ($menu->id != '2753')
                                        @foreach ($menu->childs as $sub)
                                            <a href="/{{ $menu->nav_name }}/{{ $sub->nav_name }}" class="dropdown-item">{{ $sub->caption }}</a>
                                        @endforeach
                                    @else
                                        @php $subpage = $menu->childs->first() @endphp
                                        @foreach ($subpage->childs as $sub)
                                            <a href="/{{ $menu->nav_name }}/{{ $sub->nav_name }}" class="dropdown-item">{{ $sub->caption }}</a>
                                        @endforeach
                                    @endif
                                </div>
                            @endif
                            
                        </div>
                    @endforeach
                    {{-- <a href="/enquiry" class="nav-item nav-link">Enquiry</a> --}}
                    <a href="/contact" class="nav-item nav-link">Contact</a>
                       
                    <div class="nav-item dropdown big-screen-office" style="">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                            style="color: black;">Tinkune Office</a>
                        <div class="dropdown-menu m-0" style="min-width: 100px;"> <!-- Adjust min-width as needed -->
                            <a href="#" class="dropdown-item" style="color: black;">Koteshwor Office</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    @yield('content')
    
    <!-- banner start  -->
    <!-- about us start  -->
    <!-- Service Start -->
    <!-- Start Study Abroad -->
    <!-- Testimonial Start -->
    <!-- Gallery Start -->
    <!-- Client Section -->
    <!-- Blog Start -->
    

    <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-3 wow fadeIn bottom-mobile-upri" data-wow-delay="0.1s"
        style="margin-top: 3rem;background-color: #F3F6F8 !important;">
        <div class="container py-3 ">
            <div class="row" style="align-items: center; justify-content: center;">

                <div class="col-md-0 col-lg-1">
                </div>
                <div class="col-md-6 col-lg-4 f-ll mb-3 logo-link logo-center">
                    <div class="f-logo">
                    <img src="/uploads/icons/{{ $global_setting->site_logo }}" class="img-fluid" alt="Logo"
                        style="margin-bottom: 15px; margin-left: 25px; height: 60px; width: 150px;">
                    </div>
                        <div class="q-links" style="text-align: center;">
                            <div style=" margin-bottom: 15px; max-width: none; width: 100%; color: #212529; font-size: 14px; font-family: Montserrat; font-weight: 600; line-height: 18px; word-wrap: break-word; margin-bottom: 8px;">
                                Quick Links</div>
                                <a href="/about-one/about-us-one"
                                    style="text-decoration: none; color: #212529; font-size: 12px; font-family: Montserrat; font-weight: 400; line-height: 16px; display: block; margin-bottom: 4px;">About
                                    Us</a>
                                <a href="/universities"
                                    style="text-decoration: none; color: #212529; font-size: 12px; font-family: Montserrat; font-weight: 400; line-height: 16px; display: block; margin-bottom: 4px;"> 
                                    Universities</a>
                                <a href="/services"
                                    style="text-decoration: none; color: #212529; font-size: 12px; font-family: Montserrat; font-weight: 400; line-height: 16px; display: block; margin-bottom: 4px;">Services</a>
                                <a href="gallary/photo-gallery-one"
                                    style="text-decoration: none; color: #212529; font-size: 12px; font-family: Montserrat; font-weight: 400; line-height: 16px; display: block; margin-bottom: 4px;"> 
                                    Photo Gallery</a>
                                <a href="/blog?content=blogs"
                                    style="text-decoration: none; color: #212529; font-size: 12px; font-family: Montserrat; font-weight: 400; line-height: 16px; display: block; margin-bottom: 4px;">  
                                   Blog</a>
                                   <a href="/contact"
                                    style="text-decoration: none; color: #212529; font-size: 12px; font-family: Montserrat; font-weight: 400; line-height: 16px; display: block; margin-bottom: 4px;">  
                                   Contact</a>
                        </div>                    
                </div>
                <div class="col-md-6 col-lg-3 timing-res" style="">
                    <div class="footer-timing"
                        style="margin-bottom: 15px; width: 100%;  flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 10px;  margin-bottom: 8px;">
                        <div
                            style="align-self: stretch;margin-bottom: 12px; height: 75px; border-radius: 4px; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                            <div
                                style="align-self: stretch; padding: 6px; background: #CF1312; border-top-left-radius: 4px; border-top-right-radius: 4px; justify-content: flex-start; align-items: flex-start; gap: 6px; display: inline-flex">
                                <div
                                    style="color: white; font-size: 12px; font-family: Montserrat; font-weight: 600; line-height: 12px; word-wrap: break-word">
                                    Office Timings</div>
                            </div>
                            <div
                                style="align-self: stretch; border-top-left-radius: 4px; border-top-right-radius: 4px; border-bottom-right-radius: 4px; justify-content: flex-start; align-items: center; display: inline-flex">
                                <div
                                    style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                    <div
                                        style="width: auto; padding: 6px; border-left: 1px rgba(61.20, 61.20, 61.20, 0.24) solid; border-top: 1px rgba(61.20, 61.20, 61.20, 0.24) solid; border-bottom: 1px rgba(61.20, 61.20, 61.20, 0.24) solid; justify-content: flex-start; align-items: flex-start; gap: 6px; display: inline-flex">
                                        <div
                                            style="color: #3D3D3D; font-size: 10px; font-family: Poppins; font-weight: 400; line-height: 12px; word-wrap: break-word">
                                            Sun-Fri</div>
                                    </div>
                                    <div
                                        style="width: auto; padding: 6px; border-top-left-radius: 4px; border-left: 1px rgba(61.20, 61.20, 61.20, 0.24) solid; border-bottom: 1px rgba(61.20, 61.20, 61.20, 0.24) solid; justify-content: flex-start; align-items: flex-start; gap: 6px; display: inline-flex">
                                        <div
                                            style="color: #3D3D3D; font-size: 10px; font-family: Poppins; font-weight: 400; line-height: 12px; word-wrap: break-word">
                                            Sat</div>
                                    </div>
                                </div>
                                <div
                                    style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                    <div
                                        style="align-self: stretch; padding: 6px; border: 1px rgba(61.20, 61.20, 61.20, 0.24) solid; justify-content: flex-start; align-items: flex-start; gap: 6px; display: inline-flex">
                                        <div
                                            style="color: #3D3D3D; font-size: 10px; font-family: Poppins; font-weight: 400; line-height: 12px; word-wrap: break-word">
                                            {{ $seo->page_description ?? $global_setting->page_description }}</div>
                                    </div>
                                    <div
                                        style="align-self: stretch; padding: 6px; border-top-left-radius: 4px; border-left: 1px rgba(61.20, 61.20, 61.20, 0.24) solid; border-right: 1px rgba(61.20, 61.20, 61.20, 0.24) solid; border-bottom: 1px rgba(61.20, 61.20, 61.20, 0.24) solid; justify-content: flex-start; align-items: flex-start; gap: 6px; display: inline-flex">
                                        <div
                                            style="color: #3D3D3D; font-size: 10px; font-family: Poppins; font-weight: 400; line-height: 12px; word-wrap: break-word">
                                            Closed</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            style="align-self: stretch; height: 65px; border-radius: 4px; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                            <div
                                style="align-self: stretch; padding: 6px; background: #CF1312; border-top-left-radius: 4px; border-top-right-radius: 4px; justify-content: flex-start; align-items: flex-start; gap: 6px; display: inline-flex">
                                <div
                                    style="color: white; font-size: 12px; font-family: Montserrat; font-weight: 600; line-height: 12px; word-wrap: break-word">
                                    Office Branches</div>
                            </div>
                            <div
                                style="align-self: stretch; height: 41px; flex-direction: column; justify-content: center; align-items: flex-start; display: flex">
                                <div
                                    style="align-self: stretch; padding: 4px; border-left: 1px rgba(61.20, 61.20, 61.20, 0.24) solid; border-top: 1px rgba(61.20, 61.20, 61.20, 0.24) solid; border-right: 1px rgba(61.20, 61.20, 61.20, 0.24) solid; justify-content: flex-start; align-items: center; gap: 6px; display: inline-flex">
                                    <div
                                        style="color: #3D3D3D; font-size: 10px; font-family: Poppins; font-weight: 400; line-height: 12px; word-wrap: break-word">
                                        Putalisadak</div>
                                </div>
                                <div
                                    style="align-self: stretch; padding: 4px; border-top-left-radius: 4px; border-top-right-radius: 4px; border: 1px rgba(61.20, 61.20, 61.20, 0.24) solid; justify-content: flex-start; align-items: center; gap: 6px; display: inline-flex">
                                    <div
                                        style="color: #3D3D3D; font-size: 10px; font-family: Poppins; font-weight: 400; line-height: 12px; word-wrap: break-word">
                                        Tinkune</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ifra">
                    <div
                        style="margin-bottom: 5px; max-width: none; width: 100%; color: #212529; font-size: 12px; font-family: Montserrat; font-weight: 600; line-height: 15px; word-wrap: break-word">
                        Map Location</div>
                   <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3532.3942056562987!2d85.3201231!3d27.7051125!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198d7621f5a5%3A0x88917f68e8f540c4!2sMay%20Education%20Consultancy!5e0!3m2!1sen!2snp!4v1724823337286!5m2!1sen!2snp" width="100%" height="130" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-0 col-lg-1">
                </div>
            </div>
        </div>
    </div>
        <!--<div class="container-fluid bg-dark text-light d-footer pt-3 wow fadeIn" data-wow-delay="0.1s">-->
        <!--    <p>-->
        <!--        ©2014-2020 May Education Consultancy. All rights reserved-->
        <!--    </p>-->
        <!--</div>-->
        <div class="container-fluid bg-dark text-light d-footer pt-3 wow fadeIn" data-wow-delay="0.1s">
    <p style="font-size: 12px;">
        ©2014-2020 May Education Consultancy. All rights reserved / Developed by 
        <a href="https://bhasika.com/" style="color: #000;">Bhashika</a>.
    </p>
</div>

        <!-- Footer End -->
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="/website/lib/wow/wow.min.js"></script>
        <script src="/website/lib/easing/easing.min.js"></script>
        <script src="/website/lib/waypoints/waypoints.min.js"></script>
        <script src="/website/lib/owlcarousel/owl.carousel.min.js"></script>
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!-- Template Javascript -->
        <script src="/website/js/main.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
        
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const questions = document.querySelectorAll('.question');
    
                questions.forEach(function (question) {
                    question.addEventListener('click', function () {
                        const answer = this.nextElementSibling;
                        if (answer.style.display === 'block') {
                            answer.style.display = 'none';
                            this.querySelector('.arrow').textContent = '\u25BC'; // Unicode for down arrow
                        } else {
                            answer.style.display = 'block';
                            this.querySelector('.arrow').textContent = '\u25B2'; // Unicode for up arrow
                        }
                    });
                });
            });
    
            document.addEventListener("DOMContentLoaded", function() {
                const tabs = document.querySelectorAll('.dd');
        
                tabs.forEach(tab => {
                    tab.addEventListener('click', function() {
                        tabs.forEach(t => t.classList.remove('active'));
                        this.classList.add('active');
                    });
                });                              
            });
        </script>
        <style>
            .gallery-indicator-item.disable:hover {
                cursor: unset;
                background-color: unset;
            }
        </style>
 
    </body>

    </html>