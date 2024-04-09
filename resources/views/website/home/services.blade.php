<div class="container-xxl py-6" style="background-color: #ffff;">
        <div class="inside_body">

            <div class="container">
                <div class="responsive-container" style="display: flex; flex-direction: row; margin-bottom: 35px;">
                    <div class="service-section-title"
                        style="flex: 1 1 0; color: #3D3D3D; margin-top: 18px; margin-left: 22px; font-size: 24px; font-family: Montserrat; font-weight: 700; line-height: 31.20px; word-wrap: break-word">
                        What We Provide?
                    </div>
                    <div
                        style="flex: 1 1 0; color: #3D3D3D; font-size: 16px; font-family: Poppins; font-weight: 400; line-height: 24px; text-align: justify; margin-left: 26px !important;  word-wrap: break-word ">
                        Make your study abroad journey hassle-free with our range of services. Schedule your free career
                        counselling session, and get more information on your scholarship options, guidance on financial
                        documents, test preparations, visa processing and much more.
                    </div>
                </div>
                @if (isset($services))
                <div class="row g-4" style="margin-left: 0px;">
                @foreach ($services as $service)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded">
                            <div class="border border-dark rounded" style="padding: 10px;">
                                <img src="{{ $service->banner_image ?? '' }}" alt="Service Image" class="img-fluid mb-3">
                                <div
                                    style="width: 100%; color: #3D3D3D; font-size: 16px; font-family: Montserrat; font-weight: 700; line-height: 20px; word-wrap: break-word">
                                    {{ $service->caption ?? '' }}
                                </div>
                                <div style="font-family: Poppins; color: black; font-size: 14px; text-align: justify;">
                                {{ $service->short_content ?? '' }}
                                </div>
                                <div
                                    style="width: 100%; display: flex; justify-content: flex-start; align-items: center; gap: 8px; margin-top: 10px;">
                                    <div
                                        style="color: #CF1312; font-size: 14px; font-family: Inter; font-weight: 400; line-height: 14px; word-wrap: break-word">
                                        Learn More
                                    </div>
                                    <i class="fas fa-arrow-right" style="color: #CF1312;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @endif    
    
                    <!-- Repeat the above code block for the other three service items -->
                </div>
            </div>
        </div>
    </div>