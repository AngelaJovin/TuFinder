<?php 
// session_start();

require_once("includes/functions.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>TuFinder</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!-- animation css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- aos -->
  <link rel="stylesheet" href="plugins/aos/aos.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="plugins/venobox/venobox.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body>
  

<!-- header -->
<header class="fixed-top header">
  <!-- top header -->
  <?php

require_once("includes/topHeader.php");
?>

  <!-- navbar -->
  
  <div class="navigation w-100">
    <?php
    require_once("includes/navigation.php");
    check_login();

    
    
$getEmail=$_GET["k"];
$userEmail=$_SESSION["email"];


    ?>
  </div>

</header>
<!-- /header -->
<!-- Modal -->
<?php

require_once("includes/loginSignUP.php");
?>

<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="teacher.html">Tutor</a></li>
        
        </ul>
       
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- teacher details -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-5 mb-5">
        <img class="img-fluid w-100" src="images/teachers/teacher-1.jpg" alt="teacher">
      </div>
      <div class="col-md-6 mb-5">
        <h3>John Doe</h3>
     
       
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h4 class="mb-4">CONTACT INFO:</h4>
            <ul class="list-unstyled">
              <li class="mb-3"><a class="text-color" href="mailto:johndoe@email.com"><i class="ti-email mr-2"></i>johndoe@email.com</a></li>
              <li class="mb-3"><a class="text-color" href="callto:+120345876"><i class="ti-mobile mr-2"></i>+120 345 876</a></li>
              <li class="mb-3"><a class="text-color" href="#"><i class="ti-facebook mr-2"></i>john Doe</a></li>
              <li class="mb-3"><a class="text-color" href="#"><i class="ti-twitter-alt mr-2"></i>john Doe</a></li>
            
            </ul>
          </div>
          <div class="col-md-6">
            <h4 class="mb-4">SUMMARY OF SUBJECTS</h4>
            <ul class="list-unstyled">
              <li class="mb-3">Arts</li>
              <li class="mb-3">Science</li>
              <li class="mb-3">Math</li>
            </ul>
          </div>
          <div class="col-12">
        <h4 class="mb-4">BIOGRAPHY</h4>
        <p class="mb-5">I am Teacher at Shalom primary school and can teach Math and Science to Primary Students only of Grade 4 to 7.</p>
      </div>
      <?php
        if($_SESSION["email"]==$getEmail){
          ?>
           <a class="btn btn-primary" href="#">Edit  Profile</a>
           <?php
        }
      ?>
 
        </div>
      </div>
      
    </div>
   
  </div>
</section>


<footer>
 
  <!-- copyright -->
  <div class="copyright py-4 bg-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 text-sm-left text-center">
          <p class="mb-0">Copyright
            <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script> 
            <a href="https://TuFinder.com">TuFinder.com</a> . All Rights Reserved.</p>
        </div>
      
      </div>
    </div>
  </div>
</footer>

<!-- /footer -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="plugins/venobox/venobox.min.js"></script>
<!-- mixitup filter -->
<script src="plugins/mixitup/mixitup.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>