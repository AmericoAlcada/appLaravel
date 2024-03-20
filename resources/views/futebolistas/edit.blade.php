@extends('layouts.app')

@section('title','Futebolistas')



@section('content')
<br><br><br>
<div class="container" style="background-color: #999999; border-radius: 20px">
<br>
<h1 style="text-align: center">Editar Futebolista</h1>
<br>
<form action="{{route('futebolistas.update', ['id'=>$futebolistas->id])}}" method="post">
@csrf
@method('PUT')
<div class="form-group">
<div class="form-group">
<input type="text" class="form-control" name="nome" value="{{$futebolistas->nome}}" placeholder="Nome">
<br>
</div>
<div class="form-group">
<input type="text" class="form-control" name="idade" value="{{$futebolistas->idade}}" placeholder="Idade">
<br>
</div>
<div class="form-group">
<input type="text" class="form-control" name="clube" value="{{$futebolistas->clube}}" placeholder="Clube">
<br>
</div>
<div class="form-group">
<input type="text" class="form-control" name="posicao" value="{{$futebolistas->posicao}}" placeholder="Posição">
</div>
<br>
<div class="form-group">
<input type="text" class="form-control" name="pais" value="{{$futebolistas->pais}}" placeholder="País">
<br>
</div>
<br>
<button type="submit" class="btn btn-primary" style="width: 100%">Atualizar</button><br><br>
<button type="reset" class="btn btn-secondary" style="width: 100%">Limpar</button><br><br>
<a href="{{route('futebolistas.index')}}" class="btn btn-success" style="width: 100%">Voltar</a><br><br>
</div>
</div>
</form>
<br><br>
</div>

@endsection