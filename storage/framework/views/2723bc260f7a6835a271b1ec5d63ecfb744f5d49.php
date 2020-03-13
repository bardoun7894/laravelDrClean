<?php $__env->startSection('content'); ?>
<div class="container"> 
    <div class="col-md-12">
         <div class="card">

             <div class="card-header">Services</div>

            <div class="card-body">
                <div class="row">
                   <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <div class="col-md-3">
                        <div class="alert alert-primary" role="alert">
                        <p><?php echo e($service -> service_type); ?></p>  
                        </div>

                      </div>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
                
            </div>


         </div>
         
    </div>
</div>
   

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\wedding_h\resources\views/admin/servicesa/services.blade.php ENDPATH**/ ?>