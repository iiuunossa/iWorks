<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Task;
use \App\Type;

class TaskController extends Controller
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
        $types = \App\Type::all();
        $tasks = \App\Task::all();
        return view('tasks.create_task')->with(['tasks' => $tasks,'types' => $types]);

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
            'date' => 'required',
            'beg_time' => 'required',
            'end_time' => 'required',
            'type_id' => 'required',
            'detail' => 'required',
            'detail' => 'required|min:5',
        ];
        $messageError = [
            'date.required' => 'กรุณาใส่วันที่ทำงาน',
            'beg_time.required' => 'กรุณาใส่เวลาเริ่มต้น',
            'end_time.required' => 'กรุณาใส่เวลาสิ้นสุด',
            'type_id.required' => 'กรุณาเลือกหมวดงาน',
            'detail.required' => 'กรุณาใส่รายละเอียด',
            'detail.min' => 'กรุณาใส่รายละเอียดงานอย่างน้อย 5 ตัวอักษร', 
        ];

        $request->validate($validate,$messageError);
        
        $task = new \App\Task();
        $task->type_id = $request->input('type_id');
        $task->detail = $request->input('detail');
        $task->date = $request->input('date');
        $task->beg_time = $request->input('beg_time');
        $task->end_time = $request->input('end_time');
        $task->status =$request->input('status');
        $task->save(); 


        return redirect('show-task')->with('success','บันทึกข้อมูลสำเร็จ');
       // return view('tasks.create_task');
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
        $types = \App\Type::all();
        $tasks = \App\Task::all();  
        return view('tasks.show_task')->with(['tasks' => $tasks,'types' => $types]);
        
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
        $tasks = Task::find($id)->update($request->all());
        return redirect()->back()->with('success','ดำเนินการเรียบร้อย');
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
