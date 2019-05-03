

<?php $__env->startSection('content'); ?>

<div class="bred">
    <a href="<?php echo e(route('panel')); ?>" class="bred">Home > </a>
    <a href="<?php echo e(route('planes.index')); ?>" class="bred">Aviões > </a>
    <a href="" class="bred">Editar</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Editar Avião: <strong><?php echo e($plane->name); ?></strong></h1>
</div>

<div class="content-din">
    <?php echo $__env->make('panel.includes.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('panel.includes.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
    <form class="form form-search form-ds" action="<?php echo e(route('planes.update', $plane->id)); ?>" method="POST">
        <?php echo method_field('PUT'); ?>    
        <?php echo $__env->make('panel.planes.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>    
    <form>
</div>
<!--Content Dinâmico-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel58/resources/views/panel/planes/edit.blade.php ENDPATH**/ ?>