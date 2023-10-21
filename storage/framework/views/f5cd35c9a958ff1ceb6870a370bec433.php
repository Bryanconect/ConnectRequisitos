

<?php $__env->startSection('content'); ?>

<div class="text-center mt-3 mb-4">

<a href="<?php echo e(url("elicitacao/inicio")); ?>">
        <button class="btn btn-danger")> Voltar </button>
        </a>
     
</div>

<h1 class="text-center">Cadastrar Elicitação</h1>

<div class="col-8 m-auto"> 
    <?php if(isset($errors) && count($errors)>0): ?>
    <div class="text-center mt-4 mb-4 p-2 alert-danger">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $erro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($erro); ?><br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>


<form name="formCad" id="formCad" method="post" action="<?php echo e(url("elicitacao")); ?>"> 


<?php echo csrf_field(); ?>
<label>Titulo: </label>
<input class="form-control" type="text" maxLength="100" name="titulo" id="titulo" placeholder="Digite o titulo" required>
<label>Tipo: </label>
<input class="form-control" type="text" maxLength="100" name="tipo" id="tipo" placeholder="Digite o tipo" required>
<label>Setor Envolvido: </label>
<input class="form-control" type="text" maxLength="100" name="setor_envolvido" id="setor_envolvido" placeholder="Digite o setor" required>
<label>Data: </label>
<input class="form-control" type="date" name="data_reuniao" id="data_reuniao" placeholder="" required>
<?php if(auth()->check()): ?>
<label>Usuário: </label>
<select class="form-control" value= "<?php echo e(auth()->user()->id); ?>" name="id_user" id="id_user"> 
<option value="<?php echo e(auth()->user()->id); ?>" name="id_user" id="id_user"> <?php echo e(auth()->user()->name); ?> </option>
</select>
<?php else: ?>
<?php endif; ?>
<label>Conteudo: </label>
<textarea class="form-control" type="textarea" maxLength="250" name="conteudo" id="conteudo" placeholder="" rows="4" cols="50" required>
</textarea>
<input class="btn btn-primary" type="submit">


</form>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\ProjetoFinal\resources\views/createelicitacao.blade.php ENDPATH**/ ?>