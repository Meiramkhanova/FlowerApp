<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">Contactus Page</div>
        <div class="card-body">

            <form action="<?php echo e(route('contact.store')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <label>Name</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="address" id="address" class="form-control"></br>
                <label>Mobile</label></br>
                <input type="text" name="mobile" id="mobile" class="form-control"></br>
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image">
                </div>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('contacts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\админ\flower-app\resources\views/contacts/create.blade.php ENDPATH**/ ?>