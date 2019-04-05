<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customers.index');
    }

    public function show(Request $request)
    {
        return "Show the item {$request->id}";
    }

    public function edit(Request $request)
    {
        return "edit the item {$request->id}";
    }

    public function delete(Request $request)
    {
        return "delete the item {$request->id}";
    }
}
