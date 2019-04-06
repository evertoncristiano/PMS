@extends('layouts.app')

@section('content')

<div class="container">
    <h4>Usuários</h4>
    <table class="table table-sm table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Usuário</th>
                <th scope="col">Email</th>
                <th scope="col">Grupo</th>
                <th scope="col">Ult. Atualização</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->email}}</td>
                <td></td>
                <td>{{$user->updated_at ?? 'N/A'}}</td>
                <td>
                    <a href="#" class="btn btn-sm btn-secondary">Editar</a>
                    <a href="#" class="btn btn-sm btn-danger bg-color-red">Excluir</a>
                </td>
            </tr>
            @endforeach

            <?php dd($users) ?>
        </tbody>
    </table>
</div>



@endsection