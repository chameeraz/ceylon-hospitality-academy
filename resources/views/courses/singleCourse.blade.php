@extends('layout.master')

@section('content')
    <section class="blogHero pt-5">
        <div class="container pt-4 p-md-5">
            <div class="row d-md-flex align-items-center">
                <div class="col-md-8 pt-md-5">
                    <h1 class="font-playFair display-5 fw-bold fw-100 text-white">
                        Certificate in Pastry and Bakery
                    </h1>
                    <p class="mt-5 text-white text-18 fw-100">
                        The Pastry and Bakery industry offers vast job opportunities worldwide. This course equips students
                        with up-to-date knowledge and hands-on skills to excel globally in a competitive work environment.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="singleBlogSection">
        <div class="container py-5 p-md-5">
            <div class="row">
                {{-- Nav Pills --}}
                <div class="d-flex flex-wrap gap-2 mb-4">
                    <a href="#overview"
                        class="navPills px-3 rounded-pill text-white text-decoration-none btn btn-primary active text-12 d-flex align-items-center">Overview</a>
                    <a href="#courseOutline"
                        class="navPills px-3 rounded-pill text-dark text-decoration-none btn d-flex align-items-center">Course
                        Outline</a>
                    <a href="#Schedule"
                        class="navPills px-3 rounded-pill text-dark text-decoration-none btn d-flex align-items-center">Schedule</a>
                </div>

                <div class="col-md-7 blogContent order-2 order-md-1">
                    <!-- Overview -->
                    <div id="overview" class="border rounded-3 shadow-sm p-4 mt-4 mt-md-0">
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
                                essential baking techniques, ensuring graduates are industry-ready.
                            </p>
                        </div>
                    </div>


                    <!-- Course Outline -->
                    <div id="courseOutline" class="border rounded-3 shadow-sm p-4 mt-4">
                        <h2 class="font-playFair fw-bold mb-4">Weekly Course Outline</h2>

                        @php
                            $weeks = [
                                [
                                    'Hygiene Training',
                                    ['Personal Hygiene', 'Food Hygiene', 'Food Allergens', 'Basic Fire Safety'],
                                ],
                                [
                                    'Basic Knowledge',
                                    [
                                        'Sugar syrup',
                                        'Chocolate ganache',
                                        'Chocolate garnish',
                                        'Butter icing',
                                        'Butter cream',
                                        'Mirror glaze',
                                        'Whipped ganache',
                                        'Swiss roll',
                                    ],
                                ],
                                ['Cake Decoration', ['How to write Wording', 'Butter Cake', 'Reborn cake', 'Cup cake']],
                                [
                                    'Gateaux & cake',
                                    [
                                        'Pastry cream',
                                        'Vanilla sponge',
                                        'Coffee sponge',
                                        'Chocolate cake',
                                        'Mango gateaux',
                                        'Pineapple gateaux',
                                        'Opera cake',
                                    ],
                                ],
                                [
                                    'Loaf cake',
                                    [
                                        'Vanilla crumble',
                                        'Apple Financier',
                                        'English cake',
                                        'Loaf Vegan',
                                        'Banana cake',
                                        'Coconut cake',
                                        'Chocolate chip cake',
                                    ],
                                ],
                                [
                                    'Buns',
                                    ['Soft roll', 'Fancy bread', 'Fish Bun', 'Sugar bun', 'Jam bun', 'Viyan roll'],
                                ],
                                [
                                    'Breakfast Muffins',
                                    [
                                        'Vanilla Crumble',
                                        'Chocolate Chip',
                                        'Morning Glory',
                                        'Banana Muffin',
                                        'Cinnamon Carrot Muffin',
                                    ],
                                ],
                                [
                                    'Assorted Donuts',
                                    ['Chocolate', 'Vanilla', 'Milk chocolate', 'Strawberry', 'Caramel'],
                                ],
                                [
                                    'Artisan Breads',
                                    [
                                        'Sourdough starter',
                                        'Rustic crusty bread',
                                        'Brown bread loaf',
                                        'Classic French bread',
                                        'Whole wheat sourdough bread',
                                        'Sourdough herb garlic twist loaf',
                                    ],
                                ],
                                [
                                    'Decadent Delights',
                                    [
                                        'Chocolate Brownie',
                                        'Classic Baked Cheesecake',
                                        'Cool Cheesecake',
                                        'Chocolate mousse',
                                        'Velvet Strawberry Bliss',
                                    ],
                                ],
                                [
                                    'Cookies',
                                    [
                                        'Vanilla sugar cookies',
                                        'Chocolate chip cookies',
                                        'Vanilla Cookies',
                                        'Stuffed cookies (chocolate, jam)',
                                    ],
                                ],
                                [
                                    'Bakery Medley',
                                    [
                                        'How to make Puff pastry',
                                        'Focaccia bread',
                                        'Ciabatta bread',
                                        'Cinnabon',
                                        'Chocolate Babka',
                                    ],
                                ],
                                [
                                    'Glass dessert',
                                    [
                                        'Mango Silk Bowl',
                                        'Vanilla Strawberry panna cotta',
                                        'Baked yogurt',
                                        'Chocolate passion fruit verrine',
                                        'Crème brûlée',
                                    ],
                                ],
                                [
                                    'Cookies',
                                    ['Biscotti', 'Granola', 'Fudge brownie cookies', 'Christmas cookies', 'Scones'],
                                ],
                                [
                                    'Morning Twist',
                                    [
                                        'Croissant',
                                        'Croissant cromboloni',
                                        'Danish pastry',
                                        'Cruffin',
                                        'Custard danish',
                                        'Fruit Danish',
                                    ],
                                ],
                                [
                                    'Tropical éclair',
                                    [
                                        'Chocolate',
                                        'Strawberry milk chocolate',
                                        'Lemon Meringue',
                                        'Vanilla',
                                        'Caramel',
                                        'Mango',
                                    ],
                                ],
                                [
                                    'Profiteroles',
                                    [
                                        'Chocolate',
                                        'Vanilla',
                                        'Orange',
                                        'Strawberry',
                                        'Paris Brest - Milk chocolate',
                                        'Coffee',
                                        'Vanilla',
                                        'Raspberry',
                                    ],
                                ],
                                ['Gourmet Breads & Bakes', ['Grissini', 'Lavash', 'Brioche Bun', 'Syrian Onion Bread']],
                                [
                                    'Hot dessert',
                                    [
                                        'Ginger pudding',
                                        'Hot chocolate pudding',
                                        'Bread pudding',
                                        'Semolina pudding',
                                        'Rice pudding',
                                        'Chocolate fondant',
                                    ],
                                ],
                                [
                                    'Tiny tart',
                                    [
                                        'Mixed fruit tart',
                                        'Italian lemon meringue tart',
                                        'Chocolate tart',
                                        'Sable breton cinnamon apple tart',
                                    ],
                                ],
                                [
                                    'Petit Gateau',
                                    [
                                        'Coconut Mango Velvet',
                                        'Chocolate passion fruit crunchy',
                                        'Mandarin shaped',
                                        'Strawberry Cheesecake Royale',
                                        'Raspberry chocolate entertainment',
                                    ],
                                ],
                                [
                                    'Whole cake',
                                    [
                                        'Raspberries vanilla cheesecake',
                                        'Orange chocolate natural cake',
                                        'Spiced cake with tangy frosting',
                                        'Yuzu-infused banana cake',
                                    ],
                                ],
                                ['Petite Cocoa', ['Chocolate Bon Bon', 'Room Amenity']],
                            ];
                        @endphp

                        <div class="accordion" id="syllabusAccordion">
                            @foreach ($weeks as $index => $week)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading{{ $index }}">
                                        <button class="accordion-button {{ $index !== 0 ? 'collapsed' : '' }}"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse{{ $index }}"
                                            aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                            aria-controls="collapse{{ $index }}">
                                            Week {{ $index + 1 }} - {{ $week[0] }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $index }}"
                                        class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                                        aria-labelledby="heading{{ $index }}" data-bs-parent="#syllabusAccordion">
                                        <div class="accordion-body">
                                            <ul class="mb-0">
                                                @foreach ($week[1] as $topic)
                                                    <li class="mb-1">{{ $topic }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Schedule -->
                    <div id="Schedule" class="border rounded-3 shadow-sm p-4 mt-4">
                        <h2 class="font-playFair fw-bold">Classroom</h2>
                        <p class="fw-100 mt-3">
                            Classes are held in a modern, fully-equipped training kitchen that mirrors real industry
                            conditions. You'll work with industry-grade mixers, ovens, tools, and equipment used by
                            professional chefs — giving you the confidence to step into any commercial bakery.
                        </p>
                    </div>
                </div>


                <div class="col-md-5  order-1 order-md-2">
                    <div class="bg-white border rounded-3 shadow-sm p-4">
                        <div class="text-center mb-4">
                            <img src="{{ asset('assets/images/pancakes.png') }}" class="img-fluid"
                                style="max-width: 150px;" alt="">
                        </div>

                        <h2 class="fw-bold font-playFair mb-3">Course Details</h2>

                        <div class="mb-3">
                            <small class="text-muted">Course Title</small>
                            <p class="mb-0">NVQ Level 4 - Pastry & Bakery</p>
                        </div>

                        <hr>

                        <div class="row g-3">
                            <div class="col-6">
                                <small class="text-muted">Duration</small>
                                <p class="mb-0 fw-semibold">688 hrs<br><small>(153 Theory + 535 Practical)</small></p>
                            </div>
                            <div class="col-6">
                                <small class="text-muted">Level</small>
                                <p class="mb-0 fw-semibold">NVQ Level 4</p>
                            </div>
                            <div class="col-12">
                                <small class="text-muted">Entry Requirements</small>
                                <p class="mb-0 fw-semibold">NVQ Level 3 or equivalent</p>
                            </div>
                        </div>

                        <hr>

                        <div class="mb-3">
                            <small class="text-muted">Assessment Method</small>
                            <p class="mb-0 fw-semibold">Practical, Written Exams, Assignments, Portfolio</p>
                        </div>

                        <hr>

                        <div>
                            <small class="text-muted">Course Features</small>
                            <ul class="ps-3 mb-0">
                                <li>Based on National Standards</li>
                                <li>Hands-on bakery training</li>
                                <li>Includes hygiene, costing, planning</li>
                            </ul>
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
                    pills.forEach(p => p.classList.remove("btn-primary", "active", "text-white"));
                    pills.forEach(p => p.classList.add("text-dark"));
                    this.classList.add("btn-primary", "active", "text-white");
                    this.classList.remove("text-dark");
                });
            });
        });
    </script>
@endsection
