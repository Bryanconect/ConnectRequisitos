

<?php $__env->startSection('content'); ?>

<div class="text-center mt-3 mb-4">

<a href="<?php echo e(url("elicitacao/inicio")); ?>">
        <button class="btn btn-danger")> Voltar </button>
        </a>
     
</div>

<h1 class="text-center">Visualizar Elicitação</h1>

<div class="col-8 m-auto"> 

<form name="formCad" id="formCad" method="post" action="<?php echo e(url("elicitacao/inicio")); ?>"> 


<?php echo csrf_field(); ?>
<label>Titulo: </label>
<input class="form-control" type="text" value="<?php echo e($elicitacao->titulo); ?>" name="titulo" id="titulo" placeholder="" disabled>
<label>Tipo: </label>
<input class="form-control" type="text" value="<?php echo e($elicitacao->tipo); ?>" name="tipo" id="tipo" placeholder="" disabled>
<label>Setor Envolvido: </label>
<input class="form-control" type="text" value="<?php echo e($elicitacao->setor_envolvido); ?>" name="setor_envolvido" id="setor_envolvido" placeholder="" disabled>
<label>Data: </label>
<input class="form-control" type="date" value="<?php echo e($elicitacao->data_reuniao); ?>" name="data_reuniao" id="data_reuniao" placeholder="" disabled>
<?php if(auth()->check()): ?>
<label>Usuário: </label>
<select class="form-control" value= "<?php echo e(auth()->user()->id); ?>" name="id_user" id="id_user" disabled> 
<option value="<?php echo e(auth()->user()->id); ?>" name="id_user" id="id_user"> <?php echo e(auth()->user()->name); ?> </option>
</select>
<?php else: ?>
<?php endif; ?>
<label>Conteudo: </label>
<textarea class="form-control" type="textarea" value="<?php echo e($elicitacao->conteudo); ?>" name="conteudo" id="conteudo" placeholder="" rows="4" cols="50" disabled>
<?php echo e($elicitacao->conteudo); ?>


</textarea>


</form>



</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\laravel\resources\views/showelicitacao.blade.php ENDPATH**/ ?>