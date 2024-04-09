<script>
        document.addEventListener("DOMContentLoaded", function() {
            const tabs = document.querySelectorAll('.homestudy-item');
    
            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    tabs.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                });
            });
            const tabs1 = document.querySelectorAll('.homestudy-name');
    
            tabs1.forEach(tab => {
                tab.addEventListener('click', function() {
                    tabs1.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                });
            });
        });
    </script>
    <div class="container-xxl py-6 aus-abroad" style="margin-top: 20px; margin-bottom: 20px;">
        <div class="main-container">
            <div class="studyhomep-header-container">
                <div class="studyhomep-header">Study Abroad</div>
            </div>
            <div class="homestudy-list nav" id="myTab" role="tablist">
                <a href="#Australia" data-bs-toggle="tab" data-bs-target="#Australia" class="homestudy-item active" style=" color: black; text-decoration: none;">
                    <div class="homestudy-name active">Australia</div>
                </a>
                <a href="#Germany" data-bs-toggle="tab" data-bs-target="#Germany" class="homestudy-item" style=" color: black; text-decoration: none;">
                    <div class="homestudy-name">Germany</div>
                </a>
                <a href="#Canada" data-bs-toggle="tab" data-bs-target="#Canada" class="homestudy-item" style=" color: black; text-decoration: none;">
                    <div class="homestudy-name">Canada</div>
                </a>
                <a href="#United" data-bs-toggle="tab" data-bs-target="#United" class="homestudy-item" style=" color: black; text-decoration: none;">
                    <div class="homestudy-name">United Kingdom</div>
                </a>
                <a href="#USA" data-bs-toggle="tab" data-bs-target="#USA" class="homestudy-item" style=" color: black; text-decoration: none;">
                    <div class="homestudy-name">USA</div>
                </a>
                <a href="#Japan" data-bs-toggle="tab" data-bs-target="#Japan" class="homestudy-item" style=" color: black; text-decoration: none;">
                    <div class="homestudy-name">Japan</div>
                </a>
            </div>

            </div>
            <div class="tab-content">
                <div id="Australia" class="tab-pane active">
                    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s"
                        style="margin-top: 20px; margin-bottom: -60px;">
                        <div class="container" style="margin-bottom: 40px;">
                            <div class="row g-5">
                                <div class="row">
                                    <div class="col-lg-6 order-lg-1 order-2" style="margin-top: 24px">
                                        <div class="position-relative h-100">
                                            <img class="wow zoomIn img-fluid" data-wow-delay="0.9s" src="website/img/public/R.jpeg"
                                                alt="Surgical Masks Image"
                                                style="width: 90%; height: auto; margin-bottom: 20px; display: block; max-width: 100%; position: relative; right: 0;" />

                                        </div>
                                    </div>
        
                                    <div class="col-lg-6 order-lg-2 order-1" style="margin-top: 80px">
                                        <div
                                            style="width: 100%; color: #212529; font-size: 24px; font-family: Montserrat; font-weight: 500; line-height: 31.20px; margin-top: -45px; word-wrap: break-word">
                                            Why Australia could be better destiny for your education</div>
                                        <div
                                            style="max-width: 100%; word-wrap: break-word; color: #3d3d3d; font-size: 14px; font-family: Outfit; font-weight: 400; line-height: 30px;">
                                            <div style="display: flex; align-items: center; gap: 8px">
                                                <div
                                                    style="margin-top: -27px; width: 20px; height: 20px; border-radius: 50%; border: 2px solid #3d3d3d; display: flex; align-items: center; justify-content: center;">
                                                    <div
                                                        style="width: 12px; height: 12px; border-radius: 50%; display: flex; justify-content: center; align-items: center;">
                                                        <span
                                                            style="color: #3d3d3d; font-size: 10px; line-height: 1; font-weight: bold">&rarr;</span>
                                                    </div>
                                                </div>
                                                <div style="flex: 1">
                                                    Purpose: Surgical masks are designed to provide a barrier and protection
                                                    against respiratory droplets, including those carrying bacteria and viruses.
                                                </div>
                                            </div>
                                            <div style="display: flex; align-items: center; gap: 8px">
                                                <div
                                                    style="margin-top: -27px; width: 20px; height: 20px; border-radius: 50%; border: 2px solid #3d3d3d; display: flex; align-items: center; justify-content: center;">
                                                    <div
                                                        style="width: 12px; height: 12px; border-radius: 50%; display: flex; justify-content: center; align-items: center;">
                                                        <span
                                                            style="color: #3d3d3d; font-size: 10px; line-height: 1; font-weight: bold">&rarr;</span>
                                                    </div>
                                                </div>
                                                <div style="flex: 1">
                                                    Purpose: Surgical masks are designed to provide a barrier and protection
                                                    against respiratory droplets, including those carrying bacteria and viruses.
                                                </div>
                                            </div>
                                            <div style="display: flex; align-items: center; gap: 8px">
                                                <div
                                                    style="margin-top: -27px; width: 20px; height: 20px; border-radius: 50%; border: 2px solid #3d3d3d; display: flex; align-items: center; justify-content: center;">
                                                    <div
                                                        style="width: 12px; height: 12px; border-radius: 50%; display: flex; justify-content: center; align-items: center;">
                                                        <span
                                                            style="color: #3d3d3d; font-size: 10px; line-height: 1; font-weight: bold">&rarr;</span>
                                                    </div>
                                                </div>
                                                <div style="flex: 1">
                                                    Purpose: Surgical masks are designed to provide a barrier and protection
                                                    against respiratory droplets, including those carrying bacteria and viruses.
                                                </div>
                                            </div>
        
                                            <!-- Repeat the same structure for other points -->
                                        </div>
                                    </div>
        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="Germany" class="tab-pane">
                    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s"
                        style="margin-top: 20px; margin-bottom: -60px;">
                        <div class="container" style="margin-bottom: 40px;">
                            <div class="row g-5">
                                <div class="row">
                                    <div class="col-lg-6 order-lg-1 order-2" style="margin-top: 24px">
                                        <div class="position-relative h-100">
                                            <img class="wow zoomIn img-fluid" data-wow-delay="0.9s" src="website/img/public/R.jpeg"
                                                alt="Surgical Masks Image"
                                                style="width: 90%; height: auto; margin-bottom: 20px; display: block; max-width: 100%; position: relative; right: 0;" />

                                                
                                        </div>
                                    </div>
        
                                    <div class="col-lg-6 order-lg-2 order-1" style="margin-top: 80px">
                                        <div
                                            style="width: 100%; color: #212529; font-size: 24px; font-family: Montserrat; font-weight: 500; line-height: 31.20px; margin-top: -45px; word-wrap: break-word">
                                            Why Germany could be better destiny for your education</div>
                                        <div
                                            style="max-width: 100%; word-wrap: break-word; color: #3d3d3d; font-size: 14px; font-family: Outfit; font-weight: 400; line-height: 30px;">
                                            <div style="display: flex; align-items: center; gap: 8px">
                                                <div
                                                    style="margin-top: -27px; width: 20px; height: 20px; border-radius: 50%; border: 2px solid #3d3d3d; display: flex; align-items: center; justify-content: center;">
                                                    <div
                                                        style="width: 12px; height: 12px; border-radius: 50%; display: flex; justify-content: center; align-items: center;">
                                                        <span
                                                            style="color: #3d3d3d; font-size: 10px; line-height: 1; font-weight: bold">&rarr;</span>
                                                    </div>
                                                </div>
                                                <div style="flex: 1">
                                                    Purpose: Surgical masks are designed to provide a barrier and protection
                                                    against respiratory droplets, including those carrying bacteria and viruses.
                                                </div>
                                            </div>
                                            <div style="display: flex; align-items: center; gap: 8px">
                                                <div
                                                    style="margin-top: -27px; width: 20px; height: 20px; border-radius: 50%; border: 2px solid #3d3d3d; display: flex; align-items: center; justify-content: center;">
                                                    <div
                                                        style="width: 12px; height: 12px; border-radius: 50%; display: flex; justify-content: center; align-items: center;">
                                                        <span
                                                            style="color: #3d3d3d; font-size: 10px; line-height: 1; font-weight: bold">&rarr;</span>
                                                    </div>
                                                </div>
                                                <div style="flex: 1">
                                                    Purpose: Surgical masks are designed to provide a barrier and protection
                                                    against respiratory droplets, including those carrying bacteria and viruses.
                                                </div>
                                            </div>
                                            <div style="display: flex; align-items: center; gap: 8px">
                                                <div
                                                    style="margin-top: -27px; width: 20px; height: 20px; border-radius: 50%; border: 2px solid #3d3d3d; display: flex; align-items: center; justify-content: center;">
                                                    <div
                                                        style="width: 12px; height: 12px; border-radius: 50%; display: flex; justify-content: center; align-items: center;">
                                                        <span
                                                            style="color: #3d3d3d; font-size: 10px; line-height: 1; font-weight: bold">&rarr;</span>
                                                    </div>
                                                </div>
                                                <div style="flex: 1">
                                                    Purpose: Surgical masks are designed to provide a barrier and protection
                                                    against respiratory droplets, including those carrying bacteria and viruses.
                                                </div>
                                            </div>
        
                                            <!-- Repeat the same structure for other points -->
                                        </div>
                                    </div>
        
                                </div>
                            </div>
                        </div>
                </div>
                 
                </div>

                <div id="Canada" class="tab-pane">
                    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s"
                        style="margin-top: 20px; margin-bottom: -60px;">
                        <div class="container" style="margin-bottom: 40px;">
                            <div class="row g-5">
                                <div class="row">
                                    <div class="col-lg-6 order-lg-1 order-2" style="margin-top: 24px">
                                        <div class="position-relative h-100">
                                            <img class="wow zoomIn img-fluid" data-wow-delay="0.9s" src="website/img/public/R.jpeg"
                                                alt="Surgical Masks Image"
                                                style="width: 90%; height: auto; margin-bottom: 20px; display: block; max-width: 100%; position: relative; right: 0;" />
                                        </div>
                                    </div>
        
                                    <div class="col-lg-6 order-lg-2 order-1" style="margin-top: 80px">
                                        <div
                                            style="width: 100%; color: #212529; font-size: 24px; font-family: Montserrat; font-weight: 500; line-height: 31.20px; margin-top: -45px; word-wrap: break-word">
                                            Why Canada could be better destiny for your education</div>
                                        <div
                                            style="max-width: 100%; word-wrap: break-word; color: #3d3d3d; font-size: 14px; font-family: Outfit; font-weight: 400; line-height: 30px;">
                                            <div style="display: flex; align-items: center; gap: 8px">
                                                <div
                                                    style="margin-top: -27px; width: 20px; height: 20px; border-radius: 50%; border: 2px solid #3d3d3d; display: flex; align-items: center; justify-content: center;">
                                                    <div
                                                        style="width: 12px; height: 12px; border-radius: 50%; display: flex; justify-content: center; align-items: center;">
                                                        <span
                                                            style="color: #3d3d3d; font-size: 10px; line-height: 1; font-weight: bold">&rarr;</span>
                                                    </div>
                                                </div>
                                                <div style="flex: 1">
                                                    Purpose: Surgical masks are designed to provide a barrier and protection
                                                    against respiratory droplets, including those carrying bacteria and viruses.
                                                </div>
                                            </div>
                                            <div style="display: flex; align-items: center; gap: 8px">
                                                <div
                                                    style="margin-top: -27px; width: 20px; height: 20px; border-radius: 50%; border: 2px solid #3d3d3d; display: flex; align-items: center; justify-content: center;">
                                                    <div
                                                        style="width: 12px; height: 12px; border-radius: 50%; display: flex; justify-content: center; align-items: center;">
                                                        <span
                                                            style="color: #3d3d3d; font-size: 10px; line-height: 1; font-weight: bold">&rarr;</span>
                                                    </div>
                                                </div>
                                                <div style="flex: 1">
                                                    Purpose: Surgical masks are designed to provide a barrier and protection
                                                    against respiratory droplets, including those carrying bacteria and viruses.
                                                </div>
                                            </div>
                                            <div style="display: flex; align-items: center; gap: 8px">
                                                <div
                                                    style="margin-top: -27px; width: 20px; height: 20px; border-radius: 50%; border: 2px solid #3d3d3d; display: flex; align-items: center; justify-content: center;">
                                                    <div
                                                        style="width: 12px; height: 12px; border-radius: 50%; display: flex; justify-content: center; align-items: center;">
                                                        <span
                                                            style="color: #3d3d3d; font-size: 10px; line-height: 1; font-weight: bold">&rarr;</span>
                                                    </div>
                                                </div>
                                                <div style="flex: 1">
                                                    Purpose: Surgical masks are designed to provide a barrier and protection
                                                    against respiratory droplets, including those carrying bacteria and viruses.
                                                </div>
                                            </div>
        
                                            <!-- Repeat the same structure for other points -->
                                        </div>
                                    </div>
        
                                </div>
                            </div>
                        </div>
                </div>
                 
                </div>
            </div>

            
        </div>
    </div>