

<?php $__env->startSection('content'); ?>

<div class="bred">
    <a href="<?php echo e(route('panel')); ?>" class="bred">Home > </a>
    <a href="<?php echo e(route('airports.index', $city->id)); ?>" class="bred">Cidade <?php echo e($city->name); ?> </a>
    <a href="" class="bred">Detalhes do Aeroporto</a>
</div>

<div class="title-pg">
    <h1 class="title-pg"><?php echo e($airport->name); ?> - <?php echo e($city->name); ?></h1>
</div>

<div class="content-din">

    <ul>
        <li>
            Nome: <strong><?php echo e($airport->name); ?></strong>
        </li>
        <li>
            Latitude: <strong><?php echo e($airport->latitude); ?></strong>
        </li>
        <li>
            Longitude: <strong><?php echo e($airport->longitude); ?></strong>
        </li>
        <li>
            Endereço: <strong><?php echo e($airport->address); ?></strong>
        </li>
        <li>
            Número: <strong><?php echo e($airport->number); ?></strong>
        </li>
        <li>
            Código Postal: <strong><?php echo e($airport->zip_code); ?></strong>
        </li>
        <li>
            Complemento: <strong><?php echo e($airport->complement); ?></strong>
        </li>
    </ul>

    <div class="messages">
        <?php echo $__env->make('panel.includes.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    
    <form class="form form-search form-ds" action="<?php echo e(route('airports.destroy', [$city->id, $airport->id])); ?>" method="POST">
        <?php echo method_field('DELETE'); ?>         
        <?php echo csrf_field(); ?>    

        <div class="form-group">
            <button class="btn btn-danger">Apagar <?php echo e($airport->name); ?></button>
        </div>
    <form>




</div><!--Content Dinâmico-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel58/resources/views/panel/airports/show.blade.php ENDPATH**/ ?>