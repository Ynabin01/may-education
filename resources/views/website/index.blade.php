@extends('layouts.master')

@section('content')
    @include('website.home.banners')
    @include('website.home.About') 
    @include('website.home.services') 
    @include('website.home.study') 
    @include('website.home.testimonial')
    @include('website.home.gallery')
    @include('website.home.partners') 
    @include('website.home.blog')  
@endsection
