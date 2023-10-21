

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

<h1 class="text-center">Gerenciar Versões</h1>

<div class="col-8 m-auto"> 
  <?php echo csrf_field(); ?>
<table class="table text-center">

  <thead class="table-dark">
  <tr>
      <th scope="col">Código</th>
      <th scope="col">Requisito</th>
      <th scope="col">Responsável</th>
      <th scope="col">Necessidade</th>
      <th scope="col">Status</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>

  <?php $__currentLoopData = $historias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $historias): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php
  $user = $historias->find($historias->id)->relUsers;
  $requisito = $historias->find($historias->id)->relRequisito;
  $elicitacao = $historias->find($historias->id)->relElicitacao;
  ?>
  <tr>
  
  <?php if($historias->status == 'Concluida'): ?>

  <?php echo method_field('PUT'); ?>
      <th scope="row"><?php echo e($historias->id); ?></th>
      <td><?php echo e($requisito->programa); ?></td>
      <td><?php echo e($user->name); ?></td>
      <td><?php echo e($historias->necessidade); ?></td>
      <td><?php echo e($historias->status); ?></td>
      <td>
        <a href="<?php echo e(url("requisitos/gestaoversao/visualizar/$historias->id")); ?>">
          <button class="btn btn-success"> Visualizar </button>
        </a>
        <a href="<?php echo e(url("requisitos/gestaoversao/imprimir/$historias->id")); ?>">
          <button class="btn btn-primary"> Imprimir </button>
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
<?php echo $__env->make('templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\laravel\resources\views/indexgestaoversao.blade.php ENDPATH**/ ?>