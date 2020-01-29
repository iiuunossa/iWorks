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
        <td>{{ $pa->round}}/ {{$pa->year}}</td>
        <td>{{ $pa->name}}</td>
        <td>
          <ul>
            @foreach($pa->taskDivisions as $task)
              <li>{{ $task->task_division_name }}</li>
            @endforeach
          </ul>
        </td>
        <td align="center">{{ $pa->weight}} %</td>

        <form method="POST" action="{{ url('/show-pa', $pa->id) }}">
        <td align="right">
            <a role="button" class="btn btn-success" href="{{url('/show-pa',$pa->id)}}"><i class="fa fa-pencil"></i></button></a>
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
        </td>
        </form>
    </tr>
    @endforeach
  </tbody> 
</table>
</div>

@endsection
