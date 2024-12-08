<!DOCTYPE html>
<html class="no-js" lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
<link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('favicon.png')); ?>">
    <title>VarsityHUB</title>
 

 <!-- Styles -->
    <link href="<?php echo e(asset('css/styles.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/vendor.css')); ?>" rel="stylesheet">

<style>

#form{float:left;}

</style>



</head>
<body id="top">




   
<header class="s-header">

<div class="s-header__logo">
    <a href="#hube">
      <b style="font-weight:italic; float:left;"> VersityHUB Portal</b>
    </a>
</div>

<div class="s-header__content">

    <nav class="s-header__nav-wrap">
        <ul class="s-header__nav" style="margin-left:20px;">
           
            <?php if(Auth::guest()): ?>
            <li><a class="smoothscroll" href="<?php echo e(url('/')); ?>" title="Intro">Home</a></li>
           <li><a class="smoothscroll" href="<?php echo e(url('/login')); ?>" title="Intro">Admin Panel</a></li>
            <li><a class="smoothscroll" href="<?php echo e(url('/login')); ?>" title="Intro">Login</a></li> 
            <li><a class="smoothscroll" href="<?php echo e(url('/register')); ?>" title="Works">New Account</a></li>
            <?php else: ?>
            <li><a class="smoothscroll" href="<?php echo e(url('/admin')); ?>" title="Intro">Admin Panel |</a></li>
            <li><a class="smoothscroll" href="<?php echo e(url('/varsity')); ?>" title="About">Varsitity |</a></li>
            <li><a class="smoothscroll" href="<?php echo e(url('/student')); ?>" title="Services">Students Portal |</a></li>
            <li><a href="<?php echo e(url('/home')); ?>"><span style="color:rgb(77, 133, 246);"><?php echo e(Auth::user()->name); ?> <?php echo e(Auth::user()->surname); ?>  |</span></a></li>
       
       
            <li>
          <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    Signout Now
                    </a>

                  <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo e(csrf_field()); ?>

                   </form>
                   </li>
        <?php endif; ?>
       
        </ul>
    </nav> 

   <br>
   <?php if(Session::has('error')): ?>
<div style="background:red; color:#fff; width:70%;" role="alert">
<?php echo e(Session::get('error')); ?>

</div>
<?php endif; ?>


   

</div> 



</header>


<?php echo $__env->yieldContent('content'); ?>


</body>
</html>
