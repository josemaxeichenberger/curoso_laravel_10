@extends('index')
@section('content')
<div class="d-flex justify-content-between flex-wrap">
  <h1 class="h2">Cadastro de Usuários</h1>
</div>
<form class="row g-3" method="POST" action="{{route('usuarios.store')}}">
  @csrf
  <div class="col-md-4">
    <label class="form-label">Nome</label>
    <input type="text" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid
         
      @enderror" id="name" value="">
    @if ($errors->has('name'))
    <div class="invalid-feedback">
      {{$errors->first('name')}}
    </div>
    @endif
  </div>
  <div class="col-md-4">
    <label class="form-label">Email</label>
    <input type="email" name="email" class="form-control @error('email') is-invalid
          
      @enderror" id="email" value="{{old('email')}}">
    @if ($errors->has('email'))
    <div class="invalid-feedback">
      {{$errors->first('email')}}
    </div>
    @endif
  </div>

  <div class="col-md-4">
    <label class="form-label">Senha</label>
    <input type="password" name="password" class="form-control @error('password') is-invalid
          
      @enderror" id="password" value="{{old('password')}}">
    @if ($errors->has('password'))
    <div class="invalid-feedback">
      {{$errors->first('password')}}
    </div>
    @endif
  </div>

  <div class="col-12">
    <button class="btn btn-primary" type="submit">Salvar</button>
  </div>
</form>
@endsection