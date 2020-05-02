

        <?php echo csrf_field(); ?>

        <div class="form-group">
            <label for="title">Título</label>
            <input class="form-control" type="text" name="title" id="title" value="<?php echo e(old('title',$category->title)); ?>">

   

        </div>

        <div class="form-group">
            <label for="url_clean">Url limpia</label>
            <input class="form-control" type="text" name="url_clean" id="url_clean" value="<?php echo e(old('url_clean',$category->url_clean)); ?>">
        </div>

       

        <input type="submit" value="Enviar" class="btn btn-primary">

<?php /**PATH C:\laragon\www\laravel6\larablog_JuanLuis\resources\views/dashboard/category/_form.blade.php ENDPATH**/ ?>