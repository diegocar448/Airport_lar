

<?php $__env->startSection('content'); ?>

<div class="bred">
    <a href="" class="bred">Home  ></a>
    <a href="" class="bred">Dashboard</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Relatórios</h1>
</div>


<div class="content-din">
    <div class="col-md-3 col-sm-4 col-xm-12">
        <div class="rel-dash">
            <i class="fa fa-university" aria-hidden="true"></i>
            <div class="text-rel">
                <h2 class="result">
                    <?php echo e($totalBrands); ?>

                </h2>
                <h3 class="result-ds">
                    Total de Marcas
                </h3>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-4 col-xm-12">
        <div class="rel-dash">
            <i class="fa fa-plane" aria-hidden="true"></i>
            <div class="text-rel">
                <h2 class="result">
                    <?php echo e($totalPlanes); ?>

                </h2>
                <h3 class="result-ds">
                    Total de Aviões
                </h3>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-4 col-xm-12">
        <div class="rel-dash">
            <i class="fa fa-globe" aria-hidden="true"></i>
            <div class="text-rel">
                <h2 class="result">
                    <?php echo e($totalStates); ?>

                </h2>
                <h3 class="result-ds">
                    Total de Estados
                </h3>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-4 col-xm-12">
        <div class="rel-dash">
            <i class="fa fa-map" aria-hidden="true"></i>
            <div class="text-rel">
                <h2 class="result">
                    <?php echo e($totalCities); ?>

                </h2>
                <h3 class="result-ds">
                    Total de Cidades
                </h3>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-4 col-xm-12">
        <div class="rel-dash">
            <i class="fa fa-fighter-jet" aria-hidden="true"></i>
            <div class="text-rel">
                <h2 class="result">
                    <?php echo e($totalAirports); ?>

                </h2>
                <h3 class="result-ds">
                    Total de Aeroportos
                </h3>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-4 col-xm-12">
        <div class="rel-dash">
            <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
            <div class="text-rel">
                <h2 class="result">
                   <?php echo e($totalFlights); ?>

                </h2>
                <h3 class="result-ds">
                    Total de Voos
                </h3>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-4 col-xm-12">
        <div class="rel-dash">
            <i class="fa fa-users" aria-hidden="true"></i>
            <div class="text-rel">
                <h2 class="result">
                    <?php echo e($totalUsers); ?>

                </h2>
                <h3 class="result-ds">
                    Total de Usuários
                </h3>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-4 col-xm-12">
        <div class="rel-dash">
            <i class="fa fa-ticket" aria-hidden="true"></i>
            <div class="text-rel">
                <h2 class="result">
                    <?php echo e($totalReserves); ?>

                </h2>
                <h3 class="result-ds">
                    Total de Reservas
                </h3>
            </div>
        </div>
    </div>

</div><!--Content Dinâmico-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel58/resources/views/panel/home/index.blade.php ENDPATH**/ ?>