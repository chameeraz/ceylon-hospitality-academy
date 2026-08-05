@extends('layout.master')
@section('pageTitle', 'Best pastry and bakery course in sri lanka | Ceylon Hospitality Academy Kandy')

@section('description',
    'Explore the best pastry and bakery course in Sri Lanka in Kandy. Learn essential culinary skills
    with expert instructors. Enroll now and start your culinary journey.')

@section('keywords',
    'Best pastry and bakery course in sri lanka, Pastry Courses Kandy, Bakery Courses Kandy, Culinary Courses Sri Lanka, Pastry Training, Bakery
    Training, Culinary Education, Baking Classes, Pastry Arts, Baking Arts, Culinary School, Hotel School, Food and Beverage
    Training, Professional Baking, Culinary Diploma')
@section('content')
    <!-- Landing section -->
    <div class="container-fluid coursesHero p-0 position-relative">

        <div class="mb-5">
            <!-- slogan -->
            <h5 class="text-white text-center text-uppsercase  fw-light">Start Your Baking Journey</h5>
            <!-- title -->
            <h1 class="font-playFair display-3 text-center text-white">Inspiring creativity, skill, and confidence
            </h1>

        </div>


        <div class="row">
            <div class="col-md-6 col-lg-6 bg-white p-4 px-md-5 position-absolute bottom-0 end-0">
                <!-- title -->
                <h1 class="text-center mb-4 font-playFair text-oak animateIn delay-2">Enroll in the Best Pastry and Bakery Course in Sri Lanka
                </h1>

                <!-- info -->
                <div>
                    <h6 class="animateIn delay-3 text-center mb-3 text-uppercase">Turn your passion for baking into a
                        rewarding career.
                    </h6>
                    <p class="mt--55 animateIn delay-4 text-center">
                        Our expert-led courses will take you on a journey of creativity, precision, and flavor.
                    </p>
                </div>





            </div>
        </div>


    </div>


    {{-- course grid --}}
    <div class="container-fluid ">

        <div class="container py-5 px-4 p-md-5">
            <div class="row">

                <div class="col-md-6 col-lg-4 mt-4 mt-md-0">
                    <div class="courseCard bg-snow h-100">
                        {{-- course image --}}
                        <img src="{{ asset('assets/images/index/courseCard1.jpg') }}" class="img-fluid" alt="">
                        {{-- course text data --}}
                        <div class="p-4">
                            {{-- course title --}}
                            <h5 class="fw-bold">Certificate in Pastry and Bakery</h5>
                            {{-- course description --}}
                            <p class="">Learn the fundamentals of pastry and bakery while gaining the skills needed to
                                build a successful career in the industry.</p>


                            {{-- CAT button --}}
                            <div class="mt-4">
                                <a href="{{ url('/courseDetails') }}"
                                    class="btn-oak text-uppercase btn-1 hover-filled-slide-down">
                                    <span>Learn More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- F&B Coming Soon Course -->
                <div class="col-md-12 col-lg-8 mt-4 mt-md-0">
                    <div class="courseCard bg-snow h-100 position-relative shadow-sm rounded overflow-hidden">
                        <!-- Coming Soon Badge -->
                        <div class="position-absolute top-0 end-0 m-3 z-3">
                            <span class="badge bg-oak text-white px-3 py-2 fs-6 shadow">Coming Soon</span>
                        </div>
                        
                        <div class="row g-0 h-100">
                            <!-- Image Section -->
                            <div class="col-md-5">
                                <img src="{{ asset('assets/images/index/coffee.jpg') }}" class="img-fluid h-100 w-100" style="object-fit: cover; min-height: 250px;" alt="Food and Beverage">
                            </div>
                            
                            <!-- Content Section -->
                            <div class="col-md-7 d-flex flex-column justify-content-center p-4 p-md-5">
                                <h4 class="fw-bold text-dark mb-4">Food & Beverage (F&B)</h4>
                                
                                <p class="text-secondary mb-4" style="font-size: 0.95rem; line-height: 1.6;">
                                    This strategic action plan, prepared under the direction of Executive Leadership, outlines the phased roadmap for establishing the specialized Food & Beverage (F&B) Department at Ceylon Hospitality Academy. The initiative encompasses comprehensive curriculum design aligned with national (NVQ) and international hospitality standards, physical facility acquisition and construction (training restaurant, bar, and classroom infrastructure), legal corporate structuring, and operational execution leading to the inaugural student intake by late January.
                                </p>

                                <div class="row g-3 mt-auto">
                                    <div class="col-sm-4">
                                        <h6 class="fw-bold text-oak mb-1" style="font-size: 0.85rem;">STANDARDS FRAMEWORK</h6>
                                        <p class="small text-muted m-0">NVQ & Non-NVQ Dual Accreditation</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <h6 class="fw-bold text-oak mb-1" style="font-size: 0.85rem;">PROJECT HORIZON</h6>
                                        <p class="small text-muted m-0">6 Months Execution</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <h6 class="fw-bold text-oak mb-1" style="font-size: 0.85rem;">FACILITIES BUILT</h6>
                                        <p class="small text-muted m-0">Restaurant, Bar & Labs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>





    <!-- dual section -->
    <div class="container-fluid bg-white py-5">

        <div class="container pb-5">

            <div class="row gx-5 position-relative">

                <div class="col-md-6">

                    <div class="swiper footerImgSwiper">

                        <div class="swiper-wrapper">

                            <!-- Single Slide -->
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/images/dual/dual1.jpg') }}" class="img-fluid w-100"
                                    alt="">
                            </div>

                            <!-- Single Slide -->
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/images/dual/dual2.jpg') }}" class="img-fluid w-100"
                                    alt="">
                            </div>

                            <!-- Single Slide -->
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/images/dual/dual3.jpg') }}" class="img-fluid w-100"
                                    alt="">
                            </div>

                            <!-- Single Slide -->
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/images/dual/dual4.jpg') }}" class="img-fluid w-100"
                                    alt="">
                            </div>

                        </div>

                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- Add Navigation -->
                        <div class="swiper-button-next custom-next"><i class="fa-solid fa-arrow-right text-white h3"></i>
                        </div>
                        <div class="swiper-button-prev custom-prev"><i class="fa-solid fa-arrow-left text-white h3"></i>
                        </div>

                    </div>

                </div>

                <div
                    class="col-md-6 bg-oak position-relative py-5 py-md-4 px-4 px-5 mt-5 mt-md-0 d-flex flex-column justify-content-between">

                    <div>
                        <h1 class="font-playFair fw-bold text-white display-3">FOLLOW US</h1>
                        <h6 class="text-white mb-4">Social Media</h6>

                        <p class="text-white">Stay updated with the latest news, events, and trends in the pastry and
                            bakery industry by following Ceylon Hospitality Academy on social media.</p>

                    </div>


                    <div class="d-flex flex-wrap gap-5">
                        <a href="https://www.facebook.com/ceylonhospitalityacademy" target="_blank" class="text-decoration-none text-white h3">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>

                        <a href="https://www.instagram.com/ceylonhospitalityacademy/" target="_blank" class="text-decoration-none text-white h3">
                            <i class="fa-brands fa-instagram"></i>
                        </a>

                        <a href="https://www.linkedin.com/company/ceylon-hospitality-academy" target="_blank" class="text-decoration-none text-white h3">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </div>

                    <img src="{{ asset('assets/images/pastry.png') }}" class="position-absolute bottom-0 end-0 cheersImg"
                        width="300" alt="">

                </div>

            </div>
        </div>


    </div>
@endsection
