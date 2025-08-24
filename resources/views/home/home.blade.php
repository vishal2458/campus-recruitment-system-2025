@extends('home/layouts.main')

@section('content')
    <!-- SLIDER -->
    <section>
        <div class="sec-ban" id="home">
            <div class="container">
                <p class="subtitle">Discover Quality Education Anytime, Anywhere</p>
                <h1>Empower Your Future with <br> <strong>Online Learning</strong></h1>
                <div class="cta-buttons">
                    <a href="admission.html" class="cta-btn cta-dark cta-md">Book Your Course Now<i>&nbsp;</i></a>
                    <a href="all-courses.html" class="cta-btn cta-light cta-md">All Courses<i>&nbsp;</i></a>
                </div>

                <div class="sec-ban-im">
                    <picture>
                        {{-- <source srcset="images/banner.webp" type="image/webp"> --}}
                        {{-- <img data-src="{{ asset('images/home/banner.png') }}" width="600" height="410" alt="Education master"> --}}
                        <img src="{{ asset('images/home/banner.png') }}" width="600" height="410" alt="Education master">
                    </picture>
                </div>
                <div class="job-counts">
                    <ul>
                        <li>
                            <span class="count1">40</span>
                            <h4>Courses</h4>
                        </li>
                        <li>
                            <span class="count1">90</span>
                            <h4>Online courses</h4>
                        </li>
                        <li>
                            <span class="count1">200</span>
                            <h4>Students placed</h4>
                        </li>
                        <li>
                            <span class="count1">900+</span>
                            <h4>Students</h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- DISCOVER MORE -->
    <section>
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>Discover <span>More</span></h2>
                    <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                </div>
            </div>
            <div class="row ed-course">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="all-courses.html">
                                <img src="{{ asset('images/home/h-res1.jpg') }}" alt="">
                                <span>Online courses</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="about.html">
                                <img src="{{ asset('images/h/home-about.jpg') }}" alt="">
                                <span>Academics</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="admission.html">
                                <img src="{{ asset('images/home/h-adm1.jpg') }}" alt="">
                                <span>Admission</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="dashboard.html">
                                <img src="{{ asset('images/home/h-cam.jpg') }}" alt="">
                                <span>Students profile</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="research.html">
                                <img src="{{ asset('images/home/h-res.jpg') }}" alt="">
                                <span>Research & Education</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="all-courses.html">
                                <img src="{{ asset('images/h/home-about1.jpg') }}" alt="">
                                <span>Couse</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="db-time-line.html">
                                <img src="{{ asset('images/home/h-adm.jpg') }}" alt="">
                                <span>Exam Time Line</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="seminar.html">
                                <img src="{{ asset('images/home/h-cam1.jpg') }}" alt="">
                                <span>Seminar 2025</span>
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    </section>

    <!-- POPULAR COURSES -->
    <section class="pop-cour">
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2><span>All the skills</span> you need in one place</h2>
                    <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                </div>
            </div>
            <div class="row">
                <ul class="nav nav-tabs" role="tablist">
                    <li><a class="nav-link active" data-bs-toggle="tab" href="#tab1">Data Science</a></li>
                    <li><a class="nav-link" data-bs-toggle="tab" href="#tab2">IT Certifications</a></li>
                    <li><a class="nav-link" data-bs-toggle="tab" href="#tab3">Web Development</a></li>
                    <li><a class="nav-link" data-bs-toggle="tab" href="#tab4">Engineering</a></li>
                    <li><a href="online-courses.html">View all courses</a></li>

                  </ul>
            </div>
            <div class="home-cour-tab tab-content">
                <!--COURSES TAB 1-->
                <div id="tab1" class="row tab-pane active">
                    <div class="courss">
                        <div class="cours" data-category="aws beginers english rating4">
                            <img src="images/all-course/4.png">
                            <h5>AWS Certified Cloud Practitioner CLF-C02 2025</h5>
                            <div class="tags">
                                <span>15 hours on-demand video</span>
                                <span>5 articles</span>
                                <span>Beginers</span>
                                <span>English</span>
                            </div>
                            <!-- Rating Section -->
                            <div class="rating">
                                <span class="ratnum">4.2</span>
                                <span class="stars">★ ★ ★ ★ ☆</span>
                                <span class="reviews">(25,224)</span>
                            </div>
                            <!-- Price Section -->
                            <div class="price">
                                $300<span class="original-price">$500</span>
                            </div>
                            <a href="online-course-details.html" class="fcl">&nbsp;</a>
                        </div>
                        <div class="cours" data-category="web beginers english spanish rating5">
                            <img src="images/all-course/2.png">
                            <h5>The Complete 2025 Web Development Bootcamp</h5>
                            <div class="tags">
                                <span>32 hours on-demand video</span>
                                <span>20 articles</span>
                                <span>Advance</span>
                                <span>English</span>
                            </div>
                            <!-- Rating Section -->
                            <div class="rating">
                                <span class="ratnum">5.0</span>
                                <span class="stars">★ ★ ★ ★ ★</span>
                                <span class="reviews">(25,224)</span>
                            </div>
                            <!-- Price Section -->
                            <div class="price">
                                $300<span class="original-price">$500</span>
                            </div>
                            <a href="online-course-details.html" class="fcl">&nbsp;</a>
                        </div>
                        <div class="cours" data-category="ai advance intermediate english rating4 rating5">
                            <img src="images/all-course/3.png">
                            <h5>Artificial Intelligence A-Z 2024: Build 7 AI + LLM & ChatGPT</h5>
                            <div class="tags">
                                <span>12 hours on-demand video</span>
                                <span>10 articles</span>
                                <span>Advance</span>
                                <span>English</span>
                            </div>
                            <!-- Rating Section -->
                            <div class="rating">
                                <span class="ratnum">4.5</span>
                                <span class="stars">★ ★ ★ ★ ☆</span>
                                <span class="reviews">(25,224)</span>
                            </div>
                            <!-- Price Section -->
                            <div class="price">
                                $550<span class="original-price">$600</span>
                            </div>
                            <a href="online-course-details.html" class="fcl">&nbsp;</a>
                        </div>
                        <div class="cours" data-category="web advance intermediate english rating4 rating5">
                            <img src="images/all-course/1.png">
                            <h5>The Complete JavaScript Course 2024: From Zero to Expert!</h5>
                            <div class="tags">
                                <span>45 hours on-demand video</span>
                                <span>32 articles</span>
                                <span>Advance</span>
                                <span>English</span>
                            </div>
                            <!-- Rating Section -->
                            <div class="rating">
                                <span class="ratnum">4.0</span>
                                <span class="stars">★ ★ ★ ★ ★</span>
                                <span class="reviews">(25,224)</span>
                            </div>
                            <!-- Price Section -->
                            <div class="price">
                                $700<span class="original-price">$900</span>
                            </div>
                            <a href="online-course-details.html" class="fcl">&nbsp;</a>
                        </div>
                        <div class="cours" data-category="web advance intermediate english rating4 rating5">
                            <img src="images/all-course/5.png">
                            <h5>The Complete Networking Fundamentals Course. Your CCNA start</h5>
                            <div class="tags">
                                <span>45 hours on-demand video</span>
                                <span>32 articles</span>
                                <span>Advance</span>
                                <span>English</span>
                            </div>
                            <!-- Rating Section -->
                            <div class="rating">
                                <span class="ratnum">4.0</span>
                                <span class="stars">★ ★ ★ ★ ★</span>
                                <span class="reviews">(25,224)</span>
                            </div>
                            <!-- Price Section -->
                            <div class="price">
                                $700<span class="original-price">$900</span>
                            </div>
                            <a href="online-course-details.html" class="fcl">&nbsp;</a>
                        </div>
                        <div class="cours" data-category="web python advance intermediate hindi english rating4 rating5">
                            <img src="images/all-course/6.png">
                            <h5>The Complete Python Bootcamp From Zero to Hero in Python</h5>
                            <div class="tags">
                                <span>45 hours on-demand video</span>
                                <span>32 articles</span>
                                <span>Advance</span>
                                <span>English</span>
                            </div>
                            <!-- Rating Section -->
                            <div class="rating">
                                <span class="ratnum">4.0</span>
                                <span class="stars">★ ★ ★ ★ ★</span>
                                <span class="reviews">(25,224)</span>
                            </div>
                            <!-- Price Section -->
                            <div class="price">
                                $700<span class="original-price">$900</span>
                            </div>
                            <a href="online-course-details.html" class="fcl">&nbsp;</a>
                        </div>
                    </div>
                </div>
                <!--COURSES TAB 1-->
                <!--COURSES TAB 2-->
                <div id="tab2" class="row tab-pane fade">
                    <div class="courss">
                        <div class="cours" data-category="web advance intermediate english rating4 rating5">
                            <img src="images/all-course/5.png">
                            <h5>The Complete Networking Fundamentals Course. Your CCNA start</h5>
                            <div class="tags">
                                <span>45 hours on-demand video</span>
                                <span>32 articles</span>
                                <span>Advance</span>
                                <span>English</span>
                            </div>
                            <!-- Rating Section -->
                            <div class="rating">
                                <span class="ratnum">4.0</span>
                                <span class="stars">★ ★ ★ ★ ★</span>
                                <span class="reviews">(25,224)</span>
                            </div>
                            <!-- Price Section -->
                            <div class="price">
                                $700<span class="original-price">$900</span>
                            </div>
                            <a href="online-course-details.html" class="fcl">&nbsp;</a>
                        </div>
                        <div class="cours" data-category="web python advance intermediate hindi english rating4 rating5">
                            <img src="images/all-course/6.png">
                            <h5>The Complete Python Bootcamp From Zero to Hero in Python</h5>
                            <div class="tags">
                                <span>45 hours on-demand video</span>
                                <span>32 articles</span>
                                <span>Advance</span>
                                <span>English</span>
                            </div>
                            <!-- Rating Section -->
                            <div class="rating">
                                <span class="ratnum">4.0</span>
                                <span class="stars">★ ★ ★ ★ ★</span>
                                <span class="reviews">(25,224)</span>
                            </div>
                            <!-- Price Section -->
                            <div class="price">
                                $700<span class="original-price">$900</span>
                            </div>
                            <a href="online-course-details.html" class="fcl">&nbsp;</a>
                        </div>
                        <div class="cours" data-category="aws beginers english rating4">
                            <img src="images/all-course/5.png">
                            <h5>AWS Certified Cloud Practitioner CLF-C02 2025</h5>
                            <div class="tags">
                                <span>15 hours on-demand video</span>
                                <span>5 articles</span>
                                <span>Beginers</span>
                                <span>English</span>
                            </div>
                            <!-- Rating Section -->
                            <div class="rating">
                                <span class="ratnum">4.2</span>
                                <span class="stars">★ ★ ★ ★ ☆</span>
                                <span class="reviews">(25,224)</span>
                            </div>
                            <!-- Price Section -->
                            <div class="price">
                                $300<span class="original-price">$500</span>
                            </div>
                            <a href="online-course-details.html" class="fcl">&nbsp;</a>
                        </div>
                        <div class="cours" data-category="web beginers english rating5">
                            <img src="images/all-course/6.png">
                            <h5>The Complete 2025 Web Development Bootcamp</h5>
                            <div class="tags">
                                <span>32 hours on-demand video</span>
                                <span>20 articles</span>
                                <span>Advance</span>
                                <span>English</span>
                            </div>
                            <!-- Rating Section -->
                            <div class="rating">
                                <span class="ratnum">5.0</span>
                                <span class="stars">★ ★ ★ ★ ★</span>
                                <span class="reviews">(25,224)</span>
                            </div>
                            <!-- Price Section -->
                            <div class="price">
                                $300<span class="original-price">$500</span>
                            </div>
                            <a href="online-course-details.html" class="fcl">&nbsp;</a>
                        </div>
                        <div class="cours" data-category="ai advance intermediate english spanish rating4 rating5">
                            <img src="images/all-course/1.png">
                            <h5>Artificial Intelligence A-Z 2024: Build 7 AI + LLM & ChatGPT</h5>
                            <div class="tags">
                                <span>12 hours on-demand video</span>
                                <span>10 articles</span>
                                <span>Advance</span>
                                <span>English</span>
                            </div>
                            <!-- Rating Section -->
                            <div class="rating">
                                <span class="ratnum">4.5</span>
                                <span class="stars">★ ★ ★ ★ ☆</span>
                                <span class="reviews">(25,224)</span>
                            </div>
                            <!-- Price Section -->
                            <div class="price">
                                $550<span class="original-price">$600</span>
                            </div>
                            <a href="online-course-details.html" class="fcl">&nbsp;</a>
                        </div>
                    </div>
                </div>
                <!--COURSES TAB 2-->
                <!--COURSES TAB 3-->
                <div id="tab3" class="row tab-pane fade">
                    <div class="courss">
                        <div class="cours" data-category="web beginers english rating5">
                            <img src="images/all-course/6.png">
                            <h5>The Complete 2025 Web Development Bootcamp</h5>
                            <div class="tags">
                                <span>32 hours on-demand video</span>
                                <span>20 articles</span>
                                <span>Advance</span>
                                <span>English</span>
                            </div>
                            <!-- Rating Section -->
                            <div class="rating">
                                <span class="ratnum">5.0</span>
                                <span class="stars">★ ★ ★ ★ ★</span>
                                <span class="reviews">(25,224)</span>
                            </div>
                            <!-- Price Section -->
                            <div class="price">
                                $300<span class="original-price">$500</span>
                            </div>
                            <a href="online-course-details.html" class="fcl">&nbsp;</a>
                        </div>
                        <div class="cours" data-category="ai advance intermediate english spanish rating4 rating5">
                            <img src="images/all-course/1.png">
                            <h5>Artificial Intelligence A-Z 2024: Build 7 AI + LLM & ChatGPT</h5>
                            <div class="tags">
                                <span>12 hours on-demand video</span>
                                <span>10 articles</span>
                                <span>Advance</span>
                                <span>English</span>
                            </div>
                            <!-- Rating Section -->
                            <div class="rating">
                                <span class="ratnum">4.5</span>
                                <span class="stars">★ ★ ★ ★ ☆</span>
                                <span class="reviews">(25,224)</span>
                            </div>
                            <!-- Price Section -->
                            <div class="price">
                                $550<span class="original-price">$600</span>
                            </div>
                            <a href="online-course-details.html" class="fcl">&nbsp;</a>
                        </div>
                        <div class="cours" data-category="web advance intermediate english rating1 rating2">
                            <img src="images/all-course/2.png">
                            <h5>The Complete JavaScript Course 2024: From Zero to Expert!</h5>
                            <div class="tags">
                                <span>45 hours on-demand video</span>
                                <span>32 articles</span>
                                <span>Advance</span>
                                <span>English</span>
                            </div>
                            <!-- Rating Section -->
                            <div class="rating">
                                <span class="ratnum">4.0</span>
                                <span class="stars">★ ★ ★ ★ ★</span>
                                <span class="reviews">(25,224)</span>
                            </div>
                            <!-- Price Section -->
                            <div class="price">
                                $700<span class="original-price">$900</span>
                            </div>
                            <a href="online-course-details.html" class="fcl">&nbsp;</a>
                        </div>
                        <div class="cours" data-category="web advance intermediate english rating4 rating5">
                            <img src="images/all-course/3.png">
                            <h5>The Complete Networking Fundamentals Course. Your CCNA start</h5>
                            <div class="tags">
                                <span>45 hours on-demand video</span>
                                <span>32 articles</span>
                                <span>Advance</span>
                                <span>English</span>
                            </div>
                            <!-- Rating Section -->
                            <div class="rating">
                                <span class="ratnum">4.0</span>
                                <span class="stars">★ ★ ★ ★ ★</span>
                                <span class="reviews">(25,224)</span>
                            </div>
                            <!-- Price Section -->
                            <div class="price">
                                $700<span class="original-price">$900</span>
                            </div>
                            <a href="online-course-details.html" class="fcl">&nbsp;</a>
                        </div>
                        <div class="cours" data-category="web python advance intermediate hindi english rating4 rating5">
                            <img src="images/all-course/4.png">
                            <h5>The Complete Python Bootcamp From Zero to Hero in Python</h5>
                            <div class="tags">
                                <span>45 hours on-demand video</span>
                                <span>32 articles</span>
                                <span>Advance</span>
                                <span>English</span>
                            </div>
                            <!-- Rating Section -->
                            <div class="rating">
                                <span class="ratnum">4.0</span>
                                <span class="stars">★ ★ ★ ★ ★</span>
                                <span class="reviews">(25,224)</span>
                            </div>
                            <!-- Price Section -->
                            <div class="price">
                                $700<span class="original-price">$900</span>
                            </div>
                            <a href="online-course-details.html" class="fcl">&nbsp;</a>
                        </div>
                        <div class="cours" data-category="aws beginers english rating2">
                            <img src="images/all-course/4.png">
                            <h5>AWS Certified Cloud Practitioner CLF-C02 2025</h5>
                            <div class="tags">
                                <span>15 hours on-demand video</span>
                                <span>5 articles</span>
                                <span>Beginers</span>
                                <span>English</span>
                            </div>
                            <!-- Rating Section -->
                            <div class="rating">
                                <span class="ratnum">4.2</span>
                                <span class="stars">★ ★ ★ ★ ☆</span>
                                <span class="reviews">(25,224)</span>
                            </div>
                            <!-- Price Section -->
                            <div class="price">
                                $300<span class="original-price">$500</span>
                            </div>
                            <a href="online-course-details.html" class="fcl">&nbsp;</a>
                        </div>
                    </div>
                </div>
                <!--COURSES TAB 3-->
                <!--COURSES TAB 4-->
                <div id="tab4" class="row tab-pane fade">
                    <div class="courss">
                        <div class="cours" data-category="web python advance intermediate hindi english rating4 rating5">
                            <img src="images/all-course/4.png">
                            <h5>The Complete Python Bootcamp From Zero to Hero in Python</h5>
                            <div class="tags">
                                <span>45 hours on-demand video</span>
                                <span>32 articles</span>
                                <span>Advance</span>
                                <span>English</span>
                            </div>
                            <!-- Rating Section -->
                            <div class="rating">
                                <span class="ratnum">4.0</span>
                                <span class="stars">★ ★ ★ ★ ★</span>
                                <span class="reviews">(25,224)</span>
                            </div>
                            <!-- Price Section -->
                            <div class="price">
                                $700<span class="original-price">$900</span>
                            </div>
                            <a href="online-course-details.html" class="fcl">&nbsp;</a>
                        </div>
                        <div class="cours" data-category="aws beginers english rating2">
                            <img src="images/all-course/4.png">
                            <h5>AWS Certified Cloud Practitioner CLF-C02 2025</h5>
                            <div class="tags">
                                <span>15 hours on-demand video</span>
                                <span>5 articles</span>
                                <span>Beginers</span>
                                <span>English</span>
                            </div>
                            <!-- Rating Section -->
                            <div class="rating">
                                <span class="ratnum">4.2</span>
                                <span class="stars">★ ★ ★ ★ ☆</span>
                                <span class="reviews">(25,224)</span>
                            </div>
                            <!-- Price Section -->
                            <div class="price">
                                $300<span class="original-price">$500</span>
                            </div>
                            <a href="online-course-details.html" class="fcl">&nbsp;</a>
                        </div>
                        <div class="cours" data-category="web beginers english spanish rating5">
                            <img src="images/all-course/2.png">
                            <h5>The Complete 2025 Web Development Bootcamp</h5>
                            <div class="tags">
                                <span>32 hours on-demand video</span>
                                <span>20 articles</span>
                                <span>Advance</span>
                                <span>English</span>
                            </div>
                            <!-- Rating Section -->
                            <div class="rating">
                                <span class="ratnum">5.0</span>
                                <span class="stars">★ ★ ★ ★ ★</span>
                                <span class="reviews">(25,224)</span>
                            </div>
                            <!-- Price Section -->
                            <div class="price">
                                $300<span class="original-price">$500</span>
                            </div>
                            <a href="online-course-details.html" class="fcl">&nbsp;</a>
                        </div>
                        <div class="cours" data-category="ai advance intermediate english rating4 rating5">
                            <img src="images/all-course/3.png">
                            <h5>Artificial Intelligence A-Z 2024: Build 7 AI + LLM & ChatGPT</h5>
                            <div class="tags">
                                <span>12 hours on-demand video</span>
                                <span>10 articles</span>
                                <span>Advance</span>
                                <span>English</span>
                            </div>
                            <!-- Rating Section -->
                            <div class="rating">
                                <span class="ratnum">4.5</span>
                                <span class="stars">★ ★ ★ ★ ☆</span>
                                <span class="reviews">(25,224)</span>
                            </div>
                            <!-- Price Section -->
                            <div class="price">
                                $550<span class="original-price">$600</span>
                            </div>
                            <a href="online-course-details.html" class="fcl">&nbsp;</a>
                        </div>
                        <div class="cours" data-category="web advance intermediate english rating3 rating1">
                            <img src="images/all-course/1.png">
                            <h5>The Complete JavaScript Course 2024: From Zero to Expert!</h5>
                            <div class="tags">
                                <span>45 hours on-demand video</span>
                                <span>32 articles</span>
                                <span>Advance</span>
                                <span>English</span>
                            </div>
                            <!-- Rating Section -->
                            <div class="rating">
                                <span class="ratnum">4.0</span>
                                <span class="stars">★ ★ ★ ★ ★</span>
                                <span class="reviews">(25,224)</span>
                            </div>
                            <!-- Price Section -->
                            <div class="price">
                                $700<span class="original-price">$900</span>
                            </div>
                            <a href="online-course-details.html" class="fcl">&nbsp;</a>
                        </div>
                        <div class="cours" data-category="web advance intermediate english rating4 rating5">
                            <img src="images/all-course/5.png">
                            <h5>The Complete Networking Fundamentals Course. Your CCNA start</h5>
                            <div class="tags">
                                <span>45 hours on-demand video</span>
                                <span>32 articles</span>
                                <span>Advance</span>
                                <span>English</span>
                            </div>
                            <!-- Rating Section -->
                            <div class="rating">
                                <span class="ratnum">4.0</span>
                                <span class="stars">★ ★ ★ ★ ★</span>
                                <span class="reviews">(25,224)</span>
                            </div>
                            <!-- Price Section -->
                            <div class="price">
                                $700<span class="original-price">$900</span>
                            </div>
                            <a href="online-course-details.html" class="fcl">&nbsp;</a>
                        </div>
                    </div>
                </div>
                <!--COURSES TAB 4-->
            </div>
            <div class="cta-buttons">
                <a href="online-courses.html" class="cta-btn cta-dark cta-md">View All Courses<i>&nbsp;</i></a>
            </div>
        </div>
    </section>

    <!-- UPCOMING EVENTS -->
    <section>
        <div class="container com-sp pad-bot-0">
            <div class="row">
                <div class="col-md-4">
                    <!--<div class="ho-ex-title">
							<h4>Upcoming Event</h4>
						</div>-->
                    <div class="ho-ev-latest ho-ev-latest-bg-1">
                        <div class="ho-lat-ev">
                            <h4>Upcoming Event</h4>
                            <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                        </div>
                    </div>
                    <div class="ho-event ho-event-mob-bot-sp">
                        <ul>
                            <li>
                                <div class="ho-ev-date"><span>07</span><span>jan,2025</span>
                                </div>
                                <div class="ho-ev-link">
                                    <a href="events.html">
                                        <h4>Latinoo College Expo 2025</h4>
                                    </a>
                                    <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                    <span>9:15 am – 5:00 pm</span>
                                </div>
                            </li>
                            <li>
                                <div class="ho-ev-date"><span>12</span><span>jan,2025</span>
                                </div>
                                <div class="ho-ev-link">
                                    <a href="events.html">
                                        <h4>Training at Team Fabio Clemente</h4>
                                    </a>
                                    <p>Nulla at velit convallis venenatis.</p>
                                    <span>9:15 am – 5:00 pm</span>
                                </div>
                            </li>
                            <li>
                                <div class="ho-ev-date"><span>26</span><span>jan,2025</span>
                                </div>
                                <div class="ho-ev-link">
                                    <a href="events.html">
                                        <h4>Nulla at velit convallis</h4>
                                    </a>
                                    <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                    <span>9:15 am – 5:00 pm</span>
                                </div>
                            </li>
                            <li>
                                <div class="ho-ev-date"><span>18</span><span>jan,2025</span>
                                </div>
                                <div class="ho-ev-link">
                                    <a href="events.html">
                                        <h4>Admissions Information Session and Tour</h4>
                                    </a>
                                    <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                    <span>9:15 am – 5:00 pm</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <!--<div class="ho-ex-title">
							<h4>Upcoming Event</h4>
						</div>-->
                    <div class="ho-ev-latest ho-ev-latest-bg-2">
                        <div class="ho-lat-ev">
                            <h4>Job Vacants</h4>
                            <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                        </div>
                    </div>
                    <div class="ho-event ho-event-mob-bot-sp">
                        <ul>
                            <li>
                                <div class="ho-ev-img"><img src="images/event/1.jpg" alt="">
                                </div>
                                <div class="ho-ev-link">
                                    <a href="#">
                                        <h4>Almost before we knew it, we had left the ground</h4>
                                    </a>
                                    <p>Etiam ornare lacus nec lectus vestibulum aliquam.</p>
                                    <span>Location: New York</span>
                                </div>
                            </li>
                            <li>
                                <div class="ho-ev-img"><img src="images/event/2.jpg" alt="">
                                </div>
                                <div class="ho-ev-link">
                                    <a href="#">
                                        <h4>Then came the night of the first falling star.</h4>
                                    </a>
                                    <p>Vestibulum sollicitudin sem arcu</p>
                                    <span>Location: Los Angeles</span>
                                </div>
                            </li>
                            <li>
                                <div class="ho-ev-img"><img src="images/event/3.jpg" alt="">
                                </div>
                                <div class="ho-ev-link">
                                    <a href="#">
                                        <h4>Educate to Empower NYE Party</h4>
                                    </a>
                                    <p>Vestibulum sollicitudin sem arcu, eget ullamcorper purus hendrerit</p>
                                    <span>Location: Chennai</span>
                                </div>
                            </li>
                            <li>
                                <div class="ho-ev-img"><img src="images/event/4.jpg" alt=""></div>
                                <div class="ho-ev-link">
                                    <a href="#">
                                        <h4>Then came the night of the first falling star.</h4>
                                    </a>
                                    <p>Venenatis lacus lectus.</p>
                                    <span>Location: Chicago</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <!--<div class="ho-ex-title">
							<h4>Upcoming Event</h4>
						</div>-->
                    <div class="ho-ev-latest ho-ev-latest-bg-3">
                        <div class="ho-lat-ev">
                            <h4>Register & Login</h4>
                            <p>Student area velit convallis venenatis lacus quis, efficitur lectus.</p>
                        </div>
                    </div>
                    <div class="ho-st-login">
                        <ul class="nav nav-tabs tabs-hom-reg" role="tablist">
                            <li class="nav-item col s6"><a class="nav-link active" data-bs-toggle="tab" href="#hom-vijay">Register</a>
                            </li>
                            <li class="nav-item col s6"><a class="nav-link" data-bs-toggle="tab" href="#hom_log">Login</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                        <div id="hom-vijay" class="tab-pane active">
                            <form>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" id="user-name-log" placeholder="Enter user name" name="user name">
                                    <label for="user-name-log">Student user name</label>
                                </div>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" id="user-email" placeholder="Enter emailid" name="email">
                                    <label for="user-email">Email ID</label>
                                </div>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="password" class="form-control" id="user-pass" placeholder="Enter password" name="user-pass">
                                    <label for="user-pass">Password</label>
                                </div>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="password" class="form-control" id="user-pass-con" placeholder="Enter password" name="user-pass-con">
                                    <label for="user-pass-con">Confirm password</label>
                                </div>
                                <div class="row">
                                    <div class="input-field">
                                        <input type="submit" value="Register" class="waves-effect waves-light light-btn">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="hom_log" class="container tab-pane fade">
                            <form>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" id="user-name" placeholder="Enter user name" name="text">
                                    <label for="user-name">Student user name</label>
                                </div>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" id="password" placeholder="Enter password" name="email">
                                    <label for="email">Password</label>
                                  </div>
                                <div class="row">
                                    <div class="input-field">
                                        <input type="submit" value="Login" class="waves-effect waves-light light-btn">
                                    </div>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NEWS AND EVENTS -->
    <section>
        <div class="container com-sp">
            <div class="row">
                <div class="con-title">
                    <h2>News and <span>Events</span></h2>
                    <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="bot-gal h-gal ho-event-mob-bot-sp">
                        <h4>Photo Gallery</h4>
                        <ul>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/8.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/9.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/10.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/11.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/1.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/2.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/3.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/4.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/5.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/6.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/7.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/8.jpg" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bot-gal h-vid ho-event-mob-bot-sp">
                        <h4>Video Gallery</h4>
                        <iframe src="https://www.youtube.com/embed/hnkXoOMUVLY?autoplay=0&amp;showinfo=0&amp;controls=0" allowfullscreen></iframe>
                        <h5>Maecenas sollicitudin lacinia</h5>
                        <p>Maecenas finibus neque a tellus auctor mattis. Aliquam tempor varius ornare. Maecenas dignissim leo leo, nec posuere purus finibus vitae.</p>
                        <p>Quisque vitae neque at tellus malesuada convallis. Phasellus in lectus vitae ex euismod interdum non a lorem. Nulla bibendum. Curabitur mi odio, tempus quis risus cursus.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bot-gal h-blog ho-event">
                        <h4>News & Event</h4>
                        <div class="ho-event">
                            <ul>
                                <li>
                                    <div class="ho-ev-date"><span>07</span><span>jan,2025</span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="events.html">
                                            <h4>Latinoo College Expo 2025</h4>
                                        </a>
                                        <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                        <span>9:15 am – 5:00 pm</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ho-ev-date"><span>12</span><span>jan,2025</span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="events.html">
                                            <h4>Training at Team Fabio Clemente</h4>
                                        </a>
                                        <p>Nulla at velit convallis venenatis.</p>
                                        <span>9:15 am – 5:00 pm</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ho-ev-date"><span>26</span><span>jan,2025</span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="events.html">
                                            <h4>Nulla at velit convallis</h4>
                                        </a>
                                        <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                        <span>9:15 am – 5:00 pm</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ho-ev-date"><span>18</span><span>jan,2025</span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="events.html">
                                            <h4>Admissions Information Session and Tour</h4>
                                        </a>
                                        <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                        <span>9:15 am – 5:00 pm</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER COURSE BOOKING -->
    <section>
        <div class="full-bot-book">
            <div class="container">
                <div class="row">
                        <div class="col-md-2 bb-img">
                            <img src="images/3.png" alt="">
                        </div>
                        <div class="col-md-7 bb-text">
                            <h4>therefore always free from repetition</h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                        </div>
                        <div class="col-md-3 bb-link">
                            <a href="course-details.html">Book This Course</a>
                        </div>
                </div>
            </div>
        </div>
    </section>

@endsection

    <!--Import jQuery before materialize.js-->

