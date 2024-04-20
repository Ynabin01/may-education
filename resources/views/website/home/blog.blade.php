<div class="do-gray" style="background-color: white;padding-bottom: 35px;">
<div class="b-container blog-home" style="background-color: #CF1312; height: 300px; margin-bottom: 115px; margin-top: -95px;">
            <div class="gallery-container">
                <br>
                <div style="text-align: center; color: white; font-size: 24px; font-family: Montserrat; font-weight: 700; line-height: 31.20px; word-wrap: break-word">
                    Your source for up-to-date<br /> blogs
                </div><br> <br>
                <div class="blog-gallery">

                    @foreach ($blogs->childs->sortByDesc('updated_at') as $blog)
                        @if ($loop->iteration < 5)
                        {{-- {{$blog}} --}}

                        <div class="blog-gallery-item" style="height: 300px !important;">
                            <img src="{{$blog->banner_image ?? ""}}" alt="">
                            <div class="blog-gallery-info">
                                <div
                                    style="width: 100%; color: white; font-size: 10px; font-family: Poppins; font-weight: 300; text-transform: uppercase; line-height: 18px; letter-spacing: 1.20px; word-wrap: break-word">
                                    {{$blog->page_description ?? ""}}</div>
                                <div
                                    style="width: 100%; color: white; font-size: 16px; font-family: Montserrat; font-weight: 700; line-height: 23.40px; word-wrap: break-word">
                                    {{$blog->caption}}</div>
                                <div
                                    style="width: 100%; height: 100%; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                                    <a href="{{$blogs->nav_name}}/{{$blog->nav_name}}">
                                        <div style="color: white; font-size: 12px; font-family: Poppins; font-weight: 300; text-transform: uppercase; line-height: 18px; letter-spacing: 1.20px; word-wrap: break-word">
                                            &plus; see details</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endif

                    @endforeach

                    {{-- <div class="blog-gallery-item" style="height: 300px !important;">
                        <img src="website/img/public/image-2@2x.png" alt="">
                        <div class="blog-gallery-info">
                            <div
                                style="width: 100%; color: white; font-size: 10px; font-family: Poppins; font-weight: 300; text-transform: uppercase; line-height: 18px; letter-spacing: 1.20px; word-wrap: break-word">
                                AUCTION</div>
                            <div
                                style="width: 100%; color: white; font-size: 16px; font-family: Montserrat; font-weight: 700; line-height: 23.40px; word-wrap: break-word">
                                Notice regarding Auction of Promoter Shares of Capital Merchant</div>
                            <div
                                style="width: 100%; height: 100%; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                                <div
                                    style="color: white; font-size: 12px; font-family: Poppins; font-weight: 300; text-transform: uppercase; line-height: 18px; letter-spacing: 1.20px; word-wrap: break-word">
                                    &plus; see details</div>
                            </div>
                        </div>
                    </div>

                    <div class="blog-gallery-item" style="height: 300px !important;">
                        <img src="website/img/public/image-1@2x.png" alt="">
                        <div class="blog-gallery-info">
                            <div
                                style="width: 100%; color: white; font-size: 10px; font-family: Poppins; font-weight: 300; text-transform: uppercase; line-height: 18px; letter-spacing: 1.20px; word-wrap: break-word">
                                aUCTION</div>
                            <div
                                style="width: 100%; color: white; font-size: 16px; font-family: Montserrat; font-weight: 700; line-height: 23.40px; word-wrap: break-word">
                                Notice regarding Auction of Promoter Shares of Capital Merchant</div>
                            <div
                                style="width: 100%; height: 100%; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                                <div
                                    style="color: white; font-size: 12px; font-family: Poppins; font-weight: 300; text-transform: uppercase; line-height: 18px; letter-spacing: 1.20px; word-wrap: break-word">
                                    &plus; see details</div>
                            </div>
                        </div>
                    </div>

                    <div class="blog-gallery-item" style="height: 300px !important;">
                        <img src="website/img/public/image-31@2x.png" alt="">
                        <div class="blog-gallery-info">
                            <div
                                style="width: 100%; color: white; font-size: 10px; font-family: Poppins; font-weight: 300; text-transform: uppercase; line-height: 18px; letter-spacing: 1.20px; word-wrap: break-word">
                                aUCTION</div>
                            <div
                                style="width: 100%; color: white; font-size: 16px; font-family: Montserrat; font-weight: 700; line-height: 23.40px; word-wrap: break-word">
                                Notice regarding Auction of Promoter Shares of Capital Merchant</div>
                            <div
                                style="width: 100%; height: 100%; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                                <div
                                    style="color: white; font-size: 12px; font-family: Poppins; font-weight: 300; text-transform: uppercase; line-height: 18px; letter-spacing: 1.20px; word-wrap: break-word">
                                    &plus; see details</div>
                            </div>
                        </div>
                    </div> --}}

                    <!-- Add more gallery items here -->
                </div>
                <br>
                <div class="unique-button" style="background-color:#CF1312; height: 40px; width: 100px; display: flex; justify-content: center; align-items: center; margin: 0 auto;">
                    <a href="/blog" class="unique-learn-more" style="color: white;">View All</a>
                    <div class="unique-icon" style="color: white;">&rarr;</div>
                </div>
            </div>
        </div>

        <!-- Blog End --> <br>
        <br>
        <br>
</div>

