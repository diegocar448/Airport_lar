

<?php $__env->startSection('content'); ?>

<div class="bred">
    <a href="<?php echo e(route('panel')); ?>" class="bred">Home > </a>
    <a href="<?php echo e(route('users.index')); ?>" class="bred">Usuarios > </a>
    <a href="" class="bred">Cadastrar</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Cadastrar Usuário</h1>
</div>

<div class="content-din">

    <?php echo $__env->make('panel.includes.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <form class="form form-search form-ds" action="<?php echo e(route('users.store')); ?>" method="POST" enctype="multipart/form-data">
        
        <?php echo csrf_field(); ?>

        <?php echo $__env->make('panel.users.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="form-group">
            <button class="btn btn-search">Enviar</button>
        </div>

    <form>




</div><!--Content Dinâmico-->

<script>

    let checkVerify =  document.querySelector("[name='is_admin']")

    checkVerify.addEventListener("click", checkVerifyClick, 'false')

    function checkVerifyClick(e)
    {
        

        if(e.target.checked)
        {
            e.target.value = 1;
        }else{
            e.target.value = 0;
        }
    }

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel58/resources/views/panel/users/create.blade.php ENDPATH**/ ?>