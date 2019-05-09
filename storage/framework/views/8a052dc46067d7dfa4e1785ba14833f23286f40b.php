
<div class="form-group">
    <label for="city_id">Escolha a Cidade</label>
    <select class="form-control" name="city_id" id="">
        <option value="">Selecione uma Cidade</option>
        <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ci): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>        
            <option
            <?php if($city != null): ?>             
                <?php if($ci->id == Request::segment(3)): ?>
                    selected="selected"            
                
                <?php endif; ?>            
            <?php endif; ?>            
            value="<?php echo e($ci->id); ?>"            
            ><?php echo e($ci->name); ?></option>      
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

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