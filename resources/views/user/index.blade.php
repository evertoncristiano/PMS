@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="container">

        <div class="row mb-3">
            <h1 class="h4">Usuários</h1>
            <div class="ml-2">
            <a  href="/users/create" class="btn btn-sm btn-outline-secondary">Novo Usuário</a> 
        </div>
        </div>
        
        
        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif

        <div class="row">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Usuário</th>
                            <th scope="col">Grupo</th>
                            <th scope="col" colspan=2 class="ml-auto">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->group->name}}</td> 
                            <td>
                                <form action="{{ route('users.destroy', $user->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('users.edit',$user->id)}}" class="btn btn-sm btn-dark">Editar</a>
                                    <button class="btn btn-sm btn-danger" type="submit">Excluir</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $users->links() }}
                </div>
        </div>
    </div>
</div>
@endsection