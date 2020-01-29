<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Tag;

class TagController extends Controller
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
        return view('tasks.create_tag');
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
            'value' => 'required',
            'description' => 'required',
        ];
        $messageError = [
            'value.required' => 'กรุณาใส่ชื่อ Tag',
            'descriptiion' => 'กรุณาใส่คำอธิบาย',
        ];
    
        $request->validate($validate,$messageError);

        $tag = new \App\Tag();
        $tag->value = $request->input('value');
        $tag->description = $request->input('description');
        $tag->save(); 

        return redirect('show-tag')->with('success','บันทึกข้อมูลสำเร็จ');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $tags = \App\Tag::all();
        $descriptions = \App\Tag::all();

        return view('tasks.show_tag')->with(['tags' => $tags,'descriptions' => $descriptions]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tags = \App\Tag::all(); 
        $tag = \App\Tag::find($id); 
        
        return view('tasks.show_tag')->with(['tags' => $tags, 'tag' => $tag]); 
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
        $tags = Tag::find($id)->update($request->all());
        return redirect('show-tag')->with('success','แก้ไขข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag=Tag::find($id);
        $tag->delete();
        return redirect('show-tag')->with('success','ลบข้อมูลเรียบร้อยแล้ว');
    }
}
