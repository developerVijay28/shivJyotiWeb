@extends('includes/htmlSupport')
@section('mainBody')
    @include('includes/navBar')
    <section>
        <div class="container com-sp">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2>All<span> The LIBRARY FACILITIES</span></h2>
                            <p>We will develope shortly,under construction</p>
                            <br><p>The All the Avaiable Books Details and Pics of LIBRARY information 
                                will here</p>
                        </div>
                        
                        </div>
                    
                    </div>
                
                    </div>
            </div>
    </section>
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