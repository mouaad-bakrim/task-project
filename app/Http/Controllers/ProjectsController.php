<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{

    public function index()
    {
        $Project= Project::all();
        return response()->json($Project);
    }



    public function store(Request $request)
    {
        $Project = new Project;
        $Project->nom       = $request->nom;
        $Project->description      = $request->description;
        $Project->date_debut      = $request->date_debut;
        $Project->date_fin      = $request->date_fin;
        $Project->github_link      = $request->github_link;
        $Project->statut      = $request->statut;

        $Project->save();
        return response()->json(['message'=>"Project Add Successfully...", 'Project'=>$Project,"statusCode"=>200]);
    }


    public function show(Project $project)
    {
        return response()->json($project);
    }



    public function update(Request $request, Project $Project)
    {
        $Project->update($request->all());
        return response()->json(['message'=>"Project Update Successfully...", 'Project'=>$Project,"statusCode"=>200]);
    }


    public function destroy(Project $project)
    {
        $project->delete();
        return response()->json([
            'messagee' => 'new item delete successfully'
        ]);
    }
}
