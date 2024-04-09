@extends("layouts.master")

@section('content')

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                @if(is_object($normal) && isset($normal->caption))
                    <h1 class="display-3 text-white animated zoomIn">{{ $normal->caption }}</h1>
                @endif
                <a href="/" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">
                    @if(is_object($normal) && isset($normal->caption))
                        {{ $normal->caption }}
                    @endif
                </a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <main style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f5f5f5; position: relative;">
        <div style="max-width: 1200px; margin: 0 auto; padding: 20px; position: relative;">
            @if(is_object($normal))
            <img src="{{ $normal->banner_image ?? '' }}" alt="Blog Image" style="width: 100%; height: 300px; object-fit: cover; display: block; margin: 0 auto; margin-bottom: 20px;">

                <div style="max-width: 1200px; margin: 0 auto; padding: 20px; display: flex; flex-wrap: wrap; gap: 20px;">
                    <div style="display: flex; flex-wrap: wrap; gap: 20px;">
                        <!-- Text Content -->
                        <div style="flex: 1; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                            @if(isset($normal->caption))
                                <h2 style="font-size: 24px; font-weight: bold; margin-bottom: 10px;">{{ $normal->caption }}</h2>
                            @endif
                            <div style="font-size: 14px; color: #777; margin-bottom: 20px; color:black;">
                                <!-- <span>Published on January 1, 2024 by John Doe</span> -->
                            </div>
                            <div style="font-size: 16px; line-height: 1.6; margin-bottom: 20px; text-align: justify; color:black;">
                                @if(isset($normal->short_content))
                                    <p>{{ $normal->short_content }}</p>
                                @endif
                            </div>
                        </div>
                        
                        <!-- Image Content -->
                        <div class="image-container" style="flex: 1; max-width: 100%;">
                            <img src="/uploads/main_attachment/{{ $normal->main_attachment ?? '' }}" alt="Image" style="max-width: 100%; height: auto; display: block; border-radius: 8px;">
                        </div>
                    </div>
                    
                    <style>
                        @media (max-width: 768px) { /* Adjust the breakpoint as needed */
                            .image-container {
                                display: none;
                            }
                        }
                    </style>     
                    
                </div>
                <div style="background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); position: relative;">
                    <div style="font-size: 16px; text-align: justify; line-height: 1.6; margin-bottom: 20px; color:black;">
                        @if(isset($normal->long_content))
                            <p>{{ $normal->long_content }}</p>
                        @endif
                    </div>
                    
                </div>
            @else
                <p>No data available.</p>
            @endif
        </div>
    </main>
    <!-- About End -->

@endsection
