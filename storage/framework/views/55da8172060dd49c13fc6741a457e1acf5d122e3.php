

<?php $__env->startSection('content'); ?>

<div class="bred">
    <a href="<?php echo e(route('panel')); ?>" class="bred">Home > </a>
    <a href="<?php echo e(route('brands.index')); ?>" class="bred">Marcas > </a>
    <a href="" class="bred"><?php echo e($brand->id); ?></a>
</div>

<div class="title-pg">
    <h1 class="title-pg"><?php echo e($brand->name); ?></h1>
</div>

<div class="content-din">

    <ul>
        <li>
            Nome: <strong><?php echo e($brand->name); ?></strong>
        </li>
    </ul>

    <div class="messages">
        <?php echo $__env->make('panel.includes.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    
    <form class="form form-search form-ds" action="<?php echo e(route('brands.destroy', $brand->id)); ?>" method="POST">
        <?php echo method_field('DELETE'); ?>         
        <?php echo csrf_field(); ?>    

        <div class="form-group">
            <button class="btn btn-danger">Apagar Marca</button>
        </div>

    <form>





</div><!--Content Dinâmico-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel58/resources/views/panel/brands/show.blade.php ENDPATH**/ ?>