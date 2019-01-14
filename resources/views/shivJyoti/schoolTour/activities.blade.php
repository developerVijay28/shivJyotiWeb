@extends('includes/htmlSupport')
@section('mainBody')
    @include('includes/navBar')
    
    <section>
        <div class="container com-sp">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2>Our<span>Activities</span></h2>
                        </div>
                        
                    </div>
                </div>
            
        @include('includes/bootstrap')
                <div class="container">
                    <div class="row">
                            @foreach ($photos as $photo )
                      <div class="col">
                         
                              
                          
                        <div class="card text-black mb-3" style="max-width: 24rem;">
                        <div class="card-header">{{$photo->header}}</div>
                            <div class="card-body">
                             
                            <img src="{{$photo->photos->file}}" class="card-img" alt="...">
                            </div>
                            
                          </div>
                      </div>
                      @endforeach
                      <div class="col">
                        <div class="card text-black mb-3" style="max-width: 24rem;">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                             
                              <img src="/images/schoolTour/activities/60.jpg" class="card-img" alt="...">
                            </div>
                          </div>
                      </div>
                      <div class="col">
                        <div class="card text-black mb-3" style="max-width: 24rem;">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                             
                              <img src="/images/schoolTour/activities/61.jpg" class="card-img" alt="...">
                            </div>
                          </div>
                      </div>
                      <div class="col">
                        <div class="card text-black mb-3" style="max-width: 24rem;">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                             
                              <img src="/images/schoolTour/activities/64.jpg" class="card-img" alt="...">
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
                                         
                                          <img src="/images/schoolTour/activities/67.jpg" class="card-img" alt="...">
                                        </div>
                                      </div>
                                  </div>
                                  <div class="col">
                                        <div class="card text-black mb-3" style="max-width: 24rem;">
                                                <div class="card-header">Header</div>
                                                <div class="card-body">
                                                 
                                                  <img src="/images/schoolTour/activities/68.jpg" class="card-img" alt="...">
                                                </div>
                                              </div>
                                          </div>
                                          <div class="col">
                                                <div class="card text-black mb-3" style="max-width: 24rem;">
                                                        <div class="card-header">Header</div>
                                                        <div class="card-body">
                                                         
                                                          <img src="/images/schoolTour/activities/69.jpg" class="card-img" alt="...">
                                                        </div>
                                                      </div>
                                                  </div>
            <div class="col">
                    <div class="card text-black mb-3" style="max-width: 24rem;">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                            
                            <img src="/images/schoolTour/activities/75.jpg" class="card-img" alt="...">
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