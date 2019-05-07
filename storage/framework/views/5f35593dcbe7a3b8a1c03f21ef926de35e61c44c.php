

<?php $__env->startSection('content'); ?>

<div class="bred">
    <a href="<?php echo e(route('panel')); ?>" class="bred">Home  ></a>
    <a href="" class="bred">Flights</a>
    
</div>

<div class="title-pg">
    <h1 class="title-pg">Voos:</h1>
</div>


<div class="content-din bg-white">

    <div class="form-search">        


    <div class="messages">
            <?php echo $__env->make('panel.includes.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div>
     
         <div class="class-btn-insert">
             <a href="<?php echo e(route('flights.create')); ?>" class="btn-insert">
                 <span class="glyphicon glyphicon-plus"></span>
                 Cadastrar
             </a>
         </div>


    
    <table class="table table-striped">
        <tr>
            <th>#</th>                 
            <th>Imagem</th>                 
            <th>Origem</th>                 
            <th>Destino</th>                 
            <th>Paradas</th>                 
            <th>Data</th>                 
            <th>Saída</th>                 
            <th width="200">Ações</th>
        </tr>

        <?php $__empty_1 = true; $__currentLoopData = $flights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $flight): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><?php echo e($flight->id); ?></td>                
                <td>
                    <?php if($flight->image): ?>
                        <img src="<?php echo e(url("storage/flights/{$flight->image}")); ?>" alt="<?php echo e($flight->id); ?>" style="max-width:100px;">
                    <?php else: ?>
                        <img src="<?php echo e(url("storage/image.png")); ?>" alt="<?php echo e($flight->id); ?>" style="max-width:100px;">
                    <?php endif; ?>
                </td>                
                <td>
                    <a href=""><?php echo e($flight->origin->name); ?></a>                    
                </td>                
                <td>
                    <a href=""><?php echo e($flight->destination->name); ?></a>
                </td>                
                <td><?php echo e($flight->qty_stops); ?></td>                
                <td><?php echo e(formatDateAndTime($flight->date)); ?></td>                
                <td><?php echo e(formatDateAndTime($flight->hour_output, 'H:i')); ?></td>                
                <td>
                    <a href="<?php echo e(route('flights.edit', $flight->id)); ?>" class="edit">Editar</a>                   
                    <a href="<?php echo e(route('flights.show', $flight->id)); ?>" class="delete">Apagar</a>                   
                   
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="200">Nenhum item cadastrado!</td>
            </tr>
        <?php endif; ?>
    </table>

    <?php if(isset($dataForm)): ?>
        <?php echo $flights->appends($dataForm)->links(); ?>

    <?php else: ?>
        <?php echo $flights->links(); ?>

    <?php endif; ?>

  

</div><!--Content Dinâmico-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel58/resources/views/panel/flights/index.blade.php ENDPATH**/ ?>