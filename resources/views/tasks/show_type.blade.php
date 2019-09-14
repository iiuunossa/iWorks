@extends('layouts.app')

@section('title','Show Type')

@section('content')

@include('tasks.create_type')

</br>
<div class="container bg-light" ></br>
<div><h4>PA รายบุคคล</h4></div></br>
<table class="table">
  <thead class="text-white bg-dark">
    <tr>
        <th scope="col" class="text-left">ลำดับ</th>
        <th scope="col" class="text-left">ชื่อหมวดงาน</th>
        <th scope="col" class="text-left">หมวดงานคณะฯ</th>
        <th scope="col" class="text-left">หมวดงานหน่วยงานฯ</th>
        <th scope="col" class="text-left">หมวดงานตาม PA</th>
        <th></th>  
    </tr>
  </thead>
  <tbody>
    @foreach($types as $type)
    <tr>    
        <td>{{ $type->id }}</td>
        <td>{{ $type->name}}</td>
        <td>{{ $type->group_id}}</td>
        <td>{{ $type->task_division_id}}</td>
        <td>{{ $type->task_id}}</td>
        
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
