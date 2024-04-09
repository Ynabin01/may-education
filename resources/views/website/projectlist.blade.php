
@extends("layouts.master")

@section('content')
  <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Services</h1>
                <a href="/" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Services</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Service Start -->
                <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="container">
                        <div class="row g-5 mb-5">
                           <!--  <div class="col-lg-5 wow zoomIn" data-wow-delay="0.3s" style="min-height: 400px;">
                                <div class="twentytwenty-container position-relative h-100 rounded overflow-hidden">
                                    <img class="position-absolute w-100 h-100" src="website/img/before.jpg" style="object-fit: cover;">
                                    <img class="position-absolute w-100 h-100" src="website/img/after.jpg" style="object-fit: cover;">
                                </div>
                            </div> -->
                            <div class="col-lg-7">
                                <div class="section-title mb-5">
                                    <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Services</h5>
                                    <h1 class="display-5 mb-0">We Offer The Best Quality Dental Services</h1>
                                </div>
                                <div class="row g-5">
                                    
                                </div>
                            </div> 
                        </div>

                        @if (isset($projectlist) && count($projectlist) > 0)
                            <div class="row">
                                @foreach ($projectlist as $project)
                                    <div class="col-md-4 mb-4">
                                        <div class="card border-0 shadow-sm">
                                            <a href="{{ route('ReadMore', ['id' => $project->id]) }}">
                                                <img class="card-img-top" src="{{ $project->banner_image ?? 'placeholder.jpg' }}" alt="{{ $project->caption ?? 'Project Image' }}" style="width: 100%; height: 200px; object-fit: cover;">
                                            </a>
                                            <div class="card-body">
                                                <h5 class="card-title">
                                                    <a href="{{ route('ReadMore', ['id' => $project->id]) }}">{{ $project->caption ?? 'Project Title' }}</a>
                                                </h5>
                                                <p class="card-text">{{ $project->description ?? 'Project Description' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p>No projects available at the moment.</p>
                        @endif



                    </div>
                </div>
            </div>
    <!-- Service End -->
    @endsection