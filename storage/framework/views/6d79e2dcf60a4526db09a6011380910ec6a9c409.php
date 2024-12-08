<!DOCTYPE html>
<html class="no-js" lang="<?php echo e(app()->getLocale()); ?>">
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('images/logos/Download.png')); ?>">
         <title>Lesotho | Adventure</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
		
		<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('styles/css/vendor.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('styles/css/utility.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('styles/css/app.css')); ?>" rel="stylesheet">
	
		
		
		
		
    </head>
<body class="config">

    <div class="preloader is-active">
        <div class="preloader__wrap">

                 <img class="preloader__img" src="./images/loading.gif" alt=""></div>
    </div>
	
    <!--====== Main App ======-->
    <div id="app">

        <!--====== Main Header ======-->
		
        <header class="header header--style-1">

            <!--====== Nav 1 ======-->
            <nav class="megamenu navbar navbar-default "  style="background-color:black;">
                <div class="container">
					
                    <!--====== Primary Nav ======-->
                    <div class="primary-nav">
					
                        <!--====== Main Logo ======-->

                        <a class="main-logo" href="#"  style="color:darkgreen;">

                            <img src="./images/logos/RSS-2.png" alt="">Lesotho Adventure System</a>
                        <!--====== End - Main Logo ======-->

                        <!--====== Search Form ======-->
                        
						<form class="main-form">

                            <label for="main-search"></label>

                            <input class="input-text input-text--border-radius input-text--style-1" type="text" id="main-search" placeholder="Search" style="border: 2px solid orange;">

                            <button class="btn btn--icon fas fa-search main-search-button" type="submit" style="margin-top:5px;"></button></form>
							
                        <!--====== End - Search Form ======-->


                        <!--====== Dropdown Main plugin ======-->
                        <div class="menu-init" id="navigation">

                           

                            <!--====== Menu ======-->
                            <div class="ah-lg-mode"  >

                                <span class="ah-close">✕ Close</span>

                                <!--====== List ======-->
                                <ul class="ah-list ah-list--design1 ah-list--link-color-secondary">
                                  
                                   <li data-tooltip="tooltip" data-placement="left" title="facebook">

                                            <a class="s-fb--color-hover" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li data-tooltip="tooltip" data-placement="left" title="twitter">

                                            <a class="s-tw--color-hover" href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li data-tooltip="tooltip" data-placement="left" title="Youtube">

                                            <a class="s-youtube--color-hover" href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li data-tooltip="tooltip" data-placement="left" title="whatsapp">

                                            <a class="s-insta--color-hover" href="#"><i class="fab fa-whatsapp"></i></a></li>

											
											
											
                                    <li data-tooltip="tooltip" data-placement="left" title="Mail">

                                        <a href="mailto:4omarketls@gmail.com"><i class="far fa-envelope"></i></a></li>
										
										
										  <li class="has-dropdown" data-tooltip="tooltip" data-placement="left" title="Account">

                                        <a><i class="far fa-user-circle"></i></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:120px">
                                            <li>

                                                <a href="<?php echo e(url('/register')); ?>"><i class="fas fa-user u-s-m-r-6"></i>

                                                    <span>Registration</span></a></li>
                                        
                                            <li>

                                                <a href="<?php echo e(url('/login')); ?>"><i class="fas fa-lock u-s-m-r-6"></i>

                                                    <span>Signin</span></a></li>
                                            
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                </ul>
                                <!--====== End - List ======-->
                            </div>
                            <!--====== End - Menu ======-->
                        </div>
                        <!--====== End - Dropdown Main plugin ======-->
                    </div>
                    <!--====== End - Primary Nav ======-->
                </div>
            </nav>
            <!--====== End - Nav 1 ======-->


            <!--====== Nav 2 ======-->




                            
            <!--====== End - Nav 2 ======-->
        </header>
        <!--====== End - Main Header ======-->
		
		
        <?php echo $__env->yieldContent('content'); ?>
		</div>
		<!--====== Google Analytics: change UA-XXXXX-Y to be your site's ID ======-->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>

    <!--====== Vendor Js ======-->
    <script src="<?php echo e(asset('styles/js/vendor.js')); ?>"></script>
	<script>
	// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
    navbar.classList.add("sticky")
 
}
</script>

    <!--====== jQuery Shopnav plugin ======-->
     <script src="<?php echo e(asset('styles/js/jquery.shopnav.js')); ?>"></script>

    <!--====== App ======-->
    <script src="<?php echo e(asset('styles/js/app.js')); ?>"></script>
		
		
		 <script src="<?php echo e(asset('js/app.js')); ?>"></script>
		
		
		</body>
		</html>