@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">

        <div class="container">

            <div class="row mb-3">
                <h1 class="h4">Projeto: {{$project->name}}</h1>
                <div>
                    <a href="\projects\{{$project->id}}\edit">Editar</a>
                </div>
            </div>

Exibindo Projeto {{$project->name}} da empresa {{$project->customer->name}}

@endsection