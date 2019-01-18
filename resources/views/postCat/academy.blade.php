@extends('includes/htmlSupport')
@section('mainBody')
    @include('includes/navBar')
<!--SECTION START-->
 <section>
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="cor about-sp">

                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2>OUR Academy<span> Post</span></h2>
                            <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                        </div>
                    </div>
                    <div class="s18-age-event l-info-pack-days">
                        <ul>
                            <li>
                                <div class="age-eve-com age-eve-1">
                                    <img src="images/icon/awa/1.png" alt="">
                                </div>
                                <div class="s17-eve-time">
                                    <div class="s17-eve-time-tim">
                                        <span>21 May 1966</span>
                                    </div>
                                    <div class="s17-eve-time-msg">
                                        <h4>Welcome to Academy</h4>
                                        <p>Established in 1966 Donec quis turpis vitae sem lobortis sodales. Suspendisse blandit magna a purus porta feugiat. Sed nec auctor erat. Nam eu dui lectus. Etiam suscipit vel mauris eget bibendum.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="age-eve-com age-eve-1">
                                    <img src="images/icon/awa/2.png" alt="">
                                </div>
                                <div class="s17-eve-time">
                                    <div class="s17-eve-time-tim">
                                        <span>09:00AM - 10:30AM</span>
                                    </div>
                                    <div class="s17-eve-time-msg">
                                        <h4>Academy Leadership</h4>
                                        <p>Praesent ac velit non eros maximus porta in suscipit elit. Aenean viverra lorem quis mattis accumsan. Etiam facilisis magna ut diam pulvinar condimentum.</p>
                                        <div class="time-hide time-hide-1">
                                                
                                            @foreach ($posts as $post)
                                           
       
                                        <h5>{{$post->topic}}</h5>
                                        <p>{{$post->post_content}}</p>
                                        <div class="s17-eve-time">
                                                <div class="s17-eve-time-tim">
                                                <span>{{$post->created_at->diffForHumans()}}</span>
                                                    </div>    
                                                        </div>
                                        @endforeach 
                                        </div>
                                        <a href="#!" class="s17-sprit age-dwarr-btn time-hide-1-btn">
										<i class="fa fa-angle-down"></i>
									</a>
                                        <a href="#!" class="s17-sprit age-dwarr-btn time-hide-11-btn hb-com">
										<i class="fa fa-angle-up"></i>
									</a>
                                    </div>
                                </div>
                            

                            </li>
                        </ul>
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