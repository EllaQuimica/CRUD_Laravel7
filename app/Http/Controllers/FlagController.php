<?php

namespace App\Http\Controllers;

use App\Flag;
use Illuminate\Http\Request;

class FlagController extends Controller
{
    
    public function index()
    {
        $flags=Flag::all();
        return view('flag.index',['flags'=>$flags]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'label' => 'required|max:255',
        ]);
        $show = Flag::create($validatedData);
   
        return redirect('/flags')->with('success', 'Task is successfully saved');
    }

    public function show(Flag $flag)
    {
        //
    }

    
    public function edit(Flag $flag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Flag  $flag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flag $flag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Flag  $flag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flag $flag)
    {
        //
    }
}
