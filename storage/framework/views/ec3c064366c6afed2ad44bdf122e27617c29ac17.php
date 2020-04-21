<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?php echo e(route('home')); ?>">Larablog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            CRUD
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo e(route('post.index')); ?>">Post</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo e(route('user.index')); ?>">Usuario</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo e(route('category.index')); ?>">Categorias</a>
          </div>
        </li>
      </ul>

      <ul class="navbar-nav">
        
        <li class="nav-item">

          <a class="nav-link" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
            <?php echo e(__('Logout')); ?>

          </a>

          <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
            <?php echo csrf_field(); ?>
          </form>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              PERFIL
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Perfil</a>
              <div class="dropdown-divider"></div>
            </div>
          </li>
      </ul>
    </div>
  </nav><?php /**PATH C:\laragon\www\laravel6\larablog_JuanLuisCalderon\resources\views/dashboard/partials/nav-header-main.blade.php ENDPATH**/ ?>