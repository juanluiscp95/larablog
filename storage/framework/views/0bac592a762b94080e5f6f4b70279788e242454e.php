

<?php $__env->startSection('content'); ?>
    


        <div class="form-group">
            <label for="name">Nombre</label>
            <input readonly class="form-control" type="text" name="name" id="name" value="<?php echo e($user->name); ?>">
        </div>

        <div class="form-group">
            <label for="surname">Apellido</label>
            <input readonly class="form-control" type="text" name="surname" id="surname" value="<?php echo e($user->surname); ?>">
        </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel6\larablog_JuanLuis\resources\views/dashboard/user/show.blade.php ENDPATH**/ ?>