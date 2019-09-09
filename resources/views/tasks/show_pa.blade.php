@extends('layouts.app')

@section('title','Show PA')

@section('content')

@include('tasks.create_pa')

</br>
<div class="container bg-light" ></br>
<div><h4>PA รายบุคคล</h4></div></br>
<table class="table">
  <thead>
    <tr>
        <th scope="col" class="text-info text-center">ลำดับ</th>
        <th scope="col" class="text-info text-left">งานที่รับผิดชอบ</th>
        <th scope="col" class="text-info text-center">น้ำหนัก (%)</th>
        <th></th>  
    </tr>
  </thead>
  <tbody>
    @foreach($pas as $pa)
    <tr>    
        <td align="center">{{ $pa->id }}</td>
        <td>{{ $pa->pa_name}}</td>
        <td align="center">{{ $pa->pa_weight}} %</td>
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
