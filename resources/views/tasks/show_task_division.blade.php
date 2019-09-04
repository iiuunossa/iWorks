@extends('layouts.app')

@section('title','Show Task_Division')

@section('content')

@include('tasks.create_task_division')

</br>
<div class="container bg-light" ></br>
<div><h4>รายการหมวดงานของหน่วยงาน</h4></div></br>
<table class="table">
  <thead>
    <tr>
        <th scope="col" class="text-info text-center">ลำดับ</th>
        <th scope="col" class="text-info text-center">ชื่อหมวดงาน</th>
        <th scope="col" class="text-info">แก้ไข</th>
        <th scope="col" class="text-info">ลบ</th>
    
    </tr>
  </thead>
  <tbody>
    @foreach($task_divisions as $task_division)
    <tr>    
        <td align="center">{{ $task_division->id }}</td>
        <td>{{ $task_division->task_division_name}}</td>
        <td>
            <button type="button" class="btn btn-success">แก้ไข</button>
        </td>
        <td>
        <button type="button" class="btn btn-danger">ลบ</button>
        </td>
    </tr>
    @endforeach
  </tbody> 
</table>
</div>

@endsection
