

<?php $__env->startSection('content'); ?>

<div class="bred">
    <a href="<?php echo e(route('panel')); ?>" class="bred">Home  ></a>
    <a href="<?php echo e(route('brands.index')); ?>" class="bred">Brands > </a>
    <a href="<?php echo e(route('brands.planes', $brand->id)); ?>" class="bred">Planes</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Aviões da Marca <strong><?php echo e($brand->name); ?></strong></h1>
</div>


<div class="content-din bg-white">  
 




    
    <table class="table table-striped">
        <tr>
            <th>#id</th>
            <th>Classe</th>
            <th>Total de Passageiros</th>
            <th width="200">Ações</th>
        </tr>

        <?php $__empty_1 = true; $__currentLoopData = $planes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plane): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><?php echo e($plane->id); ?></td>
                <td><?php echo e($plane->classes($plane->class)); ?></td>          
                <td><?php echo e($plane->qty_passengers); ?></td>
                <td>
                    <a href="<?php echo e(route('planes.edit', $plane->id)); ?>" class="edit">Edit</a>
                    <a href="<?php echo e(route('planes.show', $plane->id)); ?>" class="delete">View</a>                  
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="200">Nenhum item cadastrado!</td>
            </tr>
        <?php endif; ?>
    </table>

 

</div><!--Content Dinâmico-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel58/resources/views/panel/brands/planes.blade.php ENDPATH**/ ?>