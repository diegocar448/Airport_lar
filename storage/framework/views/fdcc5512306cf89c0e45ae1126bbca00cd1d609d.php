<?php echo csrf_field(); ?>

<div class="form-group">
    <label for="qty_passengers">Quantidade de passageiros</label>
    <input type="number" value="<?php echo e($plane->qty_passengers ?? old('qty_passengers' ?? '')); ?>" name="qty_passengers" placeholder="Qtd passageiros" class="form-control">
</div>
<div class="form-group">
    <label for="class">Classe</label>
   
    <select class="form-control" name="class" id="">
        <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $classe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>        
            <option 
            <?php if($classe == "Economica" && $plane->class == "economic"): ?>
                selected="selected"            
            <?php elseif($classe == "Luxo" && $plane->class == "luxury"): ?>
                selected="selected"
            <?php endif; ?>
            value="<?php if($classe == "Economica"): ?><?php echo e('economic'); ?><?php elseif($classe == "Luxo"): ?><?php echo e('luxury'); ?><?php endif; ?>"            
            ><?php echo e($classe); ?></option>      
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
<div class="form-group">
    <label for="brand_id">Marca</label>
    <select class="form-control" name="brand_id" id="">
        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($brand->id); ?>"
            <?php if($brand->id == $plane->brand_id): ?>
                selected="selected"
            <?php endif; ?>
            ><?php echo e($brand->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<div class="form-group">
    <button class="btn btn-search">Enviar</button>
</div><?php /**PATH /var/www/laravel58/resources/views/panel/planes/form.blade.php ENDPATH**/ ?>