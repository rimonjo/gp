<?php $__env->startSection('content'); ?>
<div class="container">
<form action="adddriver" method="POST">
<?php echo e(csrf_field()); ?>


<div class="form-group">
<label for="usr"> driver name : </label>
<input type="text" name="driver_name" class="form-control">
</div>

<div class="form-group">
<label for="usr"> birthday: </label>
<input type="text" name="birthday" class="form-control">
</div>

<div class="form-group">
<label for="usr"> gender: </label>
<input type="text" name="Male" class="form-control">
</div>

<div class="form-group">
<label for="usr"> score: </label>
<input type="text" name="score" class="form-control">
</div>

<div class="form-group">
<label for="usr"> National ID: </label>
<input type="text" name="nid" class="form-control">
</div>
</br>
<input type="submit" value="add new article" class="btn btn-primary"/>
 </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>