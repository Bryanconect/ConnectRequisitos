

<?php $__env->startSection('content'); ?>



<?php
  $user = $historias->find($historias->id)->relUsers;
  $requisito = $historias->find($historias->id)->relRequisito;
  $elicitacao = $historias->find($historias->id)->relElicitacao;
?>


<div class="text-center mt-3 mb-4">

<a href="<?php echo e(url("requisitos/gestaoversao/$requisito->id")); ?>">
        <button class="btn btn-danger")> Voltar </button>
        </a>
     
</div>
<h1 class="text-center">Visualizar História de Usuário</h1>

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

<label>Programa: </label>
<select class="form-control" value="<?php echo e($historias->id_requisito); ?>" name="id_requisito" id="id_requisito" disabled> 
<option value="<?php echo e($historias->id_requisito); ?>"><?php echo e($requisito->programa); ?></option>
</select>

<label>Elicitação: </label>
<select class="form-control" name="id_elicitacao" id="id_elicitacao" disabled> 
<option value="<?php echo e($historias->id_elicitacao); ?>"><?php echo e($elicitacao->titulo); ?></option>
</select>


<label>Usuário: </label>
<select class="form-control" name="id_user" id="id_user" disabled> 
<option value="<?php echo e($historias->id_user); ?>"> <?php echo e($user->name); ?> </option>
</select>


<label>Necessidade: </label>
<input class="form-control" type="text" value="<?php echo e($historias->necessidade); ?>" name="necessidade" id="necessidade" placeholder="" disabled>

<label>Solução: </label>
<textarea class="form-control" type="text" value="<?php echo e($historias->solucao); ?>" name="solucao" id="solucao" placeholder="" rows="4" cols="50" disabled>
<?php echo e($historias->solucao); ?>

</textarea>


<label>Cenário de Testes: </label>
<textarea class="form-control" type="text" value="<?php echo e($historias->cenario_teste); ?>" name="cenario_teste" id="cenario_teste" placeholder="" rows="4" cols="50" disabled>
<?php echo e($historias->cenario_teste); ?>

</textarea>

<label>Especificação: </label>
<textarea class="form-control" type="text" value="<?php echo e($historias->especificacao); ?>" name="especificacao" id="especificacao" placeholder="" rows="4" cols="50" disabled>
<?php echo e($historias->especificacao); ?>

</textarea>

<label>Status: </label>
<select class="form-control" value="<?php echo e($historias->status); ?>" name="status" id="status" disabled> 
<option value="<?php echo e($historias->status); ?>"> <?php echo e($historias->status); ?> </option>
</select>

</form>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\laravel\resources\views/showhistoria.blade.php ENDPATH**/ ?>