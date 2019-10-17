<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Group;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth');
    }


    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create_group');
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
            'group_name' => 'required',
            'group_name' => 'required|min:5',
        ];
        $messageError = [
            'group_name.required' => 'กรุณาใส่ชื่อหมวดงาน',
            'group_name.min' => 'กรุณาใส่ชื่อหมวดงานอย่างน้อย 5 ตัวอักษร', 
        ];

        $request->validate($validate,$messageError);
        
            
        $group = new \App\Group();
        $group->group_name = $request->input('group_name');
        $username = \Auth::id();
        $group->user_id = $username;
        $group->save(); 

        return redirect('show-group')->with('success','บันทึกข้อมูลสำเร็จ');
       // return view('tasks.show_group');
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
  
        $groups = \App\Group::all();
        return view('tasks.show_group')->with(['groups' => $groups]);

       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $groups = \App\Group::all(); 
        $group = \App\Group::find($id); 
        
        return view('tasks.show_group')->with(['groups' => $groups, 'group' => $group]);  

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
        $groups = Group::find($id)->update($request->all());
        return redirect()->back()->with('success','แก้ไขข้อมูลเรียบร้อยแล้ว');
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
