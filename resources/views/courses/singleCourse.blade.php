@extends('layout.master')

@section('content')
    <section class="blogHero pt-5">
        <div class="container pt-4 p-md-5">
            <!-- intro -->
            <div class="row d-md-flex align-items-center">
                <div class="col-md-8 pt-md-5">

                    <!-- main title -->
                    <h1 class="font-playFair display-5 fw-bold fw-100 text-white">
                        Certificate in Pastry and Bakery
                    </h1>

                    <!-- intro -->
                    <p class="mt-5 text-white text-18 fw-100">
                        The Pastry and Bakery industry offers vast job opportunities worldwide. This course equips students
                        with up-to-date knowledge and hands-on skills to excel globally in a competitive work environment.
                    </p>

                </div>

                <div class="col-md-6 d-none">
                    <!-- intro image -->
                    <img src="../assets/images/blog/blogMain.jpg" class="img-fluid" alt="">
                </div>


            </div>
        </div>
    </section>

    <section class="singleBlogSection">
        <div class="container py-5 p-md-5">

            <div class="row">

                {{-- Nav Pills --}}
                <div class="d-flex flex-wrap gap-2">
                    <a href="#overview"
                        class="navPills px-3 rounded-pill text-white text-decoration-none btn btn-primary active text-12 d-flex align-items-center">Overview</a>
                    <a href="#courseOutline"
                        class="navPills px-3 rounded-pill text-dark text-decoration-none btn d-flex align-items-center">Course
                        Outline</a>
                    <a href="#Schedule"
                        class="navPills px-3 rounded-pill text-dark  text-decoration-none btn d-flex align-items-center">Schedule</a>
                </div>



                <!-- blog content -->
                <div class="col-md-7 blogContent">


                    <div id="overview" class="">
                        <div class="pt-4">
                            <h2 class="font-playFair fw-bold">Course Overview</h2>
                            <p class="fw-100 mt-3">
                                The pastry and bakery industry is one of the most dynamic and in-demand sectors in
                                hospitality — offering exciting career paths in hotels, restaurants, cruise lines, bakeries,
                                patisseries, and even your own business. At Ceylon Hospitality Academy, we don’t just teach
                                recipes — we train you to become a well-rounded pastry professional.
                            </p>

                            <p class="fw-100">
                                The program is conducted in a modern kitchen with advanced equipment and tools and covers
                                essential baking techniques, ensuring graduates are industry-ready. Upon completion,
                                students will be skilled professionals prepared to meet the demands of the global pastry and
                                bakery sector.
                            </p>


                        </div>

                    </div>


                    <div id="courseOutline" class="hidden">
                        <div class="pt-4">
                            <h2 class="font-playFair fw-bold">Course Overview</h2>

                            <div class="accordion mt-3" id="accordionExample">



                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Semester 1
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">

                                            <table class="table table-borderless table-hover">
                                                <thead class="border-bottom">
                                                    <tr class="">
                                                        <th class="small">Module</th>
                                                        <th class="small">Mandatoy / Optional</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <td class="small">The Contemporary Hospitality Industry</td>
                                                        <td class="small">Mandatory</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="small">Managing the Customer Experience</td>
                                                        <td class="small">Mandatory</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="small">Professional Identity and Practice</td>
                                                        <td class="small">Mandatory</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="small">The Hospitality Business Toolkit</td>
                                                        <td class="small">Mandatory</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Semester 2
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>This is the second item's accordion body.</strong> It is hidden by
                                            default, until the collapse plugin adds the appropriate classes that we use to
                                            style each element. These classes control the overall appearance, as well as the
                                            showing and hiding via CSS transitions. You can modify any of this with custom
                                            CSS or overriding our default variables. It's also worth noting that just about
                                            any HTML can go within the <code>.accordion-body</code>, though the transition
                                            does limit overflow.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Semester 3
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>This is the third item's accordion body.</strong> It is hidden by
                                            default, until the collapse plugin adds the appropriate classes that we use to
                                            style each element. These classes control the overall appearance, as well as the
                                            showing and hiding via CSS transitions. You can modify any of this with custom
                                            CSS or overriding our default variables. It's also worth noting that just about
                                            any HTML can go within the <code>.accordion-body</code>, though the transition
                                            does limit overflow.
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>

                    <div id="Schedule" class="">
                        <div class="pt-4">
                            <h2 class="font-playFair fw-bold">Classroom</h2>
                            <p class="fw-100 mt-3">
                                Classes are held in a modern, fully-equipped training kitchen that mirrors real industry
                                conditions. You'll work with industry-grade mixers, ovens, tools, and equipment used by
                                professional chefs — giving you the confidence to step into any commercial bakery.
                            </p>




                        </div>

                    </div>


                </div>

                <!-- join card -->
                <div class="col-md-5 p-5 blogCard d-none d-md-block">

                    <div class="p-3">
                        <div class="floatCard rounded pb-2">

                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('assets/images/pancakes.png') }}" class="floatIcon" width="100"
                                    alt="">
                            </div>

                            <div class="px-4 pb-4">

                                <h3 class="text-center font-playFair">See the Craft.<br> Feel the Passion.</h6>
                                    <h6 class="fw-normal text-center mt-3 mb-4">
                                        Step into the world of Ceylon Hospitality Academy through our gallery.
                                    </h6>
                                    <!-- CAT button -->
                                    <div class="d-flex justify-content-center">
                                        <a class="btn-oak btn-1 hover-filled-slide-down w-100">
                                            <span>View Gallery</span>
                                        </a>
                                    </div>
                            </div>

                        </div>
                    </div>


                </div>

            </div>


        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const pills = document.querySelectorAll(".navPills");

            pills.forEach(pill => {
                pill.addEventListener("click", function(event) {


                    // Remove active state from all pills
                    pills.forEach(p => p.classList.remove("btn-primary", "active", "text-white"));
                    pills.forEach(p => p.classList.add("text-dark")); // Reset non-active buttons

                    // Add active state to clicked pill
                    this.classList.add("btn-primary", "active", "text-white");
                    this.classList.remove("text-dark"); // Remove dark text from active button
                });
            });
        });
    </script>
@endsection
