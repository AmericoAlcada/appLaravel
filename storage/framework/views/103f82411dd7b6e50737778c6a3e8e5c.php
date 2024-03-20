

<?php $__env->startSection('title','Futebolistas'); ?>



<?php $__env->startSection('content'); ?>
<br><br><br>
<div class="container" style="background-color: #999999; border-radius: 20px">
<br>
<h1 style="text-align: center">Inserir Futebolista</h1>
<br>
<form action="<?php echo e(route('futebolistas.store')); ?>" method="post">
<?php echo csrf_field(); ?>
<div class="form-group">
<div class="form-group">
<input type="text" class="form-control" name="nome" placeholder="Nome">
<br>
</div>
<div class="form-group">
<input type="text" class="form-control" name="idade" placeholder="Idade">
<br>
</div>
<div class="form-group">
<input type="text" class="form-control" name="clube" placeholder="Clube">
<br>
</div>
<div class="form-group">
<input type="text" class="form-control" name="posicao" placeholder="Posição">
<br>
</div>
<div class="form-group">
<input type="text" class="form-control" name="pais" placeholder="País">
<br>
</div>
<br>
<button type="submit" class="btn btn-primary" style="width: 100%">Inserir</button>
<br>
<br>
<button type="reset" class="btn btn-secondary" style="width: 100%">Limpar</button>
<br>
<br>
<a href="<?php echo e(route('futebolistas.index')); ?>" class="btn btn-success" style="width: 100%">Voltar</a>
<br>
<br>
</div>
</div>
</form>
<br><br>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ameri\OneDrive\Ambiente de Trabalho\estagio\appLaravel\resources\views/futebolistas/create.blade.php ENDPATH**/ ?>