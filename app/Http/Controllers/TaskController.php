<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Task;
use \App\Type;
use App\Tag;

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
        return view('tasks.create_task')->with(['tasks' => $tasks]);

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
            'task_id' => 'required',
            'detail' => 'required',
            'detail' => 'required|min:5',
        ];
        $messageError = [
            'date.required' => 'กรุณาใส่วันที่ทำงาน',
            'beg_time.required' => 'กรุณาใส่เวลาเริ่มต้น',
            'end_time.required' => 'กรุณาใส่เวลาสิ้นสุด',
            'task_id.required' => 'กรุณาเลือกหมวดงาน',
            'detail.required' => 'กรุณาใส่รายละเอียด',
            'detail.min' => 'กรุณาใส่รายละเอียดงานอย่างน้อย 5 ตัวอักษร', 
        ];

        $request->validate($validate,$messageError);
        
        $tags = $this->tags($request->tags);

        $task = Task::create($request->all());
        $task->tags()->sync($tags);

        return redirect('show-task')->with('success','บันทึกข้อมูลสำเร็จ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $pas = \App\Pa::all();
        $tasks = \App\Task::all();  
        $task_divisions = \App\TaskDivision::all();
        $tags = Tag::all();
        return view('tasks.show_task')->with(['tasks' => $tasks,'pas' => $pas, 'task_divisions' => $task_divisions, 'tags' => $tags]);
        
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

    protected function tags($data)
    {
        $getTags = json_decode($data, true);
        $getTagsArray = [];
        foreach($getTags as $getTag)
        {
            $getTagsArray[] = $getTag['id'];
        }
        return $getTagsArray;
    }
}
