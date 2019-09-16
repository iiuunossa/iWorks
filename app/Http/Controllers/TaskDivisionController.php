<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\TaskDivision;

class TaskDivisionController extends Controller
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
        return view('tasks.create_task_division');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                
        $validate =[
            'task_division_name' => 'required',
            'task_division_name' => 'required|min:5',
        ];
        $messageError = [
            'task_division_name.required' => 'กรุณาใส่ชื่อหมวดงาน',
            'task_division_name.min' => 'กรุณาใส่ชื่อหมวดงานอย่างน้อย 5 ตัวอักษร', 
        ];

        $request->validate($validate,$messageError);


        $task_division = new \App\TaskDivision();
        $task_division->task_division_name = $request->input('task_division_name');
        $task_division->save(); 

        return redirect('show-division')->with('success','บันทึกข้อมูลสำเร็จ');
        //return view('tasks.create_task_division');
        //return $request -> all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $task_divisions = \App\TaskDivision::all();
        return view('tasks.show_task_division')->with(['task_divisions' => $task_divisions]);
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
