@extends('layouts.app')

@section('title','Show Task')

@section('content')

@include('tasks.create_task')

</br>
<div class="container bg-light" ></br>
<div><h4>แสดงรายการภาระงาน</h4></div></br>
<table class="table">
  <thead class="text-white bg-dark">
    <tr>
        <th scope="col" class="text-left">ลำดับ</th>
        <th scope="col">ภาระงาน</th>
        <th scope="col">วันที่</th>
        <th scope="col">เวลาเริ่มต้น</th>
        <th scope="col">เวลาสิ้นสุด</th>
        <th scope="col">เวลาการทำงาน</th>
        <th scope="col">สถานะงาน</th>
        <th></th>
    </tr>
  </thead>

  <tbody>
    @foreach($tasks as $task)
    <tr>
        <td>{{ $task->id }}</td>    
        <td>{{ $task->type->type_name}}</td>
        <td>{{date('d M, Y', strtotime($task->date))}}</td>
        <td>{{ $task->beg_time}}</td>
        <td>{{ $task->end_time}}</td>
        <td>{{ $task->getDiffTime()}}</td>
        <th> {{ $task->status == 0 ? 'Ongoing' : 'Completed' }}</th>
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