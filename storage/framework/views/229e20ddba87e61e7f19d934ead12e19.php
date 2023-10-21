<div class="text-center mt-3 mb-4">

<div class="col-8 m-auto"> 


<div class="col-md-10 mx-auto col-lg-8  bg-light"> 
  <?php if(auth()->check()): ?>
    Deseja sair do sistema? <a class="btn btn-danger" href="<?php echo e(route('login.destroy')); ?>">Sair do Sistema</a>
    <?php else: ?>
    <?php endif; ?>
  </div>

</div>
</div>

<?php echo $__env->make('templates.template2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\laravel\resources\views/master.blade.php ENDPATH**/ ?>