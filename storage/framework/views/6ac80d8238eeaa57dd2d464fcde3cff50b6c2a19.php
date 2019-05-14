

<?php $__env->startSection('content'); ?>

<div class="bred">
    <a href="<?php echo e(route('panel')); ?>" class="bred">Home > </a>
    <a href="<?php echo e(route('reserves.index')); ?>" class="bred">Reservas > </a>
    <a href="" class="bred">Editar</a>
</div>

<div class="title-pg">
    <h1 class="title-pg"><?php echo e($title); ?></h1>
</div>

<div class="content-din">

    <?php echo $__env->make('panel.includes.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <form class="form form-search form-ds" action="<?php echo e(route('reserves.update', $reserve->id)); ?>" method="POST" enctype="multipart/form-data">       
        <?php echo method_field('PUT'); ?> 
        <?php echo csrf_field(); ?>   
        

        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" name="status" id="">
                <?php $__currentLoopData = $status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$sts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>       
                    <option
                    <?php if($reserve != null): ?>             
                        <?php if($reserve->status == $key): ?>
                            selected="selected"            
                        <?php elseif($reserve->status == $key): ?>
                            selected="selected"
                        <?php endif; ?>            
                    <?php endif; ?>            
                    value="<?php echo e($key); ?>"            
                    ><?php echo e($sts); ?></option>      
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>    
        </div>

        <div class="form-group">
            <button class="btn btn-search">Editar Reserva</button>
        </div>

    <form>




</div><!--Content Dinâmico-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel58/resources/views/panel/reserves/edit.blade.php ENDPATH**/ ?>