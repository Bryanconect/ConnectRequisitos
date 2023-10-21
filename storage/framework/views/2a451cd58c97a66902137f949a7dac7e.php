

<?php $__env->startSection('content'); ?>
<h1 class="text-center">Histórico</h1>

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
      <th scope="col">Tipo</th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $historicos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $historicos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php
  $user = $historicos->find($historicos->id)->relUsers;
  $sala = $historicos->find($historicos->id)->relSalas;
  ?>

  <tr>
      <th scope="row"><?php echo e($historicos->id); ?></th>
      <td><?php echo e($user->name); ?></td>
      <td> <?php echo e($sala->nome); ?> </td>
      <td> <?php echo e($historicos->data_inicio); ?> </td>
      <td> <?php echo e($historicos->data_fim); ?> </td>
      <td> <?php if($historicos->tipo == 'R'): ?>Reserva <?php else: ?> Cancelamento <?php endif; ?>
 </td>

  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </tbody>
</table>


</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\laravel\resources\views/indexhistorico.blade.php ENDPATH**/ ?>