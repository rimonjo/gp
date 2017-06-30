<?php $__env->startSection('content'); ?>
    <div class="container">
        <table class="table table-striped">
            <tr>
                <td> DRIVERS</td>
            </tr>

            <?php $__currentLoopData = $trips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td> <a href="<?php echo e("/trip/".$trip->id); ?>"><?php echo e($trip->src); ?></a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </table>

        <a href="addtrip">Add new Trip</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>