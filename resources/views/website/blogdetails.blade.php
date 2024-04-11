@extends("layouts.master")
@section('content')

       <!-- breadcrumb start -->
       <div class="container-xxl bg-primary page-header"
            style="background-image: url('img/public/xx.jpg'); background-size: cover; background-position: center;">
            <div class="container">
                <div class="bread-container">
                    <div>Home</div>
                    <div class="divider"> / </div>
                    <div>blog Details</div>
                </div>
                <div class="b-title">Blog Details</div>
            </div>
        </div>
    <!-- breadcrumb end -->

    <!--  blog-details Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <div class="n-content" style="background-color: #F3F6F8;">
                        <div class="media-body">
                            <h4>
                                May Education Consultancy is stand
                            </h4>
                            <div class="small-button-blog-b">
                                <div class="meta mb-1"><span class="date">May 13, 2022</span></div>
                                <div class="button">News</div>
                                <div class="button">Blogs</div>
                            </div>
                        </div><br>
                        
                        <img src="img/public/R.jpeg" class="image" style="width: 100%; height: auto;">
                        <br>
                        <div class="description" style="text-align: justify;">May Education Consultancy is stand quality service
                            and reliability has formed
                            the roots to the individual success for study abroad and future career since over the years. These
                            strong roots have been nurtured by a strong belief that client’s satisfaction is the foundation upon
                            which we are built. We are very successful because of our commitment to excellence in the services
                            rendered by us. Our business goals are inseparable from that of our client’s needs. Our faith in
                            quality is the key to corporate success in an increasing competitive global market. We strive to
                            achieve excellence in all areas of performances. A considerable number of our students have already
                            been attending some of the most well reputed colleges and universities abroad, in pursuit of shaping
                            their future & career. We are one of the best international student recruitment and Solutions
                            Company in Nepal. Through our strong marketing network, we have built a professional platform for
                            institutes and students to achieve their desired goals.
                        </div>
                    </div>
                </div>
                      
                <div class="col-2" style=" margin-top: 25px;">
                    <div class="social-icons">
                        <div class="icon-container" >
                            <div class="outer-circle"></div>
                            <div class="inner-circle" style="left:60%">
                                <i class="fab fa-facebook-f icon"></i>
                                <div class="background-circle"></div>
                            </div>
                        </div>
                        <div class="icon-container">
                            <div class="outer-circle"></div>
                            <div class="inner-circle">
                                <i class="fab fa-twitter icon"></i>
                                <div class="background-circle"></div>
                            </div>
                        </div>
                        <div class="icon-container">
                            <div class="outer-circle"></div>
                            <div class="inner-circle">
                                <i class="fas fa-share-alt icon"></i>
                                <div class="background-circle"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <div class="n-content" style="background-color: #F3F6F8;">
                        <div class="blog-details-container">
                            <div class="blog-details-item">
                                <img class="blog-details-image" src="https://via.placeholder.com/112x122" />
                                <div class="blog-details-content">
                                    <div class="blog-details-title">How to write content about your photographs</div>
                                    <div class="blog-details-read-more">
                                        <div class="blog-details-read-more-link">Read More</div>
                                                <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-details-item">
                                <img class="blog-details-image" src="https://via.placeholder.com/112x122" />
                                <div class="blog-details-content">
                                    <div class="blog-details-title">How to write content about your photographs</div>
                                    <div class="blog-details-read-more">
                                        <div class="blog-details-read-more-link">Read More</div>
                                        <i class="fas fa-arrow-right"></i>

                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <div class="blog-details-container">
                            <div class="blog-details-item">
                                <img class="blog-details-image" src="https://via.placeholder.com/112x122" />
                                <div class="blog-details-content">
                                    <div class="blog-details-title">How to write content about your photographs</div>
                                    <div class="blog-details-read-more">
                                        <div class="blog-details-read-more-link">Read More</div>
                                        <i class="fas fa-arrow-right"></i>

                                    </div>
                                </div>
                            </div>
                            <div class="blog-details-item">
                                <img class="blog-details-image" src="https://via.placeholder.com/112x122" />
                                <div class="blog-details-content">
                                    <div class="blog-details-title">How to write content about your photographs</div>
                                    <div class="blog-details-read-more">
                                        <div class="blog-details-read-more-link">Read More</div>
                                        <i class="fas fa-arrow-right"></i>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .social-icons {
            /* position: fixed; */
            bottom: 70px; /* Adjust as needed */
            right: 130px; /* Adjust as needed */
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .icon-container {
            width: 48px;
            height: 48px;
            position: relative;
            cursor: pointer;

        }

        .outer-circle {
            width: 48px;
            height: 48px;
            position: absolute;
            background: white;
            border-radius: 50%;
            border: 1px #3D3D3D3D solid;
        }
        
        .icon-container:hover .outer-circle {
            border-color: #CF1312;
        }
        
        .icon-container:hover .icon {
            color: #CF1312;
        }


        .inner-circle {
            width: 24px;
            height: 24px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .icon {
            width: 24px;
            height: 24px;
            position: absolute;
            color: #3D3D3DCC; /* Change color as needed */
            font-size: 24px; /* Adjust size as needed */
            line-height: 24px; /* Adjust line height as needed */
            text-align: center; /* Center the icon */
        }

        .background-circle {
            width: 24px;
            height: 24px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
                /* Default styles */
        .blog-details-container {
            width: 100%;
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            flex-wrap: wrap;
            gap: 24px;
            /* padding: 0 20px; /* Adjust padding for spacing from both sides */
        }

        .blog-details-item {
            width: calc(50% - 12px); /* Adjust width for two items per row with gap */
            height: auto;
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
        }

        .blog-details-image {
            width: 112px;
            height: 122px;
        }

        .blog-details-content {
            flex: 1;
            padding: 0 16px; /* Adjust padding for better spacing */
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            gap: 16px;
        }

        .blog-details-title {
            align-self: stretch;
            color: #3D3D3D;
            font-size: 16px;
            font-family: Montserrat;
            font-weight: 700;
            line-height: 20.80px;
            word-wrap: break-word;
        }

        .blog-details-read-more {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .blog-details-read-more-link {
            color: #3D3D3D;
            font-size: 14px;
            font-family: Poppins;
            font-weight: 400;
            text-decoration: underline;
            line-height: 14px;
            word-wrap: break-word;
        }

        .blog-details-read-more-icon {
            width: 16px;
            height: 16px;
            position: relative;
        }

        .blog-details-read-more-icon-inner {
            width: 16px;
            height: 16px;
            position: absolute;
            background: black;
        }

        .blog-details-read-more-icon-outer {
            width: 16px;
            height: 16px;
            position: absolute;
            background: #3D3D3D;
        }


        @media (max-width: 768px) {
            .blog-details-item {
                width: 100%; /* Full width for single item per row on smaller screens */
            }
            
            .blog-details-container {
                margin-left: 95px; /* Adjust margin-left for spacing from the left side on smaller screens */
            }
        }

        @media (max-width: 576px) {
            .blog-details-container {
                margin-left: 6px; /* Adjust margin-left for spacing from the left side on even smaller screens */
            }
        }
    </style>
  <!-- blog-details end  -->

@endsection
