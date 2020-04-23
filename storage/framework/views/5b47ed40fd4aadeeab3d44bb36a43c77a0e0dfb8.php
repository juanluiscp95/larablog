
<?php $__env->startSection('content'); ?>
<h1>Contenido inicial</h1>

{{message}}

<ul>
    <li v-for="post in posts">
        {{ post }}
    </li>
</ul>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel6\larablog_JuanLuisCalderon\resources\views/web/index.blade.php ENDPATH**/ ?>