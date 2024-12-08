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

<h3 align="center"><b><i class="bi bi-folder-fill" style="color:yellow; font-size:55px;"></i> My Galleries Files </b></h3>
<h5 align="center"><i class="bi bi-compass-fill"></i>Total Files Received: <b><?php echo e($count); ?></b></h5>

<h5 align="center"><b><i class="bi bi-archive-fill" style="color:green; font-size:25px;"></i> Storage Used: <?php echo e($sum); ?> bytes</b></h5>

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
                      <th style="color:orange; background-color:rgb(121, 156, 190); border:none;">Extention</th>
                      <th style="color:orange; background-color:rgb(121, 156, 190); border:none;">Memory</th>
                      <th style="color:#000; background-color:rgb(121, 156, 190); border:none;"><b>Valid</b></th>
                      <th style="background-color:rgb(121, 156, 190); border:none; color:#fff;">Download</th>
                      <th style="background-color:rgb(121, 156, 190); border:none; color:orange;">Delete</th>
					  
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th style="border:none; color:green;"><i class="bi bi-file-earmark-zip-fill" style="color:orange; font-size:30px;"></i> Zip File</th>
                      <th style="border:none;"><i class="bi bi-file-earmark-word-fill" style="color:blue; font-size:30px;"></i> Word</th>
                      <th style="border:none;color:green;"><i class="bi bi-file-earmark-image-fill" style="color:red; font-size:30px;"></i> Image</th>
                      <th style="border:none;"><i class="bi bi-file-excel-fill" style="color:green; font-size:30px;"></i></th>
                      <th style="border:none;"><i class="bi bi-file-ppt-fill" style="color:orange; font-size:30px;"></i> Slides</th>
                      <th style="border:none;"><i class="bi bi-file-earmark-code-fill" style="color:#000; font-size:30px;"></i> Html</th>
                     
                    </tr>
                  </tfoot>
                  <tbody>
				  
				  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                  <?php if(Auth::user()->id == $row->folder_Id): ?>
		             <?php if($row->folder == 'Gallery'): ?>  
					   <tr>
                      
                     <td style="border:none;color:green; "><b><?php echo e($row->filename); ?></b></td>
                     <td style="border:none;"><b><?php echo e($row->extention); ?></b></td>
                     <td style="border:none;"><b><?php echo e($row->size); ?> bytes</b></td>
                      
                     <?php if($row->valid == '1'): ?>
                     <td style="border:none;"><b>true</b></td>
                     <?php else: ?>
                     <td style="border:none;"><b>false</b></td>
                      <?php endif; ?>

                      <td style="border:none;">
                      <a href="<?php echo e(url('/download',$row->id)); ?>" class="btn btn-success">
                      <i class="bi bi-download"></i>  
                    </a>
                    </td>

                      <td style="border:none; color:red; background-color:rgb(214, 255, 190);">
                      <a href="<?php echo e(url('/delete',$row->id)); ?>" class="btn btn-primary"><i class="bi bi-trash" style="color:red;"></i></a>
                    </td>
					  
                        </tr>
                 
                  <?php endif; ?>
                    <?php endif; ?>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 
    
                  </tbody>
                </table>
              </div>
            </div>



<br/>


    <footer>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($file->size == $max): ?>
    <p align="center"> <b style="color:green;"><i class="bi bi-arrow-down-right-circle-fill"></i> <?php echo e($file->filename); ?> maximum  memory file:<?php echo e($max); ?> bytes</b></p>
    <?php elseif($file->size == $min): ?>
    <p align="center"> <b><i class="bi bi-arrow-down-right-circle-fill"></i> <?php echo e($file->filename); ?> minimum  memory file:<?php echo e($min); ?> bytes</b></p>
   
     <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <br>
    <h4 align="center">&copy Copyright <?php echo e($date); ?> from <b style="color:green;">MyFile</b></h4>
    <img  src="<?php echo e(asset('images/logo/myfile.jpg')); ?>" style="margin-left:180px;" width='80' height='50'/>
</footer>

    </div>
<br>
  </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.route', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>