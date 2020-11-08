<?php
// session_start();

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
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
        
            <li class="nav-item">
              <a class="nav-link" href="teacher.html">Tutors</a>
            </li>
              
             <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Others
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="forms.html">Registration Forms</a>
                <a class="dropdown-item" href="studymaterials.html">Study Materials</a>
               
                
              </div>
            </li>
            
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->



<!-- hero slider -->
<section class="hero-section overlay bg-cover"  data-background="images/banner/banner-1.jpg">
  <div class="container">
    <div class="hero-slider">
      <!-- slider item -->
       <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">Connect with tutors easily.</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".4">Contact a professional tutor to start in person or online tutoring.Sign up  as a parent/tutor/student and schedule your lessons.</p>
        </div>
      </div>
  </div>
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">Share,purchase and sell study materials</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".4">Students and teachers can share and buy study materials like pamphlets,projects and reports.</p>
        </div>
      </div>
  </div>
      <!-- slider item -->
  </div>
</div>
</section>
   
<!-- /hero slider -->

<!-- about us -->
<section class="section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-2 order-md-1">
        <h2 class="section-title">About Us</h2>
        <p>ScuHub is a platform for everybody;Students,Parents and Teachers too.You can connect with tutors near you or from anywhere as well as access educational materials like books,pamphlets,reports,projects and more.
        With ScuHub you can also purchase,fill and submit school registration forms for primary,secondary and high school students.
        ScuHub just makes learning easy and anywhere.Enjoy our Services.</p>
        <a href="about.html" class="btn btn-primary">Explore More</a>
      </div>
      <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
        <img class="img-fluid w-100" src="images/about/hero-bg.jpg" alt="about image">
      </div>
    </div>
  </div>
</section>

<!-- banner-feature -->
<section class="section">	
  <div class="container">
      	 <div class="col-12">
      	 <center><h2 class="section-title">Our Services</h2></center>
      	</div>
         <div class="row  feature-blocks bg-white justify-content-between">        	
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center ">
            <i class="ti-book mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">Study Materials</h3>
            <p>Students and Teachers can share and buy study materials like pamphlets,books,projects and reports from any subject</p>
          </div>
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center ">
            <i class="ti-blackboard mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">Tutoring</h3>
            <p>You can connect with Tutors near you or from other areas and contact them for help in any subject.Sign up as a parent or student to begin scheduling your lessons.
            </p>
          </div>
           <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center ">
            <i class="ti-write mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">Registration forms</h3>
            <p>Parents and students can get registration forms of primary,secondary and high schools from our website and easily fill them and submit them.
            </p>
          </div>
           <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center ">
            <i class="ti-agenda mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">Others</h3>
            <p>Parents and Students will be able to contact the Tutors only after they sign up and Create accounts and Only Tutors with Accounts will be able to see the students and parents that need the Tutoring services.
            </p>
          </div>
       
        </div>
      </div>
   
</section>
<!-- /banner-feature -->

<section class="section overlay bg-footer">
  <div class="container">
    <div class="row">
     <div class="col-12 text-center">
        <h6 class="text-gray font-secondary mb-0">Get enrolled in schools easily</h6>
        <h2 class="section-title text-gray">Wherever you are you can access school registration forms,fill and submit them.</h2>
        <a href="books.html" class="btn btn-primary-outline">Explore more</a>
      </div>
    </div>
  </div>
</section>

<!-- extra -->
<section class="section ">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h6 class="text-gray font-secondary mb-0">Access Study Materials</h6>
        <h2 class="section-title text-gray">Get reliable study materials like pamphlets,books and the like from our teachers. </h2>
        <a href="studymaterials.html" class="btn btn-primary-outline">Explore more</a>
      </div>
    </div>
  </div>
</section>
<!-- /extra -->
<section class="section " id="tutoring">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h6 class="text-white font-secondary mb-0">Join Our tutoring community</h6>
        <h2 class="section-title text-white">Whatever the subject we can help,wherever you are our services are available.</h2>
        <a href="teacher.html" class="btn btn-primary-outline">Join now</a>
      </div>
    </div>
  </div>
</section>

<!--why us-->
<section class="section bg-cover" data-background="images/backgrounds/success-story.jpg">
  <div class="container">
    <div class="row">
     
      <div class="col-lg-6 col-sm-8">
        <div class="bg-white p-5">
          <h2 class="section-title">Why Us</h2>
          <p>With ScuHub there is a wide choice of Tutors whether for online or in person tutoring and also the whole process of connecting with a Tutor is simple,quick and straight forward.
          You can contact as many tutors as you like and select the perfect Tutor for yourself or for your group.
      Also registration forms for different schools can be accessed easily,fill and submit in a simpler way. </p>
           <a href="about.html" class="btn btn-primary">Explore More</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /why us-->



<!-- news -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex align-items-center section-title justify-content-between">
          <h2 class="mb-0 text-nowrap mr-3">See What's New</h2>
          <div class="border-top w-100 border-primary d-none d-sm-block"></div>
               </div>
      </div>
    </div>
    <p>
    <div class="row justify-content-center">
 
  <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/banner/advert2.jpg" alt="Post thumb">
      <div class="card-body">
      
        <ul class="list-inline mb-3">
          <!-- post date -->
          <li class="list-inline-item mr-3 ml-0">August 28, 2020</li>
          <!-- author -->
          <li class="list-inline-item mr-3 ml-0">Primary Schools,Tanzania </li>
        </ul>
       
          <h4 class="card-title">Beginning of Grade Seven Exams.</h4>
     
        <p class="card-text"></p>
      
      </div>
    </div>
  </article>
 
  <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/banner/advert1.jpg" alt="Post thumb">
      <div class="card-body">
       
        <ul class="list-inline mb-3">
          <!-- post date -->
          <li class="list-inline-item mr-3 ml-0">December 18, 2020</li>
          <!-- author -->
          <li class="list-inline-item mr-3 ml-0">Kimara,Dar es Salaam</li>
        </ul>
       
          <h4 class="card-title">Graduation Ceremony at St.Anne-Marie Primary .</h4>
      
        <p class="card-text"></p>
     
      </div>
    </div>
  </article>

  <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/banner/advert3.jpg" alt="Post thumb">
      <div class="card-body">
       
        <ul class="list-inline mb-3">
          <!-- post date -->
          <li class="list-inline-item mr-3 ml-0">August 24, 2020</li>
          <!-- author -->
          <li class="list-inline-item mr-3 ml-0">Marian,Bagamoyo Pwani</li>
        </ul>
       
          <h4 class="card-title">Orientation Program for the new students</h4>
 
     
      </div>
    </div>
  </article>
</div>
</p>
</div>
</section>



<!-- contact -->
<section class="section bg-white" id="contact">
  <div class="container">
   
     <div class="row feature-blocks bg-gray justify-content-between">
       <div class="col-12">
         <center><h2 class="section-title">Contact Us</h2>
          <p>Feel free to contact us if you have any concern,just fill the form below.</p></center>
        </div>

      <div class="col-12">
        <form action="#">
          <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Your Name">
          <input type="email" class="form-control mb-3" id="mail" name="mail" placeholder="Your Email">
          <input type="text" class="form-control mb-3" id="subject" name="subject" placeholder="Subject">
          <textarea name="message" id="message" class="form-control mb-3" placeholder="Your Message"></textarea>
          <center><button type="submit" value="send" class="btn btn-sm btn-primary">SEND MESSAGE</button></center>
          <p></p>
        </form>
      </div>
     </div>
    </div>
 
</section>
<!-- /contact -->




<!-- footer -->
 <!-- footer content -->
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
