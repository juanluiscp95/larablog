

<?php $__env->startSection('content'); ?>

 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.fragment.subview','data' => []]); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withName('fragment.subview'); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

 <?php if (isset($component)) { $__componentOriginalc77a97b910be30a6904238a52865070a3b869ac6 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Ejemploinline::class, []); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withName('ejemploinline'); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginalc77a97b910be30a6904238a52865070a3b869ac6)): ?>
<?php $component = $__componentOriginalc77a97b910be30a6904238a52865070a3b869ac6; ?>
<?php unset($__componentOriginalc77a97b910be30a6904238a52865070a3b869ac6); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

 <?php if (isset($component)) { $__componentOriginalc6f8d4f9f961ddc01646cff5aa55c8471aec3a2c = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Ejemplo::class, ['message' => 'Hola POST','posts' => $posts]); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withName('ejemplo'); ?>
<?php $component->withAttributes(['class' => 'container']); ?>
<?php if (isset($__componentOriginalc6f8d4f9f961ddc01646cff5aa55c8471aec3a2c)): ?>
<?php $component = $__componentOriginalc6f8d4f9f961ddc01646cff5aa55c8471aec3a2c; ?>
<?php unset($__componentOriginalc6f8d4f9f961ddc01646cff5aa55c8471aec3a2c); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

 <?php if (isset($component)) { $__componentOriginalc6f8d4f9f961ddc01646cff5aa55c8471aec3a2c = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Ejemplo::class, ['message' => 'Hola POST','posts' => $posts]); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withName('ejemplo'); ?>
<?php $component->withAttributes(['class' => 'container']); ?>
    <p>Contenido adicional</p>

     <?php $__env->slot('title'); ?> 
        <h1>Titulo de nuestro listado</h1>
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('title3'); ?> 
        Subtítulo
     <?php $__env->endSlot(); ?>

 <?php if (isset($__componentOriginalc6f8d4f9f961ddc01646cff5aa55c8471aec3a2c)): ?>
<?php $component = $__componentOriginalc6f8d4f9f961ddc01646cff5aa55c8471aec3a2c; ?>
<?php unset($__componentOriginalc6f8d4f9f961ddc01646cff5aa55c8471aec3a2c); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

<a class="btn btn-success mt-3 mb-3" href="<?php echo e(route('post.create')); ?>">
    <i class="fa fa-plus"></i> Crear
</a>

<a class="btn btn-warning mt-3 mb-3" href="<?php echo e(route('post.export')); ?>">
    <i class="fa fa-plus"></i> Exportar
</a>



<form action="<?php echo e(route('post.index')); ?>" class="form-inline mb-3">
    <select name="created_at" class="form-control">
        <option value="DESC">Descendente</option>
        <option <?php echo e(request('created_at') == "ASC" ? "selected" : ''); ?> value="ASC">Ascendente</option>
    </select>
    <input type="text" name="search" placeholder="Buscar..." class="ml-1 form-control" value="<?php echo e(request('search')); ?>">
    <button type="submit" class="ml-2 btn btn-success"><i class="fa fa-search"></i></button>
</form>

    <table class="table">
        <thead>
            <tr>
                <td>
                    Id
                </td>
                <td>
                    Título
                </td>
                <td>
                    Categoría
                </td>
                <td>
                    Posteado
                </td>
                <td>
                    Creación
                </td>
                <td>
                    Actualización
                </td>
                <td>
                    Acciones
                </td>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <?php echo e($post->id); ?>

                    </td>
                    <td>
                        <?php echo e($post->title); ?>

                    </td>
                    <td>
                        <?php echo e($post->category->title); ?>

                    </td>
                    <td>
                        <?php echo e($post->posted); ?>

                    </td>
                    <td>
                        <?php echo e($post->created_at->format('d-m-Y')); ?>

                    </td>
                    <td>
                        <?php echo e($post->updated_at->format('d-m-Y')); ?>

                    </td>
                    <td>
                        <a href="<?php echo e(route('post.show',$post->id)); ?>" class="btn btn-primary"><i class="fa fa-2x fa-eye"></i></a>
                        <a href="<?php echo e(route('post.edit',$post->id)); ?>" class="btn btn-warning"><i class="fa fa-2x fa-edit"></i></a>
                        <a href="<?php echo e(route('post-comment.post',$post->id)); ?>" class="btn btn-dark"><i class="fa fa-2x fa-comments"></i></a>
                        
                        <button data-toggle="modal" data-target="#deleteModal" data-id="<?php echo e($post->id); ?>" class="btn btn-danger"><i class="fa fa-2x fa-trash"></i></button>
                        
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    

    <?php echo e($posts->appends(
        [
            'created_at' => request('created_at'),
            'search' => request('search'),
        ]
        )->links()); ?>


    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ModalLabel"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <p>¿Seguro que desea eliminar el registro seleccionado?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                <form id="formDelete" method="post" action="<?php echo e(route('post.destroy',0)); ?>" data-action="<?php echo e(route('post.destroy',0)); ?>">
                    <?php echo method_field('DELETE'); ?>
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
              
            </div>
          </div>
        </div>
      </div>

        <script>
            window.onload = function(){
                $('#deleteModal').on('show.bs.modal', function (event) {
                console.log("modal abierto")
                var button = $(event.relatedTarget) // Button that triggered the modal
                var id = button.data('id') // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

                action = $('#formDelete').attr('data-action').slice(0,-1) 
                action += id
                console.log(action)

                $('#formDelete').attr('action',action)

                var modal = $(this)
                modal.find('.modal-title').text('Vas a borrar el POST: ' + id)
                })
            }
        </script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel6\larablog_JuanLuis\resources\views/dashboard/post/index.blade.php ENDPATH**/ ?>