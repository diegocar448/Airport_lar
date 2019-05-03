<?php $__env->startSection('content-site'); ?>
<div class="content">
    <div class="container">
            <form method="POST" action="<?php echo e(route('password.update')); ?>">
                    <?php echo csrf_field(); ?>

                    <input type="hidden" name="token" value="<?php echo e($token); ?>">

                    <div class="form-group">
                        <label for="email" class="control-label"><?php echo e(__('E-Mail Address')); ?></label>

                        <div>
                            <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e($email ?? old('email')); ?>" required autocomplete="email" autofocus>

                            <?php if($errors->has('email')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="control-label"><?php echo e(__('Password')); ?></label>

                        <div>
                            <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required autocomplete="new-password">

                            <?php if($errors->has('password')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="form-control"><?php echo e(__('Confirm Password')); ?></label>

                        <div class="">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="">
                            <button type="submit" class="btn btn-primary">
                                <?php echo e(__('Reset Password')); ?>

                            </button>
                        </div>
                    </div>
                </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel58/resources/views/auth/passwords/reset.blade.php ENDPATH**/ ?>