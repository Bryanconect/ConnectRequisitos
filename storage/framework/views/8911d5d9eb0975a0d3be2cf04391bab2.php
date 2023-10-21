

<?php $__env->startSection('content'); ?>
<h1 class="text-center">Cadastrar</h1>

<div class="col-8 m-auto"> 
    <?php if(isset($errors) && count($errors)>0): ?>
    <div class="text-center mt-4 mb-4 p-2 alert-danger">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $erro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($erro); ?><br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>


<form name="formCad" id="formCad" method="post" action="<?php echo e(url("salas")); ?>"> 


<?php echo csrf_field(); ?>
<input class="form-control" type="text" name="nome" id="nome" placeholder="Nome da Sala:">
<input class="btn btn-primary" type="submit">


</form>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\laravel\resources\views/createsala.blade.php ENDPATH**/ ?>