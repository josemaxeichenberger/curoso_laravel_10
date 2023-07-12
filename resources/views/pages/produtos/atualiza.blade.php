@extends('index')
@section('content')
<div class="d-flex justify-content-between flex-wrap">
    <h1 class="h2">Editar de Produtos</h1>
</div>
<form class="row g-3" method="POST" action="{{route('produto.update',['id' =>$findProdutos->id])}}">
    @csrf
    @method('PUT')
    <div class="col-md-4">
      <label class="form-label">Nome</label>
      <input type="text" name="nome"  value="{{ isset($findProdutos->nome) ? $findProdutos->nome : old('nome')}}" class="form-control @error('nome') is-invalid
         
      @enderror" id="nome" value="" >
      @if ($errors->has('nome'))
      <div class="invalid-feedback">
        {{$errors->first('nome')}}
      </div>
     @endif
    </div>
    <div class="col-md-4">
      <label  class="form-label">Valor</label>
      <input type="text" name="valor" class="form-control @error('valor') is-invalid
          
      @enderror" id="valor" value="{{ isset($findProdutos->valor) ? $findProdutos->valor : old('valor')}}"   data-mask="#.##0,00" data-mask-reverse="true" data-mask-maxlength="false" >
      @if ($errors->has('valor'))
      <div class="invalid-feedback">
        {{$errors->first('valor')}}
      </div>
     @endif
    </div>
 

  
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Salvar</button>
    </div>
  </form>
  @endsection