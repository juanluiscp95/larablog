

<?php $__env->startSection('content'); ?>
    
    <?php echo $__env->make('dashboard.partials.validation-error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <form action="<?php echo e(route("post.update",$post->id)); ?>" method="POST">
        <?php echo method_field('PUT'); ?>
        <?php echo $__env->make('dashboard.post._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </form>

    <br>

    <form action="<?php echo e(route("post.image",$post)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col">
                <input type="file" name="image" class="form-control">
            </div>
            <div class="col">
                <input type="submit" class="btn btn-primary" value="Subir">
            </div>
        </div>

        
        
    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel6\larablog_JuanLuisCalderon\resources\views/dashboard/post/edit.blade.php ENDPATH**/ ?>