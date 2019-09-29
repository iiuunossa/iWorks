@extends('layouts.menu')

@section('title','Show Task_Division')

@section('content')

@include('tasks.create_task_division')

</br>
<div class="container bg-light" ></br>
<div><h4>รายการหมวดงานของหน่วยงาน</h4></div></br>
<table class="table">
  <thead class="text-white bg-dark">
    <tr>
        <th scope="col" class="text-left">ลำดับ</th>
        <th scope="col" class="text-left">ชื่อหมวดงาน</th>
        <th></th>
    
    </tr>
  </thead>
  <tbody>
    @foreach($task_divisions as $task_division)
    <tr>    
        <td>{{ $task_division->id }}</td>
        <td>{{ $task_division->task_division_name}}</td>
        <td align="right">
        <button type="button" class="btn btn-success"><i class="fa fa-pencil"></i></button>
        <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
        </td>
    </tr>
    @endforeach
  </tbody> 
</table>
</div>

@endsection
