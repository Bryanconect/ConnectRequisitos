

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

<h1 class="text-center">Gerenciar Usuários</h1>

<div class="col-8 m-auto"> 
  <?php echo csrf_field(); ?>
<table class="table text-center">

  <thead class="table-dark">
  <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">Usuário</th>
      <th scope="col">Autorizado</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>

  <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

  <tr>
  <?php echo method_field('PUT'); ?>
      <th scope="row"><?php echo e($user->id); ?></th>
      <td><?php echo e($user->name); ?></td>
      <td><?php echo e($user->email); ?></td>
      <td><?php if($user->autorizado == 'S'): ?>Sim <?php else: ?> Não <?php endif; ?></td>
      <td>
        <a href="<?php echo e(url("requisitos/gestaousuario/autorizar/$user->id")); ?>">
          <button class="btn btn-success"> Autorizar </button>
        </a>
        <a href="<?php echo e(url("requisitos/gestaousuario/cancelar/$user->id")); ?>">
          <button class="btn btn-danger"> Cancelar </button>
        </a>
      </td>
  </tr>
 

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </tbody>
</table>


</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\laravel\resources\views/indexgestaousuario.blade.php ENDPATH**/ ?>