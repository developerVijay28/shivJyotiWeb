@extends('includes/htmlSupport')
@section('mainBody')
    @include('includes/navBar')
<!--END HEADER SECTION-->

    <section class="pop-cour">
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>All <span>Courses</span></h2>
                    <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                </div>
            </div>
            <div class="row">
                @foreach ($courses as $course)
                    
               
                <div class="col-md-6">
                    <div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            {{-- <div class="col-md-3"> <img src="images/course/sm-1.jpg" alt=""> </div> --}}
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="">
                                <h3>{{$course->topic}}</h3>
                                </a>
                                {{-- <h4>Technology / Space / Aerospace</h4> --}}
                            <p>{{$course->post_content}}</p>
                                {{-- <div class="hom-list-share">
                                    <ul>
                                        <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>10 Aavailable</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
                                    </ul>
                                </div> --}}
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
<!--SECTION END-->
<!--SECTION START-->
@include('includes/footerCourse')
<!--SECTION END-->

<!--HEADER SECTION-->
@include('includes/footer')
    <!--END HEADER SECTION-->

<!--SECTION LOGIN, REGISTER AND FORGOT PASSWORD-->
@include('includes/socialActivites/socailLoginUP')
<!--- end of login Up social portion---->
<!-- SOCIAL MEDIA SHARE -->
@include('includes/socialActivites/sideSocialLink')
<!---end of side Social Bar---->
@endsection
    