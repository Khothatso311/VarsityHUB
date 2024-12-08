<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('images/logo/System folder.png')); ?>">
    <title>MyFile-App</title>
 
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
 <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" style="background-color:rgb(99, 140, 255); color:#fff;">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    
					<img src="<?php echo e(asset('images/logo/folder.png')); ?>" class="img-fluid"  width="45" height="45" alt="">
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                       <h4 style="color:rgb(99, 203, 0);"><i class="bi bi-file-earmark-text-fill" ></i>
                             <b>MyFile</b>
							  </h4>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right" >
                        <!-- Authentication Links -->
                        <?php if(Auth::guest()): ?>
                            <li><a href="<?php echo e(route('login')); ?>" style=" color:#fff;"><i class="bi bi-box-arrow-in-right" ></i> Login</a></li>
                            <li><a href="<?php echo e(route('register')); ?>" style="color:orange;"><i class="bi bi-person-plus-fill" ></i> New Account</a></li>
                             <?php else: ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                   <i class="bi bi-person-plus-fill" ></i> <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="bi bi-box-arrow-in-left"></i>Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" style="color:#fff;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="bi bi-folder-fill" style="color:yellow"></i> Display Files<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="<?php echo e(url('/document',Auth::user()->id)); ?>" style="color:green;"><b><i class="bi bi-folder-fill" style="color:yellow"></i> Documents</b></a>

                                      
                                    </li>
                                   <li>
                                     <a href="<?php echo e(url('/gallery',Auth::user()->id)); ?>" style="color:green;"><b><i class="bi bi-folder-fill" style="color:yellow"></i> Galleries</b></a>
                                 </li>
                                   
                                </ul>
                                 </li>
                                 <li>
                                 <a href="<?php echo e(url('/files',Auth::user()->id)); ?>" style="color:#fff;"><i class="bi bi-archive-fill" style="color:orange; font-size:15px;"></i> Storage Files</a>
                               </li>
                               <li>
                                 <a href="<?php echo e(url('/sharedfiles')); ?>" style="color:#fff;"><i class="bi bi-file-earmark-check-fill" style="color:orange; font-size:15px;"></i> Shared Files</a>
                               </li>
                               
                                 <li>
                                 <a href="<?php echo e(url('/home')); ?>" style="color:#fff;"><b><i class="bi bi-upload"></i> Upload Files</b></a>
                                
                                 </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <?php echo $__env->yieldContent('content'); ?>




    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
	<script src="<?php echo e(asset('js/validatePassword.js')); ?>"></script>
	
    <!-- Restful API JS File -->
    <script src="<?php echo e(asset('assets/datatables/jquery.dataTables.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/datatables/dataTables.bootstrap4.min.js')); ?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo e(asset('assets/demo/datatables-demo.js')); ?>"></script>
	
</body>
</html>
