

<?php $__env->startSection('content'); ?>
<h1 class="text-center"><?php if(isset($book)): ?>Editar <?php else: ?> Cadastrar <?php endif; ?></h1>

<div class="col-8 m-auto"> 
    <?php if(isset($errors) && count($errors)>0): ?>
    <div class="text-center mt-4 mb-4 p-2 alert-danger">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $erro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($erro); ?><br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>


<?php if(isset($book)): ?>
<form name="formEdit" id="formEdit" method="post" action="<?php echo e(url("books/$book->id")); ?>"> 
    <?php echo method_field('PUT'); ?>
<?php else: ?>
<form name="formCad" id="formCad" method="post" action="<?php echo e(url("books")); ?>"> 
<?php endif; ?>



<?php echo csrf_field(); ?>
<input class="form-control" type="text" name="title" id="title" value="<?php echo e($book->title ?? ''); ?>" placeholder="Título:">
<select class="form-control" name="id_user" id="id_user"> 
<option value="<?php echo e($book->relUsers->id ?? ''); ?>"><?php echo e($book->relUsers->name ?? ''); ?></option>
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<input class="form-control" type="text" name="pages" id="pages" value="<?php echo e($book->pages ?? ''); ?>" placeholder="Páginas:">
<input class="form-control" type="text" name="price" id="price" value="<?php echo e($book->price ?? ''); ?>" placeholder="Preço:">
<input class="btn btn-primary" type="submit" value="<?php if(isset($book)): ?>Editar <?php else: ?> Cadastrar <?php endif; ?>">





</form>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\laravel\resources\views/create.blade.php ENDPATH**/ ?>