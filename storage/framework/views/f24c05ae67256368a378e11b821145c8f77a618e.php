

<?php $__env->startSection('content-site'); ?>

<div class="content text-center">
    <img src="<?php echo e(url('assets/site/images/error-404.png')); ?>" alt="404">
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel58/resources/views/errors/404.blade.php ENDPATH**/ ?>