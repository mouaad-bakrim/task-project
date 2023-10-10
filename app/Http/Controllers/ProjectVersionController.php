<?php

namespace App\Http\Controllers;

use App\Models\ProjectVersion;
use Illuminate\Http\Request;

class ProjectVersionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ProjectVersion::select('id','description','date_publication','numer_version')->get();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
             'description' => 'required',
            'date_publication' => 'required',
            'numer_version'=> 'required'
        ]);
        ProjectVersion::create($request->post());
        return response()->json([
            'messagee' => 'new item added successfully'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(ProjectVersion $projectVersion)
    {
        return response()->json([
            'projectVersion' => '$projectVersion'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProjectVersion $projectVersion)
    {
        $request->validate([
            'description' => 'required',
            'date_publication' => 'required',
            'numer_version'=> 'required'
        ]);
        $projectVersion->fill($request->post())->update();
        return response()->json([
            'messagee' => 'new item update successfully'
        ]);
    }


    public function destroy(ProjectVersion $projectVersion)
    {
        $projectVersion->delete();
        return response()->json([
            'messagee' => 'new item delete successfully'
        ]);
    }
}
