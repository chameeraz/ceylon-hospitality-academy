@extends('layout.master')

@section('content')
    <!-- Landing section -->
    <div class="container-fluid aboutHero p-0 position-relative">

        <div>
            <!-- slogan -->
            <h6 class="text-white text-center text-uppsercase">ALL ABOUT Ceylon Hospitality Academy</h6>
            <!-- title -->
            <h1 class="font-playFair display-3 text-center text-white">A Bit from our History</h1>

        </div>


        <div class="row">
            <div class="col-md-4 bg-white p-4 px-md-5 position-absolute bottom-0 end-0">
                <!-- title -->
                <h1 class="text-center mb-4 font-playFair text-oak animateIn delay-2">
                    Shaping the Future of Pastry & Bakery
                </h1>

                <!-- info -->
                <div>
                    <h6 class="animateIn delay-3 text-center mb-3 text-uppercase">New Opportunities with Strong Connections
                    </h6>
                    <p class="mt--55 animateIn delay-4 text-center">
                        Embrace the power of networking and connections to enrich your professional life.
                    </p>
                </div>





            </div>
        </div>


    </div>


    <!-- large text | section 1 -->
    <div class="container-fluid p-md-5 bg-white">

        <div class="container py-5 px-4 p-md-5 position-relative subHero">
            <h1 class="display-3 font-playFair largeTxt1 text-oak pt-5">
                A community of passionate individuals who share a love for baking.
            </h1>
            <p class="my-5 pb-5 animateIn delay-3 text-uppercase">A Community of Aspiring Chefs & Baking Enthusiasts</p>

            <img src="{{ asset('assets/images/index/coffee.jpg') }}" class="float-img1 position-absolute top-0 end-0"
                alt="">



            <div class="row mt-5">

                <div class="col-md-6">
                    <img src="{{ asset('assets/images/about/about.jpg') }}" class="img-fluid pin-img" alt="">
                </div>

                <div class="col-md-6 py-5 p-md-5 about-right">

                    <div class="p-md-5 mb-5 mb-md-0">
                        <!-- icon -->
                        <img src="{{ asset('assets/images/about/chefHat.png') }}" class="mb-3" width="30"
                            alt="">
                        <!-- title -->
                        <h1 class="font-playFair fw-normal">Our Story</h1>
                        <!-- text -->
                        <p>
                            Ceylon Hospitality Academy was founded with a vision to bridge the gap between passion and
                            profession.
                        </p>

                        <p>
                            Recognizing the growing demand for skilled pastry and bakery professionals, we
                            designed a comprehensive training program that provides both theoretical knowledge and practical
                            expertise.
                        </p>
                    </div>

                    <div class="p-md-5 mb-5 mb-md-0">
                        <!-- icon -->
                        <img src="{{ asset('assets/images/about/careers.avif') }}" class="mb-3" width="35"
                            alt="">
                        <!-- title -->
                        <h1 class="font-playFair fw-normal">Our Vision</h1>
                        <!-- text -->
                        <p>
                            To provide high-quality pastry and bakery education, empowering students to become skilled
                            professionals and creative artisans who can thrive in local and international culinary
                            industries.
                        </p>
                    </div>

                    <div class="p-md-5 mb-5 mb-md-0">
                        <!-- icon -->
                        <img src="{{ asset('assets/images/about/training.png') }}" class="mb-3" width="30"
                            alt="">
                        <!-- title -->
                        <h1 class="font-playFair fw-normal">Our Vision</h1>
                        <!-- text -->
                        <p>
                            To be a leading pastry and bakery training institute in Sri Lanka, recognized for excellence in
                            education, innovation in baking techniques, and commitment to student success.
                        </p>

                    </div>

                </div>
            </div>


        </div>

    </div>

    <!-- banner section -->
    <div class="container-fluid bannerSection bg-white">

        <div class="row d-flex align-items-bottom px-5">

            <!-- for alignment purposes only -->
            <div class="col-md-8"></div>


            <div class="col-md-4 bg-white p-4 px-md-5">
                <!-- title -->
                <h1 class="text-center mb-5 font-playFair text-oak animateIn delay-2">A Course <br>Designed For You</h1>

                <!-- single list of data -->
                <div class="d-flex gap-4 mb-3">
                    <!-- icon -->
                    <div>
                        <img src="{{ asset('assets/images/index/chefHat.png') }}" width="35" alt=""
                            class="animateIn">
                    </div>

                    <!-- info -->
                    <div>
                        <h6 class="animateIn delay-2 text-uppercase">Industry-Experienced Chefs </h6>
                        <p class="mt--55 animateIn delay-3">
                            Learn from top professionals with real-world expertise.
                        </p>
                    </div>
                </div>

                <!-- single list of data -->
                <div class="d-flex gap-4 mb-3">
                    <!-- icon -->
                    <div>
                        <img src="{{ asset('assets/images/index/training.png') }}" width="35" alt=""
                            class="animateIn">
                    </div>

                    <!-- info -->
                    <div>
                        <h6 class="animateIn delay-2 text-uppercase"> Hands-On Training</h6>
                        <p class="mt--55 animateIn delay-3"> Gain practical experience using modern equipment and
                            techniques.
                        </p>
                    </div>
                </div>

                <!-- single list of data -->
                <div class="d-flex gap-4 mb-3">
                    <!-- icon -->
                    <div>
                        <img src="{{ asset('assets/images/index/certification.avif') }}" width="35" alt=""
                            class="animateIn">
                    </div>

                    <!-- info -->
                    <div>
                        <h6 class="animateIn delay-2 text-uppercase">Industry Recognized Certifications</h6>
                        <p class="mt--55 animateIn delay-3">arn an NVQ Level 4 Certificate in Pastry & Bakery, recognized
                            in Sri Lanka and beyond.</p>
                    </div>
                </div>

                <!-- single list of data -->
                <div class="d-flex gap-4 mb-3">
                    <!-- icon -->
                    <div>
                        <img src="{{ asset('assets/images/index/careers.avif') }}" width="35" alt=""
                            class="animateIn">
                    </div>

                    <!-- info -->
                    <div>
                        <h6 class="animateIn delay-2 text-uppercase">Career Advancement</h6>
                        <p class="mt--55 animateIn delay-3">Get industry connections, job placements, and hands-on work
                            experience.</p>
                    </div>
                </div>



                <!-- CAT button -->
                <div class="mt-5">

                    <a href="{{ url('/courses') }}" class="btn-oak btn-1 hover-filled-slide-down w-100 animateIn delay-2">
                        <span>View Courses</span>
                    </a>
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
