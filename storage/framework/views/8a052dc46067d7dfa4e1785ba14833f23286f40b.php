


<div class="form-group">
    <label for="name">Nome</label>
    
        <input type="text" value="<?php echo e(old('name' ?? '')); ?>" name="name" class="form-control">
    
</div>

<div class="form-group">
    <label for="latitude">Latitude</label>
    
        <input type="text" value="<?php echo e(old('latitude' ?? '')); ?>" name="latitude" class="form-control">
    
</div>

<div class="form-group">
    <label for="longitude">Longitude</label>
    
        <input type="text" value="<?php echo e(old('longitude' ?? '')); ?>" name="longitude" class="form-control">
    
</div>

<div class="form-group">
    <label for="address">Endereço</label>
    
        <input type="text" value="<?php echo e(old('address' ?? '')); ?>" name="address" class="form-control">
    
</div>

<div class="form-group">
    <label for="zip_code">CEP</label>
    
        <input type="number" value="<?php echo e(old('zip_code' ?? '')); ?>" name="zip_code" class="form-control">
    
</div>

<div class="form-group">
    <label for="complement">Complemento</label>    
    
        <textarea rows="4" cols="50" name="complement" class="form-control">
                <?php echo e(old('complement' ?? '')); ?>

        </textarea>        
    
</div>
<?php /**PATH /var/www/laravel58/resources/views/panel/airports/form.blade.php ENDPATH**/ ?>