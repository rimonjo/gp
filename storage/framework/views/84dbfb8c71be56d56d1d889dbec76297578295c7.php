<?php $__env->startSection('content'); ?>
    <div class="container">
        <table class="table table-striped">
            <tr>
                <td> TRIPS Data</td>
            </tr>


                <tr>
                    <td>  TRIP SOURCE : <?php echo e($trip->src); ?> </td>
                    <td>  TRIP DESTINATION : <?php echo e($trip->dst); ?> </td>
                    <td>  TRIP DATE : <?php echo e($trip->trip_date); ?> </td>
                    <td>  TRIP FINAL REPORT : <?php echo e($trip->final_report); ?> </td>
                    <td>  TRIP DRIVER NAME : <?php echo e($trip->driver->driver_name); ?> </td>

                </tr>


        </table>

        <a href="/addtrip">Add new Driver</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>