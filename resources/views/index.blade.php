@extends('layout.master')
@section('pageTitle', 'Ceylon Hospitality Academy | Best pastry and bakery course in sri lanka')

@section('description',
    'Join the best pastry and bakery course in Sri Lanka at Ceylon Hospitality Academy, Kandy. Expert training, modern
    facilities. Launch your culinary career in Sri Lanka. #HotelSchool #Pastry')

@section('keywords',
    'Best pastry and bakery course in sri lanka, Pastry School Kandy, Bakery School Kandy, Hotel School Kandy, Culinary School Kandy, Pastry
    Training Sri Lanka, Bakery Training Sri Lanka, Hospitality Training Kandy, Culinary Education Kandy, Pastry Chef
    Training, Bakery Chef Training, Professional Baking Courses, Pastry Arts Courses, Baking Arts Courses, Culinary Arts
    School, Hospitality Management School, Food and Beverage Training')

@section('content')
    <!-- Landing section -->
    <div class="container-fluid landingHero p-0 position-relative">
        
        <!-- Hero Swiper Background -->
        <div class="swiper heroSwiper position-absolute w-100 h-100 top-0 start-0" style="z-index: 0;">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/slider1.jpg') }}'); background-size: cover; background-position: center top;"></div>
                <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/slider.jpeg') }}'); background-size: cover; background-position: center top;"></div>
                <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/slider3.jpg') }}'); background-size: cover; background-position: center top;"></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

        <!-- Dark Overlay -->
        <div class="position-absolute w-100 h-100 top-0 start-0 bg-dark" style="opacity: 0.5; z-index: 1;"></div>

        <div class="mb-5 position-relative" style="z-index: 2;">
            <!-- slogan -->
            <h5 class="text-white text-center text-uppsercase  fw-light">From Passion to Perfection</h5>
            <!-- title -->
            <h1 class="font-playFair display-3 text-center text-white">The Best Pastry and Bakery Course in Sri Lanka
            </h1>

        </div>


        <div class="row">
            <div class="col-md-6 col-lg-6 bg-white p-4 px-md-5 position-absolute bottom-0 end-0" style="z-index: 2;">
                <!-- title -->
                <h1 class="text-center mb-4 font-playFair text-oak animateIn delay-2">Bake Your Dreams Into Reality
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
                        Professional Pastry & Bakery Courses
                    </h1>
                    <p class="fw-100 mt-4 animateIn delay-4">
                        Our program prepares students to excel in bakeries, pastry shops, cafes, hotels, and restaurants
                        worldwide. We provide the foundation for success in the competitive world of pastry and bakery.
                    </p>
                </div>

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
                <div class="col-md-6 col-lg-4 mt-4 mt-lg-0">
                    <div class="courseCard bg-snow h-100 position-relative shadow-sm rounded overflow-hidden">
                        <div class="position-absolute top-0 end-0 m-3 z-3">
                            <span class="badge bg-oak text-white px-2 py-1 shadow">Coming Soon</span>
                        </div>
                        {{-- course image --}}
                        <img src="{{ asset('assets/images/index/coffee.jpg') }}" class="img-fluid w-100" style="height: 235px; object-fit: cover;" alt="">
                        {{-- course text data --}}
                        <div class="p-4 d-flex flex-column h-100">
                            {{-- course title --}}
                            <h5 class="fw-bold mb-3">Food & Beverage (F&B)</h5>
                            {{-- course description --}}
                            <p class="text-secondary mb-4 flex-grow-1">
                                Our upcoming specialized F&B Department will feature dual accreditation (NVQ & Non-NVQ) with world-class facilities including a training restaurant, bar, and labs.
                            </p>
                            
                            <div class="mt-auto">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fa-regular fa-clock text-oak me-2"></i>
                                    <span class="small text-muted fw-bold">6 Months Execution</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <i class="fa-solid fa-utensils text-oak me-2"></i>
                                    <span class="small text-muted fw-bold">Restaurant, Bar & Labs</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="container-fluid p-0 overflow-hidden">
        <img src="{{ asset('assets/images/main1.jpg') }}" class="img-fluid w-100 hover-zoom-img" style="object-fit: cover;" alt="">
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

                <!-- feature Grid 1 -->
                <div class="col-md-4 pb-5 pb-md-0">
                    <h4 class="fw-normal font-playFair animateIn delay-2">TVEC Registered</h4>
                    <hr class="animateHr">
                    <h5 class="font-playFair animateIn delay-3 fw-light">Government Approved</h5>
                </div>

                <!-- feature Grid 2 -->
                <div class="col-md-4 pb-5 pb-md-0">
                    <h4 class="fw-normal font-playFair animateIn delay-2">NVQ Qualifications</h4>
                    <hr class="animateHr">
                    <h5 class="font-playFair animateIn delay-3 fw-light">Nationally Recognized</h5>
                </div>

                <!-- feature Grid 3 -->
                <div class="col-md-4 pb-5 pb-md-0">
                    <h4 class="fw-normal font-playFair animateIn delay-2">100% Practical</h4>
                    <hr class="animateHr">
                    <h5 class="font-playFair animateIn delay-3 fw-light">Hands-On Training</h5>
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
                        <h6 class="animateIn delay-2 text-uppercase">State-of-the-Art Facilities</h6>
                        <p class="mt--55 animateIn delay-3">Train in fully equipped kitchens with modern bakery machines,
                            AC classrooms, and industry-standard tools.</p>
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
                        <h6 class="animateIn delay-2 text-uppercase">International Opportunities</h6>
                        <p class="mt--55 animateIn delay-3">The best students may get a chance to participate in
                            international culinary competitions overseas, representing the academy.</p>
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

                <a href="{{ url('/courses') }}"
                    class="border border-2 rounded-pill px-3 py-2 small blogCategoryBtn animateIn delay-3">
                    Courses
                </a>

                <a href="{{ url('/about') }}"
                    class="border border-2 rounded-pill px-3 py-2 small blogCategoryBtn animateIn delay-2">
                    About Ceylon Hospitality
                </a>



                <a href="{{ url('/gallery') }}"
                    class="border border-2 rounded-pill px-3 py-2 small blogCategoryBtn animateIn delay-2">
                    Photo Gallery
                </a>





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
