
<div class="form-group">
    <label for="plane_id">Escolha o avião</label>
    <select class="form-control" name="class" id="">
        <?php $__currentLoopData = $planes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plane): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>        
            <option
            <?php if($flight != null): ?>             
                <?php if($flight->plane_id == $plane->id): ?>
                    selected="selected"            
                <?php elseif($flight->plane_id == $plane->id): ?>
                    selected="selected"
                <?php endif; ?>            
            <?php endif; ?>            
            value="<?php echo e($plane->id); ?>"            
            ><?php echo e($plane->id); ?></option>      
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
<div class="form-group">
    <label for="airport_origin_id">Origem</label>
    <select class="form-control" name="airport_origin_id" id="">
        <?php $__currentLoopData = $airports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $airport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>        
            <option
            <?php if($airport != null): ?>             
                <?php if($flight->airport_origin_id == $airport->id): ?>
                    selected="selected"            
                <?php elseif($flight->airport_origin_id == $airport->id): ?>
                    selected="selected"
                <?php endif; ?>            
            <?php endif; ?>            
            value="<?php echo e($airport->id); ?>"            
            ><?php echo e($airport->name); ?></option>      
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<div class="form-group">
    <label for="airport_destination_id">Destino</label>
    <select class="form-control" name="airport_destination_id" id="">
        <?php $__currentLoopData = $airports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $airport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>        
            <option
            <?php if($airport != null): ?>             
                <?php if($flight->airport_destination_id == $airport->id): ?>
                    selected="selected"            
                <?php elseif($flight->airport_destination_id == $airport->id): ?>
                    selected="selected"
                <?php endif; ?>            
            <?php endif; ?>            
            value="<?php echo e($airport->id); ?>"            
            ><?php echo e($airport->name); ?></option>      
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<div class="form-group">
    <label for="date">Data</label>
    <?php if($flight == null): ?>
        <input type="date" value="<?php echo e(old('date' ?? '')); ?>" name="date" class="form-control">
    <?php else: ?>
        <input type="date" value="<?php echo e($flight->date ?? old('date' ?? '')); ?>" name="date" class="form-control">
    <?php endif; ?>
</div>

<div class="form-group">
    <label for="time_duration">Duração</label>
    <?php if($flight == null): ?>
        <input type="time" value="<?php echo e(old('time_duration' ?? '')); ?>" name="time_duration" placeholder="tempo de duração" class="form-control">
    <?php else: ?>
        <input type="time" value="<?php echo e($flight->time_duration ?? old('time_duration' ?? '')); ?>" placeholder="tempo de duração" name="time_duration" class="form-control">
    <?php endif; ?>
</div>

<div class="form-group">
    <label for="hour_output">Hora de Saída</label>
    <?php if($flight == null): ?>
        <input type="time" value="<?php echo e(old('hour_output' ?? '')); ?>" name="hour_output" placeholder="hora de saída" class="form-control">
    <?php else: ?>
        <input type="time" value="<?php echo e($flight->hour_output ?? old('hour_output' ?? '')); ?>" name="hour_output" placeholder="hora de saída" class="form-control">
    <?php endif; ?>
</div>

<div class="form-group">
    <label for="arrival_time">Hora de Chegada</label>
    <?php if($flight == null): ?>
        <input type="time" value="<?php echo e(old('arrival_time' ?? '')); ?>" placeholder="hora de chegada" name="arrival_time" class="form-control">
    <?php else: ?>
        <input type="time" value="<?php echo e($flight->arrival_time ?? old('arrival_time' ?? '')); ?>" placeholder="hora de chegada" name="arrival_time" class="form-control">
    <?php endif; ?>
</div>

<div class="form-group">
    <label for="old_price">Preço Anterior</label>
    <?php if($flight == null): ?>
        <input type="time" value="<?php echo e(old('old_price' ?? '')); ?>" placeholder="preço anterior" name="old_price" class="form-control">
    <?php else: ?>
        <input type="time" value="<?php echo e($flight->old_price ?? old('old_price' ?? '')); ?>" placeholder="preço anterior" name="old_price" class="form-control">
    <?php endif; ?>
</div>

<div class="form-group">
    <label for="price">Preço</label>
    <?php if($flight == null): ?>
        <input type="time" value="<?php echo e(old('price' ?? '')); ?>" placeholder="Preço" name="price" class="form-control">
    <?php else: ?>
        <input type="time" value="<?php echo e($flight->price ?? old('price' ?? '')); ?>" placeholder="Preço" name="price" class="form-control">
    <?php endif; ?>
</div>

<div class="form-group">
    <label for="total_plots">Total de parcelas</label>
    <?php if($flight == null): ?>
        <input type="number" value="<?php echo e(old('total_plots' ?? '')); ?>" placeholder="Total de parcelas" name="total_plots" class="form-control">
    <?php else: ?>
        <input type="number" value="<?php echo e($flight->total_plots ?? old('total_plots' ?? '')); ?>" placeholder="Total de parcelas" name="total_plots" class="form-control">
    <?php endif; ?>
</div>

<div class="form-group">
    <label for="is_promotion">É Promoção
    <?php if($flight == null): ?>
        <input type="checkbox" name="is_promotion" class="form-control">
    <?php else: ?>
        <input type="checkbox" checked name="is_promotion" class="form-control">
    <?php endif; ?>
    </label>
</div>

<div class="form-group">
    <label for="image">Foto</label>
    <?php if($flight == null): ?>
        <input type="file" name="image" class="form-control">
    <?php else: ?>
        <input type="file" name="image" class="form-control">
    <?php endif; ?>
</div>

<div class="form-group">
    <label for="qty_stops">Qtd. Paradas</label>
    <?php if($flight == null): ?>
        <input type="number" value="<?php echo e(old('qty_stops' ?? '')); ?>" placeholder="paradas" name="qty_stops" class="form-control">
    <?php else: ?>
        <input type="number" value="<?php echo e($flight->qty_stops ?? old('qty_stops' ?? '')); ?>" placeholder="paradas" name="qty_stops" class="form-control">
    <?php endif; ?>
</div>

<div class="form-group">
    <label for="description">Qtd. Paradas</label>    
    <?php if($flight == null): ?>
        <textarea rows="4" cols="50" name="description" class="form-control">
                <?php echo e(old('description' ?? '')); ?>

        </textarea>        
    <?php else: ?>
        <textarea rows="4" cols="50" name="description" class="form-control">
                <?php echo e($flight->description ?? old('description' ?? '')); ?>

        </textarea>           
    <?php endif; ?>
</div>



<?php /**PATH /var/www/laravel58/resources/views/panel/flights/form.blade.php ENDPATH**/ ?>