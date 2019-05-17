

<?php $__env->startSection('content-site'); ?>

<div class="content">

    <section class="container">
        <h1 class="title">Detalhes do voô <?php echo e($flight->id); ?></h1>


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
                    Data: <strong><?php echo e(formatDateAndTime($flight->date)); ?></strong>
                </li>
                <li>
                    Duração: <strong><?php echo e(formatDateAndTime($flight->time_duration, 'H:i')); ?></strong>
                </li>
                <li>
                    Saída: <strong><?php echo e(formatDateAndTime($flight->hour_output, 'H:i')); ?></strong>
                </li>
                <li>
                    Chegada: <strong><?php echo e(formatDateAndTime($flight->arrival_time, 'H:i')); ?></strong>
                </li>
                <li>
                    Preço Anterior: <strong>R$ <?php echo e(number_format($flight->old_price, 2,',','.')); ?></strong>
                </li>
                <li>
                    Preço Atual: <strong>R$ <?php echo e(number_format($flight->price,2,',','.')); ?></strong>
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
    </section><!--Container-->
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel58/resources/views/site/flights/details.blade.php ENDPATH**/ ?>