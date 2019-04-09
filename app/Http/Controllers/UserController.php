<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\UserGroup;

class UserController extends Controller
{

    public function index()
    {
        $users = User::with('group')->orderBy('name', 'asc')->paginate(5);
        return view('user.index', compact('users'));
    }

    public function create()
    {
        $groups = UserGroup::all();
        return view('user.create', compact('groups'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:60',
            'email' => 'required|email|unique:users',
            'password' =>'required|min:8',
            'group_id' =>'required|numeric'
        ]);
        
        $request['password'] = Hash::make($request['password']);
        
        User::create($request->all());
   
        return redirect('/users')->with('success','Usuário criado com sucesso');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $groups = UserGroup::all();
        return view('user.edit', compact('user', 'groups'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:60',
            'email' => 'required|email',
            'group_id' =>'required|numeric'
        ]);
        
        $request['password'] = Hash::make($request['password']);
        
        User::find($id)->update($request->all());
   
        return redirect('/users')->with('success','Usuário salvo com sucesso');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/users')->with('success','Usuário excluído com sucesso');
    }
}
