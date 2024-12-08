<?php $__env->startSection('content'); ?>

<div class="container mt-5" >

<div class="d-flex justify-content-between mb-2">

<p><strong>Lesotho Adventure Registration PDF</strong></p>
<a class="btn btn-primary" href="<?php echo e(url('pdf/adventure?export=pdf')); ?>">Downlod PDF Now</a>


</div>
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
<th scope="col">Reg Date</th>

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
<td><?php echo e($row->created_at); ?></td>

</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</tbody>

</table>

</div>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>