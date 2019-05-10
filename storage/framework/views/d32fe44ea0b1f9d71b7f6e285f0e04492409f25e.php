





<div class="form-group">
    <label for="name">Nome</label>
    <?php if($user == null): ?>
        <input type="text" value="<?php echo e(old('name' ?? '')); ?>" name="name" class="form-control">
    <?php else: ?>
        <input type="text" value="<?php echo e($user->name ?? old('name' ?? '')); ?>" name="name" class="form-control">
    <?php endif; ?>
</div>

<div class="form-group">
    <label for="email">Email</label>
    <?php if($user == null): ?>
        <input type="email" value="<?php echo e(old('email' ?? '')); ?>" name="email" class="form-control">
    <?php else: ?>
        <input type="email" value="<?php echo e($user->email ?? old('email' ?? '')); ?>" name="email" class="form-control">
    <?php endif; ?>
</div>

<div class="form-group">
    <label for="password">Senha</label>
    <?php if($user == null): ?>
        <input type="password" value="<?php echo e(old('password' ?? '')); ?>" name="password" class="form-control">
    <?php else: ?>
        <input type="password" value="<?php echo e(old('password' ?? '')); ?>" name="password" class="form-control">
    <?php endif; ?>
</div>

<div class="form-group">
    <label for="is_admin">Administrador?
    <?php if($user == null): ?>
        <input type="checkbox" value="0" name="is_admin" class="form-control">
    <?php else: ?>
        <?php if($user->is_admin == true): ?>
            <input type="checkbox" value="1" checked name="is_admin" class="form-control">
        <?php else: ?>
            <input type="checkbox" value="0" name="is_admin" class="form-control">
        <?php endif; ?>
    <?php endif; ?>
    </label>
</div>






<?php /**PATH /var/www/laravel58/resources/views/panel/users/form.blade.php ENDPATH**/ ?>