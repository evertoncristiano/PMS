@extends('layouts.app')

@section('content')
<div class="card col-xl-8 m-auto">
    <div class="card-body">
        <div class="container">

            <div class="row mb-3">
                <h1 class="h4">Projeto: {{$project->name}}</h1>
                <div class="row col-md-12 mt-3">
                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('projects.index') }}" class="btn btn-sm btn-outline-dark">Voltar</a>
                        <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-sm btn-dark">Editar</a>
                        <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                    </form>
                </div>
            </div>

            <div class="row mb-3">
                <p>{{$project->description}}</p>
            </div>
    
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Tarefas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Usuários</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">@include('project.tasks')</div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">@include('project.users')</div>
            </div>
        </div>     
    </div>
</div>
@endsection