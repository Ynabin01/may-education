<div class="container-xxl bg-primary my-6 py-5 wow fadeInUp" data-wow-delay="0.1s">
    <h2 class="mb-5 text-center" style="color: #212529; font-size: 24px; font-family: Montserrat; font-weight: 500; line-height: 24px;">
        Our Partners
    </h2>

    <div class="container">
        <div class="d-flex align-items-center justify-content-center mb-4">
            <!-- Left Arrow -->
            <div id="prev" style="width: 40px; height: 40px; border: 1px solid #CF1312; border-radius: 50%; display: flex; justify-content: center; align-items: center;">
                <i class="fas fa-chevron-left" style="color: #CF1312; font-size: 24px;"></i>
            </div>

            <!-- Carousel Content -->
            <div class="owl-carousel client-carousel" data-items="4" style="flex: 1; margin: 0 10px; max-width: 908px; width: 45%;">
                @if (isset($partners))
                    @foreach ($partners as $partner)
                        <!-- Your carousel content goes here -->
                        <a href="#"><img class="img-fluid" src="{{ $partner->banner_image }}" style="height: 60px; width:200px " alt=""></a>
                    @endforeach
                @endif
            </div>

            <!-- Right Arrow -->
            <div id="next" style="width: 40px; height: 40px; border: 1px solid #CF1312; border-radius: 50%; display: flex; justify-content: center; align-items: center;">
                <i class="fas fa-chevron-right" style="color: #CF1312; font-size: 24px;"></i>
            </div>
        </div>
    </div>
</div>
