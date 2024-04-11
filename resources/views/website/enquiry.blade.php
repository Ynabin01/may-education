@extends("layouts.master")

@section('content')

    <!-- breadcrumb start -->

    <div class="container-xxl bg-primary page-header"
        style="background-image: url('/website/img/public/xx.jpg'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="bread-container">
                <div>Home</div>
                <div class="divider"> / </div>
                <div>enquiry</div>
            </div>
            <div class="b-title">Enquiry</div>
        </div>
    </div>

    <!-- Navbar & Hero End -->
    <div class="container-xxl py-6" style="background-color: white;">
        <div class="container apply-n">
            <div class="personal-details apply-n">
                <div class="label apply-n">Personal Details</div>
                <div class="input-fields apply-n">
                    <div class="input-field apply-n">
                        <div class="label apply-n">Full Name</div>
                        <input type="text" placeholder=" ">
                    </div>
                    <div class="input-field apply-n">
                        <div class="label apply-n">Email</div>
                        <input type="email" placeholder=" ">
                    </div>
                    <div class="personal-details apply-n" style="width: 100%;">
                        <div class="input-fields apply-n">
                            <div class="input-field apply-n">
                                <div class="label apply-n">Country</div>
                                <!-- Replace input type="text" with select element -->
                                <select
                                    style="height: 38px; border-radius: 4px; border: 1px solid rgba(61, 61, 61, 0.24);">
                                    <!-- Add options for countries -->
                                    <option value="" selected disabled>Select</option>
                                    <option value="country1">Country 1</option>
                                    <option value="country2">Country 2</option>
                                    <!-- Add more options for other countries -->
                                </select>
                            </div>
                            <div class="input-field apply-n">
                                <div class="label apply-n">Faculty</div>
                                <select type="text"
                                    style="height: 38px; border-radius: 4px; border: 1px solid rgba(61, 61, 61, 0.24);">
                                    <!-- Add options for countries -->
                                    <option value="" selected disabled>Select</option>
                                    <option value="country1">Country 1</option>
                                    <option value="country2">Country 2</option>
                                    <!-- Add more options for other countries -->
                                </select>
                            </div>
                            <div class="input-field apply-n">
                                <div class="label apply-n">Phone No.</div>
                                <input type="text" placeholder=" ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="education apply-n">
                <div class="input-fields apply-n">
                    <div class="input-field apply-n">
                        <div class="label apply-n">Education Level</div>
                        <select type="text"
                            style="border-radius: 4px; width: 30%; height: 38px; border: 1px solid rgba(61, 61, 61, 0.24);">
                            <!-- Add options for countries -->
                            <option value="" selected disabled>Select</option>
                            <option value="country1">Country 1</option>
                            <option value="country2">Country 2</option>
                            <!-- Add more options for other countries -->
                        </select>
                    </div>
                </div>
            </div>

            <div class="checkbox-container">
                <div class="label apply-n">Have You Done</div>
                <label>
                    <input type="checkbox" id="checkbox1">
                    TOEFL-IBT
                </label>
                <label>
                    <input type="checkbox" id="checkbox2">
                    TOEFL
                </label>
                <label>
                    <input type="checkbox" id="checkbox3">
                    IELTS
                </label>
                <label>
                    <input type="checkbox" id="checkbox4">
                    SAT
                </label>
                <label>
                    <input type="checkbox" id="checkbox5">
                    GRE
                </label>
                <label>
                    <input type="checkbox" id="checkbox6">
                    GMAT
                </label>
                <label>
                    <input type="checkbox" id="checkbox7">
                    Language
                </label>
                <label>
                    <input type="checkbox" id="checkbox8">
                    SAT II
                </label>
            </div>

            <div class="score apply-n">
                <div class="input-fields apply-n" style="width: 20%;">
                    <div class="input-field apply-n">
                        <div class="label apply-n">Score</div>
                        <input type="text" placeholder="Enter your score">
                    </div>
                </div>
            </div>
            <br>
            <div class="send-message apply-n">
                <button>Send Message</button>
            </div>
        </div>
    </div>

@endsection 