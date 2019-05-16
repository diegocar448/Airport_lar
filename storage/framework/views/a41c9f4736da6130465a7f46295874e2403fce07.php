

<?php $__env->startSection('content-site'); ?>

<section class="slide"></section><!--Slide-->

<div class="actions-form">
    <h2>Encontre: </h2>

    <form action="<?php echo e(route('search.flights.site')); ?>" class="form-home text-center">
        <div class="form-group">
            <input type="text" name="origin" list="origin" class="form-control" placeholder="Cidade Origem">
            <datalist id="origin">
                <?php $__empty_1 = true; $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <option value="<?php echo e($city->name); ?>">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <?php endif; ?>
            </datalist>
        </div>
        <div class="form-group">
            <input type="text" name="destination" list="destination" class="form-control" placeholder="Cidade Destino">
            <datalist id="destination">
                <?php $__empty_1 = true; $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <option value="<?php echo e($city->name); ?>">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <?php endif; ?>
            </datalist>
        </div>
        <div class="form-group">
            <input type="date" name="date" class="form-control" placeholder="Data">
        </div>
        <!--
        <button class="btn" type="submit">
            Procurar <i class="fa fa-search" aria-hidden="true"></i>
        </button>
        -->
        <a href="index.php?pg=resultados-pesquisa">
            <button class="btn" type="button">
                Procurar <i class="fa fa-search" aria-hidden="true"></i>
            </button>
        </a>
    </form>
</div><!--actions-form-->

<div class="rectangle"></div><!--rectangle-->

<div class="clear"></div>

<section class="banner">
    <div class="container banner-ctc-background-over-white card">
        <div class="row">
            <div class="col-md-3 text-center">
                <img class="banner-ctc-img" src="<?php echo e(url('assets/site/images/cards.png')); ?>">
            </div>
            <div class="col-md-7">
                
                <div class="banner-ctc-titulo-contenedor"><span>Viaje agora</span></div>
                
                <div>
                    <p>Voyage!</p>
                </div>
            </div>
            <div class="col-md-2">
                <a href="https://academy.especializati.com.br" target="_blank" class="btn pull-right btn-flat flat-medium third-level">
                    <span>Saiba Mais</span>
                </a>
            </div>
        </div>
    </div>
</section><!--Banner-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel58/resources/views/site/home/index.blade.php ENDPATH**/ ?>