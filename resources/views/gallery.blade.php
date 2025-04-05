@extends('layout.master')
@section('pageTitle', 'Gallery | Pastry & Bakery Creations | Ceylon Hospitality Academy Kandy')

@section('description',
    'Explore stunning pastry & bakery creations from Ceylon Hospitality Academy students. See our
    modern facilities & hands-on training in Kandy. Get inspired!')

@section('keywords',
    'Pastry Gallery Kandy, Bakery Gallery Kandy, Culinary Gallery Sri Lanka, Pastry Creations, Bakery
    Creations, Culinary Photos, Baking Images, Hotel School Gallery, Culinary School Photos, Student Pastry, Student Bakery,
    Kandy Baking, Culinary Visuals')
@section('content')
    <!-- Landing section -->
    <div class="container-fluid eventHero p-0 position-relative">

        <div>
            <!-- slogan -->
            <h6 class="text-white text-center text-uppercase">See the Craft. Feel the Passion.</h6>
            <!-- title -->
            <h1 class="font-playFair display-3 text-center text-white">Explore Our Work</h1>


        </div>


        <div class="row">
            <div class="col-md-6 col-lg-6 bg-white p-4 px-md-5 position-absolute bottom-0 end-0">
                <!-- title -->
                <h1 class="text-center mb-4 font-playFair text-oak animateIn delay-2">
                    A Taste of Creativity & Excellence
                </h1>

                <!-- info -->
                <div>
                    <h6 class="animateIn delay-3 text-center mb-3 text-uppercase">
                        Take a glimpse into the life of our academy.
                    </h6>
                    <p class="mt--55 animateIn delay-4 text-center">
                        Join us and start baking your story today!
                    </p>
                </div>





            </div>
        </div>


    </div>

    <!-- large text | section 1 -->
    <div class="container-fluid bg-white">

        <div class="container pt-5 px-4 p-md-5 mt-5 position-relative subHero">
            <h1 class="display-3 font-playFair largeTxt1 text-oak">
                Browse through our gallery and witness the artistry of our talented students!
            </h1>


            <img src="{{ asset('assets/images/index/cinnamonBun.jpg') }}" class="float-img1 position-absolute top-0 end-0"
                alt="">


        </div>

    </div>



    <!-- large text | section 1 -->
    <div class="container-fluid bg-white">



        <div class="container pb-5 px-4 p-md-5 position-relative blogSection">



            <!-- category buttons -->
            <div class="d-flex flex-wrap gap-2 my-4">
                <a href="#" class="btn-outline-oak rounded-0 px-4 py-2 category-btn" data-category="all">All</a>
                <a href="#" class="btn-outline-oak rounded-0 px-4 py-2 category-btn"
                    data-category="students">Students</a>
                <a href="#" class="btn-outline-oak rounded-0 px-4 py-2 category-btn"
                    data-category="kitchen">Kitchen</a>
                <a href="#" class="btn-outline-oak rounded-0 px-4 py-2 category-btn"
                    data-category="interior">Interior</a>
            </div>

            <!-- blog posts -->
            <div class="row mt-5">

                <!-- blog 1 -->
                <div class="col-md-4 mb-4 category-card students">
                    <!-- blog image -->
                    <div>
                        <img src="{{ asset('assets/images/gallery/g1.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <!-- blog 1 -->
                <div class="col-md-4 mb-4 category-card students">
                    <!-- blog image -->
                    <div>
                        <img src="{{ asset('assets/images/gallery/g2.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <!-- blog 1 -->
                <div class="col-md-4 mb-4 category-card students">
                    <!-- blog image -->
                    <div>
                        <img src="{{ asset('assets/images/gallery/g3.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <!-- blog 1 -->
                <div class="col-md-4 mb-4 category-card students">
                    <!-- blog image -->
                    <div>
                        <img src="{{ asset('assets/images/gallery/g4.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <!-- blog 1 -->
                <div class="col-md-4 mb-4 category-card kitchen">
                    <!-- blog image -->
                    <div>
                        <img src="{{ asset('assets/images/gallery/g5.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <!-- blog 1 -->
                <div class="col-md-4 mb-4 category-card kitchen">
                    <!-- blog image -->
                    <div>
                        <img src="{{ asset('assets/images/gallery/g6.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <!-- blog 1 -->
                <div class="col-md-4 mb-4 category-card kitchen">
                    <!-- blog image -->
                    <div>
                        <img src="{{ asset('assets/images/gallery/g7.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <!-- blog 1 -->
                <div class="col-md-4 mb-4 category-card interior">
                    <!-- blog image -->
                    <div>
                        <img src="{{ asset('assets/images/gallery/g8.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <!-- blog 1 -->
                <div class="col-md-4 mb-4 category-card interior">
                    <!-- blog image -->
                    <div>
                        <img src="{{ asset('assets/images/gallery/g9.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <!-- blog 1 -->
                <div class="col-md-4 mb-4 category-card interior">
                    <!-- blog image -->
                    <div>
                        <img src="{{ asset('assets/images/gallery/g10.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div>





            </div>

            <!-- Pagination HTML -->
            <div class="pagination-container mt-3">
                <ul class="pagination justify-content-center">
                    <!-- Pagination links will be dynamically added here -->
                </ul>
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
