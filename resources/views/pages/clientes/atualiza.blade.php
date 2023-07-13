@extends('index')
@section('content')
<div class="d-flex justify-content-between flex-wrap">
  <h1 class="h2">Editar de Cliente</h1>
</div>
<form class="row g-3" method="POST" action="{{ route('clientes.update', ['id' => $findClientes->id]) }}">
  @csrf
  @method('PUT')
  <div class="col-md-4">
    <label class="form-label">Nome</label>
    <input type="text" name="nome" value="{{ isset($findClientes->nome) ? $findClientes->nome : old('nome') }}" class="form-control @error('nome') is-invalid
         
      @enderror" id="nome" value="">
    @if ($errors->has('nome'))
    <div class="invalid-feedback">
      {{ $errors->first('nome') }}
    </div>
    @endif
  </div>
  <div class="col-md-4">
    <label class="form-label">E-mail</label>
    <input type="text" name="email" class="form-control @error('email') is-invalid
          
      @enderror" id="email" value="{{ isset($findClientes->email) ? $findClientes->email : old('email') }}">
    @if ($errors->has('email'))
    <div class="invalid-feedback">
      {{ $errors->first('email') }}
    </div>
    @endif
  </div>
  <div class="col-md-4">
    <label class="form-label">Endereço</label>
    <input type="text" name="endereco" class="form-control @error('endereco') is-invalid
          
      @enderror" id="endereco"
      value="{{ isset($findClientes->endereco) ? $findClientes->endereco : old('endereco') }}">
    @if ($errors->has('endereco'))
    <div class="invalid-feedback">
      {{ $errors->first('endereco') }}
    </div>
    @endif
  </div>

  <div class="col-md-4">
    <label class="form-label">Logradouro</label>
    <input type="text" name="logradouro" class="form-control @error('logradouro') is-invalid
          
      @enderror" id="logradouro"
      value="{{ isset($findClientes->logradouro) ? $findClientes->logradouro : old('logradouro') }}">
    @if ($errors->has('logradouro'))
    <div class="invalid-feedback">
      {{ $errors->first('logradouro') }}
    </div>
    @endif
  </div>

  <div class="col-md-4">
    <label class="form-label">Cep</label>
    <input type="text" name="cep" class="form-control @error('cep') is-invalid
          
      @enderror" id="cep"
      value="{{ isset($findClientes->cep) ? $findClientes->cep : old('cep') }}">
    @if ($errors->has('cep'))
    <div class="invalid-feedback">
      {{ $errors->first('cep') }}
    </div>
    @endif
  </div>
  <div class="col-md-4">
    <label class="form-label">Bairro</label>
    <input type="text" name="bairro" class="form-control @error('bairro') is-invalid
          
      @enderror" id="bairro"
      value="{{ isset($findClientes->bairro) ? $findClientes->bairro : old('bairro') }}">
    @if ($errors->has('bairro'))
    <div class="invalid-feedback">
      {{ $errors->first('bairro') }}
    </div>
    @endif
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Salvar</button>
  </div>
</form>
@endsection