@extends('layouts.app')

@section('title','Futebolistas')



@section('content')
<br><br><br>
<div class="container" style="background-color: #999999; border-radius: 20px">
<br>
<h1 style="text-align: center">Consultar Futebolista</h1>
<br>
<div class="form-group">
<div class="form-group">
<input type="text" class="form-control" name="nome" value="{{$futebolistas->nome}}" placeholder="Nome" readonly>
<br>
</div>
<div class="form-group">
<input type="text" class="form-control" name="idade" value="{{$futebolistas->idade}}" placeholder="Idade" readonly>
<br>
</div>
<div class="form-group">
<input type="text" class="form-control" name="clube" value="{{$futebolistas->clube}}" placeholder="Clube" readonly>
<br>
</div>
<div class="form-group">
<input type="text" class="form-control" name="posicao" value="{{$futebolistas->posicao}}" placeholder="Posição" readonly>
<br>
</div>
<div class="form-group">
<input type="text" class="form-control" name="pais" value="{{$futebolistas->pais}}" placeholder="País" readonly>
<br>
<br>
</div>
<a href="{{route('futebolistas.index')}}" class="btn btn-success" style="width: 100%">Voltar</a>
<br>
<br>
</div>
</div>

</div>

@endsection