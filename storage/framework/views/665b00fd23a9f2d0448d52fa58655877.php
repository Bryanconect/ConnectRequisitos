

<?php $__env->startSection('content'); ?>
<h1 class="text-center">Gerenciar Reservas</h1>

<div class="text-center mt-3 mb-4">

<a href="<?php echo e(url("salas/inicio")); ?>">
          <button class="btn btn-success"> Retornar a Lista </button>
        </a>
</div>

<div class="col-8 m-auto"> 
  <?php echo csrf_field(); ?>
<table class="table text-center">

  <thead class="table-dark">
  <tr>
      <th scope="col">Id</th>
      <th scope="col">Usuário</th>
      <th scope="col">Sala</th>
      <th scope="col">Data Inicio</th>
      <th scope="col">Data Fim</th>
      <th scope="col">Ação</th>

    </tr>
  </thead>
  <tbody>

 
  <?php $__currentLoopData = $reservas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php
  $user = $reservas->find($reservas->id)->relUsers;
  $sala = $reservas->find($reservas->id)->relSalas;
  ?>

  <tr>
      <th scope="row"><?php echo e($reservas->id); ?></th>
      <td><?php echo e($user->name); ?></td>
      <td> <?php echo e($sala->nome); ?> </td>
      <td> <?php echo e($reservas->data_inicio); ?> </td>
      <td> <?php echo e($reservas->data_fim); ?> </td>
      <td>
        <a href="<?php echo e(url("list/delete/$reservas->id")); ?>" class="js-del2">
          <button class="btn btn-danger"> Cancelar Reserva </button>
        </a>
      </td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </tbody>
</table>


</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\laravel\resources\views/indexreservas.blade.php ENDPATH**/ ?>