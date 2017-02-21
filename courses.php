<!doctype html>
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]>
<html lang="en" class="no-js"> <![endif]-->
<html lang="en" ng-app="scottish">

<head>
    <?php include ('php/includes/head.php') ?>
</head>

<body>

<!-- Full Body Container -->
<div id="container">


    <!-- Start Header Section -->
    <?php include ('php/includes/siteHeader.php') ?>
    <!-- End Header Section -->


   <!-- Start Page Banner -->
    <div class="page-banner" style="padding:40px 0; background: url(images/slide-02-bg.jpg) center #f9f9f9;">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Courses Offered</h2>
            <p></p>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="#">Home</a></li>
              <li><a href="#">Academics</a></li>
              <li>Courses Offered</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->
    

    <!-- Start Content -->
    <div id="content" ng-controller="courseController">
      <div class="container">
        <div class="page-content" id="">
          <div class="row">

          <!-- Start Service Icon 1 -->
          <div class="col-md-3 col-sm-6 service-box service-center">
            <div class="service-icon">
              <i class="fa fa-flask icon-medium-effect icon-effect-2"></i>
            </div>
            <div class="service-content">
              <h4>Bachelor of Science</h4>
              <p>Honours</p>
            </div>
          </div>
          <!-- End Service Icon 1 -->

          <!-- Start Service Icon 2 -->
          <div class="col-md-3 col-sm-6 service-box service-center">
            <div class="service-icon">
              <i class="fa fa-book icon-medium-effect icon-effect-2"></i>
            </div>
            <div class="service-content">
              <h4>Bachelor of Arts</h4>
              <p>Honours</p>
            </div>
          </div>
          <!-- End Service Icon 2 -->

          <!-- Start Service Icon 3 -->
          <div class="col-md-3 col-sm-6 service-box service-center">
            <div class="service-icon">
              <i class="fa fa-money icon-medium-effect icon-effect-2"></i>
            </div>
            <div class="service-content">
              <h4>B.Com / BBA</h4>
              <p>Honours</p>
            </div>
          </div>
          <!-- End Service Icon 3 -->

          <!-- Start Service Icon 4 -->
          <div class="col-md-3 col-sm-6 service-box service-center">
            <div class="service-icon">
              <i class="fa fa-graduation-cap icon-medium-effect icon-effect-2"></i>
            </div>
            <div class="service-content">
              <h4>Bachelor of Education</h4>
              <p>Honours</p>
            </div>
          </div>
          <!-- End Service Icon 4 -->

        </div>
          
        </div>
      </div>
      <section class="container">
      
      <div class="panel panel-default">
        <div class="panel-title" style="
            padding: 25px;
        ">
          <h3 class="classic-title"><span>General structure of the courses : B.A. and B.Sc.</span></h3>
        </div>
        <div class="panel-body">
        
          <dl class="dl-horizontal">
        <dt>Language Group: </dt>
        <dd>
          <p>English (Compulsory)</p>
          <p>Bengali/Hindi/Alternative English (for those not having Bengali/Hindi at the plus two level)</p>
        </dd>
      </dl>
      <dl class="dl-horizontal">
        <dt>Subject</dt>
        <dd>Honours &amp; General combinations</dd>
      </dl>
      <dl class="dl-horizontal">
        <dt>Compulsory</dt>
        <dd>Environmental Studies</dd>
      </dl>
        </div>
      </div>
      </section>
      <div class="section" style="margin-top: 50px; padding-top:60px; padding-bottom:60px; border-top:1px solid #eee; border-bottom:1px solid #eee; background:#f9f9f9;">
        <div class="container">

          <div class="row">

            <!-- Start Left Side -->
            <div class="col-md-12">

              <!-- Start Big Heading -->
              <div class="big-title text-center">
                <h1><strong>Honours</strong> &amp; General</h1>
                <p class="title-desc">Subject combinations to choose from</p>
              </div>
              <!-- End Big Heading -->

              <!-- Start Icons Lists -->
              <div class="row">
                <div class="col-sm-5">
                  <h3 class="classic-title"><span>Bachelor of Arts</span></h3>
                  <div class="panel-group" id="accordion">

                    <!-- Start Toggle 1 -->
                    <div class="panel panel-course" ng-repeat="subject in artSubjects">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse-{{$index}}">
                          <i class="fa fa-angle-down control-icon"></i>
                           {{subject.honours}}
                          </a>
                        </h4>
                      </div>
                      <div id="collapse-{{$index}}" class="panel-collapse collapse" ng-class="$first ? 'in' : ''">
                        <div class="panel-body">
                          <ul class="icons-list">
                            <li><b>Combination of 2 subjects:</b></li>
                            <li ng-repeat="item in subject.general"><i class="fa fa-check-circle"></i>{{item}}</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- End Toggle 1 -->
                </div>
                  
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-5">
                  <h3 class="classic-title"><span>Bachelor of Science</span></h3>
                  <div class="panel-group" id="sci-accordion">

                    <!-- Start Toggle 1 -->
                    <div class="panel panel-course" ng-repeat="subject in scienceSubjects">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#sci-accordion" href="#sci-collapse-{{$index}}">
                          <i class="fa fa-angle-down control-icon"></i>
                           {{subject.honours}}
                          </a>
                        </h4>
                      </div>
                      <div id="sci-collapse-{{$index}}" class="panel-collapse collapse" ng-class="$first ? 'in' : ''">
                        <div class="panel-body">
                          <ul class="icons-list">
                          <li><b>Choose any 2 subjects:</b></li>
                            <li ng-repeat="item in subject.general"><i class="fa fa-check-circle"></i>{{item}}</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- End Toggle 1 -->
                </div>
                </div>
              </div>
              <!-- End Icons Lists -->

          
            </div>
            <!-- End Left Side -->

          </div>

        </div>
      </div>

      <div class="section" style="margin-top: 0px; padding-top:60px; padding-bottom:60px; border-bottom:1px solid #eee;">
        <div class="container">

          <div class="row">

            <!-- Start Left Side -->
            <div class="col-md-8 col-sm-12 col-md-offset-2">

              <!-- Start Big Heading -->
              <div class="big-title text-center">
                <h1><strong>B.B.A.</strong> (Honours) Course</h1>
                <p class="title-desc">General Structure, Total Marks : 2000 (600+700+700)</p>
              </div>
              <!-- End Big Heading -->
              <div class="parts">
                <h3 class="classic-title"><span>Part I</span></h3>
                <p>6 core papers of 100 marks each viz. :</p><br><br>
                <dl class="dl-horizontal">
                  <dt>Paper 1 </dt>
                  <dd>English Language and Business Communication (50+50)</dd>
                </dl>
                
                <dl class="dl-horizontal"><dt>Paper 2 </dt>
                <dd>Business Economics : Macro &amp; Micro-Econs &amp; Development Economics (50+50)</dd></dl>
                <dl class="dl-horizontal"><dt>Paper 3 </dt>
                <dd>Business Mathematics and Statistics (50+50)</dd></dl>
                <dl class="dl-horizontal"><dt>Paper 4 </dt>
                <dd>Business Law and Taxation (50+50)</dd></dl>
                <dl class="dl-horizontal"><dt>Paper 5 </dt>
                <dd>Principle of Accountancy and Auditing (50+50)</dd></dl>
                <dl class="dl-horizontal"><dt>Paper 6 </dt>
                <dd>Computer Fundamentals and Applications : Theory &amp; Practical (50+50)</dd></dl>
              </div>

              <div class="parts">
                <h3 class="classic-title"><span>Part II</span></h3>
                <p>6 core papers of 100 marks each + one term paper (100) viz. :</p><br><br>

                <dl class="dl-horizontal">
                  <dt>Paper 7 </dt>
                  <dd>Principles of Management and
                Organizational Behaviour (50+50)</dd>
                </dl>
                
                <dl class="dl-horizontal">
                  <dt>Paper 8 </dt>
                  <dd>Human Resource Management,
                Business Ethics and Environment
                (50+50)</dd>
                </dl>
                
                <dl class="dl-horizontal">
                  <dt>Paper 9 </dt>
                  <dd>Production Management and Materials
                Management (50+50)</dd>
                </dl>
                
                <dl class="dl-horizontal">
                  <dt>Paper 10 </dt>
                  <dd>Marketing and International Business
                (50+50)</dd>
                </dl>
                
                <dl class="dl-horizontal">
                  <dt>Paper 11 </dt>
                  <dd>Operations Research, Management
                Information System and Modern
                Office Management (50+50)</dd>
                </dl>
                
                <dl class="dl-horizontal">
                  <dt>Paper 12 </dt>
                  <dd>Cost and Management Accounting
                (50+50)</dd>
                </dl>
                
                <dl class="dl-horizontal">
                  <dt>Paper 13 </dt>
                  <dd>Term Paper and Presentation (50+50)</dd>
                </dl>
                
              </div>

              <div class="parts">
                <h3 class="classic-title"><span>Part III</span></h3>
                <p>4 Specialization papers of 100 marks each + 1 Project in specialization area (100 marks) +
                  Computer Applications (100 marks) and Comprehensive Viva (100 marks)</p>
              </div>
              
            </div>
        </div>
        </div>
      </div>

      <div class="section" style="margin-top: 0px; padding-top:60px; padding-bottom:60px; border-top:1px solid #eee; border-bottom:1px solid #eee; background:#f9f9f9;">
        <div class="container">

          <div class="row">

            <!-- Start Left Side -->
            <div class="col-md-8 col-sm-12 col-md-offset-2">

              <!-- Start Big Heading -->
              <div class="big-title text-center">
                <h1><strong>B.Com.</strong> (Honours) Course </h1>
                <p class="title-desc">Honours in Accounting &amp; Finance, TOTAL MARKS : 1800 (600+600+600)</p>
              </div>
              <div class="part">
                <h3 class="classic-title"><span>1<sup>st</sup> Year</span></h3>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Paper</th>
                      <th>Subject</th>
                      <th>Marks</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.1Chg</td>
                      <td>
                        Language <br>
                        Major Indian Language <br>
                        Communicative English</td>
                      <td>
                        100<br>
                        (50)<br>
                        (50)
                      </td>
                    </tr>
                    <tr>
                      <td>1.2Chg</td>
                      <td>Financial Accounting I</td>
                      <td>100</td>
                    </tr>
                    <tr>
                      <td>1.3Chg</td>
                      <td>Business Regulatory Framework </td>
                      <td>100</td>
                    </tr>
                    <tr>
                      <td>1.4Chg</td>
                      <td>Principles &amp; Practice of Management &amp; Business Communication </td>
                      <td>100 (50+50)</td>
                    </tr>
                    <tr>
                      <td>1.5Chg</td>
                      <td>Economics I </td>
                      <td>100</td>
                    </tr>
                    <tr>
                      <td>1.6Chg</td>
                      <td>Business Mathematics &amp; Statistics</td>
                      <td>100</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td><b>Total</b></td>
                      <td><b>600</b></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="part">
                <h3 class="classic-title"><span>2<sup>nd</sup> Year</span></h3>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Paper</th>
                      <th>Subject</th>
                      <th>Marks</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>2.1Chg</td>
                      <td>
                        Information Technology &amp; its Application in Business (Theory + Practical)</td>
                      <td>
                        100 (50) + (50)
                      </td>
                    </tr>
                    <tr>
                      <td>2.2Chg</td>
                      <td>Principles of Marketing &amp; e-Commerce</td>
                      <td>100 (50) + (50)</td>
                    </tr>
                    <tr>
                      <td>2.3Chg</td>
                      <td>Auditing </td>
                      <td>100</td>
                    </tr>
                    <tr>
                      <td>2.4Chg</td>
                      <td>Financial Accounting II</td>
                      <td>100 </td>
                    </tr>
                    <tr>
                      <td>2.5Chg</td>
                      <td>Direct &amp; Indirect Taxation</td>
                      <td>100</td>
                    </tr>
                    <tr>
                      <td>2.6Chg</td>
                      <td>Cost &amp; Management Accounting</td>
                      <td>100</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td><b>Total</b></td>
                      <td><b>600</b></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="part">
                <h3 class="classic-title"><span>3<sup>rd</sup> Year</span></h3>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Paper</th>
                      <th>Subject</th>
                      <th>Marks</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>3.1Chg</td>
                      <td>
                        Financial Accounting III</td>
                      <td>
                        100
                      </td>
                    </tr>
                    <tr>
                      <td>3.2Chg</td>
                      <td>Economics II &amp; Advanced Business Mathematics</td>
                      <td>100</td>
                    </tr>
                    <tr>
                      <td>3.3Chg</td>
                      <td>Indian Financial System and Financial Market Operations </td>
                      <td>100</td>
                    </tr>
                    <tr>
                      <td>3.4Chg</td>
                      <td>Financial Management</td>
                      <td>100 </td>
                    </tr>
                    <tr>
                      <td>3.5Chg</td>
                      <td>Project Work (Written + Viva-voce)</td>
                      <td>100 (50 + 50)</td>
                    </tr>
                    <tr>
                      <td>3.6Chg</td>
                      <td>Environmental Studies</td>
                      <td>100</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td><b>Total</b></td>
                      <td><b>600</b></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="section" style="margin-top: 0px; padding-top:60px; padding-bottom:60px; border-bottom:1px solid #eee;">
        <div class="container">

          <div class="row">

            <!-- Start Left Side -->
            <div class="col-md-8 col-sm-12 col-md-offset-2">

              <!-- Start Big Heading -->
              <div class="big-title text-center">
                <h1><strong>BACHELOR OF EDUCATION</strong> (Honours) - For Women Only</h1>
                <p class="title-desc">2 Years B.Ed. Course Following NCTE Regulations, 2014</p>
              </div>
              <!-- End Big Heading -->
              <p>The Department of Teacher Education of the college is recognized by the N.C.T.E. from 1995 vide order No.s E.R.C/7-
                  50 (ER-50-5.7)/2004/3/45 (1) dated November 2, 2004, ERC/WB.-SV/21/06/4780(1) dated December 8, 2006,
                  F.ERC/NCTE/APE 00245/B.Ed./(Revised Order)/2015/32387 DATED : 29.05.2015. Classes are held at 1, Urquhart
                  Square, and arrangements for Practice Teaching are made in different schools.</p><br><br>

              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>COURSE &amp; CODE  NAME </th>
                    <th>COURSE</th>
                    <th>MARKS</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="3" style="background: #eee;">SEMESTER-I</td>
                  </tr>
                  <tr>
                    <td>Course-I (1.1.1) </td>
                    <td>Child and Growing Up (1st &amp; 2nd half) </td>
                    <td>100</td>
                  </tr>
                  <tr>
                    <td>Course-II (1.1.2) </td>
                    <td>Contemporary India and Education (1st &amp; 2nd half) </td>
                    <td>100</td>
                  </tr>
                  <tr>
                    <td>Course-IV (1.1.4) </td>
                    <td>Language across the Curriculum(½) </td>
                    <td>50</td>
                  </tr>
                  <tr>
                    <td>Course-V (1.1.5) </td>
                    <td>Understanding Discipline and Subjects(½) </td>
                    <td>50</td>
                  </tr>
                  <tr>
                    <td>CourseEPC-1 (1.1EPC1)</td>
                    <td>Reading and Reflecting on Texts (½) </td>
                    <td>50</td>
                  </tr>
                  <tr>
                    <td colspan="3">Engagements with the Field: Tasks and Assignments for Courses-I,II,IV &amp; V</td>
                  </tr>
                  <tr>
                    <td colspan="3" style="background: #eee;">SEMESTER-II</td>
                  </tr>
                  <tr>
                  <td>Course-III (1.2.3) </td>
                  <td>Learning and Teaching (1st &amp; 2nd half) </td>
                  <td>100</td>
                  </tr>
                  <tr>
                  <td>Course-VII-(A) (1.2.7A)</td>
                  <td>Pedagogy of a School Subject Part-I (½) </td>
                  <td>50</td>
                  </tr>
                  <tr>
                  
                  <td>Course-VIII-(A) (1.2.8A)</td>
                  <td>Knowledge and Curriculum- Part-I (½) </td>
                  <td>50</td>
                  </tr>
                  <tr>
                  
                  <td>Course-IX (1.2.9) </td>
                  <td>Assessment for Learning (1st &amp; 2nd half) </td>
                  <td>50</td>
                  </tr>
                  <tr>
                  <td>Course EPC-2 (1.2EPC2)</td>
                  <td>Drama and Arts in Education(½) </td>
                  <td>50</td>
                  </tr>
                  <tr>
                    <td colspan="3">Engagements with the Field: Tasks and Assignments for Courses III,VII(A),VIII(A) &IX</td>
                  </tr>
                  <tr>
                    <td colspan="3" style="background: #eee;">SEMESTER-III</td>
                  </tr>
                  <tr>
                    <td>Course-VII-(B) (1.3.7B) </td>
                  <td>Pedagogy of a School Subject- Part-II(½) </td>
                  <td>50</td>
                  </tr>
                  <tr>
                    <td colspan="2">School Internship 20 weeks ( 04 Weeks at Semester-II and 16 Weeks at Semester-III)</td>
                    <td>250</td>
                  </tr>
                  <tr>
                    <td colspan="3" style="background: #eee;">SEMESTER-IV</td>
                  </tr>
                  <tr>
                  <td>Course-VI (1.4.6) </td>
                  <td>Gender, School and Society (½) </td>
                  <td>50</td>
                  </tr>
                  <tr>
                  <td>Course-VIII(B) (1.4.7B) </td>
                  <td>Knowledge and Curriculum- Part-II (½) </td>
                  <td>50</td>
                  </tr>
                  <tr>
                  <td>Course-X (1.4.10) </td>
                  <td>Creating an Inclusive School (½) </td>
                  <td>50</td>
                  </tr>
                  <tr>
                  <td>Course-XI (1.4.11) Optional</td>
                  <td>Vocational/Work Education (½) </td>
                  <td>50</td>
                  </tr>
                  <tr>
                  
                  <td>Course-XI (1.4.11) Optional</td>
                  <td>Health and Physical Education (½) </td>
                  <td>50</td>
                  </tr>
                  <tr>
                  
                  <td>Course-XI (1.4.11) Optional</td>
                  <td>Peace Education (½) </td>
                  <td>50</td>
                  </tr>
                  <tr>
                  
                  <td>Course-XI (1.4.11) Optional</td>
                  <td>Guidance and Counselling (½) </td>
                  <td>50</td>
                  </tr>
                  <tr>
                  
                  <td>Course-XI (1.4.11) Optional</td>
                  <td>Environmental and Population Education (½) </td>
                  <td>50</td>
                  </tr>
                  <tr>
                  
                  <td>CourseEPC-3 (1.4EPC3)</td>
                  <td>Critical Understanding of ICT (½) </td>
                  <td>50</td>
                  </tr>
                  <tr>
                  
                  <td>CourseEPC-4(1.4EPC4) </td>
                  <td>Understanding the Self (½) </td>
                  <td>50</td>
                  </tr>
                  <tr>
                    <td colspan="3">Engagements with the Field: Tasks and Assignments for Courses- VI,VIII(B),X &amp; XI</td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
      </div>
      </div>

      <div class="section" style="margin-top: 0px; padding-top:60px; padding-bottom:60px; border-bottom:1px solid #eee;">
        <div class="container">

          <div class="row">

            <!-- Start Left Side -->
            <div class="col-md-8 col-sm-12 col-md-offset-2">

              <!-- Start Big Heading -->
              <div class="big-title text-center">
                <h1><strong>BACHELOR OF EDUCATION</strong> </h1>
                <p class="title-desc">Academic Calender</p>
              </div>

              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="text-align: center;">Semester </th>
                    <th>Duration (Tentative) </th>
                    <th width="50%">Activities</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="background: #eee; text-align: center;">I</td>
                    <td colspan="2" style="background: #eee;">1st July to 31st December (1st Year)</td>
                  </tr> 
                  <tr>
                    <td></td>
                    <td>1st July to 15th December</td> 
                    <td>Theory Class, Assignments and EPC 1</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>16th December to 31st December</td> 
                    <td>Examination: Theory, Assignments and EPC 1 Practical</td>  
                  </tr>
                  <tr>
                    <td style="background: #eee; text-align: center;">II</td>
                    <td colspan="2" style="background: #eee;">1st January to 30th June (1st Year)</td>
                  </tr> 
                  <tr>
                    <td></td>
                    <td>1st January to 15th April </td>
                    <td>Theory Class, Assignments and EPC 2</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>16th April to 15th May </td>
                    <td>Teaching Internship (No External Evaluation)</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>16th May to 16th June</td>
                    <td>Discussion with the Teacher Educators and <br>other Co-curricular activities</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>16th June to 30th June</td>
                    <td>Examination: Theory, Assignments and EPC 2 Practical</td>
                  </tr>
                  <tr>
                    <td style="background: #eee; text-align: center;">III</td>
                    <td colspan="2" style="background: #eee;">1st July to 31st December (2nd Year)</td>
                  </tr> 
                  <tr>
                    <td></td>
                    <td>1st July to 15th August</td>
                    <td>Orientation in College for Pedagogy
                        files of School subjects and Internship
                        Teaching Skills.
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>16th August to 15th December</td>
                    <td>Four months School Internship</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>16th December to 31st December</td>
                    <td>Evaluation of School Internship</td>
                  </tr>
                  <tr>
                    <td style="background: #eee; text-align: center;">IV</td>
                    <td colspan="2" style="background: #eee;">1st January to 30th June (2nd Year)</td>
                  </tr> 
                  <tr>
                    <td></td>
                    <td>1st January to 15th April</td>
                    <td>Theory Class</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>16th April to 15th June</td>
                    <td>Field work including optional
course- EPC 3 and EPC 4</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>16th June to 30th June</td>
                    <td>Examination: Theory, Assignments and
EPC 3 and EPC 4 Practical</td>
                  </tr>
                   
                  
                   
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Start banner Section -->
    <?php include ('php/includes/siteFooter.php') ?>
    <!-- End banner Section -->

</div>
<!-- End Full Body Container -->



 <?php include("php/includes/scripts.php"); ?>
<script>
        
    $(function(){
        selectPage('academics');
    })
</script>
</body>

</html>