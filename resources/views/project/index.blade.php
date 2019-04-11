@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">

        <div class="container">

            <div class="row mb-3">
                <h1 class="h4">Projetos</h1>
                <div class="ml-2">
                    <a  href="/projects/create" class="btn btn-sm btn-outline-secondary">Novo Projeto</a> 
                </div>
            </div>

            <div class="row">
                @foreach($projects as $project)
                <div class="card mb-3 col-md-4">
                    <div class="row no-gutters">
                        <div class="card-body">
                            <h5 class="card-title">{{$project->name}}</h5>
                            <p class="card-text">{{$project->description}}</p>
                            <p class="card-text"><small class="text-muted">Data de Entrega: {{$project->deliveryDate}}</small></p>
                            <a href="/projects/{{$project->id}}" class="btn btn-dark col-12">Ver Projeto</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>
@endsection