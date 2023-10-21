

<?php $__env->startSection('content'); ?>

<div class="text-center mt-3 mb-4">

<a href="<?php echo e(url("requisitos/inicio")); ?>">
        <button class="btn btn-danger")> Voltar </button>
        </a>
     
</div>

<h1 class="text-center">Relatórios</h1>

<div class="col-8 m-auto"> 
    <?php if(isset($errors) && count($errors)>0): ?>
    <div class="text-center mt-4 mb-4 p-2 alert-danger">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $erro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($erro); ?><br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>
    


   
<form name="formCad" id="formCad" method="post" action="<?php echo e(url("relatorios/tipogeracao")); ?>"> 
<?php echo csrf_field(); ?>
<label>Requisito: </label>
<select class="form-control" name="id_requisito" id="id_requisito"> 
<?php $__currentLoopData = $requisitos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $requisitos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option value="<?php echo e($requisitos->id); ?>"><?php echo e($requisitos->programa); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>


<label>Filtros: </label>
<select class="form-control" name="filtro" id="filtro"> 
<option value="1" name="filtro" id="filtro"> Histórias Homologadas </option>
<option value="2" name="filtro" id="filtro"> Histórias Canceladas </option>
<option value="3" name="filtro" id="filtro"> Histórias Abertas </option>
</select>
<label>Data Inicial: </label>
<input class="form-control" type="date" name="data_inicial" id="data_inicial" placeholder="">
<label>Data Final: </label>
<input class="form-control" type="date" name="data_final" id="data_final" placeholder="">
<input class="btn btn-primary" type="submit">


</form>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\laravel\resources\views/relatorios.blade.php ENDPATH**/ ?>