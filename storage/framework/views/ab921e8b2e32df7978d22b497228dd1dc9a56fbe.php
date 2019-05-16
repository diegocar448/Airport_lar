

<?php $__env->startSection('content-site'); ?>

<div class="content">

    <section class="container">
        <h1 class="title">Resultados Pesquisa:</h1>
        <div class="key-search row">
            <div class="col-lg-2 col-md-2 col-sm-12 col-12 text-center">
                <img src="<?php echo e(url('assets/site/images/flight.png')); ?>" alt="Voô">
            </div>
            <div class="col-lg-10 col-md-10 col-sm-12 col-12">
                <p>De: <span><?php echo e($origin); ?></span></p>
                <p>Para: <span><?php echo e($destination); ?></span></p>
                <p>Data: <span><?php echo e($date); ?></span></p>
            </div>
        </div>


        <div class="row results-search">
            <?php $__empty_1 = true; $__currentLoopData = $flights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $flight): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <article class="result-search col-12">
                    <span>Saída: <strong><?php echo e($flight->hour_output); ?></strong></span>
                    <span>Chegada: <strong><?php echo e($flight->arrival_time); ?></strong></span>
                    <span>Paradas: <strong><?php echo e($flight->qty_stops); ?></strong></span>
                    <a href="?pg=compras">Comprar</a>
                </article><!--result-search-->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p><strong>Nenhum resultado para essa pesquisa!</strong></p>
            <?php endif; ?>
        </div><!--Row-->
    </section><!--Container-->

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel58/resources/views/site/search/search.blade.php ENDPATH**/ ?>