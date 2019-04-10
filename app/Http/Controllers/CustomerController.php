<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Http\Requests\CustomerFormRequest;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::orderBy('name', 'asc')->paginate(5);
        return view('customer.index', compact('customers'));
    }

    public function create()
    {
       return view('customer.create');
    }

    public function store(CustomerFormRequest $request)
    {
        Customer::create($request->all());
        return redirect('/customers')->with('success','Cliente criado com sucesso');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
       $customer = Customer::findOrFail($id);
       return view('customer.edit', compact('customer'));
    }

    public function update(CustomerFormRequest $request, $id)
    {
        Customer::find($id)->update($request->all());
        return redirect('/customers')->with('success', 'Cliente salvo com sucesso');
    }

    public function destroy($id)
    {
        Customer::findOrFail($id)->delete();
        return redirect('/customers')->with('success','Cliente excluído com sucesso');
    }
}
