@extends('includes/htmlSupport')
@section('mainBody')
    @include('includes/navBar')
    <section>
        <div class="container com-sp">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2>Our<span> Area of School</span></h2>
                            <table class="table">
                                    <thead class="thead-dark">
                                      <tr>
                                            <th scope="col">In Acres</th>
                                            
                                            <th>In sq. mtrs</th>
                                            <th>Built up area (sq. mtrs)</th>
                                            <th>Area of Playground in sq. mtrs</th>
                                            
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>65465</td>
                                            <td>8973</td>
                                            <td>89756</td>
                                            <td>2135</td>
                                            
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