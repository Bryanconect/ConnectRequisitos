

<?php $__env->startSection('content'); ?>
<h1 class="text-center">Reservar</h1>

<div class="col-8 m-auto"> 
    <?php if(isset($errors) && count($errors)>0): ?>
    <div class="text-center mt-4 mb-4 p-2 alert-danger">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $erro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($erro); ?><br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>


<form name="formCad" id="formCad" method="post" action="<?php echo e(url("salas/create")); ?>"> 

<?php echo csrf_field(); ?>
</select>
<select class="form-control" name="id_sala" id="id_sala"> 
<option value="<?php echo e($salas->id); ?>"><?php echo e($salas->nome); ?></option>
</select>

<select class="form-control" name="id_user" id="id_user"> 
<option value="<?php echo e($user->relUsers->id ?? ''); ?>"><?php echo e($user->relUsers->name ?? ''); ?></option>
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<input class="form-control" type="date" name="data_inicio" id="data_inicio"  placeholder="Data Inicio:">
<input class="form-control" type="date" name="data_fim" id="data_fim"  placeholder="Data Fim:">
<input class="btn btn-primary" type="submit" value="<?php if(isset($salas)): ?>Reservar <?php else: ?> Cadastrar <?php endif; ?>">





</form>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\laravel\resources\views/createreserva.blade.php ENDPATH**/ ?>