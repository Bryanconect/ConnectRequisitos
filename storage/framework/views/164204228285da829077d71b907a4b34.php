

<?php $__env->startSection('content'); ?>

<div class="text-center mt-3 mb-4">

<a href="<?php echo e(url("requisitos/inicio")); ?>">
        <button class="btn btn-danger")> Voltar </button>
        </a>
     
</div>

<h1 class="text-center">Cadastrar História de Usuário</h1>

<div class="col-8 m-auto"> 
    <?php if(isset($errors) && count($errors)>0): ?>
    <div class="text-center mt-4 mb-4 p-2 alert-danger">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $erro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($erro); ?><br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>

<?php
$userelicitacao = auth()->user()->id;
$uservalidation = auth()->user()->tipo;
?>


<form name="formCad" id="formCad" method="post" action="<?php echo e(url("requisitos/criarhistoria")); ?>"> 

<?php echo csrf_field(); ?>
<?php echo method_field('PUT'); ?>
<label>Programa: </label>
<select class="form-control" value="<?php echo e($requisitos->id); ?>" name="id_requisito" id="id_requisito"> 
<option value="<?php echo e($requisitos->id); ?>"><?php echo e($requisitos->programa); ?></option>
</select>

<label>Elicitação: </label>
<select class="form-control" name="id_elicitacao" id="id_elicitacao"> 
<?php $__currentLoopData = $elicitacao; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $elicitacao): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option value="<?php echo e($elicitacao->id); ?>"><?php echo e($elicitacao->titulo); ?></option>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>

<?php if(auth()->check()): ?>
<label>Usuário: </label>
<select class="form-control" name="id_user" id="id_user" > 
<option value="<?php echo e(auth()->user()->id); ?>"> <?php echo e(auth()->user()->name); ?> </option>
</select>
<?php else: ?>
<?php endif; ?>

<label>Necessidade: </label>
<input class="form-control" type="text" maxLength="100" value="" name="necessidade" id="necessidade" placeholder="" required>

<label>Solução: </label>
<textarea class="form-control" type="text" maxLength="250" value="" name="solucao" id="solucao" placeholder="" required>
</textarea>

<label>Cenário de Testes: </label>
<textarea class="form-control" type="text" value="" maxLength="250" name="cenario_teste" id="cenario_teste" placeholder="" required>
</textarea>

<label>Especificação: </label>
<textarea class="form-control" type="text" value="" maxLength="250" name="especificacao" id="especificacao" placeholder="" required>
</textarea>

<label>Status: </label>
<select class="form-control" value="Aberto" name="status" id="status" > 
<option value="Aberto"> Aberto </option>
</select>

<input class="btn btn-primary" type="submit">


</form>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\ProjetoFinal\resources\views/createhistoria.blade.php ENDPATH**/ ?>