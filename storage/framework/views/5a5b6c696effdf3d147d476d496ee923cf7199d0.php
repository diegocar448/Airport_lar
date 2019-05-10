

<?php $__env->startSection('content'); ?>

<div class="bred">
    <a href="<?php echo e(route('panel')); ?>" class="bred">Home  ></a>
    <a href="" class="bred">Usuários</a>
    
</div>

<div class="title-pg">
    <h1 class="title-pg">Usuários:</h1>
</div>


<div class="content-din bg-white">

    <div class="form-search">        

        <form class="" action="<?php echo e(route('users.search')); ?>" method="POST">
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
                    <a href="<?php echo e(route('users.index')); ?>"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                    Resultados para: <strong><?php echo e($dataForm['key_search']); ?></strong>
                </p>
            </div>
        <?php endif; ?>

        <div class="messages">
            <?php echo $__env->make('panel.includes.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
            
        <div class="class-btn-insert">
            <a href="<?php echo e(route('users.create')); ?>" class="btn-insert">
                <span class="glyphicon glyphicon-plus"></span>
                Cadastrar Usuários
            </a>
        </div>   
        
    </div>
       
    <table class="table table-striped">
        <tr>
                       
            <th>Imagem</th>                 
            <th>Nome</th>                 
            <th>E-mail</th>                           
            <th width="200">Ações</th>
        </tr>

        <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>                              
                <td>
                    <?php if($user->image): ?>
                        <img src="<?php echo e(url("storage/users/{$user->image}")); ?>" alt="<?php echo e($user->id); ?>" style="max-width:100px;">
                    <?php else: ?>
                        <img src="<?php echo e(url("storage/image.png")); ?>" alt="<?php echo e($user->id); ?>" style="max-width:100px;">
                    <?php endif; ?>
                </td>                
                <td>
                    <?php echo e($user->name); ?>                   
                </td>                
                <td>
                    <?php echo e($user->email); ?>

                </td>                                                                               
                <td>
                    <a href="<?php echo e(route('users.edit', $user->id)); ?>" class="edit">Editar</a>                   
                    <a href="<?php echo e(route('users.show', $user->id)); ?>" class="delete">Apagar</a>                   
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="200">Nenhum item cadastrado!</td>
            </tr>
        <?php endif; ?>
    </table>

    <?php if(isset($dataForm)): ?>
        <?php echo $users->appends($dataForm)->links(); ?>

    <?php else: ?>
        <?php echo $users->links(); ?>

    <?php endif; ?>

  

</div><!--Content Dinâmico-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel58/resources/views/panel/users/index.blade.php ENDPATH**/ ?>