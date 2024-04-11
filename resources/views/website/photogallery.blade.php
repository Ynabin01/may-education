@extends('layouts.master')

@section('content')
    <!-- Breadcrumb area Start -->
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
    <!-- Breadcrumb area End -->

    <!-- Main Content Wrapper Start -->
    <main class="main-content-wrapper">
        <div class="inner-page-content">
            <!-- Services Area Start -->
            <section class="services-area ptb--60">
                <div class="container">
                    <div class="gallery-view">
                        <div class="row" id="lightgallery">
                            @foreach ($photos as $photo)
                                <div class="item col-md-4" data-src="/uploads/photo_gallery/{{ $photo->file }}"
                                    data-sub-html="<h4>{{ $photo->caption }}</h4>">
                                    <a href="">
                                        <img src="/uploads/photo_gallery/{{ $photo->file }}" alt="Gallery" />
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <!-- Services Area End -->
        </div>
    </main>
    <!-- Main Content Wrapper End -->
@endsection

 