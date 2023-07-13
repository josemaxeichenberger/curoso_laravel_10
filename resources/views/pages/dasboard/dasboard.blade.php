@extends('index')
@section('content')
    <div class="position-static">
        <div class="d-flex justify-content-between flex-wrap">
            <h1 class="h2">Dashboard</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Usuários</h5>
                    {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                    <a href="#" class="btn btn-primary">{{$findUsuarios}}</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Vendas</h5>
                    {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                    <a href="#" class="btn btn-primary">{{$totalVendas}}</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Produtos</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">{{$totalProdutos}}</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Clientes</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">{{$totalClientes}}</a>
                </div>
            </div>
        </div>
    </div>
@endsection
