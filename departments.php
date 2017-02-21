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
<div id="container" class="exam">


    <!-- Start Header Section -->
    <?php include ('php/includes/siteHeader.php') ?>
    <!-- End Header Section -->


   <!-- Start Page Banner -->
    <div class="page-banner" style="padding:40px 0; background: url(images/slide-02-bg.jpg) center #f9f9f9;">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Departments</h2>
            <p></p>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="#">Home</a></li>
              <li>Departments</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->
    

    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="page-content">
          <div class="error-page">
            <h1>Coming Soon</h1>
            <br><br>
            <h3>Currently we're developing the page</h3>
            <br><br>
            <p>We'll update you once the page is completed</p>
            <div class="text-center"><a href="/" class="btn-system btn-small">Back To Home</a></div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Content -->
    
    <!-- Start banner Section -->
    <?php include ('php/includes/siteFooter.php') ?>
    <!-- End banner Section -->

</div>
<!-- End Full Body Container -->



 <?php include("php/includes/scripts.php"); ?>
<script>
        
    $(function(){
        selectPage('department');
    })
</script>
</body>

</html>