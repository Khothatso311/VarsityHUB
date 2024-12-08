<?php $__env->startSection('content'); ?>

<br><br><br>

<?php if(Session::has('success')): ?>
<div style="background:orange; color:#fff; width:70%;" role="alert">
    <br>
    <a href="<?php echo e(url('/reset')); ?>" style="margin-left: 100px;" class="btn btn--medium">Reset Now</a>
<?php echo e(Session::get('success')); ?>

</div>
<?php endif; ?>

<br><br><br><br>
<a class="smoothscroll" href="<?php echo e(url('/')); ?>" title="Intro"> <b style="color: #fff;margin-left:300px;"><<< Home >>> </b></a>



<br>
<form  method="POST" action="<?php echo e(url('/passwordRequest')); ?>" style="float: left;margin-left:200px;margin-top:50px;">
<?php echo e(csrf_field()); ?>




     <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
    <label for="email">E-Mail Address</label>

     <div class="col-md-6">
     <input id="email" type="email"  name="email" value="<?php echo e(isset($email) ? $email : old('email')); ?>" required autofocus>

    <?php if($errors->has('email')): ?>
         <span style="background:red;">
     <strong><?php echo e($errors->first('email')); ?></strong>
        </span>
        <?php endif; ?>
        </div>
        </div>

          <div class="form-group">
         
          <button type="submit" class="btn btn-primary">
             Reset Password
          </button>
                            
    </div>

</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>