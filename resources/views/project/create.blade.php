@extends('layouts.app')

@section('content')
<div class="card col-xl-8  m-auto">
    <div class="card-body">
        <div class="container">
            <div class="row mb-3">
                <h1 class="h4">Cadastro de Projetos</h1>
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

            <form action="{{ route('projects.store') }}" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="customer_id">Cliente</label>
                        <select class="custom-select">
                            <option>Selecione um Ciente</option>
                            <option value=""></option>
                        </select>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="name">Nome</label>                      
                            <input type="text" class="form-control" name="name" value="{{old('name')}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="deliveryDate">Data de Entrega</label>
                            <input type="date" class="form-control" name="deliveryDate" value="{{old('address')}}">
                        </div>  
                    </div>
                    
                    <div class="form-row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="description">Descrição</label>
                                <textarea class="form-control" placeholder="Descreva o Projeto" rows="3">{{old('description')}}</textarea>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        
                    </div>
                    
                    <div class="mt-2">
                        <input type="submit" class="btn btn-success" value="Salvar">
                        <a href="/projects" class="btn btn-danger">Cancelar</a>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection