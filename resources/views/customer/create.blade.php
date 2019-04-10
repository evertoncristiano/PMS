@extends('layouts.app')

@section('content')

<div class="card col-xl-8  m-auto">
    <div class="card-body">
        <div class="container">
            <div class="row mb-3">
                <h1 class="h4">Cadastro de Cliente</h1>
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

            <form action="{{ route('customers.store') }}" method="POST">
                @csrf
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Nome do Cliente">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="name">CNPJ</label>                      
                            <input type="text" class="form-control" name="cnpj" value="{{old('cnpj')}}" placeholder="CNPJ">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="zip_code">CEP</label>
                            <input type="text" class="form-control" name="zip_code" value="{{old('zip_code')}}" placeholder="CEP">
                        </div> 
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-9">
                            <label for="zip_code">Endereço</label>
                            <input type="text" class="form-control" name="address" value="{{old('address')}}" placeholder="Endereço">
                        </div>  
                        <div class="form-group col-md-3">
                            <label for="zip_code">Número</label>
                            <input type="text" class="form-control" name="number" value="{{old('number')}}" placeholder="Número">
                        </div>
                    </div>
                     
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="zip_code">Bairro</label>
                            <input type="text" class="form-control" name="district" value="{{old('district')}}" placeholder="Bairro">
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="zip_code">Cidade</label>
                            <input type="text" class="form-control" name="city" value="{{old('city')}}" placeholder="Cidade">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="zip_code">UF</label>
                            <input type="text" class="form-control" name="state" value="{{old('state')}}" placeholder="Estado">
                        </div> 
                        <div class="form-group col-md-4">
                            <label for="zip_code">País</label>
                            <input type="text" class="form-control" name="country" value="{{old('country')}}" placeholder="País">
                        </div> 
                    </div>
                    
                    <div class="mt-2">
                        <input type="submit" class="btn btn-success" value="Salvar">
                        <a href="/customers" class="btn btn-danger">Cancelar</a>
                    </div>
            </form>
        </div>
    </div>
</div>

@endsection