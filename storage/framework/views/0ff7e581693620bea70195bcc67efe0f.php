

<?php $__env->startSection('content'); ?>

<?php
$uservalidation = auth()->user()->tipo;
?>


<div class="text-center mt-3 mb-4">

<a <?php if($uservalidation == 1): ?>  href="<?php echo e(url("requisitos/")); ?>" else href="<?php echo e(route('login.destroy')); ?>" <?php endif; ?> >
          <button class="btn btn-success" <?php if($uservalidation == 2): ?> disabled <?php else: ?> enable  <?php endif; ?> > Cadastrar Programa </button>
        </a>

        <a <?php if($uservalidation == 1): ?>  href="<?php echo e(url("gestaorequisito/")); ?>" else href="<?php echo e(route('login.destroy')); ?>" <?php endif; ?> >
          <button class="btn btn-success" <?php if($uservalidation == 2): ?> disabled <?php else: ?> enable  <?php endif; ?> > Gestão de Programas </button>
        </a>

        <a <?php if($uservalidation == 1): ?>  href="<?php echo e(url("gestaousuario/")); ?>" else href="<?php echo e(route('login.destroy')); ?>" <?php endif; ?> >
          <button class="btn btn-success" <?php if($uservalidation == 2): ?> disabled <?php else: ?> enable  <?php endif; ?> > Gestão de Usuários </button>
        </a>

      
        <a href="<?php echo e(url("elicitacao/")); ?>">
        <button class="btn btn-success")> Cadastrar Elicitação </button>
        </a>

        <a href="<?php echo e(route('login.destroy')); ?>">
          <button class="btn btn-danger"> Sair do Sistema </button>
        </a>
</div>

<h1 class="text-center">Gerenciar Requisitos</h1>

<div class="col-8 m-auto"> 
  <?php echo csrf_field(); ?>
<table class="table text-center">

  <thead class="table-dark">
  <tr>
      <th scope="col">Código</th>
      <th scope="col">Requisito</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $requisitos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $requisitos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php
  ?>

  <?php if($requisitos->ativo == 'S'): ?>
  <tr>
      <th scope="row"><?php echo e($requisitos->id); ?></th>
      <td><?php echo e($requisitos->programa); ?></td>
      <td>
        <a href="<?php echo e(url("requisitos/criarhistoria/$requisitos->id")); ?>">
          <button class="btn btn-success"> Cadastrar História </button>
        </a>
        <a href="<?php echo e(url("requisitos/gestaohistoria/$requisitos->id")); ?>">
          <button class="btn btn-secondary"> Gestão História </button>
        </a>
        <a href="<?php echo e(url("requisitos/gestaoversao/$requisitos->id")); ?>">
          <button class="btn btn-info"> Gestão de Versão  </button>
        </a>
      </td>
  </tr>
  <?php else: ?>
<?php endif; ?>  
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </tbody>
</table>


</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\laravel\resources\views/indexrequisito.blade.php ENDPATH**/ ?>