@extends('layouts.app')

@section('content')
<div class="card col-xl-8  m-auto">
    <div class="card-body">
        <div class="container">
            <div class="row mb-3">
                <h1 class="h4">Editar de Projeto</h1>
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

            <form action="{{ route('projects.update', $project->id) }}" method="POST">
                @csrf
                @method('PATCH')
                    <div class="form-group">
                        <label for="customer_id">Cliente</label>
                        <select class="custom-select" name="customer_id">
                            <option>Selecione um Ciente</option>
                            @foreach($customers as $customer)
                                @if($project->customer_id == $customer->id)
                                    <option selected value="{{$customer->id}}">{{$customer->name}} - {{$customer->cnpj}}</option>
                                @else
                                    <option value="{{$customer->id}}">{{$customer->name}} - {{$customer->cnpj}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="name">Nome</label>                      
                            <input type="text" class="form-control" name="name" value="{{$project->name}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="deliveryDate">Data de Entrega</label>
                            <input type="date" class="form-control" name="deliveryDate" value="{{$project->deliveryDate}}">
                        </div>  
                    </div>
                    
                    <div class="form-row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="description">Descrição</label>
                                <textarea class="form-control" name="description" placeholder="Descreva o Projeto" rows="4">{{$project->description}}</textarea>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-2">
                        <input type="submit" class="btn btn-success" value="Salvar">
                        <a href="/projects/{{$project->id}}" class="btn btn-danger">Cancelar</a>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection