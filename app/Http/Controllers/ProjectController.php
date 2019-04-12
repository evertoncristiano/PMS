<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Customer;
use App\Http\Requests\ProjectFormRequest;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = Project::with('customer')->orderBy('deliveryDate', 'asc')->get();
        return view('project.index', compact('projects'));
    }


    public function create()
    {
        $customers = Customer::orderBy('name')->get();
        return view('project.create', compact('customers'));
    }


    public function store(ProjectFormRequest $request)
    {
        Project::create($request->all());
        return redirect('/projects')->with('success','Projeto criado com sucesso');
    }


    public function show($id)
    {
        $project = Project::with('users')->findOrFail($id);
        return view('project.show', compact('project'));
    }


    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $customers = Customer::all();
        return view('project.edit', compact('project','customers'));
    }


    public function update(ProjectFormRequest $request, $id)
    {
        Project::findOrFail($id)->update($request->all());
        return redirect('/projects/'.$id)->with('success', 'Projeto salvo com sucesso');
    }


    public function destroy($id)
    {
        $project = Project::findOrFail($id)->delete();
        return redirect('/projects')->with('success','Projeto excluído com sucesso');
    }

    public function removeUser($projectId, $userId){
        
    }
}
