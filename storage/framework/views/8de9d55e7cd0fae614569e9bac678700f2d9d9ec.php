<?php $__env->startSection('content'); ?>
    <div class="container">
        <table class="table table-striped">
            <tr>
                <td> DRIVER Data</td>
            </tr>


                <tr>
                    <td> Driver Name : <?php echo e($driver->driver_name); ?> </td>
                    <td> Driver Birthday : <?php echo e($driver->birthday); ?> </td>
                    <td> Driver Gender : <?php echo e($driver->gender); ?> </td>
                    <td> Driver Score : <?php echo e($driver->score); ?> </td>
                    <td> Driver NID : <?php echo e($driver->nid); ?> </td>

                </tr>


        </table>

        <a href="/adddriver">Add new Driver</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>