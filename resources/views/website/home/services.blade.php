

<div class="container-xxl py-6" style="background-color: #ffff;">
        <div class="inside_body">

            <div class="container">
                <div class="responsive-container" style="display: flex; flex-direction: row; margin-bottom: 35px;">
                    <div class="service-section-title"
                        style="flex: 1 1 0; color: #3D3D3D; margin-top: 18px; margin-left: 22px; font-size: 24px; font-family: Montserrat; font-weight: 700; line-height: 31.20px; word-wrap: break-word">
                        {{$services->short_content}}
                    </div>
                    <div
                        style="flex: 1 1 0; color: #3D3D3D; font-size: 16px; font-family: Poppins; font-weight: 400; line-height: 24px; text-align: justify; margin-left: 26px !important;  word-wrap: break-word ">
                        {{$services->long_content}}
                    </div>
                </div>
                <div class="row g-4" style="margin-left: 0px;">
                    
                    @foreach ($services->childs->sortByDesc('created_at') as $sub)
                        @if ($loop->iteration > 4)
                            @break
                        @endif
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item rounded">
                                <div class="border border-dark rounded" style="padding: 10px;">
                                    <img src="{{$sub->banner_image}}" alt="Service Image" class="img-fluid mb-3">
                                    <div
                                        style="width: 100%; color: #3D3D3D; font-size: 16px; font-family: Montserrat; font-weight: 700; line-height: 20px; word-wrap: break-word">
                                        {{$sub->caption}}
                                    </div>
                                    <div style="font-family: Poppins; color: black; font-size: 14px; text-align: justify;">
                                        {{$sub->short_content}}
                                    </div>
                                    <a href="#" style="text-decoration: none;">
                                        <div style="width: 100%; display: flex; justify-content: flex-start; align-items: center; gap: 8px; margin-top: 10px; cursor: pointer;">
                                            <div style="color: #CF1312; font-size: 14px; font-family: Inter; font-weight: 400; line-height: 14px; word-wrap: break-word;">
                                                Learn More
                                            </div>
                                            <i class="fas fa-arrow-right" style="color: #CF1312;"></i>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    
    
                    @endforeach
                    
    
                    <!-- Repeat the above code block for the other three service items -->
                </div>
            </div>
        </div>
    </div>