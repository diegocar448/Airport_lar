

<?php $__env->startSection('content'); ?>

<div class="bred">
    <a href="<?php echo e(route('panel')); ?>" class="bred">Home > </a>
    <a href="<?php echo e(route('flights.index')); ?>" class="bred">Voos > </a>
    <a href="" class="bred">Cadastrar</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Cadastrar Voo</h1>
</div>

<div class="content-din">

    <?php echo $__env->make('panel.includes.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if(isset($flight)): ?>
        <form class="form form-search form-ds" action="<?php echo e(route('flights.update', $flight->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo method_field('PUT'); ?>    
    <?php else: ?>
        <form class="form form-search form-ds" action="<?php echo e(route('flights.store')); ?>" method="POST" enctype="multipart/form-data">
    <?php endif; ?>    
        <?php echo csrf_field(); ?>

        <?php echo $__env->make('panel.flights.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="form-group">
            <button class="btn btn-search">Enviar</button>
        </div>

    <form>




</div><!--Content Dinâmico-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel58/resources/views/panel/flights/create.blade.php ENDPATH**/ ?>