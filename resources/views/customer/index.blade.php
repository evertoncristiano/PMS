@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="container">

        <div class="row mb-3">
            <h1 class="h4">Clientes</h1>
            <div class="ml-2">
            <a  href="/customers/create" class="btn btn-sm btn-outline-secondary">Novo Cliente</a> 
        </div>
        </div>
        
        
        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif

        <div class="row">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Cnpj</th>
                            <th scope="col">Cidade</th>
                            <th scope="col" colspan=2 class="ml-auto">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                        <tr>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->cnpj}}</td>
                            <td>{{$customer->city}}</td>
                            <td>
                                <form action="{{ route('customers.destroy', $customer->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('customers.edit',$customer->id)}}" class="btn btn-sm btn-dark">Editar</a>
                                    <button class="btn btn-sm btn-danger" type="submit">Excluir</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $customers->links() }}
                </div>
        </div>
    </div>
</div>
@endsection