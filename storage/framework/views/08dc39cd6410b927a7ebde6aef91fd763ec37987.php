

        <div class="form-group">
            <label for="title">Título</label>
            <input readonly class="form-control" type="text" value="<?php echo e($postComment->title); ?>">


        </div>

        <div class="form-group">
            <label for="url_clean">Usuario</label>
            <input readonly class="form-control" type="text" value="<?php echo e($postComment->user->name); ?>">
        </div>

        <div class="form-group">
            <label for="url_clean">Aprovado</label>
            <input readonly class="form-control" type="text" value="<?php echo e($postComment->approved); ?>">
        </div>

        <div class="form-group">
            <label for="content">Contenido</label>
            <textarea readonly class="form-control" rows="3"><?php echo e($postComment->message); ?></textarea>
        </div>
    
<?php /**PATH C:\laragon\www\laravel6\larablog_JuanLuis\resources\views/dashboard/post-comment/show.blade.php ENDPATH**/ ?>