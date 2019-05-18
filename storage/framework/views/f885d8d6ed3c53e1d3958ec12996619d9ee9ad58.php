

<?php $__env->startSection('content-site'); ?>

<div class="content">

        <section class="container">
            <h1 class="title">Minhas Compras</h1>
    
    
            <table class="table">
                <thead>
                    <tr>
                        <th width="50">Cod</th>
                        <th>Vôo</th>
                        <th>Data</th>
                        <th width="100">Status</th>
                        <th width="130">Cancelar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $purchases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $purchase): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($purchase->id); ?></td>
                        <td>
                            <a href="<?php echo e(route('purchase.detail', $purchase->id)); ?>" class="badge badge-light">
                                Ver Detalhes Voô: <?php echo e($purchase->flight_id); ?>

                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                            </a>
                        </td>
                        <td><?php echo e(formatDateAndTime($purchase->date)); ?></td>
                        <td>
                            <span class="badge badge-secondary"><?php echo e($purchase->status); ?></span>
                        </td>                        
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr colspan="30">
                            <td>Nenhuma Reserva!</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </section><!--Container-->
    
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel58/resources/views/site/users/purchases.blade.php ENDPATH**/ ?>