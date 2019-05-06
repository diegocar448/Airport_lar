

<?php $__env->startSection('content'); ?>

<div class="bred">
    <a href="<?php echo e(route('panel')); ?>" class="bred">Home > </a>
    <a href="<?php echo e(route('planes.index')); ?>" class="bred">Voos > </a>
    <a href="" class="bred"><?php echo e($flight->id); ?></a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Detalhes do voo: <?php echo e($flight->id); ?></h1>
</div>

<div class="content-din">

    <ul>
        <li>
            Código: <strong><?php echo e($flight->id); ?></strong>
        </li>
        <li>
            Origem: <strong><?php echo e($flight->origin->name); ?></strong>
        </li>
        <li>
            Destino: <strong><?php echo e($flight->destination->name); ?></strong>
        </li>
        <li>
            Data: <strong><?php echo e($flight->date); ?></strong>
        </li>
        <li>
            Duração: <strong><?php echo e($flight->time_duration); ?></strong>
        </li>
        <li>
            Saída: <strong><?php echo e($flight->hour_output); ?></strong>
        </li>
        <li>
            Chegada: <strong><?php echo e($flight->arrival_time); ?></strong>
        </li>
        <li>
            Preço Anterior: <strong><?php echo e($flight->old_price); ?></strong>
        </li>
        <li>
            Preço Atual: <strong><?php echo e($flight->price); ?></strong>
        </li>
        <li>
            Total de paradas: <strong><?php echo e($flight->total_plots); ?></strong>
        </li>
        <li>
            Promoção: 
            <strong>
                <?php if($flight->is_promotion == 1): ?>
                SIM
                <?php else: ?>
                NÃO
                <?php endif; ?>
            </strong>
        </li>
        <li>
            Descrição: <strong><?php echo e($flight->description); ?></strong>
        </li>
        

        
    </ul>

    <div class="messages">
        <?php echo $__env->make('panel.includes.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    
    <form class="form form-search form-ds" action="<?php echo e(route('flights.destroy', $flight->id)); ?>" method="POST">
        <?php echo method_field('DELETE'); ?>         
        <?php echo csrf_field(); ?>    

        <div class="form-group">
            <button class="btn btn-danger">Deletar o voo</button>
        </div>

    <form>





</div><!--Content Dinâmico-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel58/resources/views/panel/flights/show.blade.php ENDPATH**/ ?>