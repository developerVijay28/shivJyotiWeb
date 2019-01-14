@extends('includes/htmlSupport')
@section('mainBody')
    @include('includes/navBar')
    <section>
        <div class="container com-sp">
            <div class="row">
           
    <div id="home_left">
            <div class="con-title">
            <h2><span>Our Small Documentaion Process</span></h2>
            </div>
            <h2>Eligibility</h2>
      <div>
        <div>
          <div>
            <div id="main_content">
              <div>
                <div id="contentcolumn">
                  <div>
                    <h1>Eligibility <br>
                    </h1>
                    <h2>(A) Age Limit:- A child should belong to one of the following age groups on 31st March in the year of Registration:</h2>
                    <table width="75%" border="1" cellpadding="4" cellspacing="0" summary="Summary Here">
                      <thead>
                        <tr>
                          <th width="152"><strong>For Class 1</strong></th>
                          <th width="428"><strong>5 plus to 6</strong></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>For Class II</td>
                          <td><strong>6 plus to7</strong></td>
                        </tr>
                        <tr>
                          <td><strong>For other</strong> Classes <br>
                            <strong>Note</strong></td>
                          <td>Similarly age limit to be counted</td>
                        </tr>
                        <tr>
                          <td>For Classes VI to IX</td>
                          <td>Student must have passed the previous class from a recognised / affiliated school.</td>
                        </tr>
                      </tbody>
                    </table>
                    <h2>(B) There will be no direct admission to class X &amp; XII. Admission to these classes shall be open only to such a student who</h2>
                    <p>(a) Has completed a regular course of study for Class IX / XI</p>
                    <p>Has Passed Class IX / XI examination from an institution affiliated to C.B.S.E only on the <strong>transfer of the parent (s) or shifting of their families from one to another,</strong>after   procuring from the student the marks sheet and the transfer   Certificate4 duly Countersigned by the Educational Authorities of the   Board concerned. In case of such <strong>admission the approval of</strong> the Board within one month of admission of the student must be obtained.</p>
                    <h2>Documents to be attached at the time of admission:</h2>
                    <h3><strong>(i) For Class I to IX</strong></h3>
                    <p>a) Oroginal Report Card alongwith Photocopy for the previous class passed.</p>
                    <p>b) School Leaving Certificate with Father's &amp; Mother's Name.</p>
                    <p>c) Attested Photo copy of Date of Birth Certificate issued by Local Register.</p>
                    <h3><strong>(iii) For Class XI</strong></h3>
                    <p>a) Photocopy of Register Card.</p>
                    <p>b) School Leaving Certificate mentioning the Board Roll No.</p>
                    <p>c) Details Marks Certificate of last class passed or Result of SA-I</p>
                    <p>d) Character Certificate.</p>
                    <p>e) Details Marks of Class X issued by Board.</p>
                    <p>f) Migration Certificate if student is coming from other than CBSE Board.</p>
                    <h2>Subject available</h2>
                    <table width="100%" border="1" cellpadding="4" cellspacing="0" summary="Summary Here">
                      <thead>
                        <tr>
                          <th width="108">Stream</th>
                          <th width="109">Sub 1</th>
                          <th width="126">Sub 2</th>
                          <th width="174">Sub 3</th>
                          <th width="93">Sub 4</th>
                          <th width="378">Options for 5th Subject</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Medical Stream</td>
                          <td>English Core</td>
                          <td>Physics</td>
                          <td>Chemistry</td>
                          <td>Biology</td>
                          <td>Physical Education/Computer Science/Music/Dance/Painting</td>
                        </tr>
                        <tr>
                          <td>Non-Medical</td>
                          <td>English Core</td>
                          <td>Physics</td>
                          <td>Chemistry</td>
                          <td>Maths</td>
                          <td>Physical Education/Computer Science/Music/Dance/Painting</td>
                        </tr>
                        <tr>
                          <td>Commerce</td>
                          <td>English Core</td>
                          <td>Accountancy</td>
                          <td>Business Studies</td>
                          <td>Economics</td>
                          <td>Physical Education/Informatics Practices/Music/Dance/Painting/Maths</td>
                        </tr>
                        <tr>
                          <td>Humanities</td>
                          <td>English Core</td>
                          <td>Maths/Painting</td>
                          <td>Music/Dance /Physical Education</td>
                          <td>Hindi</td>
                          <td>Informatics Practices/Economics/History</td>
                        </tr>
                      </tbody>
                    </table>
                    <p><strong>Important Note</strong>: - School has the right to change the subject combination as per admission of students to class XI in any session.</p>
                  </div>
                </div>
              </div>
            </div>
            <p>&nbsp;</p>
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