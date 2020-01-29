<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Pa;

class PaController extends Controller
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
        return view('tasks.create_pa')->with(['groups' => $groups]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        $validate =[
            'year' => 'required',
            'round' => 'required',
            'group_id' => 'required',
            'name' => 'required',
            'name' => 'required|min:5',
            'weight' => 'required',
        ];
        $messageError = [
            'year.required' => 'กรุณาใส่ข้อมูลปีประเมินของการทำ PA',
            'round.required' => 'กรุณาใส่ข้อมูลรอบการประเมินของการทำ PA',
            'group_id.required' => 'กรุณาเลือกหมวดงานคณะฯ',
            'name.required' => 'กรุณาใส่รายละเอียดงานที่ความรับผิดชอบ', 
            'name.min' => 'กรุณาใส่ส่รายละเอียดงานที่ความรับผิดชอบอย่างน้อย 5 ตัวอักษร',
            'weight.required' => 'กรุณาใส่ข้อมูลเปอร์เซ็นต์ของ PA', 
        ];

        $request->validate($validate,$messageError);

        $pa = Pa::create($request->all());
        $pa->taskDivisions()->sync($request->task_divisions);
        return redirect('show-pa')->with('success','บันทึกข้อมูลสำเร็จ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $groups = \App\Group::all();
        $task_divisions = \App\TaskDivision::all();
        $pas = \App\Pa::all();
        return view('tasks.show_pa')->with(['pas' => $pas, 'groups' => $groups, 'task_divisions' => $task_divisions]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pas = \App\Pa::all(); 
        $pa = \App\Pa::find($id); 
        
        return view('tasks.show_pa')->with(['pas' => $pas, 'pa' => $pa]);  
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
        $pas = Pa::find($id)->update($request->all());
        return redirect('show-pa')->with('success','แก้ไขข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pa=Pa::find($id);
        $pa->delete();
        return redirect('show-pa')->with('success','ลบข้อมูลเรียบร้อยแล้ว');
    }
}
