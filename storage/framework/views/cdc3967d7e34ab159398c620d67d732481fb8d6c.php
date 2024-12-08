<?php $__env->startSection('content'); ?>


<div class="container">
    <h1 align='center' style="color:green"><img src="<?php echo e(asset('images/logo/myfile.jpg')); ?>" width='80' height='50'/>My<b>F</b>ile</h1>					   
    <div class="container-fluid">
<br>
<h4 align="center">
        <a href="<?php echo e(route('logout')); ?>"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();" class="btn btn-success">
        <i class="bi bi-box-arrow-in-left"></i> Sign-out Now
       </a>

        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo e(csrf_field()); ?>

          </form>
</h4>

<h3 align="center"><b><i class="bi bi-folder-fill" style="color:yellow; font-size:55px;"></i>Public Shared Documents Files  </b></h3>
<h5 align="center"><i class="bi bi-compass-fill"></i>Total Shared Files Received: <b><?php echo e($count); ?></b></h5>


<br>
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


           <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      
                      <th style="background-color:rgb(121, 156, 190); color:#fff; border:none;"><i class="bi bi-file-earmark-text-fill"></i> Filename</th>
                      <th style="color:orange; background-color:rgb(121, 156, 190); border:none;">File Extention</th>
                      <th style="color:orange; background-color:rgb(121, 156, 190); border:none;">File Memory</th>
                      <th style="color:#000; background-color:rgb(121, 156, 190); border:none;"><b>File Issued</b></th>
                      <th style="background-color:rgb(121, 156, 190); border:none; color:#fff;">Delete File</th>
                      <th style="background-color:rgb(121, 156, 190); border:none; color:#fff;">Cloud File</th>
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th style="border:none; color:green;"><i class="bi bi-file-earmark-zip-fill" style="color:orange; font-size:30px;"></i> Zip File</th>
                      <th style="border:none;"><i class="bi bi-file-earmark-word-fill" style="color:blue; font-size:30px;"></i> Word</th>
                      <th style="border:none;color:green;"><i class="bi bi-file-earmark-image-fill" style="color:red; font-size:30px;"></i> Image</th>
                      <th style="border:none;"><i class="bi bi-file-excel-fill" style="color:green; font-size:30px;"></i></th>
                      <th style="border:none;"><i class="bi bi-file-ppt-fill" style="color:orange; font-size:30px;"></i> Slides</th>
                      <th style="border:none;"><i class="bi bi-file-earmark-word-fill" style="color:blue; font-size:30px;"></i> Word</th>
                     
                    </tr>
                  </tfoot>
                  <tbody>
				  
                  <?php $__currentLoopData = $shared; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php if($data->folder_no == Auth::user()->id): ?>

                 
					   <tr>
                   

                     <td style="border:none;color:green; "><b><?php echo e($data->filename); ?></b></td>
                     <td style="border:none;"><b><?php echo e($data->extention); ?></b></td>
                     <td style="border:none;"><b><?php echo e($data->size); ?> bytes</b></td>
                      
                     
                     <td style="border:none;"><b><?php echo e($data->created_at); ?></b></td>
                      <td style="border:none;">
                      <a href="<?php echo e(url('/deleted',$data->folder_Id)); ?>" class="btn btn-success">
                      <i class="bi bi-trash" style="color:red;"></i> Delete 
                    </a>
                   </td>
                   <td><b><i class="bi bi-hourglass-split"></i></b></td>
					  
                     

                        </tr>
                 
                  
                        <?php endif; ?>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 
    
                  </tbody>
                </table>
              </div>
            </div>

<br/>


    <footer>
   
    <h4 align="center">&copy Copyright <?php echo e($date); ?> from <b style="color:green;">MyFile</b></h4>
    <img  src="<?php echo e(asset('images/logo/myfile.jpg')); ?>" style="margin-left:180px;" width='80' height='50'/>
</footer>

    </div>
<br>
  </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.route', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>