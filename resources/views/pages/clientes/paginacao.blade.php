@extends('index')

@section('content')
    <div class="position-static">
        <div class="d-flex justify-content-between flex-wrap">
            <h1 class="h2">Clientes</h1>
        </div>
        <form action="{{ route('clientes.index') }}" method="get">
            <div class="input-group">
                <input type="search" class="form-control rounded" name="pesquisar" placeholder="Pesquisar"
                    aria-label="Pesquisar" aria-describedby="search-addon" />
                <button type="submit" class="btn btn-outline-primary">Pesquisar</button>
                <a class="btn btn-success" href="{{ route('clientes.cadastrar') }}">+ Clientes</a>
            </div>
        </form>
    </div>


    <div class="table-responsive mt-5">
        @if ($findClientes->isEmpty())
            <p>Não existe dados</p>
        @else
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Endereco</th>
                        <th>Logradouro</th>
                        <th>Cep</th>
                        <th>Bairro</th>
                        <th>Ação</th>
                    </tr>

                </thead>
                <tbody>
                    @foreach ($findClientes as $cli)
                        <tr>
                            <td>{{ $cli->nome }}</td>
                            <td>{{ $cli->email }}</td>
                            <td>{{ $cli->endereco }}</td>
                            <td>{{ $cli->logradouro }}</td>
                            <td>{{ $cli->cep }}</td>
                            <td>{{ $cli->bairro }}</td>
                            <td>
                                <a href="{{ route('clientes.storeUpdate', ['id' => $cli->id]) }}"
                                    class="btn btn-info">Editar</a>
                                <meta name="csrf-token" content="{{ csrf_token() }}" />
                                <a onclick="deleteCliente('{{ route('clientes.delete', ['id' => $cli->id]) }}')"
                                    class="btn btn-danger">Excluir</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
