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
                <button type="submit" class="btn btn-sm btn-danger">Excluir</a>
            </form>

        </div>     
    </div>
</div>
@endsection