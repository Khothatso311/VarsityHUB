<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
			
                <div class="panel-heading">   <h4 align="center"><i class="bi bi-file-person-fill"></i>Create Account With <img src="<?php echo e(asset('images/logo/myfile.jpg')); ?>" width="60"/> <b style="color:green;">MyFile</b></h4></div>

                <div class="panel-body">
                    <form class="form-horizontal" name="myform" method="POST" action="<?php echo e(route('register')); ?>" onsubmit="return validateform()">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label"><i class="bi bi-file-person-fill"></i>Firstname</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>">

                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
						
						  <div class="form-group<?php echo e($errors->has('surname') ? ' has-error' : ''); ?>">
                            <label for="surname" class="col-md-4 control-label"><i class="bi bi-file-person-fill"></i>Lastname</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control" name="surname" value="<?php echo e(old('surname')); ?>" >

                                <?php if($errors->has('surname')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('surname')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
						
						

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label"><i class="bi bi-envelope-fill"></i>E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" >

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
						
						
                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-4 control-label"><i class="bi bi-file-lock-fill"></i>Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" >

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                                <span class="alert danger" style="color:red;" id="password-error"></span>
                               
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm </label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-arrow-right"></i>Register
                                </button>
                            </div>
                        </div>


                        <div class="form-group">
                            <img src="<?php echo e(asset('images/logo/myfile.jpg')); ?>"  width="80" />
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>