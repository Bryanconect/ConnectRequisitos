
<?php $__currentLoopData = $historias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $historias): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<?php
  $user = $historias->find($historias->id)->relUsers;
  $requisito = $historias->find($historias->id)->relRequisito;
  $elicitacao = $historias->find($historias->id)->relElicitacao;
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PDF</title>
</head>
<body>

<br>
<br>
<label>Programa: </label>
<textarea class="form-control" type="text" value="{$requisito->programa}}" name="" id="" placeholder="" rows="4" cols="50">
<?php echo e($requisito->programa); ?>

</textarea>


<label>Elicitação: </label>
<textarea class="form-control" type="text" value="<?php echo e($elicitacao->titulo); ?>" name="" id="" placeholder="" rows="4" cols="50">
<?php echo e($elicitacao->titulo); ?>

</textarea>

<label>Usuário: </label>
<textarea class="form-control" type="text" value="<?php echo e($user->name); ?>" name="" id="" placeholder="" rows="4" cols="50">
<?php echo e($user->name); ?> 
</textarea>


<label>Necessidade: </label>
<textarea class="form-control" type="text" value="<?php echo e($historias->necessidade); ?>"  name="" id="" placeholder="" rows="4" cols="50">
<?php echo e($historias->necessidade); ?>

</textarea>


<label>Solução: </label>
<textarea class="form-control" type="text" value="<?php echo e($historias->solucao); ?>" name="solucao" id="solucao" placeholder="" rows="4" cols="50">
<?php echo e($historias->solucao); ?>

</textarea>


<label>Cenário de Testes: </label>
<textarea class="form-control" type="text" value="<?php echo e($historias->cenario_teste); ?>" name="cenario_teste" id="cenario_teste" placeholder="" rows="4" cols="50">
<?php echo e($historias->cenario_teste); ?>

</textarea>

<label>Especificação: </label>
<textarea class="form-control" type="text" value="<?php echo e($historias->especificacao); ?>" name="especificacao" id="especificacao" placeholder="" rows="4" cols="50">
<?php echo e($historias->especificacao); ?>

</textarea>

<label>Status: </label>
<textarea class="form-control" type="text" value="<?php echo e($historias->status); ?>" name="status" id="status" placeholder="" rows="4" cols="50">
<?php echo e($historias->status); ?>

</textarea>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html>
<?php /**PATH C:\xampp\laravel\resources\views/pdfVersao.blade.php ENDPATH**/ ?>