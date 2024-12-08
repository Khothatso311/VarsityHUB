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

<h3 align='center' style="color:green"><i class="bi bi-folder-fill" style="color:yellow; font-size:40px;"></i> Upload Your Files</h3>
    
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

<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4 align="center">Upload Files To <img src="<?php echo e(asset('images/logo/myfile.jpg')); ?>" width="60"/><b style="color:green;">MyFile</b></h4></div>

                <div class="panel-body">
                    <form class="form-horizontal"  method="POST" action="<?php echo e(url('/upload',Auth::user()->id)); ?>" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>


                      <div class="form-group<?php echo e($errors->has('file') ? ' has-error' : ''); ?>">
                            <label for="file" class="col-md-4 control-label"><i class="bi bi-folder-fill"></i> Upload File</label>

                            <div class="col-md-6">
                                <input id="file" type="file" class="form-control" name="file" >

                                <?php if($errors->has('file')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('file')); ?></strong>
                                    </span>
                                <?php endif; ?>
                               
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('filename') ? ' has-error' : ''); ?>">
                            <label for="filename" class="col-md-4 control-label"><i class="bi bi-file-richtext-fill"></i> Filename</label>

                            <div class="col-md-6">
                                <input id="filename" type="text" class="form-control" name="filename" value="<?php echo e(old('name')); ?>" >

                                <?php if($errors->has('filename')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('filename')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group">
                        <label for="folder" class="col-md-4 control-label"><i class="bi bi-folder-fill" style="color:yellow;"></i> Select Folder</label>
                        <div class="col-md-6">
                            <select type="text" name="folder" id="folder" class="form-control">
                          <option value="Documents">Documents</option>
						              <option value="Gallery">Galleries</option>
                          </select>

                            </div>  
                            </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-upload"></i> Upload Files
                                </button>

                               
                            </div>
                        </div>


                        <div class="form-group">
                         <h4 align="center">You Can Uploads Below Files In <b style="color:green;">MyFile</b> Cloud <br><i class="bi bi-cloud-download-fill" style="font-size:35px; color:green;"></i></h4>  
                      </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <br>


    <table class="table">
<tr>
  <th><p><i class="bi bi-arrow-right-short"></i>Word File</p></th>
  <th><i class="bi bi-arrow-right-short"></i>PDF File</th>
  <th><i class="bi bi-arrow-right-short"></i>Image File</th>
  <th><i class="bi bi-arrow-right-short"></i>Power Point File</th>
</tr>
<tr>
  <td><i class="bi bi-file-earmark-word-fill" style="color:blue; font-size:50px;"></i></td>
  <td><i class="bi bi-file-earmark-text-fill" style="color:orange; font-size:50px;"></i></td>
  <td><i class="bi bi-file-image-fill" style="color:red; font-size:50px;"></i></td>
  <td><i class="bi bi-file-earmark-ppt-fill" style="color:green; font-size:50px;"></i></td>
</tr>
<tr>
<td>Zip File</td>
  <td>Cv File</td>
  <td>Excel File</td>
  <td>Html File</td>
</tr>
<tr>
<td><i class="bi bi-file-earmark-zip-fill" style="color:orange; font-size:50px;"></i></td>
  <td><i class="bi bi-journal-text" style="color:blue; font-size:50px;"></i></td>
  <td><i class="bi bi-file-excel-fill" style="color:green; font-size:50px;"></i></td>
  <td><i class="bi bi-file-earmark-code-fill" style="color:#000; font-size:50px;"></i></td>
</tr>

<tr>
<td style="color:green;"><i class="bi bi-download"></i> Downloads</td>
  <td style="color:blue;"><i class="bi bi-upload"></i> Uploads</td>
  <td><i class="bi bi-exclamation-octagon-fill"></i> Removes</td>
  <td style="color:orange;"><i class="bi bi-hourglass-split"></i> Display</td>
</tr>

    </table>

    <footer>
    <h4 align="center">&copy Copyright <?php echo e($date); ?> from <b style="color:green;">MyFile</b></h4>
    <img  src="<?php echo e(asset('images/logo/myfile.jpg')); ?>" style="margin-left:180px;" width='80' height='50'/>
</footer>

    </div>
<br>
  </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.express', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>