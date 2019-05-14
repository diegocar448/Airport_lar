

<?php $__env->startSection('content'); ?>

<div class="bred">
    <a href="<?php echo e(route('panel')); ?>" class="bred">Home  ></a>
    <a href="<?php echo e(route('reserves.index')); ?>" class="bred">Reservas</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Reservas</h1>
</div>


<div class="content-din bg-white">

    <div class="form-search">        

        <form class="" action="<?php echo e(route('reserves.search')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="row">
                <div class="col-md-2">                                            
                    <input class="form-control" type="text" value="<?php echo e($campoBusca ?? ""); ?>" name="user" placeholder="Detalhes do usuário?">
                </div>    
                <div class="col-md-2">                                            
                    <input class="form-control" type="text" value="<?php echo e($campoBusca ?? ""); ?>" name="reserve" placeholder="Detalhes da Reserva?">
                </div>  
                <div class="col-md-2">                                            
                    <input class="form-control" type="date" value="<?php echo e($campoBusca ?? ""); ?>" name="date" placeholder="Detalhes do Voo?">
                </div>  
                <div class="col-md-6">
                    <button type="submit" class="btn btn-search">Pesquisar</button>
                </div>
                
            </div>
        </form>
        

        <?php if(isset($dataForm['key_search'])): ?>
            <div class="alert alert-info">
                <p>
                    <a href="<?php echo e(route('reserves.index')); ?>"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                    Resultados para: <strong><?php echo e($dataForm['key_search']); ?></strong>
                </p>
            </div>
        <?php endif; ?>
    </div>
 

    <div class="messages">
       <?php echo $__env->make('panel.includes.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="class-btn-insert">
        <a href="<?php echo e(route('reserves.create')); ?>" class="btn-insert">
            <span class="glyphicon glyphicon-plus"></span>
            Fazer Nova Reserva
        </a>
    </div>
    
    <table class="table table-striped">
        <tr>
            <th>#id</th>
            <th>Usuario</th>
            <th>Voo</th>
            <th>Status</th>
            <th width="200">Ações</th>
        </tr>

        <?php $__empty_1 = true; $__currentLoopData = $reserves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reserve): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><?php echo e($reserve->id); ?></td>
                <td><?php echo e($reserve->user->name); ?></td>
                <td><?php echo e($reserve->flight->id); ?>  (<?php echo e(formatDateAndTime($reserve->flight->date)); ?>)</td>
                <td><?php echo e($reserve->status($reserve->status)); ?></td>
                <td>
                    <a href="<?php echo e(route('reserves.edit', $reserve->id)); ?>" class="edit">Edit</a>                    
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="200">Nenhum item cadastrado!</td>
            </tr>
        <?php endif; ?>
    </table>

    <?php if(isset($dataForm)): ?>
        <?php echo $reserves->appends($dataForm)->links(); ?>

    <?php else: ?>
        <?php echo $reserves->links(); ?>

    <?php endif; ?>

</div><!--Content Dinâmico-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel58/resources/views/panel/reserves/index.blade.php ENDPATH**/ ?>