<?php

namespace App\Http\Controllers;

use App\Flag;
use Illuminate\Http\Request;

class FlagController extends Controller
{
    
    public function index()
    {
        $flags=Flag::all();

        return view('flags.index',['flags'=>$flags]);
    }

    public function create()
    {
        return view('flags/create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'label' => 'required|max:255',
        ]);
        $show = Flag::create($validatedData);
   
        return redirect('/flags')->with('success', 'Task is successfully saved');
    }

    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $flags = Flag::findOrFail($id);

        return view('flags/edit', ['flags'=>$flags]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'label' => 'required|max:255',
        ]);
        Flag::whereId($id)->update($validatedData);

        return redirect('/flags')->with('success', 'Task Data is successfully updated');
    }

   
    public function destroy($id)
    {
        $flags = Flag::findOrFail($id);
        $flags->delete();

        return redirect('/flags')->with('success', 'Task Data is successfully deleted');
    }
}
