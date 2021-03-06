

<?php $__env->startSection('content'); ?>

<div class="bred">
    <a href="<?php echo e(route('panel')); ?>" class="bred">Home > </a>
    <a href="<?php echo e(route('brands.index')); ?>" class="bred">Marcas > </a>
    <a href="<?php echo e(route('brands.create')); ?>" class="bred">Cadastrar</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Cadastrar Aviões</h1>
</div>

<div class="content-din">

    <?php if(isset($errors) && $errors->any()): ?>
        <div class="alert alert-warning">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form class="form form-search form-ds" action="<?php echo e(route('brands.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div class="form-group">
            <input type="text" value="<?php echo e(old('name')); ?>" name="name" placeholder="Nome" class="form-control">
        </div>

        <div class="form-group">
            <button class="btn btn-search">Enviar</button>
        </div>

    <form>





</div><!--Content Dinâmico-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel58/resources/views/panel/brands/create.blade.php ENDPATH**/ ?>