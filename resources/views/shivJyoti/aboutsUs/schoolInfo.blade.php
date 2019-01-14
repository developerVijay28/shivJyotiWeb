@extends('includes/htmlSupport')
@section('mainBody')
    @include('includes/navBar')
    <section>
        <div class="container com-sp">
            <div class="row">
                    <div id="home_left">
            <div class="con-title">
                    
                            <h2><span>School Info</span> </h2>
            </div>
                            <div>
                              <div>
                                <div>
                                  <div class="form-right">
                                  <div class="address-div">
                                      <h2>Shiv Jyoti Public School, DEEN DAYAL UPADHYAYA NAGAR , JALANDHAR CITY, 144008</h2>
                                      <p>Email : <a href="mailto:shiv.joti@yahoo.com">shiv.joti@yahoo.com</a></p>
                                      <p>Fax : 00000000000, Phone No: 0181-2621341</p>
                                  </div>
                                  <div class="form-cnt">
                                       <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table-cnt">
                                        <tr>
                                          <td width="33%" valign="top">Establishment of  school:</td>
                                          <td width="34%" valign="top">1988</td>
                                          <td width="33%" valign="top">&nbsp;</td>
                                        </tr>
                                                          <!--
                                        <tr>
                                          <td valign="top">Whether NOC from State/UT or recommendation of Embassy of India obtained ?:</td>
                                          <td valign="top">NOC NO : 11/19/1993-5   S3</td>
                                          <td valign="top">NOC issuing date: Sep 08 , 1993</td>
                                        </tr>
                                        -->
                                       
                                        <tr>
                                          <td valign="top">School recognized by:</td>
                                          <td valign="top">Yes, CBSE</td>
                                          <td valign="top">&nbsp;</td>
                                        </tr>
                                                          <tr>
                                          <td valign="top">Status of affiliation:</td>
                                          <td valign="top">Provisional</td>
                                          <td valign="top">Affiliation no. 1630090 with 01/04/1994 and affiliated  upto Mar 31 , 2021</td>
                                        </tr>
                                        <tr>
                                          <td valign="top">Shri Dhrit Ram Jyoti Charitable Trust  Jalandhar. </td>
                                          <td valign="top">Trust is valid upto Nov 30 , -0001 as per COMPANY ACT 1956</td>
                                          <td valign="top">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td valign="top">Name &amp; Address of Manager:</td>
                                          <td valign="top">(Dr.) Mrs.Ravi Suta Principal,
                      Shiv Jyoti Public school
                      Deen Dayal Upadhaya Nagar, Jalandhar</td>
                                          <td valign="top">shiv.joti@yahoo.com, +0181-2621341, 00000000000</td>
                                        </tr>
                                    </table>
                                   
                                   
                                      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table-cnt1">
                                        <tr>
                                          <td colspan="4" valign="top"><div class="heading3">Name of offical address of the manager/president/chairman/correspondent</div></td>
                                        </tr>
                                        <tr>
                                          <td width="30%" valign="top">Address</td>
                                          <td width="31%" valign="top">Email Id</td>
                                          <td width="19%" valign="top">Phone No.</td>
                                          <td width="20%" valign="top">Fax No.</td>
                                        </tr>
                                        <tr>
                                          <td valign="top">(Dr.) Mrs.Ravi Suta Principal,
                      Shiv Jyoti Public school
                      Deen Dayal Upadhaya Nagar, Jalandhar</td>
                                          <td valign="top">shiv.joti@yahoo.com</td>
                                          <td valign="top">0181-2621341</td>
                                          <td valign="top">00000000000</td>
                                        </tr>
                                      </table>
                                      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table-cnt">
                                        <!--
                                        <tr>
                                          <td width="33%" valign="top">Name of Grievance/redressal Officer:</td>
                                          <td width="34%" valign="top">Mrs.Neeru Nayyar</td>
                                          <td width="33%">abc@gmail.com, 0000000000000, 000000000000</td>
                                        </tr>
                                        <tr>
                                          <td valign="top">Memebers of sexual Harassment Committee:</td>
                                          <td valign="top">Dr.Mrs.Usha Kapoor,Mr.Ajay Dhingra,Mrs.Bhawna Sabharwal</td>
                                          <td>&nbsp;</td>
                                        </tr>-->
                                        
                                        <tr>
                                          <td valign="top">Academic Session Period:</td>
                                          <td valign="top">From: Apr 06 ,2017</td>
                                          <td>To: Mar 31 ,2018</td>
                                        </tr>
                                        <tr>
                                          <td valign="top">Vacation Period:</td>
                                          <td valign="top">From: Jun 01 ,2017</td>
                                          <td>To: Jul 07 ,2017</td>
                                        </tr>
                                        <tr>
                                          <td valign="top">Admission Period:</td>
                                          <td valign="top">From: Apr 01 ,2017</td>
                                          <td>To: Aug 31 ,2017</td>
                                        </tr>
                                      </table>
                                  </div>
                            </div>
                                  <p>&nbsp;</p>
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