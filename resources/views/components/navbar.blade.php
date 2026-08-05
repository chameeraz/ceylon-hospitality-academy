<!-- navigation -->
<header id="header"
    class="container-fluid px-md-5 pb-2 primary-header d-flex justify-content-between align-items-center">

    <!-- logo -->


    <!-- toggle button -->
    <button class="mobile-nav-toggle rounded-pill px-3 py-2" aria-controls="primary-navigation" aria-expanded="false">
        Menu
    </button>

    <!-- navbar -->
    <nav class="pt-2 d-flex gap-5 px-md-5  w-100 justify-content-between align-items-center">

        <div class="">
            <a href="{{ url('/') }}">
                <img id="logo" src="{{ asset('assets/images/logo.png') }}" class="img-fluid logo" width="175"
                    alt="">
            </a>
        </div>

        <div id="primary-navigation" data-visible="false" class="primary-navigation">


            <ul class="primary-nav-links p-0 ulStyle-none mt-2">

                <li class="mb-3 mb-md-0">
                    <a href="{{ url('/') }}" class="text-decoration-none">Home</a>
                </li>

                <li class="mb-3 mb-md-0">
                    <a href="{{ url('/courses') }}" class="text-decoration-none">Courses</a>
                </li>

                <li class="mb-3 mb-md-0">
                    <a href="{{ url('/about') }}" class="text-decoration-none">About</a>
                </li>

                <li class="mb-3 mb-md-0">
                    <a href="{{ url('/gallery') }}" class="text-decoration-none">Gallery</a>
                </li>


            </ul>

        </div>


        <div id="secondary-navigation" data-visible="false" class="secondary-navigation d-flex gap-3 d-md-none">

            <div class="container d-flex h-100">
                <div class="row">


                    <div class="col-12 mt-4">
                        <ul class="ulStyle-none">
                            <li>
                                <p class="text-dark">Connect through Social Media</p>
                            </li>
                        </ul>
                    </div>

                    <div class="col-6 d-flex align-items-center">

                        <ul class="nav-links ulStyle-none">
                            <li class="mb-1">
                                <a href="https://www.instagram.com/ceylonhospitalityacademy/ " target="_blank"
                                    class="text-decoration-none fw-bold text-dark">Instagram</a>
                            </li>

                            <li class="mb-1">
                                <a href="https://www.facebook.com/ceylonhospitalityacademy"
                                    class="text-decoration-none fw-bold text-dark" target="_blank">Facebook</a>
                            </li>

                            <li class="mb-1">
                                <a href="https://www.linkedin.com/company/ceylon-hospitality-academy/"
                                    class="text-decoration-none fw-bold text-dark" target="_blank">Linkedin</a>
                            </li>


                        </ul>

                    </div>

                    <div class="col-6 d-flex align-items-end">
                        <img src="{{ asset('assets/images/cake.png') }}" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

        </div>


    </nav>

    <div class="d-none ">
        <a href="#" class="memberBtn rounded-0  fw-bold">
            Discover Courses
            <i class="fa-solid fa-arrow-right mx-1"></i>
        </a>
    </div>




</header>
