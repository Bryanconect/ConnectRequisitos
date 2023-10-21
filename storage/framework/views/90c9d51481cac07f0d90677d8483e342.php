

<?php $__env->startSection('content'); ?>

<?php
$uservalidation = auth()->user()->tipo;
$userelicitacao = auth()->user()->id;
?>

<div class="text-center mt-3 mb-4">


        <a href="<?php echo e(url("requisitos/inicio")); ?>">
          <button class="btn btn-danger"> Voltar </button>
        </a>
</div>

<h1 class="text-center">Gerenciar Programas</h1>

<div class="col-8 m-auto"> 
  <?php echo csrf_field(); ?>
<table class="table text-center">

  <thead class="table-dark">
  <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">Status</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>

  <?php $__currentLoopData = $requisitos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $requisitos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

  <tr>
  <?php echo method_field('PUT'); ?>
      <th scope="row"><?php echo e($requisitos->id); ?></th>
      <td><?php echo e($requisitos->programa); ?></td>
      <td><?php if($requisitos->ativo == 'S'): ?>Ativo <?php else: ?> Inativo <?php endif; ?></td>
      <td>
        <a href="<?php echo e(url("gestaorequisito/ativar/$requisitos->id")); ?>">
          <button class="btn btn-success"> Ativar </button>
        </a>
        <a href="<?php echo e(url("gestaorequisito/inativar/$requisitos->id")); ?>">
          <button class="btn btn-danger"> Inativar </button>
        </a>
      </td>
  </tr>
 

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </tbody>
</table>


</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\laravel\resources\views/indexgestaorequisito.blade.php ENDPATH**/ ?>