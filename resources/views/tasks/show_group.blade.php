@extends('layouts.app')

@section('title','Show Group')

@section('content')

@include('tasks.create_group')

</br>
<div class="container bg-light" ></br>
<div><h4>รายการหมวดงานของคณะฯ</h4></div></br>
<table class="table">
  <thead>
    <tr>
        <th scope="col" class="text-info text-center">ลำดับ</th>
        <th scope="col" class="text-info text-left">ชื่อหมวดงาน</th>
        <th></th>
    
    </tr>
  </thead>
  <tbody>
    @foreach($groups as $group)
    <tr>    
        <td align="center">{{ $group->id }}</td>
        <td>{{ $group->group_name}}</td>
        <td align="right">
        <button type="button" class="btn btn-success" align="center">แก้ไข</button>
        <button type="button" class="btn btn-danger" align="center">ลบ</button>
        </td>
    </tr>
    @endforeach
  </tbody> 
</table>
</div>

@endsection
