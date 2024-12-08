<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('images/logo/System folder.png')); ?>">
    <title>MyFile-Pdf</title>
 
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
 <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
    
</head>
<body>
    <div id="app">
    <nav class="navbar navbar-default navbar-static-top" style="background-color:rgb(99, 140, 255); color:#fff; ">
                  
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
<div class="navbar-brand">
   <h4 style="color:rgb(99, 203, 0);"><i class="bi bi-file-earmark-text-fill" ></i>
   <a href="<?php echo e(url('/')); ?>" style="color:#fff;"><b>MyFile</b></a>
          
          </h4>
</div>
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
        <li><a href="<?php echo e(route('')); ?>" style=" color:#fff;"><i class="bi bi-box-arrow-in-right" ></i> Login</a></li>
        <li><a href="<?php echo e(route('register')); ?>" style="color:orange;"><i class="bi bi-person-plus-fill" ></i> New Account</a></li>
         <?php else: ?>
        <li class="dropdown">
            <a href="#" style="color:orange;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
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
                <a href="<?php echo e(url('/home')); ?>" style="color:#fff;"><i class="bi bi-upload"></i> Upload Files</a>
         
                </li>

                <li>
                
        <a href="<?php echo e(route('logout')); ?>"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();" style="color:orange;">
        <i class="bi bi-box-arrow-in-left"></i> Sign-out Now
       </a>

        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo e(csrf_field()); ?>

          </form>

                </li>


     </ul>
        
    <?php endif; ?>
</ul>
</div>
</div>
</nav>

<div class="row">
        <div class="col-md-8 col-md-offset-2">
        <h4 align='center' style="color:green;"><img src="<?php echo e(asset('images/logo/myfile.jpg')); ?>" width='80' height='50'/> <b>MyFile</b></h4>
        <br>
          <h4 align="center"><b><?php echo e(Auth::user()->name); ?> <?php echo e(Auth::user()->surname); ?>  Files History</b></h4>
        <div class="panel panel-default">
        <h3 align='center' style="text-decoration:underline;"><b><i class="bi bi-server" style="color:#000; font-size:55px;"></i> Files Information In The Disk Storage</b></h3>


    <div class="panel-body">

    <?php if($errors->any()): ?>
             <div class="alert alert-danger">
             <ul>
             <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><b><i class="bi bi-exclamation-circle-fill"></i> <?php echo e($error); ?></b></li>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </ul>
         </div>
      <?php endif; ?>

        <?php if(session()->has('success')): ?>
       <div align="center" class="alert alert-success">
     <b><i class="bi bi-check-circle-fill"></i> <?php echo e(session()->get('success')); ?></b>
          </div>
         <?php endif; ?>
           <br />

    <h4 align='center' style="color:green;text-decoration:underline; "> <b>1.0 <i class="bi bi-folder-fill" style="color:yellow; font-size:35px;"></i> Documents Storage Files</b></h4>
    <br>
    <p style="font-size:16px; padding: 5px; text-align:justify;"><?php echo e($documents); ?></p>

    <br>
 <h5 align='center' style="color:green;"><b><i class="bi bi-download" ></i> Download Your Documents Files Information</b></h5>


 <h4 align='center'>
  <div class="panel-body">
    <a href="<?php echo e(url('file/Documents')); ?>"  class="btn btn-success">
     <b><i class="bi bi-download"></i> Download Now</b> 
</a>
</div>
</h4>

     <br>
     <h4 align='center' style="color:orange; text-decoration:underline;"> <b>1.2 <i class="bi bi-folder-fill" style="color:yellow; font-size:35px;"></i> Galleries Storage Files</b></h4>
    <br>
    <p style="font-size:16px; padding: 5px; text-align:justify;"><?php echo e($gallery); ?></p>

    <h5 align='center' style="color:green;"><b><i class="bi bi-download" ></i> Download Your Galleries Files Information</b></h5>


<h4 align='center'>
 <div class="panel-body">
   <a href="<?php echo e(url('file/Gallery')); ?>"  class="btn btn-success">
    <b><i class="bi bi-download"></i> Download Now</b> 
</a>
</div>
</h4>

    <br>
   <p><b>&copy; Printed <?php echo e($date1); ?> From <strong style="color:green;">MyFile</strong> Cloud Storage</b></p>
<br>
<h4 align='center' style="color:green;"><img src="<?php echo e(asset('images/logo/myfile.jpg')); ?>" width='80' height='50'/> <b>MyFile</b></h4>
 
<br>
</div>
</div>
</div>
</div>



</div>



    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
	
	
	
</body>
</html>
