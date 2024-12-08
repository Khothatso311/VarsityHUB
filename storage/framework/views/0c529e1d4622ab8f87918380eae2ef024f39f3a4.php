<?php $__env->startSection('content'); ?>


	
<section id="hero" class="s-hero target-section">

<div class="s-hero__bg">
    <div class="gradient-overlay"></div>
</div>

<div class="row s-hero__content">
    <div class="column">
    
    <br>

        <h1>Get Career!!</h1>
        <div class="s-hero__content-about">

            <p>
            Choose University/Institute in Lesotho, you like <br>
            to proceed your Career opportunity in higher learning.
            </p>
  
   <a href="<?php echo e(url('/student')); ?>" class="btn btn--primary btn--small" style="float:left;">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 0l-6 22-8.129-7.239 7.802-8.234-10.458 7.227-7.215-1.754 24-12zm-15 16.668v7.332l3.258-4.431-3.258-2.901z"/></svg>
        Apply Now
    </a>

<br>

            <footer>
                <div class="s-hero__content-social">
                    <a href="#0"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                    <a href="#0"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                    <a href="#0"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                    <a href="#0"><i class="fab fa-dribbble" aria-hidden="true"></i></a>
                </div>
            </footer>
        </div>

    </div>
</div>

<div class="s-hero__video">
    <a class="s-hero__video-link" href="#" data-lity="">
       
        
    </a>
</div>

<div class="s-hero__scroll">
    <a href="#about" class="s-hero__scroll-link smoothscroll">
        About Us
    </a>
</div>

</section> 



<section class="s-contact">

<div class="row narrower s-contact__top h-text-center">
<div class="column" id="login">

<h3 class="h6" id="hube">Get In Touch</h3>
<a class="smoothscroll" href="<?php echo e(url('/')); ?>" title="Intro"> <b style="color: #fff;"><<< Home >>> </b></a>


<ul>
  <li>
    <a href="<?php echo e(url('/admin')); ?>" class="btn btn-lg rounded-4 btn-primary btn--small" >Join As Admin</a>
  </li>
  <li>
  <a href="<?php echo e(url('/varsity')); ?>" class="btn btn-lg rounded-4 btn-primary btn--small" >Join As University</a>
  </li>
  <li>
    <a href="<?php echo e(url('/student')); ?>" class="btn btn-lg rounded-4 btn-primary btn--small" >Join As Student</a>
  </li>
</ul>

</div>
</div>



<div class="row narrower s-contact__top h-text-center">
    <div class="column">
       
          <h3 class="display-1">
        Upload Your University/Institute Courses Offerings From Today!! 
        Students should check application requirements entrance accurately. Let us work together as Universities and make something great to Basotho students.
           <b style="text-decoration:underline; font-weight:italic;">Apply Now!</b> to be on the better site to empower your career. 
           </h3>
    </div>
</div> 

<div class="row h-text-center">
    <div class="column">
        <p class="s-contact__email">
          <h4 style="text-decoration:underline; font-weight:italic;">Intitute Online Application</h4> 
        </p>
    </div>
</div>

</section>  



<footer class="s-footer" id="about">
<div class="row row-y-top">

    <div class="column large-8 medium-12">
        <div class="row">
            <div class="column large-7 tab-12 s-footer__block">
                <h4 class="h6">Where to Find Us</h4>

                <p>
                250 Maseru KingSway <br>
                VersityHUB , Lesotho <br>
                100  Maseru <br>
                <a href="tel:197-543-2345">+266 5038 2345</a>
                </p>
            </div>

            <div class="column large-5 tab-12 s-footer__block">
                <h4 class="h6">Follow Us</h4 class="h6">

                <ul class="s-footer__list">
                    <li><a href="#0">Facebook</a></li>
                    <li><a href="#0">Twitter</a></li>
                    <li><a href="#0">Instagram</a></li>
                    <li><a href="#0">LinkIn</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="column large-4 medium-12 s-footer__block--end">
        <a href="mailto:#0" class="btn h-full-width">Let's Talk</a>

        <div class="ss-copyright">
            <span>&copy;Copyright VersityHUB 2024</span> 
            <span>Design by Lesotho VersityHUB Team</span>
        </div>
    </div>

    

</div>
</footer>
												   
	<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>