<?php $__env->startSection('content'); ?>
<div class="container"> 
    <div class="col-md-12">
         <div class="card">
             <div class="card-header">Clothes</div>
               <div class="card-body">
                <div class="row">
                   <?php $__currentLoopData = $clothes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cloth): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <div class="col-md-6">
                        <div class="alert alert-primary" role="alert">
                           <h5> name : <?php echo e($cloth-> name); ?></h5> 
                          <h5> Price : <?php echo e($currency_code); ?><?php echo e($cloth->price); ?></h5> 
     <?php echo (count($cloth->images)>0) ?'<img class="img-thumbnail card-img" src="' .$cloth->images->url.'"/>' : ''; ?>

 
                   </div>
                      </div>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                </div>
                <?php echo e($clothes->links()); ?>

            </div>


         </div>
         
    </div>
</div>
   

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\wedding_h\resources\views/admin/clothes/clothes.blade.php ENDPATH**/ ?>