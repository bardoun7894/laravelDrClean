<?php $__env->startSection('content'); ?>

<div class="container"> 
<div class="col-md-12">
     <div class="card">
         <div class="card-header">
     <?php echo e(!is_null($clothes) ? 'Update clothes :'.$clothes->name: 'New Clothes'); ?>    
          </div>
              <div class="card-body">
                  <form action="<?php echo e((!is_null($clothes)) ? route('update-cloth',['id'=>$clothes->id]) : route('new-cloth')); ?>  " method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php if(!is_null($clothes)): ?>
                        <input type="hidden" name="_method" value="put"/>
                        <input type="hidden" name="cloth_id" value="<?php echo e($clothes->id); ?>">
                    <?php endif; ?>

                       <div class="form-group col-md-6">
                                <label for="name">Clothes name</label>
                                <input type="text" class="form-control"
                            id="name" name="name" placeholder="Clothes Name" required
                            value="<?php echo e((!is_null($clothes)) ? $clothes->name : ''); ?>">
                       </div>
                            
                         <div class="form-group col-md-6">
                              <label for="quantity">quantity</label>
                              <input type="number" class="form-control" step="any" id="quantity" name="quantity" placeholder="Quantity" required
                              value="<?php echo e((!is_null($clothes)) ? $clothes->quantity : ''); ?>">
                         </div>


                         <div class="form-group col-md-6">
                            <label for="price">price</label>
                             <input type="number" class="form-control" step="any" id="price" name="price" placeholder="price" required
                               value="<?php echo e((!is_null($clothes)) ? $clothes->price : ''); ?>"  >
                         </div> 
                
                         <div class="form-group col-md-6">
                            <label for="total">total</label>
                             <input type="number" class="form-control" step="any" id="total" name="total" placeholder="total" required
                               value="<?php echo e((!is_null($clothes)) ? $clothes->total : ''); ?>"  >
                         </div>

                         <div class="col-md-4 col-sm-6 mb-4">
                           
                            <div class="card">
                                 <div class="card-body" style="text-align:center">
                              <input  type="file" class="form-control" name="image" >
                                </div>
                            </div>
                          </div>
                           
                         <div class="form-group col-md-6 offset-md-3">
                             
                            <button type="submit" class="btn btn-primary">SAVE</button>
                         </div>           
                
                   </form>
                        <div class="row">
                  
                       </div>
         </div>
    </div>
</div>
</div>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\wedding_h\resources\views/admin/clothes/new-cloth.blade.php ENDPATH**/ ?>