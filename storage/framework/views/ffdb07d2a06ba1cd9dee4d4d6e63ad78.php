

<?php $__env->startSection('content'); ?>
<h1 class="text-center">Login</h1>

<?php if($mensagem = Session::get('erro')): ?>
<?php echo e($mensagem); ?>

<?php endif; ?>

<div class="text-center mt-3 mb-4">

<div class="col-8 m-auto"> 

<form action="<?php echo e(route('login.auth')); ?>" method="POST">
<?php echo csrf_field(); ?> 


<input class="form-control" type="text" name="email" id="email" placeholder="Email:">
<input class="form-control" type="text" name="password" id="password" placeholder="Senha:">
<button class="btn btn-primary" type="submit" > Entrar </button>


</form>

</div>
</div>


<?php echo $__env->make('templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\laravel\resources\views/login/form.blade.php ENDPATH**/ ?>