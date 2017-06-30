<?php $__env->startSection('content'); ?>
    <div class="container">
        <table class="table table-striped">
            <tr>
                <td> DRIVERS</td>
            </tr>

            <?php $__currentLoopData = $drivers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td> <a href="<?php echo e("/driver/".$driver->id); ?>"><?php echo e($driver->driver_name); ?></a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </table>

        <a href="adddriver">Add new Driver</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>