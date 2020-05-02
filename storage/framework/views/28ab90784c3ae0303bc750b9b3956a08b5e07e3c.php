

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

    <div class="row mt-3">
    <?php $__currentLoopData = $post->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-3">
            <img class="w-100" src="<?php echo e($image->getImageUrl()); ?>">
            <a class="float-left btn btn-success btn-sm mt-2" href="<?php echo e(route("post.image-download",$image->id)); ?>">Descargar</a>

            <form action="<?php echo e(route("post.image-delete",$image->id)); ?>" method="POST">
                <?php echo method_field("DELETE"); ?>
                <?php echo csrf_field(); ?>
                <button class="float-right btn btn-danger btn-sm mt-2" type="submit">Eliminar</button>
            </form>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel6\larablog_JuanLuis\resources\views/dashboard/post/edit.blade.php ENDPATH**/ ?>