<?php $__env->startSection('content'); ?>
<div class="container"> 
    <div class="col-md-12">
         <div class="card">
             <div class="card-header">Adresses</div>
               <div class="card-body">
                <div class="row">
                   <?php $__currentLoopData = $adresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adress): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <div class="col-md-6">
                        <div class="alert alert-primary" role="alert">
                          <h5> street_name :<?php echo e($adress->street_name); ?></h5> 
                          <h5> name :<?php echo e($adress->street_number); ?></h5> 
                          
                      </div>
                      </div>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                </div>
                <?php echo e($adresses->links()); ?>

            </div>


         </div>
         
    </div>
</div>
   

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\wedding_h\resources\views/admin/adresses/adresses.blade.php ENDPATH**/ ?>