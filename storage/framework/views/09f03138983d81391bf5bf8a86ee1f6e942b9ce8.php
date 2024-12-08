<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('images/logos/Download.png')); ?>">
    <title>Lesotho Adventure Registration PDF</title>
 
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
 <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    
</head>
<body>
    <div id="app">
        
		<h2 class="mb-3" style="margin-left:100px;">Lesotho Adventure Cliets Registered</h2>
		<br>
		<img src="assets/img/ads/coats.png" style="margin-left:250px; width:80px; height:80px;"/>
		
		<br>
<table class="table table-bordered mb-5">

<thead>
<tr>

<th scope="col">Pos#</th>
<th scope="col">Firstname</th>
<th scope="col">Lastname</th>
<th scope="col">Mobile</th>
<th scope="col">Email</th>
<th scope="col">District</th>
<th scope="col">Citizen</th>
<th scope="col">Gender</th>

</tr>
</thead>

<tbody>

<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<tr>

<td><?php echo e($row->id); ?></td>
<td><?php echo e($row->name); ?></td>
<td><?php echo e($row->surname); ?></td>
<td><?php echo e($row->mobile); ?></td>
<td><?php echo e($row->email); ?></td>
<td><?php echo e($row->district); ?></td>
<td><?php echo e($row->citizen); ?></td>
<td><?php echo e($row->gender); ?></td>

</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</tbody>

</table>

		
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html>
