<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
   
    public function index()
    {
        $taskslist = Task::all();

        return view('index', compact('taskslist'));
    }

    public function create()
    {
        return view('create');
    }

   
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'task_name' => 'required|max:255',
            'description' => 'required',
            'time' => 'required|numeric',
        ]);
        $show = Task::create($validatedData);
   
        return redirect('/tasks')->with('success', 'Task is successfully saved');
    }

   
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $taskslist = Task::findOrFail($id);

        return view('edit', compact('taskslist'));
    }

  
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'task_name' => 'required|max:255',
            'description' => 'required',
            'time' => 'required|numeric',
        ]);
        Task::whereId($id)->update($validatedData);

        return redirect('/tasks')->with('success', 'Task Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $taskslist = Task::findOrFail($id);
        $taskslist->delete();

        return redirect('/tasks')->with('success', 'Task Data is successfully deleted');
    }

    
}
