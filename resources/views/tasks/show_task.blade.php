@extends('layouts.app')

@section('title','Show Task')

@section('content')

@include('tasks.create_task')

</br>
<div class="container bg-light" ></br>
<div><h4>แสดงรายการภาระงาน</h4></div></br>
<table class="table">
  <thead>
    <tr>
        <th scope="col" class="text-info">ภาระงาน</th>
        <th scope="col" class="text-info">วันที่</th>
        <th scope="col" class="text-info">เวลาเริ่มต้น</th>
        <th scope="col" class="text-info">เวลาสิ้นสุด</th>
        <th scope="col" class="text-info">เวลาการทำงาน</th>
        <th scope="col" class="text-info">สถานะงาน</th>
        <th></th>
    </tr>
  </thead>

  <tbody>
    @foreach($tasks as $task)
    <tr>    
        <td>{{ $task->task_group }}</td>
        <td>{{ $task->date}}</td>
        <td>{{ $task->beg_time}}</td>
        <td>{{ $task->end_time}}</td>
        <td>{{ $task->getDiffTime()}}</td>
        <td>{{ $task->status}}</td>
        <td align="right">
            <button type="button" class="btn btn-success">แก้ไข</button>
            <button type="button" class="btn btn-danger">ลบ</button>
        </td>
    </tr>
    @endforeach
  </tbody> 
</table>
</div>

@endsection