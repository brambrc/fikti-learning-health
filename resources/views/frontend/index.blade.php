@extends('frontend.partials.master')
@section('content')
 <!-- Home Slider -->
 <div class="home-slider-two owl-theme owl-carousel"> 

    <div class="slider-item slider-img-two">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="slider-text">
                        <h1>Exceptional Health Care for Woman</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <div class="banner-btn-area">
                            <a class="common-btn" href="appointment.html">Get An Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item slider-img-one">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="slider-text">
                        <h1>Your Health Life Is Our First Priority</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <div class="banner-btn-area">
                            <a class="common-btn" href="appointment.html">Get An Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item slider-img-three">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="slider-text">
                        <h1>Caring Health is Important Than All</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <div class="banner-btn-area">
                            <a class="common-btn" href="appointment.html">Get An Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- End Home Slider -->

<!-- Counter -->
<div class="counter-area two">
    <div class="container">
        <div class="row ">

            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="counter-item">
                    <i class="flaticon-patient"></i>
                    <h3>
                        <span class="odometer" data-count="519">00</span>
                    </h3>
                    <p>Patients Beds</p>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="counter-item">
                    <i class="flaticon-service"></i>
                    <h3>
                        <span class="odometer" data-count="15000">00</span>
                        <span class="target">+</span>
                    </h3>
                    <p>Happy Patients</p>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="counter-item">
                    <i class="flaticon-hospital"></i>
                    <h3>
                        <span class="odometer" data-count="50">00</span>
                        <span class="target">+</span>
                    </h3>
                    <p>Doctors & Nurse</p>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="counter-item last-item">
                    <i class="flaticon-ribbon"></i>
                    <h3>
                        <span class="odometer" data-count="20">00</span>
                    </h3>
                    <p>Year Experience</p>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Counter -->

<!-- About -->
<section class="hospital-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <div class="hospital-img">
                    <img src="{{asset('health')}}/assets/images/welcome-main.jpg" alt="About">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="hospital-item">
                    <div class="section-title">
                        <span class="sub-title">About</span>
                        <h2>About Our Hospital</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis</p>
                    </div>
                    <ul>
                        <li>
                            <i class="icofont-check-alt"></i>
                            Browse Our Website
                        </li>
                        <li>
                            <i class="icofont-check-alt"></i>
                            Choose Service
                        </li>
                        <li>
                            <i class="icofont-check-alt"></i>
                            Send Message
                        </li>
                    </ul>
                    <a class="common-btn" href="#">Read More</a>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End About -->

<!-- Services -->
<section class="services-area two pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Services</span>
            <h2>Our Hospital Services</h2>
        </div>
        <div class="row">
            
            <div class="col-sm-6 col-lg-4">
                <div class="service-item">
                    <i class="flaticon-caduceus"></i>
                    <h3>
                        <a href="service-details.html">Expert Doctor</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="service-item">
                    <i class="flaticon-chip"></i>
                    <h3>
                        <a href="service-details.html">Pathology</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="service-item">
                    <i class="flaticon-heart"></i>
                    <h3>
                        <a href="service-details.html">Cardiology</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="service-item">
                    <i class="flaticon-tooth"></i>
                    <h3>
                        <a href="service-details.html">Dental Care</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="service-item">
                    <i class="flaticon-diagnosis"></i>
                    <h3>
                        <a href="service-details.html">Diagnosis</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="service-item">
                    <i class="flaticon-medicine"></i>
                    <h3>
                        <a href="service-details.html">Medicine</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- End Services -->

<!-- Expertise -->
<section class="expertise-area two ptb-100">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Specialty</span>
            <h2>Our Expertise</h2>
        </div>
        <div class="row">

            <div class="col-lg-6">
                <div class="expertise-img">
                    <img src="{{asset('health')}}/assets/images/expertise-main2.jpg" alt="Expertise">
                    <div class="expertise-emergency-contact">
                        <div class="left">
                            <i class="flaticon-emergency-call"></i>
                        </div>
                        <div class="right">
                            <h3>Emergency Call</h3>
                            <a href="tel:+15143126677">+1 (514) 312-6677</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="expertise-item-two">
                    <ul>
                        <li>
                            <i class="flaticon-protect"></i>
                            <h3>Child Care</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        </li>
                        <li>
                            <i class="flaticon-service"></i>
                            <h3>More Stuff</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        </li>
                        <li>
                            <i class="flaticon-lab"></i>
                            <h3>Enough Lab</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        </li>
                        <li>
                            <i class="flaticon-24-hours"></i>
                            <h3>24 Hour Doctor</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Expertise -->

<!-- Doctors -->
<section class="doctors-area two pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Doctors</span>
            <h2>Meet Our Doctors</h2>
        </div>
        <div class="row justify-content-center">

            <div class="col-sm-6 col-lg-4">
                <div class="doctor-item">
                    <div class="top">
                        <img src="{{asset('health')}}/assets/images/team/team1.jpg" alt="Doctor">
                        <ul>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="icofont-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="icofont-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="icofont-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="bottom">
                        <h3>
                            <a href="doctor-details.html">Dr. Babatunde</a>
                        </h3>
                        <span>Cardiology</span>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="doctor-item">
                    <div class="top">
                        <img src="{{asset('health')}}/assets/images/team/team2.jpg" alt="Doctor">
                        <ul>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="icofont-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="icofont-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="icofont-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="bottom">
                        <h3>
                            <a href="doctor-details.html">Dr. Addision Smith</a>
                        </h3>
                        <span>Neurosurgeon</span>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="doctor-item">
                    <div class="top">
                        <img src="{{asset('health')}}/assets/images/team/team3.jpg" alt="Doctor">
                        <ul>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="icofont-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="icofont-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="icofont-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="bottom">
                        <h3>
                            <a href="doctor-details.html">Dr. Sarah Tylor</a>
                        </h3>
                        <span>Dental Surgeon</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Doctors -->

<!-- Blog -->
<section class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Blog</span>
            <h2>Our Latest Blog</h2>
        </div>
        <div class="row justify-content-center">

            <div class="col-sm-6 col-lg-4">
                <div class="blog-item">
                    <div class="blog-top">
                        <a href="blog-details.html">
                            <img src="{{asset('health')}}/assets/images/blog/blog1.jpg" alt="Blog">
                        </a>
                    </div>
                    <div class="blog-bottom">
                        <span><i class="icofont-calendar"></i> Dec 25, 2021</span>
                        <h3>
                            <a href="blog-details.html">In This Hospital, There Are Special Surgeon</a>
                        </h3>
                        <p>Lorem ipsum is  dolor sit amet, csectetur adipiscing elit, dolore smod tempor incididunt ut labore et....</p>
                        <a class="blog-btn" href="blog-details.html">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="blog-item">
                    <div class="blog-top">
                        <a href="blog-details.html">
                            <img src="{{asset('health')}}/assets/images/blog/blog2.jpg" alt="Blog">
                        </a>
                    </div>
                    <div class="blog-bottom">
                        <span><i class="icofont-calendar"></i> Dec 26, 2021</span>
                        <h3>
                            <a href="blog-details.html">World AIDS Day, Designated On 1 December</a>
                        </h3>
                        <p>Lorem ipsum is  dolor sit amet, csectetur adipiscing elit, dolore smod tempor incididunt ut labore et....</p>
                        <a class="blog-btn" href="blog-details.html">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="blog-item">
                    <div class="blog-top">
                        <a href="blog-details.html">
                            <img src="{{asset('health')}}/assets/images/blog/blog3.jpg" alt="Blog">
                        </a>
                    </div>
                    <div class="blog-bottom">
                        <span><i class="icofont-calendar"></i> Dec 27, 2021</span>
                        <h3>
                            <a href="blog-details.html">More Than 80 Clinical Trials Launch To Test Covid-19</a>
                        </h3>
                        <p>Lorem ipsum is  dolor sit amet, csectetur adipiscing elit, dolore smod tempor incididunt ut labore et....</p>
                        <a class="blog-btn" href="blog-details.html">Read More</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Blog -->

@endsection