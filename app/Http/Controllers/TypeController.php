<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Group;
use \App\TaskDivision; 
use \App\Pa;
use \App\Type;


class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = \App\Group::all();
        $task_divisions = \App\TaskDivision::all();
        $pas = \App\Pa::all();

        return view('tasks.create_type')->with(['groups' => $groups,'task_divisions' => $task_divisions,'pas' => $pas]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $type = new \App\Type();
        $type->type_name = $request->input('type_name');
        $type->group_id = $request->input('task_group');
        $type->task_division_id = $request->input('task_division');
        $type->pa_id = $request->input('pa_group');
        $type->save(); 
       return redirect('show-type');
       //return view('tasks.create_type');
       // return $request -> all();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $types = \App\Type::all();
        $groups = \App\Group::all();
        $task_divisions = \App\TaskDivision::all();
        $pas = \App\Pa::all();
        return view('tasks.show_type')->with(['types' => $types,'groups' => $groups,'task_divisions' => $task_divisions,'pas' => $pas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
