<?php $__env->startSection('content'); ?>
<div class="container">

    <?php if(Session::has('success')): ?>
        <div class="alert-box success">
            <h2><?php echo Session::get('success'); ?></h2>
        </div>
    <?php endif; ?>

        <div class="secure">Upload form</div>
        <div class="form-group">
        <h2> Simple MUltiple upload</h2>
            <?php echo Form::open(array('url'=>'upload/uploadFiles','method'=>'POST', 'files'=>true)); ?>

            <?php echo Form::file('images[]', array('multiple'=>true)); ?>

            <p class="errors"><?php echo $errors->first('images'); ?></p>
            <?php if(Session::has('error')): ?>
                <p class="errors"><?php echo Session::get('error'); ?></p>
            <?php endif; ?>

            <?php echo Form::submit('Submit', array('class'=>'btn btn-lg btn-primary col-md-4')); ?>

            <?php echo Form::close(); ?>

        </div>



</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>