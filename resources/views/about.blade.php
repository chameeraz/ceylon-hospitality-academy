@extends('layout.master')
@section('pageTitle', 'About Us | Best pastry and bakery course in sri lanka')

@section('description',
    'Discover Ceylon Hospitality Academy in Kandy, Sri Lanka. We offer the best pastry and bakery course in Sri Lanka with expert instructors,
    modern training, and commitment to your culinary success in pastry and bakery arts.')

@section('keywords',
    'Best pastry and bakery course in sri lanka, About Us Ceylon Hospitality Academy, Pastry School Kandy, Bakery School Kandy, Culinary School
    Kandy, Pastry Training Sri Lanka, Bakery Training Sri Lanka, Hospitality Training Kandy, Culinary Education Kandy,
    Pastry Chef Training, Bakery Chef Training, Professional Baking Courses, Pastry Arts Courses, Baking Arts Courses,
    Culinary Arts School')
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
            <div class="col-md-6 col-lg-6 bg-white p-4 px-md-5 position-absolute bottom-0 end-0">
                <!-- title -->
                <h1 class="text-center mb-4 font-playFair text-oak animateIn delay-2">
                    Home to the Best Pastry and Bakery Course in Sri Lanka
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

                <div class="col-md-12 col-lg-6">
                    <img src="{{ asset('assets/images/about/about.jpg') }}" class="img-fluid pin-img" alt="">
                </div>

                <div class="col-md-12 col-lg-6 py-5 p-md-5 about-right">

                    <div class="p-md-5 mb-5 mb-md-0">
                        <!-- icon -->
                        <img src="{{ asset('assets/images/about/chefHat.png') }}" class="mb-3" width="30"
                            alt="">
                        <!-- title -->
                        <h1 class="font-playFair fw-normal">Our Story</h1>
                        <!-- text -->
                        <p>
                            Ceylon Hospitality Academy is a premier Pastry and Bakery School located in the heart of Kandy,
                            Sri Lanka. Dedicated to providing modern and up-to-date culinary education, the academy offers
                            specialized training in pastry and bakery arts, equipping students with the skills and knowledge
                            required to excel in the hospitality industry.
                        </p>

                        <p>
                            With expert instructors, hands-on learning experiences, and a globally relevant curriculum,
                            Ceylon Hospitality Academy prepares aspiring chefs to master the art of baking and pastry
                            creation, ensuring their success in local and international culinary careers.
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
                            To become Sri Lanka’s leading institute for pastry and bakery education, inspiring creativity,
                            excellence, and innovation in every aspiring baker and pastry chef.
                        </p>
                    </div>

                    <div class="p-md-5 mb-5 mb-md-0">
                        <!-- icon -->
                        <img src="{{ asset('assets/images/about/training.png') }}" class="mb-3" width="30"
                            alt="">
                        <!-- title -->
                        <h1 class="font-playFair fw-normal">Our Mission</h1>
                        <!-- text -->
                        <p>
                            To provide high-quality, hands-on training in pastry and bakery arts through internationally
                            aligned curricula.
                        </p>
                    </div>

                    </div>

                </div>
            </div>


        </div>

    </div>

    <!-- Accreditation Section -->
    <div class="container-fluid py-5" style="background-color: #f4f9f9;">
        <div class="container py-5">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <img src="{{ asset('assets/images/index/certification.avif') }}" class="mb-4" width="60" alt="">
                    <h1 class="font-playFair display-5 text-oak mb-4 fw-bold">Accreditation & Learning</h1>
                    <p class="lead text-muted mb-4">
                        We are a verified organization registered with the <strong>Tertiary and Vocational Education Commission (TVEC)</strong>. 
                        Our curriculum is meticulously designed to prepare students to successfully achieve their <strong>NVQ Level qualifications</strong>.
                    </p>
                    <p class="lead text-muted">
                        Furthermore, students get to practice and master their coursework seamlessly using our unique and interactive <strong>Learning Management System (LMS)</strong>.
                    </p>
                </div>
            </div>
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

                    <a href="{{ url('/courses') }}" class="btn-oak btn-1 hover-filled-slide-down w-100 animateIn delay-2">
                        <span>View Courses</span>
                    </a>
                </div>



            </div>
        </div>

    </div>



    <!-- Leadership Team Section -->
    <div class="container-fluid py-5" style="background-color: #f8f9fa;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-md-5 mb-5 mb-md-0 pr-md-5">
                    <img src="{{ asset('assets/images/about/chefHat.png') }}" class="mb-3" width="40" alt="">
                    <h1 class="font-playFair display-5 text-oak fw-bold mb-4">Our Leadership Team</h1>
                    <p class="lead text-muted mb-4">
                        Meet the visionary minds behind Ceylon Hospitality Academy. Our leadership brings decades of global experience, passion, and an unwavering commitment to shaping the next generation of culinary masters.
                    </p>
                    <p>
                        With a focus on innovation and tradition, they have curated a world-class environment where aspiring chefs can thrive and turn their culinary dreams into reality.
                    </p>
                </div>
                <div class="col-md-7">
                    <div class="position-relative">
                        <img src="{{ asset('assets/images/team.jpg') }}" class="img-fluid rounded shadow-lg w-100" alt="Leadership Team">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- FAQ Section (AEO Friendly) -->
    <div class="container-fluid py-5 bg-white">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <img src="{{ asset('assets/images/about/chefHat.png') }}" class="mb-3" width="40" alt="">
                        <h2 class="font-playFair display-5 text-oak fw-bold mb-3">Frequently Asked Questions</h2>
                        <p class="text-muted">Find answers to common questions about our culinary programs, accreditation, and facilities.</p>
                    </div>
                    
                    <div class="accordion accordion-flush" id="faqAccordion">
                        <!-- FAQ Item 1 -->
                        <div class="accordion-item border-bottom">
                            <h3 class="accordion-header" id="faqHeading1">
                                <button class="accordion-button collapsed fw-bold py-4 bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="false" aria-controls="faqCollapse1">
                                    Is Ceylon Hospitality Academy registered and accredited?
                                </button>
                            </h3>
                            <div id="faqCollapse1" class="accordion-collapse collapse" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted pb-4">
                                    Yes, we are a fully verified organization registered with the Tertiary and Vocational Education Commission (TVEC) of Sri Lanka. By offering programs with dual accreditation, including highly recognized National Vocational Qualifications (NVQ), we are proud to provide the <strong>best pastry and bakery course in Sri Lanka</strong>.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="accordion-item border-bottom">
                            <h3 class="accordion-header" id="faqHeading2">
                                <button class="accordion-button collapsed fw-bold py-4 bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                                    What facilities are available for students?
                                </button>
                            </h3>
                            <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted pb-4">
                                    Our academy boasts state-of-the-art facilities designed for immersive learning. Students have access to fully equipped modern bakery kitchens, air-conditioned smart classrooms, an exclusive training restaurant, and dedicated beverage bars, making us the premier destination for the best pastry and bakery course in Sri Lanka.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="accordion-item border-bottom">
                            <h3 class="accordion-header" id="faqHeading3">
                                <button class="accordion-button collapsed fw-bold py-4 bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                                    Are the culinary courses hands-on and practical?
                                </button>
                            </h3>
                            <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted pb-4">
                                    Absolutely. We prioritize a 100% practical approach to culinary education. Under the guidance of industry-experienced chefs, you will spend the majority of your time practicing real-world techniques in our kitchens to ensure you are receiving the best pastry and bakery course in Sri Lanka.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="accordion-item border-bottom">
                            <h3 class="accordion-header" id="faqHeading4">
                                <button class="accordion-button collapsed fw-bold py-4 bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                                    Do you use a Learning Management System (LMS)?
                                </button>
                            </h3>
                            <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted pb-4">
                                    Yes, we utilize a unique, custom-built Learning Management System (LMS). This digital platform allows students to access course materials, submit assignments, and review theoretical knowledge anywhere, anytime.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- JSON-LD FAQ Schema for AEO -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [{
        "@type": "Question",
        "name": "Is Ceylon Hospitality Academy registered and accredited?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we are a fully verified organization registered with the Tertiary and Vocational Education Commission (TVEC) of Sri Lanka. By offering programs with dual accreditation, including highly recognized National Vocational Qualifications (NVQ), we are proud to provide the best pastry and bakery course in Sri Lanka."
        }
      }, {
        "@type": "Question",
        "name": "What facilities are available for students?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Our academy boasts state-of-the-art facilities designed for immersive learning. Students have access to fully equipped modern bakery kitchens, air-conditioned smart classrooms, an exclusive training restaurant, and dedicated beverage bars, making us the premier destination for the best pastry and bakery course in Sri Lanka."
        }
      }, {
        "@type": "Question",
        "name": "Are the culinary courses hands-on and practical?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Absolutely. We prioritize a 100% practical approach to culinary education. Under the guidance of industry-experienced chefs, you will spend the majority of your time practicing real-world techniques in our kitchens to ensure you are receiving the best pastry and bakery course in Sri Lanka."
        }
      }, {
        "@type": "Question",
        "name": "Do you use a Learning Management System (LMS)?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we utilize a unique, custom-built Learning Management System (LMS). This digital platform allows students to access course materials, submit assignments, and review theoretical knowledge anywhere, anytime."
        }
      }]
    }
    </script>

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
