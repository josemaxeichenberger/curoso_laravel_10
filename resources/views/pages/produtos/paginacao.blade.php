@extends('index')

@section('content')
    <div class="position-static">
        <div class="d-flex justify-content-between flex-wrap">
            <h1 class="h2">Produtos</h1>
        </div>
        <form action="{{route('produto.index')}}" method="get">
            <div class="input-group">
                <input type="search" class="form-control rounded" name="pesquisar" placeholder="Pesquisar" aria-label="Pesquisar"
                    aria-describedby="search-addon" />
                <button type="submit" class="btn btn-outline-primary">Pesquisar</button>
                <a class="btn btn-success" href="{{route('produto.cadastrar')}}">+ Produtos</a>
            </div>
        </form>
    </div>


    <div class="table-responsive mt-5">
        @if ($findProdutos->isEmpty())
            <p>Não existe dados</p>
        @else
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Valor</th>
                    <th>Ação</th>
                </tr>

            </thead>
            <tbody>
                @foreach ($findProdutos as $produtoIten)
                    <tr>
                        <td>{{ $produtoIten->nome }}</td>
                        <td>{{ 'R$ '. number_format($produtoIten->valor,2,',','.') }}</td>
                        <td>
                            <a href="{{route('produto.storeUpdate',['id' => $produtoIten->id])}}" class="btn btn-info">Editar</a>
                            <meta name="csrf-token" content="{{csrf_token()}}"/>
                            <a onclick="deleteProduto('{{route('produto.delete', ['id' => $produtoIten->id])}}')" class="btn btn-danger">Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
@endsection
