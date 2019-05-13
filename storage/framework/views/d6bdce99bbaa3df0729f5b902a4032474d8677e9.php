<?php echo csrf_field(); ?>

<div class="form-group">
    <label for="user_id">Usuário</label>
    <select class="form-control" name="user_id" id="">
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>        
            <option
            <?php if($reserve != null): ?>             
                <?php if($reserve->user_id == $user->id): ?>
                    selected="selected"            
                <?php elseif($reserve->user_id == $user->id): ?>
                    selected="selected"
                <?php endif; ?>            
            <?php endif; ?>            
            value="<?php echo e($key); ?>"            
            ><?php echo e($user); ?></option>      
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
   
</div>
<div class="form-group">
    <label for="flight_id">Voo</label>
    <select class="form-control" name="flight_id" id="">
        <?php $__currentLoopData = $flights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$flight): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>        
            <option
            <?php if($reserve != null): ?>             
                <?php if($reserve->flight_id == $flight->id): ?>
                    selected="selected"            
                <?php elseif($reserve->flight_id == $flight->id): ?>
                    selected="selected"
                <?php endif; ?>            
            <?php endif; ?>            
            value="<?php echo e($key); ?>"            
            ><?php echo e($flight); ?></option>      
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
   
</div>

<div class="form-group">
    <label for="date">Data da Reserva</label>
    <?php if($reserve == null): ?>
        <input type="date" value="<?php echo e(old('date') ?? date('Y-m-d')); ?>" name="date_reserved" class="form-control">
    <?php else: ?>
        <input type="date" value="<?php echo e($reserve->date ?? old('date' ?? '')); ?>" name="date_reserved" class="form-control">
    <?php endif; ?>
</div>





<div class="form-group">
    <label for="status">Status</label>
    <select class="form-control" name="status" id="">
        <?php $__currentLoopData = $status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$sts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>       
            <option
            <?php if($reserve != null): ?>             
                <?php if($reserve->status == $flight->id): ?>
                    selected="selected"            
                <?php elseif($reserve->status == $flight->id): ?>
                    selected="selected"
                <?php endif; ?>            
            <?php endif; ?>            
            value="<?php echo e($key); ?>"            
            ><?php echo e($sts); ?></option>      
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    
</div>














<?php /**PATH /var/www/laravel58/resources/views/panel/reserves/form.blade.php ENDPATH**/ ?>