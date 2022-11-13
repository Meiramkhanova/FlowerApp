<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">Contactus Page</div>
        <div class="card-body">

            <div class="card-body">
                <h5 class="card-title">Name : <?php echo e($contacts->name); ?></h5>
                <p class="card-text">Address : <?php echo e($contacts->address); ?></p>
                <p class="card-text">Phone : <?php echo e($contacts->mobile); ?></p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <img src="/storage/<?php echo e($contacts->image); ?>" width="500px">
                </div>
            </div>
            </hr>

        </div>
    </div>

<?php echo $__env->make('contacts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\админ\flower-app\resources\views/contacts/show.blade.php ENDPATH**/ ?>