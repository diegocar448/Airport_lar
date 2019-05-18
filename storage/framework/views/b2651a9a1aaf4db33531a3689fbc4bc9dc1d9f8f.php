

<?php $__env->startSection('content'); ?>

<div class="bred">
    <a href="<?php echo e(route('panel')); ?>" class="bred">Home > </a>
    <a href="<?php echo e(route('users.index')); ?>" class="bred">Usuários > </a>
    <a href="" class="bred">Editar Usuário</a>
</div>

<div class="title-pg">
    <h1 class="title-pg"><?php echo e($title); ?></h1>
</div>

<div class="content-din">

    <?php echo $__env->make('panel.includes.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   
    <form class="form form-search form-ds" action="<?php echo e(route('users.update', $user->id)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo method_field('PUT'); ?>           
    <?php echo csrf_field(); ?>

    <?php echo $__env->make('panel.users.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="form-group">        
        <button class="btn btn-search">Enviar</button>
    </div>

    <form>




</div><!--Content Dinâmico-->




<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel58/resources/views/panel/users/edit.blade.php ENDPATH**/ ?>