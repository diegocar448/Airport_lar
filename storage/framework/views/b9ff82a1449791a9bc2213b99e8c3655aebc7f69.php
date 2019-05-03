<?php $__env->startSection('content-site'); ?>
<div class="content">
    <div class="container">
        <?php if(session('status')): ?>
            <div class="alert alert-success" role="alert">
                 Enviamos o Link para resetar a sua senha!!!
            </div>
        <?php endif; ?>

        <form method="POST" action="<?php echo e(route('password.email')); ?>">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label for="email" class="control-label"><?php echo e(__('E-Mail Address')); ?></label>

                <div class="">
                    <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                    <?php if($errors->has('email')): ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($errors->first('email')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group">
                <div class="">
                    <button type="submit" class="btn btn-primary btn-block">
                        <?php echo e(__('Send Password Reset Link')); ?>

                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel58/resources/views/auth/passwords/email.blade.php ENDPATH**/ ?>