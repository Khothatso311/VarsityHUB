<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
			
                <div class="panel-heading">   <b style="margin-left:160px;"><i class="bi bi-file-person-fill"></i>Register With Lesotho Adventure System</b></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label"><i class="bi bi-file-person-fill"></i>Firstname</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

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
                                <input id="surname" type="text" class="form-control" name="surname" value="<?php echo e(old('surname')); ?>" required autofocus>

                                <?php if($errors->has('surname')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('surname')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
						
						 <div class="form-group<?php echo e($errors->has('mobile') ? ' has-error' : ''); ?>">
                            <label for="mobile" class="col-md-4 control-label"><i class="bi bi-telephone-plus-fill"></i>Mobile</label>

                            <div class="col-md-6">
                                 <input id="mobile" type="text" class="form-control" name="mobile" value="<?php echo e(old('mobile')); ?>" required autofocus>

                                <?php if($errors->has('mobile')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('mobile')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label"><i class="bi bi-envelope-fill"></i>E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
						
						
							<div class="form-group<?php echo e($errors->has('district') ? ' has-error' : ''); ?>">
                            <label for="district" class="col-md-4 control-label"><i class="bi bi-geo-alt-fill"></i>District</label>

                            <div class="col-md-6">
                                <select name="district"  class="form-control">
                          <option value="Maseru">Maseru</option>
						  <option value="Quthing">Quthing</option>
                          <option value="Mafeteng">Mafeteng</option>
						  <option value="Leribe">Leribe</option>
                          <option value="Berea">Berea</option>
						  <option value="Thaba Tseka">Thaba Tseka</option>
                          <option value="Qacha'S Nek">Qacha'S Nek</option>
						  <option value="Mohale's Hoek">Mohale'S Hoek</option>
						  <option value="Botha Buthe">Botha Buthe</option>
						  <option value="Mokhotlong">Mokhotlong</option>
                           </select>

                                <?php if($errors->has('grade')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('grade')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
						
						 <div class="form-group<?php echo e($errors->has('citizen') ? ' has-error' : ''); ?>">
                            <label for="citizen" class="col-md-4 control-label"><i class="bi bi-stack"></i>Citizenship</label>

                            <div class="col-md-6">
                                <input id="citizen" type="text" class="form-control" name="citizen" value="<?php echo e(old('citizen')); ?>" required>

                                <?php if($errors->has('citizen')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('citizen')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
						
						 <div class="form-group<?php echo e($errors->has('gender') ? ' has-error' : ''); ?>">
                            <label for="gender" class="col-md-4 control-label"><i class="bi bi-people-fill"></i>Gender</label>

                            <div class="col-md-6">
                               <input type="radio" name="gender" id="Male" value="Male" style="margin-left:10px; cursor:pointer;"><b>Male</b>
                              <input type="radio" name="gender" id="Female" value="Female" style="margin-left:10px; cursor:pointer;"><b>Female</b>

                                <?php if($errors->has('gender')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('gender')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
						

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-4 control-label"><i class="bi bi-file-lock-fill"></i>Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm </label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>