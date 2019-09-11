@extends("front-end-layout.dashboard")
@section("title")
    @endsection
@section("content")
    <!--================ Start Popular Courses Area =================-->
    <div class="popular_courses lite_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="main_title">
                        <h2>Popular Courses</h2>
                        <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first
                            telescope. It’s
                            exciting to think about setting up your own viewing station.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single course -->
                <div class="col-lg-3 col-md-6">
                    <div class="single_course">
                        <div class="course_head overlay">
                            <img class="img-fluid w-100" src="{{asset("frontend/img/courses/trainer1.jpg")}}" alt="">
                            <div class="authr_meta">
                                <img src="{{asset("frontend/img/author1.png")}}" alt="">
                                <span>Mart Taylor</span>
                            </div>
                        </div>
                        <div class="course_content">
                            <h4>
                                <a href="course-details.html">Learn React js beginners</a>
                            </h4>
                            <p>When television was young, there was a huge popular show based on the still popular
                                fictional character of
                                Superman.</p>
                            <div class="course_meta d-flex justify-content-between">
                                <div>
                                    <span class="meta_info">
                                        <a href="#"><i class="lnr lnr-user"></i>355</a>
                                    </span>
                                    <span class="meta_info">
                                        <a href="#">
                                            <i class="lnr lnr-bubble"></i>35
                                        </a>
                                    </span>
                                </div>
                                <div>
                                    <span class="price">$150</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single course -->
                <div class="col-lg-3 col-md-6">
                    <div class="single_course">
                        <div class="course_head overlay">
                            <img class="img-fluid w-100" src="{{asset("frontend/img/courses/trainer1.jpg")}}" alt="">
                            <div class="authr_meta">
                                <img src="{{asset("frontend/img/author1.png")}}" alt="">
                                <span>Mart Taylor</span>
                            </div>
                        </div>
                        <div class="course_content">
                            <h4>
                                <a href="course-details.html">Learn React js beginners</a>
                            </h4>
                            <p>When television was young, there was a huge popular show based on the still popular
                                fictional character of
                                Superman.</p>
                            <div class="course_meta d-flex justify-content-between">
                                <div>
                                    <span class="meta_info">
                                        <a href="#">
                                            <i class="lnr lnr-user"></i>355
                                        </a>
                                    </span>
                                    <span class="meta_info"><a href="#">
                                            <i class="lnr lnr-bubble"></i>35
                                        </a></span>
                                </div>
                                <div>
                                    <span class="price df_color1">$150</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single course -->
                <div class="col-lg-3 col-md-6">
                    <div class="single_course">
                        <div class="course_head overlay">
                            <img class="img-fluid w-100" src="{{asset("frontend/img/courses/trainer1.jpg")}}" alt="">
                            <div class="authr_meta">
                                <img src="{{asset("frontend/img/author1.png")}}" alt="">
                                <span>Mart Taylor</span>
                            </div>
                        </div>
                        <div class="course_content">
                            <h4>
                                <a href="course-details.html">Learn React js beginners</a>
                            </h4>
                            <p>When television was young, there was a huge popular show based on the still popular
                                fictional character of
                                Superman.</p>
                            <div class="course_meta d-flex justify-content-between">
                                <div>
                                    <span class="meta_info">
                                        <a href="#">
                                            <i class="lnr lnr-user"></i>355
                                        </a>
                                    </span>
                                    <span class="meta_info"><a href="#">
                                            <i class="lnr lnr-bubble"></i>35
                                        </a></span>
                                </div>
                                <div>
                                    <span class="price">$150</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single course -->
                <div class="col-lg-3 col-md-6">
                    <div class="single_course">
                        <div class="course_head overlay">
                            <img class="img-fluid w-100" src="{{asset("frontend/img/courses/trainer1.jpg")}}" alt="">
                            <div class="authr_meta">
                                <img src="{{asset("frontend/img/author1.png")}}" alt="">
                                <span>Mart Taylor</span>
                            </div>
                        </div>
                        <div class="course_content">
                            <h4>
                                <a href="course-details.html">Learn React js beginners</a>
                            </h4>
                            <p>When television was young, there was a huge popular show based on the still popular
                                fictional character of
                                Superman.</p>
                            <div class="course_meta d-flex justify-content-between">
                                <div>
                                    <span class="meta_info">
                                        <a href="#">
                                            <i class="lnr lnr-user"></i>355
                                        </a>
                                    </span>
                                    <span class="meta_info"><a href="#">
                                            <i class="lnr lnr-bubble"></i>35
                                        </a></span>
                                </div>
                                <div>
                                    <span class="price df_color2">$150</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================ End Popular Courses Area =================-->
@endsection
@section("scripts")
@endsection
