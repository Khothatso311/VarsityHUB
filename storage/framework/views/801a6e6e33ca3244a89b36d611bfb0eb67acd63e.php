<?php $__env->startSection('content'); ?>


	
<section id="hero" class="s-hero target-section">

<div class="s-hero__bg">
    <div class="gradient-overlay"></div>
</div>

<div class="row s-hero__content">
    <div class="column">
    
    <?php if(Session::has('success')): ?>
<div style="background:orange; color:#fff; width:70%;" role="alert">
  <?php echo e(Session::get('success')); ?>

</div>
<?php endif; ?>
    <br>
        <h1>Add Universities!!</h1>
        <div class="s-hero__content-about">

            <p>
            Add University/Institute in Lesotho, for helping Students <br>
            to proceed a Career opportunity in higher learning.
            </p>
  
   <a href="<?php echo e(url('/admin')); ?>" class="btn btn--primary btn--small" style="float:left;">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 0l-6 22-8.129-7.239 7.802-8.234-10.458 7.227-7.215-1.754 24-12zm-15 16.668v7.332l3.258-4.431-3.258-2.901z"/></svg>
        Display Varsities
    </a>

<br>

            <footer>
                <div class="s-hero__content-social">
                    <a href="#0">facebook</a>
                    <a href="#0">twitter</a>
                    <a href="#0">instagram</a>
                    <a href="#0">email</a>
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
<div class="column" id="hube">

<h3 class="h6">Get In Touch</h3>

<a class="smoothscroll" href="<?php echo e(url('/')); ?>" title="Intro"> <b style="color: #fff;"><<< Home >>> </b></a>

<br>
<h4><b>Add University Now!!</b></h4>

<form method="POST" id="form" action="<?php echo e(url('/addUniversity')); ?>" >
<?php echo e(csrf_field()); ?>



       <h2>Add University</h2>
	   
	   <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">
       

<div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">

<input type="text" name="name">
<?php if($errors->has('name')): ?>
<span style="background:red;">
<strong><?php echo e($errors->first('name')); ?></strong>
 </span>
 <?php endif; ?>
</div>

<div class="form-group<?php echo e($errors->has('description') ? ' has-error' : ''); ?>">
  <textarea type="text" name="description" style="height:100px;" placeholder="Description.."></textarea>
<?php if($errors->has('description')): ?>
<span style="background:red;">
<strong><?php echo e($errors->first('description')); ?></strong>
 </span>
 <?php endif; ?>
</div>

<div class="form-group<?php echo e($errors->has('faculty') ? ' has-error' : ''); ?>">
<input type="text" name="faculty"  placeholder="Institute faculty..">
<?php if($errors->has('faculty')): ?>
<span style="background:red;">
<strong><?php echo e($errors->first('faculty')); ?></strong>
 </span>
 <?php endif; ?>
</div>

<div class="form-group<?php echo e($errors->has('course') ? ' has-error' : ''); ?>">
<input type="text" name="course"  placeholder="Enter Course..">
<?php if($errors->has('course')): ?>
<span style="background:red;">
<strong><?php echo e($errors->first('course')); ?></strong>
 </span>
 <?php endif; ?>
</div>

<div class="form-group<?php echo e($errors->has('credits') ? ' has-error' : ''); ?>">
<select name="credits">
	    <option selected>Select Credits Number Required</option>
	    <option value="3">Three Credits</option>
	    <option value="4">Four Credits</option>
	    <option value="5">Five Credits</option>
        <option value="6">More Credits</option>
	  
	  </select>
      <?php if($errors->has('credits')): ?>
<span style="background:red;">
<strong><?php echo e($errors->first('credits')); ?></strong>
 </span>
 <?php endif; ?>
</div>

<div class="form-group<?php echo e($errors->has('maths') ? ' has-error' : ''); ?>">
<select name="maths">
	    <option value="">Select Credit For Subject</option>
	    <option value="gradeD">D in Mathematics</option>
	    <option value="gradeC">C in Mathematics</option>
	    <option value="gradeB">B in Mathematics</option>
        <option value="gradeA">A in Mathematics</option>
        <option value="gradeA*">A* in Mathematics</option>
	  
	  </select>
      <?php if($errors->has('maths')): ?>
<span style="background:red;">
<strong><?php echo e($errors->first('maths')); ?></strong>
 </span>
 <?php endif; ?>
</div>

<div class="form-group<?php echo e($errors->has('english') ? ' has-error' : ''); ?>">
<select name="english">
	    <option value="">Select Credit For Subject</option>
	    <option value="gradeD">D in Enlish</option>
	    <option value="gradeC">C in Enlish</option>
	    <option value="gradeB">B in Enlish</option>
        <option value="gradeA">A in Enlish</option>
        <option value="gradeA*">A* in Enlish</option>
	  
	  </select>
      <?php if($errors->has('english')): ?>
<span style="background:red;">
<strong><?php echo e($errors->first('english')); ?></strong>
 </span>
 <?php endif; ?>
</div>

<div class="form-group<?php echo e($errors->has('qualification') ? ' has-error' : ''); ?>">
<select name="qualification">
	    <option value="">Select Course Qualification</option>
	    <option value="Certificate">certificate</option>
	    <option value="Diploma">Diploma</option>
	    <option value="Degree">Degree</option>
        <option value="PHD">PHD</option>
	  
	  </select>
      <?php if($errors->has('qualification')): ?>
<span style="background:red;">
<strong><?php echo e($errors->first('qualification')); ?></strong>
 </span>
 <?php endif; ?>
</div>

<div class="form-group<?php echo e($errors->has('startDate') ? ' has-error' : ''); ?>">
   <label>Start Admision</label>
<input type="date" name="startDate"  >
<?php if($errors->has('startDate')): ?>
<span style="background:red;">
<strong><?php echo e($errors->first('startDate')); ?></strong>
 </span>
 <?php endif; ?>
</div>




<div class="form-group<?php echo e($errors->has('endtDate') ? ' has-error' : ''); ?>">
    <label>End Date</label>
<input type="date" name="endDate"  >
<?php if($errors->has('endDate')): ?>
<span style="background:red;">
<strong><?php echo e($errors->first('endDate')); ?></strong>
 </span>
 <?php endif; ?>
</div>



 <br>
<button class="btn btn-lg rounded-4 btn-primary btn--small" type="submit">Add Varsity</button>


</form>

</div>
</div>



<div class="row narrower s-contact__top h-text-center">
    <div class="column">
       
        <h1 class="display-1">
        Browse Institute Courses, Credits needed to qualify
        for entrance. Let us work together and make something great.
        <b style="text-decoration:underline; font-weight:italic;">Signup now</b> to access diffrent Universities Courses
        </h1>
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

<?php echo $__env->make('layouts.express', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>