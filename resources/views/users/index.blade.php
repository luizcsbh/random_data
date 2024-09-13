@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Lista de Usuários</h2>
    <a href="{{ route('users.fetch') }}" class="btn btn-primary mb-3">Buscar Novos Usuários</a>

    @if($paginatedUsers->count())
    <table id="usersTable" class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Gênero</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($paginatedUsers as $user)
            <tr>
                <td>{{ $user['id'] }}</td>
                <td>{{ $user['first_name'] }} {{ $user['last_name'] }}</td>
                <td>{{ $user['email'] }}</td>
                <td>{{ $user['gender'] }}</td>
                <td>
                    <a href="{{ route('users.show', $user['id']) }}" class="btn btn-info btn-sm">
                        <i class="fa fa-eye"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Links de Paginação -->
    <div class="d-flex justify-content-center mt-3">
        {{ $paginatedUsers->links('pagination::bootstrap-5') }}
    </div>

    @else
    <p>Nenhum usuário encontrado. Clique em "Buscar Novos Usuários" para iniciar.</p>
    @endif
</div>
@endsection