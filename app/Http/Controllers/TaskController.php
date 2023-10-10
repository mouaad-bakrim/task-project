<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Task::select('id','description','data_echeance','statut','nom')->get();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'data_echeance' => 'required',
            'statut'=> 'required',
            'nom'=> 'required'
        ]);
        Task::create($request->post());
        return response()->json([
            'messagee' => 'new item added successfully'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return response()->json([
            'task' => '$task'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'description' => 'required',
            'data_echeance' => 'required',
            'statut'=> 'required',
            'nom'=> 'required'
        ]);
        $task->fill($request->post())->update();
        return response()->json([
            'messagee' => 'new item update successfully'
        ]);
    }


    public function destroy(Task $task)
    {
        $task->delete();
        return response()->json([
            'messagee' => 'new item delete successfully'
        ]);
    }
}
