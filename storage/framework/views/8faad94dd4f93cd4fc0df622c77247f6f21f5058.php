

<?php $__env->startSection('content'); ?>

<div class="bred">
    <a href="<?php echo e(route('panel')); ?>" class="bred">Home  ></a>
    <a href="<?php echo e(route('airports.index', $city->id)); ?>" class="bred">Airports</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Aeroportos da cidade: <?php echo e($city->name); ?></h1>
</div>


<div class="content-din bg-white">

    <div class="form-search">        

        <form class="" action="<?php echo e(route('airports.search', $city->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="row">
                <div class="col-md-2">                                            
                    <input class="form-control" type="text" value="<?php echo e($dataForm['key_search'] ?? ""); ?>" name="key_search" placeholder="O que deseja encontrar?">
                </div>    
                <div class="col-md-6">
                    <button type="submit" class="btn btn-search">Pesquisar</button>
                </div>
                
            </div>
        </form>
        

        <?php if(isset($dataForm['key_search'])): ?>
            <div class="alert alert-info">
                <p>                    
                    Resultados para: <strong><?php echo e($dataForm['key_search']); ?></strong>
                </p>
            </div>
        <?php endif; ?>
    </div>
 

    <div class="messages">
       <?php echo $__env->make('panel.includes.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="class-btn-insert">
        <a href="<?php echo e(route('airports.create',  $city->id)); ?>" class="btn-insert">
            <span class="glyphicon glyphicon-plus"></span>
            Cadastrar
        </a>
    </div>
    
    <table class="table table-striped">
        <tr>
            <th>Nome</th>
            <th>Endereço</th>
            <th width="">Ações</th>
            <th width=""></th>
            <th width=""></th>
        </tr>

        <?php $__empty_1 = true; $__currentLoopData = $airports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $airport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><?php echo e($airport->name); ?></td>
                <td><?php echo e($airport->address); ?></td>
                <td><?php echo e($airport->name); ?></td>
                <td>
                    <a href="<?php echo e(route('airports.edit', [$city->id, $airport->id])); ?>" class="edit">Edit</a>                
                    <a href="<?php echo e(route('airports.show', [$city->id, $airport->id])); ?>" class="delete">View</a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="200">Nenhum item cadastrado!</td>
            </tr>
        <?php endif; ?>
    </table>

    <?php if(isset($dataForm)): ?>
        <?php echo $airports->appends($dataForm)->links(); ?>

    <?php else: ?>
        <?php echo $airports->links(); ?>

    <?php endif; ?>

</div><!--Content Dinâmico-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel58/resources/views/panel/airports/index.blade.php ENDPATH**/ ?>