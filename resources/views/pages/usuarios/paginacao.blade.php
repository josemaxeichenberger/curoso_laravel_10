@extends('index')

@section('content')
    <div class="position-static">
        <div class="d-flex justify-content-between flex-wrap">
            <h1 class="h2">Usuários</h1>
        </div>
        <form action="{{ route('usuarios.index') }}" method="get">
            <div class="input-group">
                <input type="search" class="form-control rounded" name="pesquisar" placeholder="Pesquisar"
                    aria-label="Pesquisar" aria-describedby="search-addon" />
                <button type="submit" class="btn btn-outline-primary">Pesquisar</button>
                <a class="btn btn-success" href="{{ route('usuarios.cadastrar') }}">+ Usuários</a>
            </div>
        </form>
    </div>


    <div class="table-responsive mt-5">
        @if ($findUsuarios->isEmpty())
            <p>Não existe dados</p>
        @else
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        
                        <th>Ação</th>
                    </tr>

                </thead>
                <tbody>
                    @foreach ($findUsuarios as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                       
                            <td>
                                <a href="{{ route('usuarios.storeUpdate', ['id' => $user->id]) }}"
                                    class="btn btn-info">Editar</a>
                                <meta name="csrf-token" content="{{ csrf_token() }}" />
                                <a onclick="deleteUsuario('{{ route('usuarios.delete', ['id' => $user->id]) }}')"
                                    class="btn btn-danger">Excluir</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
