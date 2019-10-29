@extends('layouts.menu')

@section('title','Show PA')

@section('content')

@include('tasks.create_pa')

</br>
<div class="container bg-light" ></br>
<div><h4>PA รายบุคคล</h4></div></br>
<table class="table">
  <thead class="text-white bg-dark">
    <tr>
        <th scope="col" class="text-left">ลำดับ</th>
        <th scope="col" class="text-left">รอบการประเมิน</th>
        <th scope="col" class="text-left">งานที่รับผิดชอบ</th>
        <th scope="col" class="text-left">หมวดงานของหน่วยงาน</th>
        <th scope="col" class="text-center">น้ำหนัก (%)</th>
        <th></th>  
    </tr>
  </thead>
  <tbody>
    @foreach($pas as $pa)
    <tr>    
        <td>{{ $pa->id }}</td>
        <td>{{$pa->pa_round}}/ {{$pa->pa_year}}</td>
        <td>{{ $pa->pa_name}}</td>
        <td>
          <ul>
            @foreach($pa->taskDivisions as $task)
              <li>{{ $task->task_division_name }}</li>
            @endforeach
          </ul>
        </td>
        <td align="center">{{ $pa->pa_weight}} %</td>
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
