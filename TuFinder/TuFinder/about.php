<?php
// session_start();

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

    ?>
  </div>

  
</header>
<!-- /header -->



<!-- Modal for login and signup is here -->
<?php

require_once("includes/loginSignUP.php");
?>
<!--page title-->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary">About Us</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
         <p class="text-lighten">TuFinder helps you connect with the best private tutors  </br>near you in any subject.Contact a professional/Peer tutor to </br>schedule your lessons start in person or online tutoring.</p>
         <div class="row">
          <div class="col-lg-6">
          
 <ul class="list-inline custom-breadcrumb">
          <li class="h2 text-primary font-secondary" >Our Services</li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
           
            <div >
              <h4 class="text-lighten">PARENTS</h4>
            <p class="text-white"><em>Sign up and create account where you will be able to edit your profile,provide much information as possible to help you access the right tutors for your child </em></p>
              
            </div>
             <div >
              <h4  class="text-lighten">STUDENTS</h4>
              <p class="text-white"><em>Sign up and create account where you will be able to edit your profile,provide much information as possible to help you access the right tutors for yourself</em></p>
              
            </div>
             <div >
              <h4  class="text-lighten">TUTORS</h4>
              <p class="text-white"><em>Sign up and create account where you will be able to edit your profile,provide much information as possible to help parents and students access you easily</em></p>
             
            </div>
          </div>
         
            </div>
            <h5>NOTE</h5>
             <p class="text-lighten">Parents and Students will be able to contact the </br>Tutors only after they sign up and Create accounts</br> and Only Tutors with Accounts will be able to see the </br>students and parents that need the Tutoring services.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- about -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <img class="img-fluid w-100 mb-4" src="images/about/about-page.jpg" alt="about image">
      </div>
    </div>
  </div>
</section>
<!-- /about -->


<!-- why Us -->
<section class="section bg-cover" data-background="images/backgrounds/success-story.jpg">
  <div class="container">
    <div class="row">
      
      <div class="col-lg-6 col-sm-8">
        <div class="bg-white p-5">
          <h2 class="section-title">Why Us</h2>
          <p>With Tufinder there is a wide choice of Tutors whether for online or in person tutoring and also the whole process of connecting with a Tutor is simple,quick and straight forward.You can contact as many tutors as you like and select the perfect Tutor for yourself or for your group.</p>
          <p>Whatever the subject we can help.Wherever you are,our services are accessible.Our services are for everyone.Parents,students and Tutors.</p>
           <a href="teacher.html" class="btn btn-primary-outline">Find a Tutor</a>
        </div>
      </div>
    </div>
  </div>.
</section>
<!-- /why Us -->

<!-- team -->
<section class="section">
    <div class="container">
      <div class="row">
        <div class="col-12">
         <center> <h2 class="section-title">Our Team</h2></center>
        </div>
        <!-- team -->
        <div class="col-lg-3 col-md-6 align-items-stretch ">
          <div class="card border-0 rounded-0 hover-shadow">
            <img class="card-img-top rounded-2" src="images/team/team-1.jpg" alt="teacher">
            <div class="card-body">
              
                <h4 class="card-title">Angela Jovin</h4>
            
              <div class="d-flex justify-content-between">
                <span>System Designer</span>
                <ul class="list-inline">
                 
                  <li class="list-inline-item"><a class="text-color" href="https://github.com/AngelaJovin"><i class="ti-github"></i></a></li>
                  <li class="list-inline-item"><a class="text-color" href="https://www.instagram.com/_being_angie_/"><i class="ti-instagram"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

     
        <!-- team -->
        <div class="col-lg-3 col-md-6 align-items-stretch ">
          <div class="card border-0 rounded-0 hover-shadow">
            <img class="card-img-top rounded-2" src="images/team/team-2.jpg" alt="teacher">
            <div class="card-body">
              
                <h4 class="card-title">Dorice Deodatus</h4>
            
              <div class="d-flex justify-content-between">
                <span>Finance Manager</span>
                <ul class="list-inline">
                  <li class="list-inline-item"><a class="text-color" href="https://web.facebook.com/dorice.kakwaya"><i class="ti-facebook"></i></a></li>
              
                  <li class="list-inline-item"><a class="text-color" href="https://www.instagram.com/n.i.v.e.r.a/"><i class="ti-instagram"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

         <!-- team -->
         <div class="col-lg-3 col-md-6 align-items-stretch ">
          <div class="card border-0 rounded-0 hover-shadow">
            <img class="card-img-top rounded-2" src="images/team/team-3.jpg" alt="teacher">
            <div class="card-body">
              
                <h4 class="card-title">James Mushi</h4>
              
              <div class="d-flex justify-content-between">
                <span>System Developer</span>
                <ul class="list-inline">
                 
                  <li class="list-inline-item"><a class="text-color" href="https://github.com/itsmushi"><i class="ti-github"></i></a></li>
                 <li class="list-inline-item"><a class="text-color" href="https://www.instagram.com/itsmushijames/"><i class="ti-instagram"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>


         <!-- team -->
         <div class="col-lg-3 col-md-6 align-items-stretch ">
          <div class="card border-0 rounded-0 hover-shadow">
            <img class="card-img-top rounded-2" src="images/team/team-4.jpg" alt="teacher">
            <div class="card-body">
              
                <h4 class="card-title"> January Paul</h4>
              
              <div class="d-flex justify-content-between">
                <span>System Developer</span>
                <ul class="list-inline">
                  
                  <li class="list-inline-item"><a class="text-color" href="https://github.com/domel06"><i class="ti-github"></i></a></li>
                 <li class="list-inline-item"><a class="text-color" href="https://www.instagram.com/domel_bura/"><i class="ti-instagram"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <!-- /team -->


<!-- footer -->
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
             <a href="https://Tu-finder.com">TuFinder.com</a>.All Rights Reserved.</p>
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
