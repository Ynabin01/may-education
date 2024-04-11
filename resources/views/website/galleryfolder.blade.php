@extends("layouts.master")
@section('content')

<!-- breadcrumb start -->
    <div class="container-xxl bg-primary page-header"
        style="background-image: url('/website/img/public/xx.jpg'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="bread-container">
                <div>Home</div>
                <div class="divider"> / </div>
                <div>gallery</div>
            </div>
            <div class="b-title">Gallery</div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- Navbar & Hero End -->
    <div class="container-xxl py-6">
    @if (isset($photos))
        <div class="container">
            <div class="gallery-container">
                <div class="gallery-items">
                    @foreach ($photos as $photo)
                    <div class="gallery-item">
                        <a href="#">
                            <img src="{{ $photo->banner_image ?? '' }}" alt="">
                            <div class="info">
                                <div class="g-title">{!! htmlspecialchars_decode($photo->caption ?? '') !!}</div>
                                <div class="details">
                                    <div class="info-item">{!! htmlspecialchars_decode($photo->long_content ?? '') !!}</div>
                                    <div class="separator">•</div>
                                    <div class="info-item">{!! htmlspecialchars_decode($photo->long_content ?? '') !!}</div>
                                </div>
                            </div>
                        </a>   
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif    
</div>

    <!-- Normal Start -->

    <!-- Normal End -->
    <div class="gallery-indicator" style="  display: flex; justify-content: center; align-items: center;">
        <div class="gallery-indicator-item">
            <i class="gallery-chevron fas fa-chevron-left"></i>
        </div>
        <div class="gallery-indicator-item active">
            <div class="gallery-indicator-number">1</div>
        </div>
        <div class="gallery-indicator-item">
            <div class="gallery-indicator-number">2</div>
        </div>
        <div class="gallery-indicator-item">
            <div class="gallery-indicator-number">...</div>
        </div>
        <div class="gallery-indicator-item">
            <div class="gallery-indicator-number">10</div>
        </div>
        <div class="gallery-indicator-item">
            <i class="gallery-chevron fas fa-chevron-right"></i>
        </div>
    </div>

@endsection