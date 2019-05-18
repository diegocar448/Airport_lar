

<?php $__env->startSection('content-site'); ?>

<div class="content">

    <section class="container">
        <h1 class="title">Meu Perfil</h1>

        <?php echo $__env->make('panel.includes.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('panel.includes.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <div class="">
            <form class="form-eti" action="<?php echo e(route('update.profile')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo method_field('PUT'); ?>           
                <?php echo csrf_field(); ?>

        
                <div class="form-group">
                    <label for="name">Nome *</label>

                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
                    <input type="text" name="name" class="form-control" placeholder="Nome" value="<?php echo e(auth()->user()->name); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">E-Mail *</label>

                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    <input type="email" name="email" class="form-control" placeholder="E-mail" disabled="disabled" value="<?php echo e(auth()->user()->email); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="image">Imagem: (Opcional) Informe Apenas se Quiser Atualizar</label>

                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <div class="input-group-addon"><i class="fa fa-picture-o" aria-hidden="true"></i></div>
                    <input type="file" name="image" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">Senha: (Opcional) Informe Apenas se Quiser Atualizar</label>

                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <div class="input-group-addon"><i class="fa fa-unlock-alt" aria-hidden="true"></i></div>
                    <input type="password" name="password" class="form-control" placeholder="(Opcional) Informe Apenas se Quiser Atualizar a Senha">
                    </div>
                </div>

                <button type="submit" class="btn-form">Atualizar Perfil <i class="fa fa-retweet" aria-hidden="true"></i></button>

            </form>

        </div><!--Row-->
    </section><!--Container-->

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel58/resources/views/site/users/profile.blade.php ENDPATH**/ ?>