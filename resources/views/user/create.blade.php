@extends('layouts.app')

@section('content')

<div class="card col-xl-8  m-auto">
    <div class="card-body">
        <div class="container">
            <div class="row mb-3">
                <h1 class="h4">Cadastro de Usuário</h1>
            </div>   
            
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" name="name" value="{{old('name')}}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" value="{{old('email')}}">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="form-group col-md-5">
                        <label for="password">Senha</label>
                        <input type="password" class="form-control" name="password">
                    </div>

                    <div class="form-group col-md-7">
                        <label for="group_id">Grupo</label>
                        <select class="form-control" name="group_id">
                            <option>Selecione o grupo</option>
                            @foreach ($groups as $group)
                                @if(old('group_id') == $group->id)
                                    <option selected value="{{$group->id}}">{{$group->name}}</option>
                                @else
                                    <option value="{{$group->id}}">{{$group->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-success" value="Salvar">
                    <a href="/users" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection