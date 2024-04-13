@extends("layouts.master")
@section('content')

<!-- breadcrumb start -->
<div class="container-xxl bg-primary page-header"
        style="background-image: url('/website/img/public/xx.jpg'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="bread-container">
                <div>Home</div>
                <div class="divider"> / </div>
                <div>{{$slug1->caption ?? $slug1 }} </div>
            </div>
            <div class="b-title">{{$slug2->caption ?? $slug2 }}</div>
        </div>
    </div>
    <!-- breadcrumb end -->


    <div class="container-xxl py-6" style="background-color: #ffff;">
        <div class="inside_body">

            <div class="container">
                <div class="row g-4" style="margin-left: 0px;">
                    @foreach ($services->childs->sortByDesc('created_at') as $sub)
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
                                
                                <a href="{{$sub->nav_name}}/@if ($child = $sub->childs->first()){{$child->nav_name}} @endif" style="text-decoration: none;">
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


    
    <!-- Normal Start -->

    <!-- Normal End -->
    {{-- <div class="gallery-indicator" style="  display: flex; justify-content: center; align-items: center;">
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
    </div> --}}

@endsection