


<div class="form-group">
    <label for="name">Nome</label>
    <?php if($airport == null): ?>
        <input type="text" value="<?php echo e(old('name' ?? '')); ?>" name="name" class="form-control">
    <?php else: ?>
        <input type="text" value="<?php echo e($airport->name ?? old('name' ?? '')); ?>" name="name" class="form-control">
    <?php endif; ?>
</div>

<div class="form-group">
    <label for="latitude">Latitude</label>
    <?php if($airport == null): ?>
        <input type="text" value="<?php echo e(old('latitude' ?? '')); ?>" name="latitude" class="form-control">
    <?php else: ?>
        <input type="text" value="<?php echo e($airport->latitude ?? old('latitude' ?? '')); ?>" name="latitude" class="form-control">
    <?php endif; ?>
</div>

<div class="form-group">
    <label for="longitude">Longitude</label>
    <?php if($airport == null): ?>
        <input type="text" value="<?php echo e(old('longitude' ?? '')); ?>" name="longitude" class="form-control">
    <?php else: ?>
        <input type="text" value="<?php echo e($airport->longitude ?? old('longitude' ?? '')); ?>" name="longitude" class="form-control">
    <?php endif; ?>
</div>

<div class="form-group">
    <label for="address">Endereço</label>
    <?php if($airport == null): ?>
        <input type="text" value="<?php echo e(old('address' ?? '')); ?>" name="address" class="form-control">
    <?php else: ?>
        <input type="text" value="<?php echo e($airport->address ?? old('date' ?? '')); ?>" name="address" class="form-control">
    <?php endif; ?>
</div>

<div class="form-group">
    <label for="address">Número</label>
    <?php if($airport == null): ?>
        <input type="text" value="<?php echo e(old('number' ?? '')); ?>" name="number" class="form-control">
    <?php else: ?>
        <input type="text" value="<?php echo e($airport->number ?? old('number' ?? '')); ?>" name="number" class="form-control">
    <?php endif; ?>
</div>

<div class="form-group">
    <label for="zip_code">CEP</label>
    <?php if($airport == null): ?>
        <input type="number" value="<?php echo e(old('zip_code' ?? '')); ?>" name="zip_code" class="form-control">
    <?php else: ?>
        <input type="number" value="<?php echo e($airport->zip_code ?? old('date' ?? '')); ?>" name="zip_code" class="form-control">
    <?php endif; ?>
</div>

<div class="form-group">
    <label for="complement">Complemento</label>    
    <?php if($airport == null): ?>
        <textarea rows="4" cols="50" name="complement" class="form-control">
                <?php echo e(old('complement' ?? '')); ?>

        </textarea>        
    <?php else: ?>
        <textarea rows="4" cols="50" name="complement" class="form-control">
                <?php echo e($airport->complement ?? old('complement' ?? '')); ?>

        </textarea>           
    <?php endif; ?>
</div>
<?php /**PATH /var/www/laravel58/resources/views/panel/airports/form.blade.php ENDPATH**/ ?>