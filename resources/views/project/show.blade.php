@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="container">

            <div class="row mb-3">
                <h1 class="h4">Projeto: {{$project->name}}</h1>
            </div>

            <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a href="\projects" class="btn btn-sm btn-outline-dark">Voltar</a>
                <a href="\projects\{{$project->id}}\edit" class="btn btn-sm btn-dark">Editar</a>
                <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
            </form>

            <div class="col-12 mt-5 mb-5">
                <p>{{$project->description}}</p>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <h2 class="h5">Tarefas</h2>
                    <table class="table table-sm table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Usuário</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td><a href="/projects">Criar tela de Cadastro de usuário</a></td>
                                    <td>Everton</td>
                                </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-md-5">
                    <h2 class="h5">Usuários</h2>
                    <table class="table table-sm table-hover">
                        <thead>
                            <tr>
                                <th scope="col" class="col-md-8">Usuário</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Everton</td>
                                <td>
                                    <form action="" method="POST">
                                    @csrf
                                    @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Remover</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>     
    </div>
</div>
@endsection