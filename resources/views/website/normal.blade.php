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
    <!-- Normal Start -->
    <div class="container-xxl py-6">
    <div class="container">
        <div class="n-content" style="background-color: #F3F6F8;">
            @if (!empty($normal->main_attachment))
            <div class="manager-message">
                <img src="/uploads/main_attachment/{{$normal->main_attachment}}" alt="" class="manager-image" style="width: 150px; height: 150px;">
            </div>
            <br>
            @endif
            <!-- <div class="title">{{ $normal->caption }}</div><br> -->
            <div class="description">@php echo $normal->short_content; @endphp</div>
            <br>
            <div class="description">@php echo $normal->long_content; @endphp</div>
            @if (!empty($normal->banner_image))
            <img src="{{ $normal->banner_image }}" class="image" style="width: 100%; height: 60%;">
            <br>
            @endif
        </div>
    </div>
</div>



    <!-- Normal End -->
@endsection