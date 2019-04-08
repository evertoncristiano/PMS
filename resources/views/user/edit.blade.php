@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-body">
        <h1 class="h3">Adicionar Usuário</h1>   
        
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" name="name" value="{{ $user->name }}">
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" value="{{ $user->username }}">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="{{ $user->email }}">
            </div>

            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" class="form-control" name="password">
            </div>

            <div class="form-group">
                <label for="group_id">Grupo</label>
                <select class="form-control" name="group_id">
                    <option></option>
                    @foreach ($groups as $group)
                    <option value="{{$group->id}}">{{$group->name}}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" class="btn btn-success" value="Salvar">
            <a href="/users" class="btn btn-danger">Cancelar</a>
        </form>
    </div>
</div>

@endsection