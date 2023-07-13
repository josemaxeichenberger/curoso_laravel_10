@extends('index')

@section('content')
    <div class="position-static">
        <div class="d-flex justify-content-between flex-wrap">
            <h1 class="h2">Vendas</h1>
        </div>
        <form action="{{route('vendas.index')}}" method="get">
            <div class="input-group">
                <input type="search" class="form-control rounded" name="pesquisar" placeholder="Pesquisar" aria-label="Pesquisar"
                    aria-describedby="search-addon" />
                <button type="submit" class="btn btn-outline-primary">Pesquisar</button>
                <a class="btn btn-success" href="{{route('vendas.cadastrar')}}">+ Produtos</a>
            </div>
        </form>
    </div>


    <div class="table-responsive mt-5">
        @if ($findVendas->isEmpty())
            <p>Não existe dados</p>
        @else
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Numero</th>
                    <th>Poroduto</th>
                    <th>Cliente</th>
                    <th>Ação</th>
                </tr>

            </thead>
            <tbody>
                @foreach ($findVendas as $Iten)
                    <tr>
                        <td>{{ $Iten->numero }}</td>
                        {{-- <td>{{ $produto->nome  }}</td> --}}
                        <td>{{ $Iten->cliente->nome }}</td>
                        <td>{{ $Iten->produtos->nome }}</td>
                        <td>
                            <meta name="csrf-token" content="{{csrf_token()}}"/>
                            <a onclick="deleteProduto('{{route('vendas.delete', ['id' => $Iten->id])}}')" class="btn btn-danger">Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
@endsection
