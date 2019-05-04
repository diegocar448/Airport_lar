

<?php $__env->startSection('content'); ?>

<div class="bred">
    <a href="<?php echo e(route('panel')); ?>" class="bred">Home  ></a>
    <a href="" class="bred">Estados</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Estados</h1>
</div>


<div class="content-din bg-white">

    <div class="form-search">        

        <form class="" action="<?php echo e(route('states.search')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="row">
                <div class="col-md-2">                                            
                    <input class="form-control" type="text" value="<?php echo e($campoBusca ?? ""); ?>" name="key_search" placeholder="O que deseja encontrar?">
                </div>    
                <div class="col-md-6">
                    <button type="submit" class="btn btn-search">Pesquisar</button>
                </div>
                
            </div>
        </form>        

        <?php if(isset($dataForm['key_search'])): ?>
            <div class="alert alert-info">
                <p>
                    <a href="<?php echo e(route('states.index')); ?>"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                    Resultados para: <strong><?php echo e($dataForm['key_search']); ?></strong>
                </p>
            </div>
        <?php endif; ?>
    </div> 


    
    <table class="table table-striped">
        <tr>
            <th>Nome</th>
            <th>Sigla</th>         
            <th width="200">Ações</th>
        </tr>

        <?php $__empty_1 = true; $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><?php echo e($state->name); ?></td>
                <td><?php echo e($state->initials); ?></td>  
                <td>
                    
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
<?php echo $__env->make('panel.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel58/resources/views/panel/states/index.blade.php ENDPATH**/ ?>