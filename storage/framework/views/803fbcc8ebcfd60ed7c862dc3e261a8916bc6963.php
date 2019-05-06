

<?php $__env->startSection('content'); ?>

<div class="bred">
    <a href="<?php echo e(route('panel')); ?>" class="bred">Home > </a>
    <a href="<?php echo e(route('flights.index')); ?>" class="bred">Voos > </a>
    <a href="" class="bred">Editar</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Editar Voo <?php echo e($flight->id); ?></h1>
</div>

<div class="content-din">

    <?php echo $__env->make('panel.includes.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   
    <form class="form form-search form-ds" action="<?php echo e(route('flights.update', $flight->id)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo method_field('PUT'); ?>           
    <?php echo csrf_field(); ?>

    <?php echo $__env->make('panel.flights.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="form-group">
        <button class="btn btn-search">Enviar</button>
    </div>

    <form>




</div><!--Content Dinâmico-->


<script>
    let checkbox_promo = document.querySelector("[name='is_promotion']")

    checkbox_promo.addEventListener('click', checkbox_promoClick, 'false')

    function checkbox_promoClick(e)
    {
        if(e.target.value == 1)
        {
            e.target.setAttribute('checked', 'false')
            e.target.value = 0
        }else if(e.target.value == 0){
            e.target.setAttribute('checked', 'true')
            e.target.value = 1
        }
    }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel58/resources/views/panel/flights/edit.blade.php ENDPATH**/ ?>