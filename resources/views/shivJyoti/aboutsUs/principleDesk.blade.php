@extends('includes/htmlSupport')
@section('mainBody')
    @include('includes/navBar')
    <section>
        <div class="container com-sp">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2>Our<span> Prinicple View</span></h2>
        <blockquote class="blockquote text-left text-center">
                <p class="mb-0">"To install the values of life in students mind, we have christened the blocks of 
                    school in the name of great saint & sons of Motherland like Maharishi Dayanand Block, Guru 
                    Ravi Dass Block, Neta Ji Subash Chander Bose Block, Swami Vivekanand Block, Dr. C. V. Raman 
                    Block, J. C. Bose Block, and Keshav Block. For regular health checkup and for emergency cases, 
                    there is the provision of a separate convalescence room."<br>

                    On the main playground, we have courts of standard size for Volley Ball, Badminton, 
                    Kho-Kho and Basketball games. We have also a cycle stand shed on the School premises. 
                    Some ornamental trees like Eucalyptus, China Rose, Amaltas, Neem etc. – a 
                    contribution by the students of the school and flowers beds lend beauty to the campus.</p>
                <footer class="blockquote-footer text-right">Principal<cite title="Source Title"><br>Shiv Jyoti Public School</cite></footer>
                </blockquote>
                        </div>
                        
                        </div>
                    
                    </div>
                
                    <div class="cor about-sp">
                           <div class="ed-about-tit">
                             <div class="con-title">
                               <hr><h2><span class="text-right">Aims & Objectives</span></h2>
                               <blockquote class="blockquote text-left text-center">
                                   <p class="mb-0">The cherished goal of our institution is to turn out balanced individual who 
                                       will be forward looking, Indians first & Indians last and who are both human and humane. 
                                       Lofty aim of the school makes us look upon in words, of Shri Aurobindo as "Children of the Past, 
                                       Possessors of the Present and Creators of the Future."</p>
                               </blockquote>
                               <strong class="text-right">Our main objectives are</strong>
              <ul>
                <li>All round Development of the personality of the child.</li>
                <li>Outstanding qualities of head &amp; heart.</li>
                <li>Academic Excellence.</li>
              </ul>
              <div>
                    <h2><span>OUR MOTTO: </span>SERVICE, SELF RELIANCE AND SELF RESPECT.</h2>
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