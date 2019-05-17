

<?php $__env->startSection('content-site'); ?>

<div class="content">

    <section class="container">
        <h1 class="title">Promoções</h1>


        <div class="row">
            
            <?php $__empty_1 = true; $__currentLoopData = $promotions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $flight): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>            
                <article class="result col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="image-promo">
                        <?php if($flight->image == null): ?>                            
                            <img src="<?php echo e(url("assets/site/images/flight.png")); ?>" alt="<?php echo e($flight->id); ?>">
                        <?php else: ?>
                            <img src="<?php echo e(url("storage/flights/$flight->image")); ?>" alt="<?php echo e($flight->id); ?>">
                        <?php endif; ?>                        

                        <div class="legend">
                            <h1><?php echo e($flight->destination->city->name); ?></h1>
                            <h2>Saída: <?php echo e($flight->origin->city->name); ?></h2>
                            <span>Ida e Volta</span>
                        </div>
                    </div><!--image-promo-->

                    <div class="details">
                        <p>Data: <?php echo e(formatDateAndTime($flight->date)); ?></p>

                        <div class="price">
                            <span>R$ <?php echo e(number_format($flight->old_price, 2,',','.')); ?></span>
                            <strong>Em até <?php echo e($flight->total_plots); ?>x</strong>
                        </div>

                        <a href="<?php echo e(route('details.flight', $flight->id)); ?>" class="btn btn-buy">Visualizar</a>
                    </div><!--details-->

                </article><!--result-->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p>Nenhuma Promoção Cadastrada!</p>
            <?php endif; ?>
            
        </div><!--Row-->
    </section><!--Container-->

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel58/resources/views/site/promotions/list.blade.php ENDPATH**/ ?>