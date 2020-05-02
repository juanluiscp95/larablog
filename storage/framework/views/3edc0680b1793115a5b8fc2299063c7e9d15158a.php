

<?php $__env->startSection('content'); ?>
    


        <div class="form-group">
            <label for="title">Título</label>
            <input readonly class="form-control" type="text" name="title" id="title" value="<?php echo e($post->title); ?>">


        </div>

        <div class="form-group">
            <label for="url_clean">Url limpia</label>
            <input readonly class="form-control" type="text" name="url_clean" id="url_clean" value="<?php echo e($post->url_clean); ?>">
        </div>

        <div class="form-group">
            <label for="content">Contenido</label>
            <textarea readonly class="form-control" name="content" id="content" rows="3"><?php echo e($post->content); ?></textarea>
        </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel6\larablog_JuanLuis\resources\views/dashboard/post/show.blade.php ENDPATH**/ ?>