

<?php $__env->startSection('title','Futebolistas'); ?>



<?php $__env->startSection('content'); ?>
<br><br><br>
<div class="container" style="background-color: #999999; border-radius: 20px"><br>

    <div class="row">
        <div class="col-sm-9">
<h1 style="text-align: center">Jogadores inseridos</h1>
        </div>
        <div class="col-sm-3">
<a href="<?php echo e(route('futebolistas.create')); ?>" class="btn btn-outline-success">Inserir Novo Futebolista</a>
        </div>
    </div>
    <br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Idade</th>
      <th scope="col">Clube</th>
      <th scope="col">Posição</th>
      <th scope="col">País</th>
      <th scope="col">...</th>
    </tr>
    
  </thead>
  <tbody>
    <?php $__currentLoopData = $futebolistas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $futebolista): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
    <tr>
      <td><?php echo e($futebolista->nome); ?></td>
      <td><?php echo e($futebolista->idade); ?></td>
      <td><?php echo e($futebolista->clube); ?></td>
      <td><?php echo e($futebolista->posicao); ?></td>
      <td><?php echo e($futebolista->pais); ?></td>
      <td class="d-flex"><a href="<?php echo e(route('futebolistas.consult', ['id'=>$futebolista->id])); ?>" class="btn btn-outline-info me-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eyeglasses" viewBox="0 0 16 16">
  <path d="M4 6a2 2 0 1 1 0 4 2 2 0 0 1 0-4m2.625.547a3 3 0 0 0-5.584.953H.5a.5.5 0 0 0 0 1h.541A3 3 0 0 0 7 8a1 1 0 0 1 2 0 3 3 0 0 0 5.959.5h.541a.5.5 0 0 0 0-1h-.541a3 3 0 0 0-5.584-.953A2 2 0 0 0 8 6c-.532 0-1.016.208-1.375.547M14 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0"/>
</svg></a><a href="<?php echo e(route('futebolistas.edit', ['id'=>$futebolista->id])); ?>" class="btn btn-outline-primary me-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg></a>
<form action="<?php echo e(route('futebolistas.destroy', ['id'=>$futebolista->id])); ?>" method="POST">
  <?php echo csrf_field(); ?>
  <?php echo method_field('DELETE'); ?>
<button type="submit" class="btn btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
</svg></button>
</form>
</td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<br>
</div><br><br><br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ameri\OneDrive\Ambiente de Trabalho\estagio\appLaravel\resources\views/futebolistas/index.blade.php ENDPATH**/ ?>