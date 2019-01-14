@extends('includes/htmlSupport')
@section('mainBody')
    @include('includes/navBar')
    <section>
        <div class="container com-sp">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2>Our<span> ENROLLMENT OF THE STUDENTS:</span></h2>
                            <table class="table">
                                    <thead class="thead-dark">
                                      <tr>
                                            <th scope="col">Class name</th>
                                        
                                            <th scope="col">No. of sections</th>
                                            <th scope="col">No. of students</th>
                                            
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>IX</td>
                                            <td>1</td>
                                            <td>0</td>  
                                        </tr>
                                        <tr>
                                                <td>X</td>
                                                <td>1</td>
                                                <td>25</td>  
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