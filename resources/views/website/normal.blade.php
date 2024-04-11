@extends("layouts.master")

@section('content')

   <!-- breadcrumb start -->
   <div class="container-xxl bg-primary page-header"
        style="background-image: url('/website/img/public/xx.jpg'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="bread-container">
                <div>Home</div>
                <div class="divider"> / </div>
                <div>about</div>
            </div>
            <div class="b-title">About</div>
        </div>
    </div>
    <!-- breadcrumb end -->
    <!-- Normal Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="n-content" style="background-color: #F3F6F8;">
                <br>
                <!-- <div class="title">{{ $normal->caption  }}</div><br> -->
                <div class="description"> @php echo $normal->short_content; @endphp </div>
                <br>
                <img src="{{ $normal->banner_image }}" class="image" style="width: 100%; height: 60%;">
                <br>
                <div class="description"> @php echo $normal->long_content; @endphp  </div>
                 
            </div>
        </div>
    </div>

    <!-- Normal End -->

@endsection