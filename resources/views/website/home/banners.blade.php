 
@if (isset($banners))
@foreach ($banners as $banner)
 <div class="custom-container" style="background-color: #ffff; margin-top: 63px;">
    <div class="inside_body">

        <div class="custom-content" style="margin-left: 100px;">
            <img src="website/img/public/group@2x.png" alt="Placeholder Image 3"
                style="width: 45px; height: 70px; position: absolute; top: 135px;"
                class="hide-on-mobile-tablet img-dot">

            <div class="custom-text-container-b">
                <div
                    style="width: 100%; color: #CF1312; font-size: 45px; font-family: Montserrat; margin-bottom: -22px;    font-weight: 600; line-height: 62.40px; word-wrap: break-word">
                    {!! htmlspecialchars_decode($banner->caption ?? '') !!}</div><br>
                <div
                    style="width: 100%; color: #343A40; font-size: 18px; font-family: Poppins; font-weight: 400; line-height: 24px; word-wrap: break-word">
                    {!! htmlspecialchars_decode($banner->long_content ?? '') !!}</div>
                <br>
                <div class="unique-button"
                    style="background-color:#CF1312; height: 50px; width: 150px; display: flex; justify-content: center; align-items: center;">
                    <a href="/about-one/about-us-one" class="unique-learn-more" style="color: white;">Explore More</a>
                    <div class="unique-icon" style="color: white;">&rarr;</div>
                </div>
            </div>
            <div class="custom-images-container">
                <img src="{!! htmlspecialchars_decode($banner->banner_image ?? '') !!}" alt="Placeholder Image 1"
                    style="margin-top: 160px; width: 220px; height: 220px;">
                <img src="/uploads/main_attachment/{{$banner->main_attachment ?? '' }}" alt="Placeholder Image 2"
                    style="margin-bottom: 150px; margin-left: -90px; width: 220px; height: 220px;">
                    <!-- <img src="website/img/about.PNG" alt="Placeholder Image 2"
                    style="margin-bottom: 150px; margin-left: -90px; width: 220px; height: 220px;"> -->
                <!-- For tablet and mobile -->
                <img src="website/img/pp2.PNG" alt="Placeholder Image 4"
                style="width: 90px;height: 50px;margin-left: -90px;margin-top: auto; margin-bottom: 35px;">
            </div>
        </div> 
        </div>
    </div>
    @endforeach
    @endif