<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Lesotho | Adventure</title>

  <!-- Favicons -->
  <link href="images/logos/download.png" rel="icon">
  <link href="images/logos/download.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  
    
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
 
  <!-- =======================================================
  * Template Name: iPortfolio - v3.0.1
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  
  	
 <script type="text/javascript">

  MyBanners=new
         Array('assets/img/ads/masitise5.png','assets/img/ads/drakensberg mokhotlong.jpg','assets/img/ads/thaba bosiu travel info.jpg','assets/img/ads/thaba bosiu travel information.jpg','assets/img/ads/masitite2.jpg','assets/img/ads/sehlabathebe national park1.png','assets/img/ads/mountmoorosi2.jpg','assets/img/ads/mountmoorosi3.jpg','assets/img/ads/ld.jpg','assets/img/ads/KATZE.jpg','assets/img/ads/C.jpg',
'assets/img/ads/masitise5.png','assets/img/ads/masitise.jpg','assets/img/ads/dinosaur leribe footprint.jpg','assets/img/ads/MKG.jpg','assets/img/ads/coats.png','assets/img/ads/homegirl.png','assets/img/ads/flag.png','assets/img/ads/MAP4.png','assets/img/ads/lesotho mokorotlo.jpg')
banner=0
function ShowBanners()
{ 
    if (document.images)
{ 
    banner++
if (banner==MyBanners.length) {
banner=0}
document.ChangeBanner.src=MyBanners[banner]
setTimeout("ShowBanners()",5000)
} 

}

        </script>
	
  
     </head>

       <body  onload="ShowBanners()">

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/testimonials/masitise5.png" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="#"><i class="bi bi-binoculars-fill" style="color:orange;"></i> Lesotho Adventure</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

	  <?php if(Route::has('login')): ?>
      <nav id="navbar" class="nav-menu navbar">
        <ul>
		<?php if(Auth::check()): ?>
          <li><a href="<?php echo e(url('/home')); ?>" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
            <?php else: ?>
          <li><a href="<?php echo e(url('/login')); ?>" class="nav-link scrollto"><i class="bi bi-box-arrow-in-right"></i> <span>Login</span></a></li>
          <li><a href="<?php echo e(url('/register')); ?>" class="nav-link scrollto"><i class="bi bi-person-plus-fill"></i> <span>Registration</span></a></li>
              <?php endif; ?>
		  <li><a href="<?php echo e(url('/excel')); ?>" class="nav-link scrollto"><i class="bi bi-file-excel-fill"></i> <span>Upload Excel File</span></a></li>
           <li><a href="<?php echo e(url('/pdf')); ?>" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Download pdf</span></a></li>
          <li><a href="<?php echo e(url('/service')); ?>" class="nav-link scrollto"><i class="bx bx-server" style="color:orange"></i> <span>Services</span></a></li>
          
		  
           <?php if(Auth::guest()): ?>
		  <?php else: ?>
          <li>
	     <a href="<?php echo e(route('logout')); ?>" class="nav-link scrollto" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
       <i class="bi bi-box-arrow-in-left"></i>Sign out
              </a>

      <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
         <?php echo e(csrf_field()); ?>

          </form>
	  </li>
            
			<?php endif; ?>

	   </ul>
	
		
      </nav><!-- .nav-menu -->
	     <?php endif; ?>
	  
    </div>
  </header><!-- End Header -->



  
 <?php echo $__env->yieldContent('content'); ?>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Restful API JS File -->
  <script src="http://localhost/rest-api/lesotho-adventure.js"></script>
   <script src="http://localhost/rest-api/pdf.js"></script>
  
  <script src="js/jquery.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
 <!--====== jQuery Shopnav plugin ======-->
     <script src="<?php echo e(asset('styles/js/jquery.shopnav.js')); ?>"></script>

    <!--====== App ======-->
    <script src="<?php echo e(asset('styles/js/app.js')); ?>"></script>
		
		
		 <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>

</html>