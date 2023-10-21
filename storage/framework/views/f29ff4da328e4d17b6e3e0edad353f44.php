

<?php $__env->startSection('content'); ?>

<?php
$uservalidation = auth()->user()->tipo;
?>

<div class="text-center mt-3 mb-4">

<a <?php if($uservalidation == 1): ?>  href="<?php echo e(url("salas/")); ?>" else href="<?php echo e(route('login.destroy')); ?>" <?php endif; ?> >
          <button class="btn btn-success" <?php if($uservalidation == 2): ?> disabled <?php else: ?> enable  <?php endif; ?>  > Cadastrar Sala </button>
        </a>
        <a href="<?php echo e(route('login.destroy')); ?>">
          <button class="btn btn-danger"> Sair do Sistema </button>
        </a>
</div>

<div class="col-8 m-auto"> 
  <?php echo csrf_field(); ?>
<table class="table text-center">

  <thead class="table-dark">
  <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Status</th>
      <th scope="col">Ação</th>

    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $salas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $salas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php
  ?>
  <tr>
      <th scope="row"><?php echo e($salas->id); ?></th>
      <td><?php echo e($salas->nome); ?></td>
      <td> <?php if($salas->status == 'R'): ?>Reservado <?php else: ?> Disponivel <?php endif; ?> </td>
      <td>
        <a href="<?php echo e(url("salas/$salas->id/edit")); ?>">
          <button class="btn btn-primary"> Reservar </button>
        </a>
        <a href="<?php echo e(url("salas/$salas->id/list")); ?>">
          <button class="btn btn-dark"> Gerenciar Reservas </button>
        </a>
        <a href="<?php echo e(url("salas/$salas->id/hist")); ?>">
          <button class="btn btn-dark"> Histórico </button>
        </a>
      </td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </tbody>
</table>


</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\laravel\resources\views/indexsala.blade.php ENDPATH**/ ?>