

    <div id="unique-container" class="container py-6" style="margin-bottom: 0 !important;">
        <div class="row align-items-center desktop-top">
            <div class="col-lg-6">
                <img class="img-fluid ab-img custom-image" src="{!! htmlspecialchars_decode($about->banner_image ?? '') !!}">
            </div>                
            <div class="col-lg-6">
                <div class="unique-content">
                    <div class="unique-title">{!! htmlspecialchars_decode($about->caption ?? '') !!}</div>
                    <div class="unique-description">
                    {!! htmlspecialchars_decode($about->short_content ?? '') !!}
                        <br>                        
                        {!! htmlspecialchars_decode($about->long_content ?? '') !!}
                    </div>
                    <div class="unique-button"
                        style="background-color:#CF1312; height: 40px; width: 130px; display: flex; justify-content: center; align-items: center;">
                        <a href="/about-one/guidance-session" class="unique-learn-more" style="color: white;">Explore More</a>
                        <div class="unique-icon" style="color: white;">&rarr;</div>
                    </div>
                    <br>
                    <div class="unique-statistics d-flex align-items-center" style="justify-content: unset;">
                        <div class="unique-stat">
                            <i class="fa fa-university" aria-hidden="true"></i>
                            <div class="unique-text">
                                <div class="unique-number">{{$about->icon_image_caption ?? ''}}</div>
                                <div class="unique-label">Years of Experience</div>
                            </div> 
                        </div>
                        <div class="unique-stat">
                            <i class="fa fa-building" aria-hidden="true"></i>
                            <div class="unique-text">
                                <div class="unique-number">{{$about->page_title ?? ''}}</div>
                                <div class="unique-label">Branch Office</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    