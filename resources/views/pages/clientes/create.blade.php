@extends('index')
@section('content')
<div class="d-flex justify-content-between flex-wrap">
    <h1 class="h2">Cadastro de Clientes</h1>
</div>
<form class="row g-3" method="POST" action="{{route('clientes.store')}}">
    @csrf
    <div class="col-md-4">
      <label class="form-label">Nome</label>
      <input type="text" name="nome"  value="{{old('nome')}}" class="form-control @error('nome') is-invalid
         
      @enderror" id="nome" value="" >
      @if ($errors->has('nome'))
      <div class="invalid-feedback">
        {{$errors->first('nome')}}
      </div>
     @endif
    </div>
    <div class="col-md-4">
      <label  class="form-label">Email</label>
      <input type="email" name="email" class="form-control @error('email') is-invalid
          
      @enderror" id="email"value="{{old('email')}}"    >
      @if ($errors->has('email'))
      <div class="invalid-feedback">
        {{$errors->first('email')}}
      </div>
     @endif
    </div>
 

  
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Salvar</button>
    </div>
  </form>
  @endsection