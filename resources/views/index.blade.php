@extends('layout.master')
@section('pageTitle', 'Ceylon Hospitality Academy | Pastry & Bakery School Kandy')

@section('description', 'Master pastry & bakery arts at Ceylon Hospitality Academy, Kandy. Expert training, modern facilities. Launch your culinary career in Sri Lanka. #HotelSchool #Pastry')

@section('keywords', 'Pastry School Kandy, Bakery School Kandy, Hotel School Kandy, Culinary School Kandy, Pastry Training Sri Lanka, Bakery Training Sri Lanka, Hospitality Training Kandy, Culinary Education Kandy, Pastry Chef Training, Bakery Chef Training, Professional Baking Courses, Pastry Arts Courses, Baking Arts Courses, Culinary Arts School, Hospitality Management School, Food and Beverage Training')

@section('content')
    <!-- Landing section -->
    <div class="container-fluid landingHero p-0 position-relative">

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
                    <h6 class="animateIn delay-3 text-center mb-3 text-uppercase">
                        World-class training in pastry and bakery
                    </h6>
                    <p class="mt--55 animateIn delay-4 text-center">
                        Our expert-led courses will take you on a journey of creativity, precision, and flavor.
                    </p>
                </div>

                <!-- CAT button -->
                <div class="">
                    <a href="{{ url('/courses') }}"
                        class="btn-oak text-uppercase btn-1 hover-filled-slide-down w-100 animateIn delay-4">
                        <span>View Courses</span>
                    </a>
                </div>



            </div>
        </div>


    </div>


    <!-- large text | section 1 -->
    <div class="container-fluid p-md-5 bg-white">

        <div class="container py-5 px-4 p-md-5 my-5 position-relative subHero">

            <div class="d-flex justify-content-center d-md-none mb-5">
                <img src="{{ asset('assets/images/bakes.png') }}" class="img-fluid bakesImg animateIn delay-4"
                    alt="">
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h6 class="fw-bold mb-3 animateIn delay-2 text-uppercase">Shaping the Future of Pastry & Bakery</h6>
                    <h1 class="display-4 font-playFair largeTxt2 text-oak animateIn delay-3">
                        Welcome to Ceylon Hospitality Academy
                    </h1>
                </div>

                <div class="col-md-6">


                    <p class="fw-100 animateIn delay-4">
                        At Ceylon Hospitality Academy, we are committed to nurturing the next generation of pastry chefs.
                    </p>

                    <p class="fw-100 animateIn delay-4">
                        Whether you dream of becoming a pastry chef, owning a bakery, or mastering the fine art of baking,
                        we are here to guide you every step of the way. Located in the heart of Kandy, Sri Lanka, our
                        academy provides modern, industry-focused training to help students turn their passion for baking
                        into a successful career.
                    </p>

                    <div class="d-none d-md-block">
                        <img src="{{ asset('assets/images/bakes.png') }}" class="img-fluid bakesImg animateIn delay-4"
                            alt="">
                    </div>


                </div>
            </div>


        </div>

    </div>


    {{-- course grid --}}
    <div class="container-fluid ">

        <div class="container py-5 px-4 p-md-5">
            <div class="row">

                <div class="col-md-6 col-lg-4">
                    <h1 class="display-4 font-playFair largeTxt2 text-oak animateIn delay-3">
                        Professional Hospitality Courses
                    </h1>
                    <p class="fw-100 mt-4 animateIn delay-4">Our program prepares students to excel in hotels, bakeries,
                        cafes, and
                        restaurants worldwide. We provide the foundation for success in the competitive
                        culinary world.</p>
                </div>

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

    <div class="container-fluid">
        <img src="{{ asset('assets/images/main1.jpg') }}" class="img-fluid" alt="">

    </div>

    <!-- large text | section 2 -->
    <div class="container-fluid p-md-5 bg-white infoSection">

        <div class="container py-5 px-4 p-md-5 position-relative">
            <h6 class="fw-bold mb-3 animateIn delay-2 text-uppercase">Hands-On Learning with Expert Chefs</h6>
            <h1 class="display-3 font-playFair largeTxt2 text-oak animateIn delay-3">
                Learn from experienced pastry chefs who bring years of international experience into the
                classroom.
            </h1>
        </div>

        <div class="container px-4 p-md-5 position-relative infoGrid">

            <div class="row">

                <!-- data Grid 1 -->
                <div class="col-md-3 pb-5 pb-md-0">
                    <h4 class="fw-normal font-playFair animateIn delay-2">Total Instructors</h4>
                    <hr class="animateHr">
                    <h3 class="font-playFair animateIn delay-3">12+</h3>
                </div>

                <!-- data Grid 2 -->
                <div class="col-md-3 pb-5 pb-md-0">
                    <h4 class="fw-normal font-playFair animateIn delay-2">Total Students</h4>
                    <hr class="animateHr">
                    <h3 class="font-playFair animateIn delay-3">100+</h3>
                </div>


                <!-- data Grid 4 -->
                <div class="col-md-3 pb-5 pb-md-0">
                    <h4 class="fw-normal font-playFair animateIn delay-2">Community</h4>
                    <hr class="animateHr">
                    <h3 class="font-playFair animateIn delay-3">150+</h3>
                </div>


                <div class="pb-5 pb-md-0">
                    <!-- info paragraph -->
                    <p class="w-md-50 mt-5 animateIn delay-3 mb-5">
                        At Ceylon Hospitality Academy, we go beyond traditional teaching. We focus on real-world experience,
                        creativity, and technical mastery to ensure our graduates stand out in the industry.
                    </p>



                    <div class="">

                        <a href="{{ url('/gallery') }}" class="btn-oak btn-1 hover-filled-slide-down animateIn delay-4">
                            <span>View Gallery</span>
                        </a>




                    </div>

                </div>





            </div>

            <img src="{{ asset('assets/images/index/cookies.jpg') }}" class="float-img2 position-absolute bottom-0 end-0"
                alt="">

        </div>



    </div>

    <!-- banner section -->
    <div class="container-fluid bannerSection bg-white">

        <div class="row d-flex align-items-bottom px-5">

            <!-- for alignment purposes only -->
            <div class="col-md-6 col-lg-8"></div>


            <div class="col-md-6 col-lg-4 bg-white p-4 px-md-5">
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

                    <a href="{{ url('/courses') }}"
                        class="btn-oak btn-1 hover-filled-slide-down w-100 animateIn delay-2">
                        <span>View Courses</span>
                    </a>
                </div>



            </div>
        </div>

    </div>

    <!-- quick links -->
    <div class="container-fluid bg-white py-5">

        <div class="container py-5 px-4 p-md-5 position-relative">

            <h3 class="fw-bold text-center animateIn delay-2">Quick Links</h3>

            <h1 class="display-6 font-playFair text-center text-oak animateIn delay-3">
                Stay Upto Date with Ceylon Hospitality
            </h1>

            <div class="mt-5 d-flex flex-wrap gap-4 justify-content-center py-4 px-md-5">

                <button class="border border-2 rounded-pill px-3 py-2 small blogCategoryBtn animateIn delay-3">
                    All Courses
                </button>

                <button class="border border-2 rounded-pill px-3 py-2 small blogCategoryBtn animateIn delay-2">
                    Course Name 1
                </button>



                <button class="border border-2 rounded-pill px-3 py-2 small blogCategoryBtn animateIn delay-2">The
                    Course Name 2</button>

                <button class="border border-2 rounded-pill px-3 py-2 small blogCategoryBtn animateIn delay-3">
                    Latest Events
                </button>


                <button class="border border-2 rounded-pill px-3 py-2 small blogCategoryBtn animateIn delay-2">
                    About Ceylon Hospitality
                </button>

                <button class="border border-2 rounded-pill px-3 py-2 small blogCategoryBtn animateIn delay-3">
                    Gallery
                </button>



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
