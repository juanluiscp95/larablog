

        <?php echo csrf_field(); ?>

        <div class="form-group">
            <label for="title">Título</label>
            <input class="form-control" type="text" name="title" id="title" value="<?php echo e(old('title',$post->title)); ?>">

            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        </div>

        <div class="form-group">
            <label for="url_clean">Url limpia</label>
            <input class="form-control" type="text" name="url_clean" id="url_clean" value="<?php echo e(old('url_clean',$post->url_clean)); ?>">
        </div>

        <div class="form-group">
            <label for="category_id">Categorías</label>
            <select class="form-control" name="category_id" id="category_id">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $title => $id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option <?php echo e($post->category_id == $id ? 'selected="selected"' : ''); ?> value="<?php echo e($id); ?>"><?php echo e($title); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="form-group">
            <label for="posted">Posted</label>
            <select class="form-control" name="posted" id="posted">
                <?php echo $__env->make('dashboard.partials.option-yes-not',['val' => $post->posted], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </select>
        </div>

        <div class="form-group">
            <label for="category_id">Etiquetas</label>
            <select multiple class="form-control" name="tags_id[]" id="tags_id">
                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $title => $id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option <?php echo e(in_array($id, old('tags_id') ?: $post->tags->pluck("id")->toArray()) ? "selected": ""); ?> value="<?php echo e($id); ?>"><?php echo e($title); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="form-group">
            <label for="content">Contenido</label>
            <textarea class="form-control" name="content" id="content" rows="3"><?php echo e(old('content',$post->content)); ?></textarea>
        </div>

        <input type="hidden" id="token" value="<?php echo e(csrf_token()); ?>">

        <input type="submit" value="Enviar" class="btn btn-primary">

<?php /**PATH C:\laragon\www\laravel6\larablog_JuanLuis\resources\views/dashboard/post/_form.blade.php ENDPATH**/ ?>