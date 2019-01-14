@extends('includes/htmlSupport')
@section('mainBody')
    @include('includes/navBar')
    <section>
        <div class="container com-sp">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2>Our<span> Staff List</span></h2>
                            <table class="table">
                                    <thead class="thead-dark">
                                      <tr>
                                            <th scope="col">Sr.No.</th>
                                            
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th>Designation</th>
                                            <th>DOJ</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Dr. Mrs. Ravi Suta</td>
                                            <td>Female</td>
                                            <td>Principal</td>
                                            <td>May 3, 2014</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Mr. Ajay Dhingra</td>
                                            <td>Male</td>
                                            <td>PGT</td>
                                            <td>Apr 5, 2006</td>
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