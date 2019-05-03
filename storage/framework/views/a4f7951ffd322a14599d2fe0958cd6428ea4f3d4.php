<?php $__env->startSection('content-site'); ?>

<!--content -->
<div class="content">
    <!--container -->
    <div class="container">
            <form method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo csrf_field(); ?>

                    <div class="form-group">
                        <label for="email" class="control-label"><?php echo e(__('Email')); ?></label>

                        <div>
                            <input id="email" type="email" placeholder="Digite o email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                            <?php if($errors->has('email')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="control-label"><?php echo e(__('Senha')); ?></label>

                        <div>
                            <input id="password" type="password" placeholder="Digite a Senha" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required autocomplete="current-password">

                            <?php if($errors->has('password')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    

                    <div class="form-group">
                        <div class="">
                            <button type="submit" class="btn btn-primary">
                                <?php echo e(__('Entrar')); ?>

                            </button>

                            <?php if(Route::has('password.request')): ?>
                                <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                    <?php echo e(__('Esqueceu sua senha?')); ?>

                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </form>
    </div>
    <!--container -->
</div>
<!--content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel58/resources/views/auth/login.blade.php ENDPATH**/ ?>