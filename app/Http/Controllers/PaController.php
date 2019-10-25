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
            'pa_year' => 'required',
            'pa_round' => 'required',
            'pa_group_id' => 'required',
            'pa_name' => 'required',
            'pa_name' => 'required|min:5',
            'pa_weight' => 'required',
        ];
        $messageError = [
            'pa_year.required' => 'กรุณาใส่ข้อมูลปีประเมินของการทำ PA',
            'pa_round.required' => 'กรุณาใส่ข้อมูลรอบการประเมินของการทำ PA',
            'pa_group_id.required' => 'กรุณาเลือกหมวดงานคณะฯ',
            'pa_name.required' => 'กรุณาใส่รายละเอียดงานที่ความรับผิดชอบ', 
            'pa_name.min' => 'กรุณาใส่ส่รายละเอียดงานที่ความรับผิดชอบอย่างน้อย 5 ตัวอักษร',
            'pa_weight.required' => 'กรุณาใส่ข้อมูลเปอร์เซ็นต์ของ PA', 
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
