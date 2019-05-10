

<?php $__env->startSection('content'); ?>

<div class="bred">
    <a href="<?php echo e(route('panel')); ?>" class="bred">Home > </a>
    <a href="<?php echo e(route('users.index')); ?>" class="bred">Usuario > </a>
    <a href="" class="bred"><?php echo e($user->id); ?></a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Detalhes do usuário: <?php echo e($user->name); ?></h1>
</div>

<div class="content-din">

    <ul>
        <li>
            <?php if($user->image): ?>
                <img src="<?php echo e(url("storage/users/{$user->image}")); ?>" alt="<?php echo e($user->id); ?>">
            <?php else: ?>
                <img src="<?php echo e(url("assets/panel/imgs/no-image.png")); ?>" alt="<?php echo e($user->id); ?>">
            <?php endif; ?>
        </li>
        <li>
            Nome: <strong><?php echo e($user->name); ?></strong>
        </li>
        <li>
            Email: <strong><?php echo e($user->email); ?></strong>
        </li>      
        <li>
            Promoção: 
            <strong>
                <?php if($user->is_admin == 1): ?>
                Administrador
                <?php else: ?>
                Usuário
                <?php endif; ?>
            </strong>
        </li>    
        

        
    </ul>

    <div class="messages">
        <?php echo $__env->make('panel.includes.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    
    <form class="form form-search form-ds" action="<?php echo e(route('users.destroy', $user->id)); ?>" method="POST">
        <?php echo method_field('DELETE'); ?>         
        <?php echo csrf_field(); ?>    

        <div class="form-group">
            <button class="btn btn-danger">Deletar o usuário:  <?php echo e($user->name); ?></button>
        </div>

    <form>




</div><!--Content Dinâmico-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel58/resources/views/panel/users/show.blade.php ENDPATH**/ ?>