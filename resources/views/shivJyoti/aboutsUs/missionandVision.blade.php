@extends('includes/htmlSupport')
@section('mainBody')
    @include('includes/navBar')
    <section>
        <div class="container com-sp">
            <div class="row">
           
    <div id="home_left">
            <div class="con-title">
            <h2><span> Mission & Vision</span></h2>
            </div>
            <div>
              <div>
                <div>
                  <div>
                    <h2>Our Vision</h2>
                    <p>Let it be reiterated that the most distinguishing feature of   our institution is its emphasis on "INDIVIDUALISED INSTRUCTION" and   "VALUE EDUCATION" surely makes our school.</p>
                    <h2>Our Mission</h2>
                    <p>The cherished goal of our institution is to turn out balanced   individual who will be forward looking, Indians first &amp; Indians last   and who are both human and humane. Lofty aim of the school makes us   look upon in words, of Shri Aurobindo as "Children of the Past,   Possessors of the Present and Creators of the Future."</p>
                    <p>&nbsp;</p>
                  </div>
                </div>
                <div>
                  <div>
                    <h2>Aims &amp; Objectives</h2>
                    <p>The cherished goal of our institution is to turn out   balanced individual who will be forward looking, Indians first &amp;   Indians last and who are both human and humane. Lofty aim of the school   makes us look upon in words, of Shri Aurobindo as "Children of the Past,   Possessors of the Present and Creators of the Future."</p>
                    <strong>Our main objectives are</strong>
                    <ol>
                      <li>All round Development of the personality of the child.</li>
                      <li>Outstanding qualities of head &amp; heart.</li>
                      <li>Academic Excellence.</li>
                    </ol>
                  </div>
                  <div>
                    <h2>OUR MOTTO: SERVICE, SELF RELIANCE AND SELF RESPECT.</h2>
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