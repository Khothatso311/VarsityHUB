<!DOCTYPE html>
<html class="no-js" lang="<?php echo e(app()->getLocale()); ?>">
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('images/logos/Download.png')); ?>">
     <title>Lesotho | Adventure</title>

        <!-- Fonts -->
     

        <!-- Styles -->
		
	<!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo e(asset(' assets/vendor/aos/aos.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset(' assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet">
	
		
		<script>
window.onload=(function(){
 var canvas = document.getElementById("canvas");
 var ctx = canvas.getContext("2d");
 ctx.lineWidth = 2;
 ctx.font = '14px verdana';
 var PI2 = Math.PI * 2;
 var myColor = ["Green", "orange", "Blue"];
 var myData = [30, 60, 10];
 var cx = 150;
 var cy = 150;
 var radius = 100;
 pieChart(myData, myColor);
 function pieChart(data, colors) {
 var total = 0;
 for (var i = 0; i < data.length; i++) {
 total += data[i];
 }
 var sweeps = []
 for (var i = 0; i < data.length; i++) {
 sweeps.push(data[i] / total * PI2);
 }
 var accumAngle = 0;
 for (var i = 0; i < sweeps.length; i++) {
 drawWedge(accumAngle, accumAngle + sweeps[i], colors[i], data[i]);
 accumAngle += sweeps[i];
 }
}
 function drawWedge(startAngle, endAngle, fill, label) {
 // draw the wedge
 ctx.beginPath();
 ctx.moveTo(cx, cy);
 ctx.arc(cx, cy, radius, startAngle, endAngle, false);
 ctx.closePath();
 ctx.fillStyle = fill;
 ctx.strokeStyle = 'black';
 ctx.fill();
 ctx.stroke();
 // draw the label
 var midAngle = startAngle + (endAngle - startAngle) / 2;
 var labelRadius = radius * .65;
 var x = cx + (labelRadius) * Math.cos(midAngle);
 var y = cy + (labelRadius) * Math.sin(midAngle);
 ctx.fillStyle = 'white';
 ctx.fillText(label, x, y);
 }
}); // end $(function(){});

</script>

		
		
    </head>
<body>

     <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
		
		<!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Alex Smith</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->   
		

		  <?php echo $__env->yieldContent('content'); ?>
			
  <!-- Vendor JS Files -->
  <script src="<?php echo e(asset('assets/vendor/aos/aos.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/php-email-form/validate.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/purecounter/purecounter.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/swiper/swiper-bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/typed.js/typed.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/waypoints/noframework.waypoints.js')); ?>"></script>

  <!-- Template Main JS File -->
  <
    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
		</body>
		</html>