

<?php $__env->startSection('content'); ?>

<div class="bred">
    <a href="<?php echo e(route('panel')); ?>" class="bred">Home > </a>
    <a href="<?php echo e(route('brands.index')); ?>" class="bred">Marcas > </a>
    <a href="" class="bred">Cadastrar</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Gestão de Avião</h1>
</div>

<div class="content-din">

    <?php echo $__env->make('panel.includes.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if(isset($brand)): ?>
        <form class="form form-search form-ds" action="<?php echo e(route('brands.update', $brand->id)); ?>" method="POST">
        <?php echo method_field('PUT'); ?>    
    <?php else: ?>
        <form class="form form-search form-ds" action="<?php echo e(route('brands.store')); ?>" method="POST">
    <?php endif; ?>    
        <?php echo csrf_field(); ?>

        <div class="form-group">
            <input type="text" value="<?php echo e($brand->name ?? old('name') ?? ''); ?>" name="name" placeholder="Nome" class="form-control">
        </div>

        <div class="form-group">
            <button class="btn btn-search">Enviar</button>
        </div>

    <form>





</div><!--Content Dinâmico-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel58/resources/views/panel/brands/create-edit.blade.php ENDPATH**/ ?>