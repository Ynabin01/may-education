@extends('layouts.master')

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


    

    <!-- Main Content Wrapper Start -->
    <div class="container">
        <br>
        <br>
    <main class="main-content-wrapper">
        <div class="inner-page-content">
            <!-- Services Area Start -->
            <section class="services-area ptb--60">
                <div class="container">
                    <div class="row">
                        @foreach ($photos as $photo)
                        <div class="col-xl-4 col-lg-4 col-md-6 mb--30">
                            <iframe width="100%" height="315" src="{{ $photo->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        @endforeach               
                    </div>
                </div>
            </section>
            <!-- Services Area End -->
        </div>
    </main>
</div>
    <!-- Main Content Wrapper End -->

@endsection
