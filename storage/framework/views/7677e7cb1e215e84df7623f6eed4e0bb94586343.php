

<?php $__env->startSection('content'); ?>
    


        <div class="form-group">
            <label for="title">Nombre</label>
            <input readonly class="form-control" type="text" value="<?php echo e($contact->name); ?>">


        </div>

        <div class="form-group">
            <label for="url_clean">Apellido</label>
            <input readonly class="form-control" type="text" value="<?php echo e($contact->surname); ?>">
        </div>

        <div class="form-group">
            <label for="url_clean">Email</label>
            <input readonly class="form-control" type="text" value="<?php echo e($contact->email); ?>">
        </div>

        <div class="form-group">
            <label for="content">Contenido</label>
            <textarea readonly class="form-control" rows="3"><?php echo e($contact->message); ?></textarea>
        </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel6\larablog_JuanLuis\resources\views/dashboard/contact/show.blade.php ENDPATH**/ ?>