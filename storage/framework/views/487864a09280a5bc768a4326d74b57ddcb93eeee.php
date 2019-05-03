<?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<?php if(session('error')): ?>
    <div class="alert alert-error">
        <?php echo e(session('error')); ?>

    </div>
<?php endif; ?>

<?php if(session('message')): ?>
    <div class="alert alert-info">
        <?php echo e(session('message')); ?>

    </div>
<?php endif; ?><?php /**PATH /var/www/laravel58/resources/views/panel/includes/alerts.blade.php ENDPATH**/ ?>