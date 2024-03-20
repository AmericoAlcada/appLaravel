

<?php $__env->startSection('title','Futebolistas'); ?>



<?php $__env->startSection('content'); ?>
<br><br><br>
<div class="container" style="background-color: #999999; border-radius: 20px">
<br>
<h1 style="text-align: center">Editar Futebolista</h1>
<br>
<form action="<?php echo e(route('futebolistas.update', ['id'=>$futebolistas->id])); ?>" method="post">
<?php echo csrf_field(); ?>
<?php echo method_field('PUT'); ?>
<div class="form-group">
<div class="form-group">
<input type="text" class="form-control" name="nome" value="<?php echo e($futebolistas->nome); ?>" placeholder="Nome">
<br>
</div>
<div class="form-group">
<input type="text" class="form-control" name="idade" value="<?php echo e($futebolistas->idade); ?>" placeholder="Idade">
<br>
</div>
<div class="form-group">
<input type="text" class="form-control" name="clube" value="<?php echo e($futebolistas->clube); ?>" placeholder="Clube">
<br>
</div>
<div class="form-group">
<input type="text" class="form-control" name="posicao" value="<?php echo e($futebolistas->posicao); ?>" placeholder="Posição">
</div>
<br>
<div class="form-group">
<input type="text" class="form-control" name="pais" value="<?php echo e($futebolistas->pais); ?>" placeholder="País">
<br>
</div>
<br>
<button type="submit" class="btn btn-primary" style="width: 100%">Atualizar</button><br><br>
<button type="reset" class="btn btn-secondary" style="width: 100%">Limpar</button><br><br>
<a href="<?php echo e(route('futebolistas.index')); ?>" class="btn btn-success" style="width: 100%">Voltar</a><br><br>
</div>
</div>
</form>
<br><br>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ameri\OneDrive\Ambiente de Trabalho\estagio\appLaravel\resources\views/futebolistas/edit.blade.php ENDPATH**/ ?>