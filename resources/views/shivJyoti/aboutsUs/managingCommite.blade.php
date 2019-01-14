@extends('includes/htmlSupport')
@section('mainBody')
    @include('includes/navBar')
    <section>
        <div class="container com-sp">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2>Our<span>Managing Committee</span></h2>
                            <table class="table">
                                    <thead class="thead-dark">
                                      <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Designation</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Dr. D. D. Jyoti</td>
                                            <td>Chairman</td>
                                        </tr>
                                        <tr>
                                            <td>Sh. Mahesh Sharma</td>
                                            <td>Vice Chairman</td>
                                        </tr>
                                    </tbody>
                            </table>
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