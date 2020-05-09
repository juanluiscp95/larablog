<div <?php echo e($attributes->merge(['class' => "bg-danger"])); ?>>

    <?php if(isset($title)): ?>
    <?php echo e($title); ?>

    <?php endif; ?>

    <?php if(isset($title3)): ?>
    <h3><?php echo e($title3); ?></h3>
    <?php endif; ?>


    <?php echo e($message); ?>


    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($post->id); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <ul>
        <?php $__currentLoopData = $my_list('Item 4'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($item); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <?php echo e($slot); ?>


</div><?php /**PATH C:\laragon\www\laravel6\larablog_JuanLuis\resources\views/components/ejemplo.blade.php ENDPATH**/ ?>