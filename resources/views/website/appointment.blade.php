@extends("layouts.master")

@section('content')

<!-- Hero Start -->
<div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Appointment</h1>
                <a href="/" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="/appointment" class="h4 text-white">Appointment</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Appointment Start -->
    <div class="container-fluid bg-primary bg-appointment mb-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 90px;">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="display-5 text-white mb-4">We Are A Certified and Award Winning Dental Clinic You Can Trust</h1>
                        <p class="text-white mb-0">Booking an appointment at our dental clinic is hassle-free. Choose a date and time for your oral care consultation or treatment either by phone, email, or through our user-friendly online booking platform. Share your availability and dental needs for a seamless and effective visit.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Make Appointment</h1>
                        <form action="{{ route('appointmentstore') }}" method="POST" id="contact-form" enctype='multipart/form-data'>
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <select  name="service" class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected >Select Our Services</option>
                                        <option value="3">Teeth Cleaning</option>
                                        <option value="1">DIGITAL X-RAYS </option>
                                        <option value="2">Deep Cleanings </option>
                                        <option value="3">Sealents </option>
                                        <option value="3">Fillings </option>
                                        <option value="3">Laser Dentistry </option>
                                        <option value="3">TMJ Treatment </option>
                                        <option value="3">Bridges </option>
                                        <option value="3">Root Canal </option>
                                        <option value="3">Dental Implants </option>
                                        <option value="3">Dentures   </option>
                                        <option value="3">Cerec Crowns </option>
                                        <option value="3">Crowns</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select  name="doctor" class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Select Our Doctors</option>
                                        <option value="1">Dinesh Kumar Yadav</option>
                                        {{-- <option value="2">Doctor 2</option>
                                        <option value="3">Doctor 3</option> --}}
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="name" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="tel" name="number" class="form-control bg-light border-0" placeholder="Your Phone Number" style="height: 55px;" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" name="date"
                                            class="form-control bg-light border-0 datetimepicker-input"
                                            placeholder="Appointment Date" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="time" id="time1" data-target-input="nearest">
                                        <input type="text" name="time"
                                            class="form-control bg-light border-0 datetimepicker-input"
                                            placeholder="Appointment Time" data-target="#time1" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Make Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->
    @endsection