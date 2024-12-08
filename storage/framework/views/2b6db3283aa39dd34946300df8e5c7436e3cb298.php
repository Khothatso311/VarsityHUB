<?php $__env->startSection('content'); ?>

												   
	<div class="container">
    <h1 align='center' style="color:green"><img src="<?php echo e(asset('images/logo/myfile.jpg')); ?>" width='80' height='50'/>My<b>F</b>ile</h1>					   
    <div class="container-fluid">
<br>

<?php if(Auth::guest()): ?>
<h4 align="center">
        <a href="<?php echo e(route('login')); ?>" class="btn btn-success">
        <i class="bi bi-box-arrow-in-right"></i> Sign-in Now
       </a>
</h4>
<?php else: ?>
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
<?php endif; ?>

<h3 align='center' style="color:green"><i class="bi bi-folder-fill" style="color:yellow; font-size:40px;"></i> Upload Your Files</h3>
    <br>
    <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<tr>
  <th style="border:none;"><p><i class="bi bi-arrow-right-short"></i>Word File</p></th>
  <th style="border:none;"><i class="bi bi-arrow-right-short"></i>PDF File</th>
  <th style="border:none;"><i class="bi bi-arrow-right-short"></i>Image File</th>
  <th><i class="bi bi-arrow-right-short"></i>Power Point File</th>
</tr>
<tr>
  <td style="border:none;"><i class="bi bi-file-earmark-word-fill" style="color:blue; font-size:50px;"></i></td>
  <td style="border:none;"><i class="bi bi-file-earmark-text-fill" style="color:orange; font-size:50px;"></i></td>
  <td style="border:none;"><i class="bi bi-file-image-fill" style="color:red; font-size:50px;"></i></td>
  <td><i class="bi bi-file-earmark-ppt-fill" style="color:green; font-size:50px;"></i></td>
</tr>
<tr>
<td><b>Zip File</b></td>
  <td><b>Cv File</b></td>
  <td><b>Excel File</b></td>
  <td><b>Html File</b></td>
</tr>
<tr>
<td style="border:none;"><i class="bi bi-file-earmark-zip-fill" style="color:orange; font-size:50px;"></i></td>
  <td style="border:none;"><i class="bi bi-journal-text" style="color:blue; font-size:50px;"></i></td>
  <td style="border:none;"><i class="bi bi-file-excel-fill" style="color:green; font-size:50px;"></i></td>
  <td><i class="bi bi-file-earmark-code-fill" style="color:#000; font-size:50px;"></i></td>
</tr>

<tr>
<td style="color:green;"><i class="bi bi-download"></i> Downloads</td>
  <td style="color:blue;"><i class="bi bi-upload"></i> Uploads</td>
  <td><i class="bi bi-exclamation-octagon-fill"></i> Removes</td>
  <td style="color:orange;"><i class="bi bi-hourglass-split"></i> Display</td>
</tr>

    </table>

    <br>
    <h4 align="center" style="color:green;"><i class="bi bi-download"></i> Download Shared Files Here</h4>
    <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      
                      <th style="background-color:rgb(121, 156, 190); color:#fff; border:none;"><i class="bi bi-file-earmark-text-fill"></i> Filename</th>
                      <th style="color:orange; background-color:rgb(121, 156, 190); border:none;">File Extention</th>
                      <th style="color:orange; background-color:rgb(121, 156, 190); border:none;">File Memory</th>
                      <th style="color:#000; background-color:rgb(121, 156, 190); border:none;"><b>File Issued</b></th>
                      <th style="background-color:rgb(121, 156, 190); border:none; color:#fff;">Download File</th>
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
				  
				  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                 
					   <tr>
                      
                     <td style="border:none;color:green; "><b><?php echo e($row->filename); ?></b></td>
                     <td style="border:none;"><b><?php echo e($row->extention); ?></b></td>
                     <td style="border:none;"><b><?php echo e($row->size); ?> bytes</b></td>
                      
                     
                     <td style="border:none;"><b><?php echo e($row->created_at); ?></b></td>
                      <td style="border:none;">
                      <a href="<?php echo e(url('/downloaded',$row->folder_Id)); ?>" class="btn btn-success">
                      <i class="bi bi-download"></i> Download 
                    </a>
                   </td>
                   <td><b><i class="bi bi-hourglass-split"></i></b></td>
					  
                        </tr>
                 
                  
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 
    
                  </tbody>
                </table>
              </div>
            </div>


    <footer>
    <h4 align="center">&copy Copyright <?php echo e($date); ?> from <b style="color:green;">MyFile</b></h4>
    <img  src="<?php echo e(asset('images/logo/myfile.jpg')); ?>" style="margin-left:180px;" width='80' height='50'/>
</footer>

    </div>
<br>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>