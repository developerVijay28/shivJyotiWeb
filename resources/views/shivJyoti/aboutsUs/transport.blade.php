@extends('includes/htmlSupport')
@section('mainBody')
    @include('includes/navBar')
    <section>
        <div class="container com-sp">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2>Our<span>Transport Facilities</span></h2>
                            <table class="table">
                                    <thead class="thead-dark">
                                      <tr>
                                            <th scope="col">Own Buses</th>
                                        
                                            <th scope="col">Buses hired on contract basis</th>
                                            <th scope="col">Details of transport charges</th>
                                            
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>4</td>
                                            <td>nil</td>
                                            <td>update it dyanmically</td>
                                            
                                            
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