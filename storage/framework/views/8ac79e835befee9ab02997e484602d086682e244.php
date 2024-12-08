<?php $__env->startSection('content'); ?>

<!--====== App Content ======-->
        <div class="app-content">

            <!--====== Section 1 ======-->
            <div class="u-s-p-y-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="breadcrumb">
                            <div class="breadcrumb__wrap">
                                <ul class="breadcrumb__list">
                                    
									<?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(Auth::check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(url('/login')); ?>" class="btn btn-primary"><i class="bi bi-box-arrow-in-right" ></i>Login</a>
					
                        <a href="<?php echo e(url('/register')); ?>" class="btn btn-primary"><i class="bi bi-person-plus-fill" ></i>New Account</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
									
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section 1 ======-->


            <!--====== Section 2 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="dash">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-md-12">

                                    <!--====== Dashboard Features ======-->
                                    <div class="dash__box dash__box--bg-white dash__box--shadow u-s-m-b-30">
                                        <div class="dash__pad-1">

                                            <span class="dash__text u-s-m-b-16"><i class="bi bi-emoji-laughing-fill" style="color:orange;"></i>Hello, 	Welcome to School System</span>
                                            <ul class="dash__f-list">
                                                <li>

                                                    <a class="dash-active" href="#"><i class="bi bi-folder-symlink-fill"></i>Manage School Records</a></li>
                                                <li>
                                                   
                                                    <a href="<?php echo e(url('/registration')); ?>"><i class="bi bi-people-fill"></i>Students Registration</a>
												
												</li>
                                                
												<li>

                                                    <a href="<?php echo e(url('/finance')); ?>"><i class="bi bi-cart-check-fill"></i>Finance</a></li>
                                                <li>

                                                    <a href="<?php echo e(url('/book')); ?>"><i class="bi bi-stickies-fill"></i>Book Shop</a></li>
                                                <li>

                                                    <a href="<?php echo e(url('/result')); ?>"><i class="bi bi-pen-fill"></i>Students Results</a></li>
                                                <li>

                                                    <a href="<?php echo e(url('/record')); ?>"><i class="bi bi-folder-fill"></i>Overall Records</a></li>
                                                <li>

                                                    <a href="<?php echo e(url('/admin')); ?>"><b><i class="bi bi-person-fill"></i>Admin Panel</b></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="dash__box dash__box--bg-white dash__box--shadow dash__box--w">
                                        <div class="dash__pad-1">
                                            <ul class="dash__w-list">
                                                <li>
                                                    <div class="dash__w-wrap">

                                                        <span class="dash__w-icon dash__w-icon-style-1"><i class="bi bi-globe"></i></span>

                                                        <span class="dash__w-text">4</span>

                                                        <span class="dash__w-name">Students fee</span></div>
                                                </li>
                                                <li>
                                                    <div class="dash__w-wrap">

                                                        <span class="dash__w-icon dash__w-icon-style-2"><i class="fas fa-times"></i></span>

                                                        <span class="dash__w-text">0</span>

                                                        <span class="dash__w-name">Create New Account</span></div>
                                                </li>
                                                <li>
                                                    <div class="dash__w-wrap">

                                                        <span class="dash__w-icon dash__w-icon-style-3"><i class="far fa-heart"></i></span>

                                                        <span class="dash__w-text">0</span>

                                                        <span class="dash__w-name">Overall Records</span></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--====== End - Dashboard Features ======-->
                                </div>
                                <div class="col-lg-9 col-md-12">
                                    <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                                        <div class="dash__pad-2">
                                            <h1 class="dash__h1 u-s-m-b-14"><i class="bi bi-folder-symlink-fill"></i>Manage School Records</h1>

                                            <span class="dash__text u-s-m-b-30">School Management System assist overall school ectivities, update students records, register students, overall fee payments are compulsory exclude sponsorship.</span>
                                            <div class="row">
                                                <div class="col-lg-4 u-s-m-b-30">
                                                    <div class="dash__box dash__box--bg-grey dash__box--shadow-2 u-h-100">
                                                        <div class="dash__pad-3">
                                                            <h2 class="dash__h2 u-s-m-b-8"><i class="bi bi-person-circle"></i>PERSONAL PROFILE</h2>
                                                            <div class="dash__link dash__link--secondary u-s-m-b-8">

                                                                <a href="#">Create New Account</a></div>

                                                            <span class="dash__text">User Services</span>

                                                            
                                                            <div class="dash__link dash__link--secondary u-s-m-t-8">

                                                               <span class="dash__text"> <a href="<?php echo e(route('register')); ?>" class="btn btn-primary"><i class="bi bi-person-plus-fill" ></i>New Account</a></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 u-s-m-b-30">
                                                    <div class="dash__box dash__box--bg-grey dash__box--shadow-2 u-h-100">
                                                        <div class="dash__pad-3">
                                                            <h2 class="dash__h2 u-s-m-b-8"><i class="bi bi-person-circle"></i>ADMIN PROFILE</h2>

                                                            <span class="dash__text-2 u-s-m-b-8">Default Admin Service</span>
                                                            <div class="dash__link dash__link--secondary u-s-m-b-8">

                                                                <a href="<?php echo e(url('/adminAccount')); ?>">Register for Admin</a></div>

                                                           

                                                            <span class="dash__text"> <a href="<?php echo e(url('/admin')); ?>" class="btn btn-primary"><i class="bi bi-person-fill"></i>Admin Panel</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 u-s-m-b-30">
                                                    <div class="dash__box dash__box--bg-grey dash__box--shadow-2 u-h-100">
                                                        <div class="dash__pad-3">
                                                            <h2 class="dash__h2 u-s-m-b-8"><i class="bi bi-sticky-fill"></i>FINANCE RECORDS</h2>

                                                            <span class="dash__text-2 u-s-m-b-8">Default Payment System</span>

                                                            <span class="dash__text">Process payments fee and manage expences</span>

                                                            <span class="dash__text">  <a href="<?php echo e(url('/finance')); ?>" class="btn btn-primary"><i class="bi bi-cart-check-fill"></i>Finance</a></li></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dash__box dash__box--shadow dash__box--bg-white dash__box--radius">
                                        <h2 class="dash__h2 u-s-p-xy-20"><i class="bi bi-stack"></i>SCHOOL RECORDS STORAGE</h2>
                                        <div class="dash__table-wrap gl-scroll">
                           
						                       <h2><i class="bi bi-server"></i>School Management Information</h2>
											   
											   <div class="testimonial">
                                    <div class="testimonial__img-wrap">

                                        <img class="testimonial__img" src="images/Notebook.png" alt=""></div>
                                    <div class="testimonial__content-wrap">

                                        <span class="testimonial__double-quote"><i class="fas fa-quote-right"></i></span>
                                        <blockquote class="testimonial__block-quote">
                                            <p>"School Management System help users of the system to add, modify and update students records in daily basis and manages other school activities."</p>
                                        </blockquote>

                                        <span class="testimonial__author">School Management System</span>
                                    </div>
                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 2 ======-->
        </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>