
@extends("layouts.master")

@section('content')
<!-- Hero Start -->
<div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Contact Us</h1>
                <a href="/" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Contact</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.1s">
                    <div class="bg-light rounded h-100 p-5">
                        <div class="section-title">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">Contact Us</h5>
                            <h5 class="display-6 mb-4" style="font-size: 16px;">Feel Free To Contact Us</h5>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-0" style="font-size: 14px;">Location</h5>
                                <span style="font-size: 14px;">{{ $global_setting->website_full_address }}</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-0" style="font-size: 14px;">Email Us</h5>
                                <span style="font-size: 14px;">{{ $global_setting->site_email }}</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-0" style="font-size: 14px;">Call Us</h5>
                                <span style="font-size: 14px;">{{ $global_setting->phone }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                        <form action="{{ route('contactstore') }}" method="POST" id="contact-form" enctype='multipart/form-data'>
                            @csrf
                            <div class="row g-3">
                                <div class="col-12">
                                    <input type="text" id="name" class="form-control border-0 bg-light px-4" name="first_name" placeholder="Your Name" style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <input type="email" id="email" class="form-control border-0 bg-light px-4" name="email" placeholder="Your Email" style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <input type="text" id="number" class="form-control border-0 bg-light px-4" name="number" placeholder="Phone No." style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0 bg-light px-4 py-3" name="message" rows="5" placeholder="Message" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>

                
                <div class="col-xl-4 col-lg-12 wow slideInUp" data-wow-delay="0.6s">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2792.5786661487!2d85.34474857425285!3d27.67776732679778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb191db4cdc1f7%3A0x81c1fe9ff2b6ebc9!2sSparking%20Smile%20Dental%20Clinic%20%26%20Smile%20Makeover%20Center!5e1!3m2!1sen!2snp!4v1701600440579!5m2!1sen!2snp" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <!-- <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                        frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    @endsection
