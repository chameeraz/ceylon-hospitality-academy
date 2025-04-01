@extends('layout.master')
@section('pageTitle', 'Pastry & Bakery Courses | Ceylon Hospitality Academy Kandy')

@section('description', 'Explore our comprehensive pastry and bakery courses in Kandy. Learn essential culinary skills with expert instructors. Enroll now and start your culinary journey.')

@section('keywords', 'Pastry Courses Kandy, Bakery Courses Kandy, Culinary Courses Sri Lanka, Pastry Training, Bakery Training, Culinary Education, Baking Classes, Pastry Arts, Baking Arts, Culinary School, Hotel School, Food and Beverage Training, Professional Baking, Culinary Diploma')
@section('content')
    <!-- Landing section -->
    <div class="container-fluid coursesHero p-0 position-relative">

        <div class="mb-5">
            <!-- slogan -->
            <h5 class="text-white text-center text-uppsercase  fw-light">Start Your Baking Journey</h5>
            <!-- title -->
            <h1 class="font-playFair display-3 text-center text-white">Become a Pastry Chef
            </h1>

        </div>


        <div class="row">
            <div class="col-md-6 col-lg-6 bg-white p-4 px-md-5 position-absolute bottom-0 end-0">
                <!-- title -->
                <h1 class="text-center mb-4 font-playFair text-oak animateIn delay-2">Master the Art of Pastry & Baking
                </h1>

                <!-- info -->
                <div>
                    <h6 class="animateIn delay-3 text-center mb-3 text-uppercase">New Opportunities with Strong Connections
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
                            <h5 class="fw-bold">Foundation in Hospitality Management</h5>
                            {{-- course description --}}
                            <p class="">Learn the fundamentals of hospitality management and how to build a
                                successful
                                business.</p>
                            {{-- ratings --}}
                            <div class="d-flex gap-2 align-items-center">
                                <h5 class="m-0">4.5</h5>
                                <div class="">
                                    <i class="fa-solid fa-star text-success h6 m-0"></i>
                                    <i class="fa-solid fa-star text-success h6 m-0"></i>
                                    <i class="fa-solid fa-star text-success h6 m-0"></i>
                                    <i class="fa-solid fa-star text-success h6 m-0"></i>
                                    <i class="fa-solid fa-star-half text-success h6 m-0"></i>
                                </div>

                                <p class="m-0 text-secondary">(125)</p>
                            </div>

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
                        <a href="#" class="text-decoration-none text-white h3">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>

                        <a href="#" class="text-decoration-none text-white h3">
                            <i class="fa-brands fa-instagram"></i>
                        </a>

                        <a href="#" class="text-decoration-none text-white h3">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>

                        <a href="#" class="text-decoration-none text-white h3">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </div>

                    <img src="{{ asset('assets/images/pastry.png') }}" class="position-absolute bottom-0 end-0 cheersImg"
                        width="300" alt="">

                </div>

            </div>
        </div>


    </div>
@endsection
