<?php 
// session_start();
require_once("includes/db.php");
require_once("includes/functions.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>ScuHub</title>

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
  
  <!-- navbar -->
  <div class="navigation w-10">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light p-0">
        <a class="navbar-brand" href="index.html"> <h2 class="section-title text-white">ScuHub</h2></a>
        <button class="navbar-toggler rounded-1" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
        
           <li class="nav-item dropdown view active">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Clients
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="Parent.html">Parents</a>
                <a class="dropdown-item" href="Student.html">Students</a>
               
                
              </div>
            </li>
            

     
            <li class="nav-item ">
              <a class="nav-link" href="index.html #contact">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-1 border-0 p-4" >
            <div class="modal-header border-0 ">
                <h3>Edit Profile</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" class="row">
                    
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="othersubjects" name="othersubjects" placeholder="Other Subjects" required="">
                    </div>
                     <div class="col-12 ">
                      <label for="cv">Upload CV:</label>
                        <input type="file" class="form-control mb-3" id="cv" name="cv" required="" >
                    </div>
                     <div class="col-12">
                      <label for="pp">Profile Pic:</label>
                        <input type="file" class="form-control mb-3" id="image" name="profilepic" placeholder="Profile Pic"  capture  required="">
                    </div>
                    <div class="col-12">
                       <textarea name="message" id="message" class="form-control mb-3" placeholder="Biography" required=""></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" value="send" class="btn btn-primary">SAVE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

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
        </div>
         <a class="btn btn-primary"  href="#" data-toggle="modal" data-target="#loginModal" >Edit Profile</a>
      </div>
      
    </div>
   
  </div>
</section>


<footer>
 
  <div class="footer bg-footer section border-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
          <!-- logo -->
          <a class="logo-footer" href="index.html"> <h2 class="section-title text-white">ScuHub</h2></a>
          <ul class="list-unstyled">
            <li class="mb-2">Sayansi,Kijitonyama Dar es Salaam Tanzania</li>
            <li class="mb-2">+255 657 308 690</li>
            <li class="mb-2">scuhub.co.tz</li>
          </ul>
        </div>
        <!-- company -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
         
          <ul class="list-unstyled">
             <li class="mb-3"><a class="text-color" href="index.html">Home</a></li>
            <li class="mb-3"><a class="text-color" href="about.html">About Us</a></li>
            <li class="mb-3"><a class="text-color" href="about.html #team">Our Team</a></li>
            <li class="mb-3"><a class="text-color" href="index.html #contact">Contact</a></li>
          
          </ul>
        </div>


        <!-- links -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
         
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="advertisewithus.html">Sell with us</a></li>
            <li class="mb-3"><a class="text-color" href="privacypolicy.html">Privacy Policy</a></li>
            <li class="mb-3"><a class="text-color" href="termsofuse.html">Terms of Use</a></li>
            <li class="mb-3"><a class="text-color" href="faqs.html">FAQs</a></li>
          </ul>
        </div>
       
      </div>
    </div>
  </div>
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
            ©  <a href="https://ScuHub.co.tz">ScuHub.co.tz</a> . All Rights Reserved.</p>
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
