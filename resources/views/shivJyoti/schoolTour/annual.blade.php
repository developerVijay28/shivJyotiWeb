@extends('includes/htmlSupport')
@section('mainBody')
    @include('includes/navBar')
    
    <section>
        <div class="container com-sp">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2>Our <span>Annual function View</span></h2>
                        </div>
                        
                    </div>
                </div>
            
        @include('includes/bootstrap')
                <div class="container">
                    <div class="row">
                      <div class="col">
                        <div class="card text-black mb-3" style="max-width: 24rem;">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                             
                              <img src="/images/schoolTour/AnnualFunction/124.jpg" class="card-img" alt="...">
                            </div>
                          </div>
                      </div>
                      <div class="col">
                        <div class="card text-black mb-3" style="max-width: 24rem;">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                             
                              <img src="/images/schoolTour/AnnualFunction/125.jpg" class="card-img" alt="...">
                            </div>
                          </div>
                      </div>
                      <div class="col">
                        <div class="card text-black mb-3" style="max-width: 24rem;">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                             
                              <img src="/images/schoolTour/AnnualFunction/128.jpg" class="card-img" alt="...">
                            </div>
                          </div>
                      </div>
                      <div class="col">
                        <div class="card text-black mb-3" style="max-width: 24rem;">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                             
                              <img src="/images/schoolTour/AnnualFunction/130.jpg" class="card-img" alt="...">
                            </div>
                          </div>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                                <div class="card text-black mb-3" style="max-width: 24rem;">
                                        <div class="card-header">Header</div>
                                        <div class="card-body">
                                         
                                          <img src="/images/schoolTour/AnnualFunction/131.jpg" class="card-img" alt="...">
                                        </div>
                                      </div>
                                  </div>
                                  <div class="col">
                                        <div class="card text-black mb-3" style="max-width: 24rem;">
                                                <div class="card-header">Header</div>
                                                <div class="card-body">
                                                 
                                                  <img src="/images/schoolTour/AnnualFunction/132.png" class="card-img" alt="...">
                                                </div>
                                              </div>
                                          </div>
                                          <div class="col">
                                                <div class="card text-black mb-3" style="max-width: 24rem;">
                                                        <div class="card-header">Header</div>
                                                        <div class="card-body">
                                                         
                                                          <img src="/images/schoolTour/AnnualFunction/310.jpg" class="card-img" alt="...">
                                                        </div>
                                                      </div>
                                                  </div>
            <div class="col">
                    <div class="card text-black mb-3" style="max-width: 24rem;">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                            
                            <img src="/images/schoolTour/AnnualFunction/311.jpg" class="card-img" alt="...">
                            </div>
                        </div>
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