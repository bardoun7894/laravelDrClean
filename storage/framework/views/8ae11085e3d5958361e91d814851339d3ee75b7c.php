<?php $__env->startSection('content'); ?>
<div class="container"> 
    <div class="col-md-12">
         <div class="card">
         <div class="card-header">Clothes <a class="btn btn-primary"  href="<?php echo e(route('new-cloth')); ?>"> new cloth</a></div>
               <div class="card-body">
                <div class="row">
                   <?php $__currentLoopData = $clothes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cloth): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <div class="col-md-6">
                        <div class="alert alert-primary" role="alert">
                         <h5> name : <?php echo e($cloth-> name); ?></h5> 
                          <h5> Price : <?php echo e($currency_code); ?><?php echo e($cloth->price); ?></h5> 
     <img class="img-thumbnail card-img" src=" <?php echo e(url('uploads/'.$cloth->images->url)); ?>"  width="100px;" height="100px;" alt="image" />
     
     <a class="btn btn-success mt-2"  href="<?php echo e(route('update-cloth',['id'=>$cloth->id])); ?>"> update cloth</a>
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

<?php if(Session::has('message')): ?>
  <div class="toast" style="position: absolute;z-index:99999; top: 5%; right: 5%;">
    <div class="toast-header">
      <strong class="mr-auto">Users</strong>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
     <span aria-hidden="true">&times</span>
      </button>
    </div>
    <div class="toast-body">
         
              <?php echo e(Session::get('message')); ?>

          
    </div>
  </div>
  <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\wedding_h\resources\views/admin/clothes/clothes.blade.php ENDPATH**/ ?>