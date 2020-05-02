

<?php $__env->startSection('content'); ?>

<?php if(count($postComments) > 0): ?>
    


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
                    Aprovado
                </td>
                <td>
                    Usuario
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
            <?php $__currentLoopData = $postComments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postComment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <?php echo e($postComment->id); ?>

                    </td>
                    <td>
                        <?php echo e($postComment->title); ?>

                    </td>
                    <td>
                        <?php echo e($postComment->approved); ?>

                    </td>
                    <td>
                        <?php echo e($postComment->user->name); ?>

                    </td>
                    <td>
                        <?php echo e($postComment->created_at->format('d-m-Y')); ?>

                    </td>
                    <td>
                        <?php echo e($postComment->updated_at->format('d-m-Y')); ?>

                    </td>
                    <td>
                        <a href="<?php echo e(route('post-comment.show',$postComment->id)); ?>" class="btn btn-primary">Ver</a>
                        
                        
                        <button data-toggle="modal" data-target="#deleteModal" data-id="<?php echo e($postComment->id); ?>" class="btn btn-danger">Eliminar</button>
                        
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    

    <?php echo e($postComments->links()); ?>


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

                <form id="formDelete" method="POST" action="<?php echo e(route('post-comment.destroy',0)); ?>" data-action="<?php echo e(route('post-comment.destroy',0)); ?>">
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

        
            
        <?php else: ?>

        <h1>No hay comentarios para el post seleccionado</h1>
            
        <?php endif; ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel6\larablog_JuanLuis\resources\views/dashboard/post-comment/index.blade.php ENDPATH**/ ?>