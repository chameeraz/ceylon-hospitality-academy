<!--  banner section  -->
<div class="container-fluid footerBanner bg-white">

    <div class="row d-flex align-items-bottom px-5">

        <!-- for alignment purposes only -->
        <div class="col-md-6 col-lg-9"></div>

        <div class="col-md-6 col-lg-3 bg-white p-4 px-md-5">
            <!-- title -->
            <h1 class="text-start mb-4 font-playFair text-oak animateIn delay-2">
                Master the Art of Pastry & Baking
            </h1>

            <p class="animateIn delay-3">
                If you have a passion for baking and pastry arts, we have the tools, expertise, and resources to help
                you turn your passion into a profession.
            </p>


            <!-- CAT button -->
            <div class="mt-5">
                <a href="{{ url('/about') }}"
                    class="btn-oak text-uppercase btn-1 hover-filled-slide-down w-100 animateIn delay-4">
                    <span>About Us</span>
                </a>
            </div>



        </div>

    </div>

</div>

<div class="container-fluid p-3 p-md-5 bg-oak position-relative">

    <div class="container footer lightBorder d-flex flex-column justify-content-between p-5 pb-0">

        <!-- primary footer -->
        <div class="row">


            <div class="col-md-5">
                <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid w-md-50" alt="">

                <!-- social buttons | mobile -->
                <div class="mt-5 d-flex justify-content-center gap-5 d-md-none">

                    <a href="#" class="text-decoration-none text-white">
                        <i class="fa-brands fa-facebook-f h3"></i>
                    </a>

                    <a href="#" class="text-decoration-none text-white">
                        <i class="fa-brands fa-instagram h3"></i>
                    </a>

                    <a href="#" class="text-decoration-none text-white">
                        <i class="fa-brands fa-x-twitter h3"></i>
                    </a>

                </div>

            </div>

            <div class="col-md-7 mt-5 mt-md-0">

                <div class="row">

                    <!-- company -->
                    <div class="col-md-4 mt-5 mt-md-0">
                        <!-- footer section title -->
                        <h5 class="text-white mb-4 font-playFair">COMPANY</h5>

                        <div class="">
                            <ul class="p-0 d-flex gap-2 flex-column">
                                <li class="hoverU"><a href="{{ url('/about') }}">About</a></li>
                                <li class="hoverU"><a href="{{ url('/gallery') }}">Gallery</a></li>
                                <li class="hoverU"><a href="{{ url('/courses') }}">Courses</a></li>
                            </ul>


                        </div>

                    </div>


                    <!-- Support -->
                    <div class="col-md-4 mt-5 mt-md-0">
                        <!-- footer section title -->
                        <h5 class="text-white mb-4 font-playFair">SUPPORT</h5>

                        <div class="">
                            <ul class="p-0 d-flex gap-2 flex-column">
                                <li class="hoverU"><a href="#api">Privacy Policy</a></li>
                                <li class="hoverU"><a href="#form-validation">Terms of Service</a></li>
                            </ul>


                        </div>

                    </div>

                    <!-- social -->
                    <div class="col-md-4 mt-5 mt-md-0">
                        <!-- footer section title -->
                        <h5 class="text-white mb-4 font-playFair">Social</h5>

                        <div class="">
                            <ul class="p-0 d-flex gap-2 flex-column">
                                <li class="hoverU"><a href="https://www.facebook.com/ceylonhospitalityacademy">Facebook</a></li>
                                <li class="hoverU"><a href="https://www.instagram.com/ceylonhospitalityacademy/">Instagram</a></li>
                                <li class="hoverU"><a href="https://www.linkedin.com/company/ceylon-hospitality-academy/">LinkedIn</a></li>
                            </ul>


                        </div>

                    </div>

                    <!-- legal pages | mobile -->
                    <div class="col-md-4 mt-5 d-md-none">
                        <!-- footer section title -->
                        <h5 class="text-white mb-4 font-playFair">Legal Pages</h5>

                        <div class="">
                            <ul class="p-0 d-flex gap-2 flex-column">
                                <li class="hoverU"><a href="#api">API</a></li>
                                <li class="hoverU"><a href="#privacy-policy">Privacy Policy</a></li>
                                <li class="hoverU"><a href="#security">Security</a></li>
                                <li class="hoverU"><a href="#sitemap">Sitemap</a></li>
                            </ul>


                        </div>

                    </div>

                </div>
            </div>


        </div>


    </div>


    <img src="{{ asset('assets/images/pancakes.png') }}" class="position-absolute bottom-0 end-0" width="150"
        alt="">

</div>
