

<?php $__env->startSection('content'); ?>

<div class="col-6 mb-3">
    <form action="<?php echo e(route('post-comment.post',1)); ?>" id="filterForm">
        <div class="form-row">
            <div class="col-10">
                <select id="filterPost" class="form-control">
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($p->id); ?>"
                            <?php echo e($post->id == $p->id ? 'selected' : ''); ?>>
                            <?php echo e(Str::limit($p->title, 90)); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="col-2">
                <button class="btn btn-success" type="submit">Enviar</button>
            </div>
        </div>
    </form>
</div>

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
                    Aprobado
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
                        
                        
                        <button data-toggle="modal" data-target="#showModal" data-id="<?php echo e($postComment->id); ?>" class="btn btn-primary"><i class="fa fa-2x fa-eye"></i></button>

                        <button data-id="<?php echo e($postComment->id); ?>" class="approved btn btn-<?php echo e($postComment->approved == 1 ? "success": "danger"); ?>"><?php echo e($postComment->approved == 1 ? "Aprobado": "Rechazado"); ?></button>
                        <button data-toggle="modal" data-target="#deleteModal" data-id="<?php echo e($postComment->id); ?>" class="btn btn-danger"><i class="fa fa-2x fa-trash"></i></button>
                        
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
              <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-2x fa-times"></i></button>

                <form id="formDelete" method="POST" action="<?php echo e(route('post-comment.destroy',0)); ?>" data-action="<?php echo e(route('post-comment.destroy',0)); ?>">
                    <?php echo method_field('DELETE'); ?>
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-danger"><i class="fa fa-2x fa-trash"></i></button>
                </form>
              
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ModalLabel"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <p class="message"></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-2x fa-times"></i></button>

                
              
            </div>
          </div>
        </div>
      </div>

      <?php else: ?>

      <h1>No hay comentarios para el post seleccionado</h1>
              
      <?php endif; ?>

        <script>

            document.querySelectorAll(".approved").forEach(button => button.addEventListener("click", function(){
                console.log("hola mundo: "+button.getAttribute("data-id"))

                var id = button.getAttribute("data-id");

                var formData = new FormData();
                formData.append("_token",'<?php echo e(csrf_token()); ?>');

                fetch("<?php echo e(URL::to("/")); ?>/dashboard/post-comment/proccess/"+id,{
                    method: 'POST',
                    body: formData

                })
                    .then(response => response.json())
                    .then(aprroved => {
                        
                        if(aprroved == 1){
                            button.classList.remove('btn-danger');
                            button.classList.add('btn-success');
                            button.innerHTML = "Aprobado";
                        } else {        
                            button.classList.remove('btn-success');
                            button.classList.add('btn-danger'); 
                            button.innerHTML = "Rechazado";      
                        }
                    });

                /*$.ajax({
                        method: "POST",
                        url: "<?php echo e(URL::to("/")); ?>/dashboard/post-comment/proccess/"+id,
                        data:{'_token': '<?php echo e(csrf_token()); ?>'}  
                })
                    .done(function( aprroved ) {
                        if(aprroved == 1){
                            $(button).removeClass('btn-danger');
                            $(button).addClass('btn-success');
                            $(button).text('Aprobado')
                        } else {                 
                            $(button).addClass('btn-danger');
                            $(button).removeClass('btn-success');
                            $(button).text('Rechazado')
                        }
                    });   */
            }))
            

            window.onload = function(){

                $('#showModal').on('show.bs.modal', function (event) {
                    console.log("modal abierto")
                    var button = $(event.relatedTarget) // Button that triggered the modal
                    var id = button.data('id') // Extract info from data-* attributes
                    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    
                    var modal = $(this)
                    /*$.ajax({
                        method: "GET",
                        url: "<?php echo e(URL::to("/")); ?>/dashboard/post-comment/j-show/"+id       
                    })
                        .done(function( msg ) {
                            modal.find('.modal-title').text(msg.title)
                            modal.find('.message').text(msg.message)
                        });   */ 

                    fetch("<?php echo e(URL::to("/")); ?>/dashboard/post-comment/j-show/"+id)
                    .then(response => response.json())
                    .then(msg => {
                        modal.find('.modal-title').text(msg.title)
                        modal.find('.message').text(msg.message)          
                    });
                });

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
                });

                
            
        
                $("#filterForm").submit(function(){
                    //console.log($(this).val())
                    var palabra = "/post";
                    var action = $(this).attr('action'); //action es la url entera http://127.0.0.1:8000/dashboard/post-comment/0
                    var action2 = action.split("/", 6); //el action2 es la url dividida por las barras 
                    action3 = action2[5].replace(/[0-9]/,$("#filterPost").val()); //el action3 es el ultimo elemento de la url cambiado
                    var res = action.slice(0, 45); 
                    console.log(res+action3)
                    
                    $(this).attr('action',res+action3+palabra)
        
                });
            }
        </script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel6\larablog_JuanLuis\resources\views/dashboard/post-comment/post.blade.php ENDPATH**/ ?>