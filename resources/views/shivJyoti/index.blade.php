@extends('includes.htmlSupport')
@section('mainBody')
    



    <!-- MOBILE MENU -->
    @include('includes.navbar')
    <!--END HEADER SECTION-->

    <!-- SLIDER -->
    <section>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item slider1 active">
                    <img src="images/slider/1.jpg" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>Welcome to <span>ShivJyoti School</span></h2>
                        {{-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        <a href="#" class="bann-btn-1">All Courses</a><a href="#" class="bann-btn-2">Read More</a> --}}
                    </div>
                </div>
                <div class="item">
                    <img src="images/slider/2.jpg" alt="">
                    <div class="carousel-caption slider-con">
                        {{-- <h2>Admission open <span>2019</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        <a href="#" class="bann-btn-1">Admission</a><a href="#" class="bann-btn-2">Read More</a> --}}
                    </div>
                </div>
                <div class="item">
                    <img src="images/slider/3.jpg" alt="">
                    <div class="carousel-caption slider-con">
                        {{-- <h2>Education <span>Master</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        <a href="#" class="bann-btn-1">All Courses</a><a href="#" class="bann-btn-2">Read More</a> --}}
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <i class="fa fa-chevron-left slider-arr"></i>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <i class="fa fa-chevron-right slider-arr"></i>
            </a>
        </div>
    </section>

    <!-- QUICK LINKS -->
    <section>
        <div class="container">
            <div class="row">
                <div class="wed-hom-ser">
                    <ul>
                        <li>
                            <a href="/shivAward" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="images/icon/h-ic1.png" alt=""> Academy</a>
                        </li>
                        <li>
                            <a href="/shivAddmission" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="images/icon/h-ic2.png" alt=""> Admission</a>
                        </li>
                        <li>
                            <a href="/shivCourse" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="images/icon/h-ic4.png" alt=""> Courses</a>
                        </li>
                        <li>
                            <a href="/shivSeminar" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="images/icon/h-ic3.png" alt=""> Seminar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    
    <!-- POPULAR COURSES -->
    {{-- <section class="pop-cour">
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>Popular <span>Courses</span></h2>
                    <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="images/course/sm-1.jpg" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>Aerospace Engineering</h3>
                                </a>
                                <h4>Technology / Space / Aerospace</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>10 Aavailable</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="images/course/sm-2.jpg" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>Agriculture Courses</h3>
                                </a>
                                <h4>Technology / Space / Aerospace</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>40 Aavailable</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 320</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="images/course/sm-3.jpg" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>Marine Engineering</h3>
                                </a>
                                <h4>Technology / Ocean / Marine</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>04 Aavailable</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 1020</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="images/course/sm-4.jpg" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>Building, Construction Management</h3>
                                </a>
                                <h4>Technology / Construction / Building</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>32 Aavailable</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 124</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="images/course/sm-5.jpg" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>Fashion Technology</h3>
                                </a>
                                <h4>Technology / Trends / Fashion</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>10 Aavailable</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="images/course/sm-6.jpg" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>Agriculture Courses</h3>
                                </a>
                                <h4>Technology / Space / Aerospace</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>40 Aavailable</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 320</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="images/course/sm-7.jpg" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>Marine Engineering</h3>
                                </a>
                                <h4>Technology / Ocean / Marine</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>04 Aavailable</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 1020</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="images/course/sm-8.jpg" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>Building, Construction Management</h3>
                                </a>
                                <h4>Technology / Construction / Building</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>32 Aavailable</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 124</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- starting of UPCOMING,job,login page EVENTS -->
    
<!---- end of upcoming job and login page deleted---->
    <!-- NEWS AND EVENTS -->
    <section>
        <div class="container com-sp">
            <div class="row">
                <div class="con-title">
                    <h2>News and <span>Events</span></h2>
                    <p>Find our Latest News and events Here</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="bot-gal h-gal ho-event-mob-bot-sp">
                        <h4>Photo Gallery</h4>
                    
                        <ul>
                                @foreach ($photos as $photo)
                        <li><img class="materialboxed" data-caption="Education master image captions" src="{{$photo->photos->file}}" alt="">
                            </li>
                            {{-- <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/7.jpg" alt="">
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
                            </li>---}}
                            @endforeach
                        </ul>
                       
                    </div>
                </div>
                {{-- <div class="col-md-4">
                    <div class="bot-gal h-vid ho-event-mob-bot-sp">
                        <h4>Video Gallery</h4>
                        <iframe src="https://www.youtube.com/embed/2WqFtiR4-F4?autoplay=0&showinfo=0&controls=0" allowfullscreen></iframe>
                        <h5>Maecenas sollicitudin lacinia</h5>
                        <p>Maecenas finibus neque a tellus auctor mattis. Aliquam tempor varius ornare. Maecenas dignissim leo leo, nec posuere purus finibus vitae.</p>
                        <p>Quisque vitae neque at tellus malesuada convallis. Phasellus in lectus vitae ex euismod interdum non a lorem. Nulla bibendum. Curabitur mi odio, tempus quis risus cursus.</p>
                    </div>
                </div> --}}
                <div class="col-md-6">
                    <div class="bot-gal h-blog ho-event">
                        <h4>News & Event</h4>
                        <div class="ho-event">
                            <ul>
                                @foreach ($news as $new )
                                <li>
                                <div class="ho-ev-date"><span>7</span><span>jan,2018</span>
                                    </div>
                        
                                        
                                    
                                    <div class="ho-ev-link">
                                        <a href="events.html">
                                        <h4>{{$new->topic}}</h4>
                                        </a>
                                    <p>{{$new->news_content}}</p>
                                    <span>{{$new->created_at->diffForHumans()}}</span>
                                    </div>
                                    
                                </li>
                                @endforeach
                                <li>
                                    <div class="ho-ev-date"><span>12</span><span>jan,2018</span>
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
                                    <div class="ho-ev-date"><span>26</span><span>jan,2018</span>
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
                                    <div class="ho-ev-date"><span>18</span><span>jan,2018</span>
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
    <!-- DISCOVER MORE -->
    <section>
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>Discover <span>More</span></h2>
                    <p>Find out the Latest and Trading Post of Our School click below Categories For get more Knowledge Stay Tune</p>
                </div>
            </div>
            <div class="row">
                <div class="ed-course">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="/shivAcademy">
                                <img src="images/h-about.jpg" alt="">
                                <span>Academics</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="/shivQuotes">
                                <img src="images/h-adm1.jpg" alt="">
                                <span>Quotes</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="/shivCourse">
                                <img src="images/h-about1.jpg" alt="">
                                <span>Course</span>
                            </a>
                        </div>
                    </div>
                    {{-- <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="research.html">
                                <img src="images/h-res.jpg" alt="">
                                <span>Research & Education</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="all-courses.html">
                                <img src="images/h-about1.jpg" alt="">
                                <span>Couse</span>
                            </a>
                        </div>
                    </div> --}}
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="db-time-line.html">
                                <img src="images/h-adm.jpg" alt="">
                                <span>Exam Time Line</span>
                            </a>
                        </div>
                    </div>
                    {{-- <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="seminar.html">
                                <img src="images/h-cam1.jpg" alt="">
                                <span>Seminar 2018</span>
                            </a>
                        </div>
                    </div> --}}
                    {{-- <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="events.html">
                                <img src="images/h-res1.jpg" alt="">
                                <span>Research & Education</span>
                            </a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>


    <!-- FOOTER COURSE BOOKING -->
    @include('includes/footerCourse')
    <!---Fooer Course booking End---->
    <!--- Start of map view---->
    <hr>
    <section>
        <div class="container" id="contacts">
        @include('includes.googleMap');
    </div>
    </section>
<!----end of map view---->
    <!-- FOOTER -->
    @include('includes/footer')
<!---end of main footer---->
    <!--SECTION LOGIN, REGISTER AND FORGOT PASSWORD-->
@include('includes/socialActivites/socailLoginUP')
<!--- end of login Up social portion---->
    <!-- SOCIAL MEDIA SHARE -->
    @include('includes/socialActivites/sideSocialLink')
    <!---end of side Social Bar---->
    <!--Import jQuery before materialize.js-->
    
    @endsection