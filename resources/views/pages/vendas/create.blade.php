@extends('index')
@section('content')
<div class="d-flex justify-content-between flex-wrap">
    <h1 class="h2">Nova Venda</h1>
</div>
<form class="row g-3" method="POST" action="{{route('vendas.store')}}">
    @csrf
    <div class="col-md-2">
      <label class="form-label">Nome</label>
      <input type="text" name="numero" disabled  value="{{$findNumaracao}}" class="form-control @error('numero') is-invalid
         
      @enderror" id="numero" value="" >
 
    </div>
    <div class="col-md-5">
      <label class="form-label">Produto</label>
      <select name="produtos_id" id="produtos_id" class="form-control">
        <option selected value="">Selecione</option>
        @foreach ($findProduto as $produto)
        <option  value="{{$produto->id}}">{{$produto->nome}}</option>
        @endforeach
      </select>
  
    </div>
 
    <div class="col-md-5">
      <label class="form-label">Cliente</label>
      <select name="cliente_id" id="cliente_id" class="form-control">
        <option selected value="">Selecione</option>
        @foreach ($findCliente as $cliente)
        <option  value="{{$cliente->id}}">{{$cliente->nome}}</option>
        @endforeach
      </select>
     
    </div>
  
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Salvar</button>
    </div>
  </form>
  @endsection