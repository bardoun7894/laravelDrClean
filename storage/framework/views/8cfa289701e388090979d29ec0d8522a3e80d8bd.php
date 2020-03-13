<?php $__env->startSection('content'); ?>
<div class="container"> 
    <div class="col-md-12">
         <div class="card">
    <div class="card-header">Costumers</div>
      <div class="card-body">
      
      <form action="<?php echo e('users'); ?>" method="post" class="row"/>
            <?php echo csrf_field(); ?>
            <div class="form-group col-md-6">
                  <label for="first_name">First name</label>
                   <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required>
                 </div>
                     <div class="form-group col-md-6">
                              <label for="last_name">Last name</label>
                              <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
                         </div>
                         <div class="form-group col-md-6">
                          <label for="email">email</label>
                          <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                     </div>
                     <div class="form-group col-md-6">
                       <label for="number_phone">Number phone</label>
                       <input type="text" class="form-control" id="number_phone" name="number_phone" placeholder="Number phone" required>
                      </div>
                      <div class="form-group col-md-6">
                       <label for="password">Password </label>
                       <input type="text" class="form-control" id="password" name="password" placeholder="password" required>
                      </div>
                    
                  <div class="form-group col-md-12">
                   <button  type="submit" class="btn btn-primary">Save new Costumer</button>
                 </div> 
           </form>
             
              <div class="row">
               <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <div class="col-md-6">
              <div class="alert alert-primary" role="alert">
              <div class=" row">
                 <h5> firstname :<?php echo e($user->first_name); ?></h5> 
                 <span>
                 
                  <form action="<?php echo e(route('users')); ?>"method="put">
                  <?php echo csrf_field(); ?>
                  <input type="hidden" name="_method" value="put" />
                  <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>" />
                  <button type="submit" class="update-btn"> <i class="fas fa-edit"></i></button>
                  </form>
                  </span>
                  
                 <span>
                      <form action="<?php echo e(route('users')); ?>"method="post">
                      <?php echo csrf_field(); ?>
                      <input type="hidden" name="_method" value="delete" />
                      <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>" />
                      <button type="submit" class="delete-btn"> <i class="fas fa-trash-alt"></i></button>
                      </form>
                 </span>
              </div>
                          
                          <h5> Lastname :<?php echo e($user->last_name); ?></h5> 
                          <h5> email :<?php echo e($user->email); ?></h5> 
                          <h5> numberPhone :<?php echo e($user->number_phone); ?></h5> 
                          <h5> StreetName :<?php echo e((count($user->adresses)>0)? $user->adresses->street_name : 'no street name'); ?></h5> 
                      </div>
                      </div>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                </div>
                <?php echo e($users->links()); ?>

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
         <?php if(Session::has('message')): ?>
             
            <?php $__env->startSection('scripts'); ?>
                <script>
                jQuery(document).ready(function($){
                  $toast=$('.toast').toast( {autohide:false}  );
                  $toast.toast('show');
                });
                </script>
            <?php $__env->stopSection(); ?>
         <?php endif; ?>

 
         <div class="modal edit-window" id="edit-window"  role="dialog" tabindex="-1" >
           <div class="modal-dialog" role="document">
             <div class="modal-content">
               <div class="modal-header">
                 <h5 class="modal-title" >Edit User</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>
               <form action="<?php echo e(route('users')); ?>" method="POST" class="row">
               <div class="modal-body">
                 <?php echo csrf_field(); ?>
                 <form>
                   <div class="form-group col-md-6" > 
                     <label for="edit-first-name" class="col-form-label">first name</label>
                     <input type="text" class="form-control" id="edit-first-name">
                   </div>
                   <div class="form-group col-md-6" > 
                    <label for="edit-last-name" class="col-form-label">Last Name</label>
                    <input type="text" class="form-control" id="edit-last-name">
                  </div>
                 </form>
                 <input  type="hidden" name="user_id" id="edit_user_id"/>
                 <input type="hidden" name="_method" value="PUT"/>
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 <button type="button" class="btn btn-primary">Send message</button>
               </div>
             </div>
           </div>
         </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\wedding_h\resources\views/admin/customers/customers.blade.php ENDPATH**/ ?>