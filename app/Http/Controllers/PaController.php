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
        $validate =[
            'pa_year' => 'required',
            'pa_round' => 'required',
            'pa_group' => 'required',
            'pa_name' => 'required',
            'pa_name' => 'required|min:5',
            'pa_weight' => 'required',
        ];
        $messageError = [
            'pa_year.required' => 'กรุณาใส่ข้อมูลปีประเมินของการทำ PA',
            'pa_round.required' => 'กรุณาใส่ข้อมูลรอบการประเมินของการทำ PA',
            'pa_group.required' => 'กรุณาเลือกหมวดงานคณะฯ',
            'pa_name.required' => 'กรุณาใส่รายละเอียดงานที่ความรับผิดชอบ', 
            'pa_name.min' => 'กรุณาใส่ส่รายละเอียดงานที่ความรับผิดชอบอย่างน้อย 5 ตัวอักษร',
            'pa_weight.required' => 'กรุณาใส่ข้อมูลเปอร์เซ็นต์ของ PA', 
        ];

        $request->validate($validate,$messageError);

        $pa = new \App\Pa();
        $pa->pa_year = $request->input('pa_year');
        $pa->pa_round = $request->input('pa_round');
        $pa->group_id = $request->input('pa_group');
        $pa->pa_name = $request->input('pa_name');
        $pa->task_division_id = $request->input('task_division_id');
        $pa->pa_weight = $request->input('pa_weight');
        $pa->save(); 

        return redirect('show-pa')->with('success','บันทึกข้อมูลสำเร็จ');
        //return view('tasks.create_pa');
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
