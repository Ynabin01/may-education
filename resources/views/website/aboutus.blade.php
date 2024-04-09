@extends("layouts.master")

@section('content')


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">About Us</h1>
                <a href="/" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">About</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">About Us</h5>
                        <h1 class="display-5 mb-0">Sparking Smile Dental Clinic</h1>
                    </div>
                    <!-- <h4 >Diam dolor diam ipsum sit. Clita erat ipsum et lorem stet no lorem sit clita duo justo magna dolore</h4> -->
                    <p class="mb-4" style="text-align: justify;">Welcome to Sparking Smile Dental Clinic, where your oral health and radiant smiles are our top priority. Established with a vision to provide comprehensive and personalized dental care, our clinic is dedicated to enhancing the dental wellness of every patient who walks through our doors. At Sparking Smile, we believe in fostering a warm and welcoming environment, ensuring a comfortable experience from the moment you step in. Our team of highly skilled and compassionate professionals utilizes state-of-the-art technology and innovative techniques to deliver exceptional dental services, ranging from routine check-ups and cleanings to advanced treatments and cosmetic procedures. We are committed to empowering our patients with the knowledge and guidance they need to achieve optimal oral health and achieve the confident, beautiful smiles they deserve.</p> 
                    <p class="mb-4" style="text-align: justify;">Our philosophy revolves around patient-centered care, where we strive to build lasting relationships based on trust, transparency, and excellence in dentistry. We understand that each individual has unique dental needs and concerns, which is why we take the time to listen attentively and tailor treatment plans that align with your specific goals and preferences. Beyond providing outstanding dental care, we aim to create an atmosphere that alleviates dental anxiety and promotes a stress-free experience for patients of all ages. At Sparking Smile Dental Clinic, we are passionate about creating not just healthy smiles but also lasting connections with our community, ensuring that every visit leaves you with a reason to smile brighter. </p>
                    </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="website/img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
     
    <!-- About End -->

@endsection