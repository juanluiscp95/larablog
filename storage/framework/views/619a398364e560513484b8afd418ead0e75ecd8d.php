

        <?php echo csrf_field(); ?>

        <div class="form-group">
            <label for="name">Nombre</label>
            <input class="form-control" type="text" name="name" id="name" value="<?php echo e(old('name',$user->name)); ?>">
        </div>

        <div class="form-group">
            <label for="surname">Apellido</label>
            <input class="form-control" type="text" name="surname" id="surname" value="<?php echo e(old('surname',$user->surname)); ?>">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" value="<?php echo e(old('email',$user->email)); ?>">
        </div>

        <?php if($pasw): ?>
        <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" id="password" value="<?php echo e(old('password',$user->password)); ?>">
        </div>
        <?php endif; ?>

        <input type="submit" value="Enviar" class="btn btn-primary">

<?php /**PATH C:\laragon\www\laravel6\larablog_JuanLuisCalderon\resources\views/dashboard/user/_form.blade.php ENDPATH**/ ?>