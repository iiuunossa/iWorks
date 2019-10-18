@extends('layouts.menu')

@section('title','Show Group')

@section('content')

@include('tasks.create_group')

</br>
<div class="container bg-light" ></br>
<div><h4>รายการหมวดงานของคณะฯ</h4></div></br>

<table class="table">
  <thead class="text-white bg-dark">
    <tr>
        <th scope="col" class="text-left">ลำดับ</th>
        <th scope="col" class="text-left">ชื่อหมวดงาน</th>
        <th></th>
    
    </tr>
  </thead>
  <tbody>
    @foreach($groups as $group)
    <tr>    
        <td>{{ $group->id }}</td>
        <td>{{ $group->group_name}}</td>
        <td align="right">
        <a role="button" class="btn btn-success" href="{{url('/show-group',$group->id)}}"><i class="fa fa-pencil"></i></button></a>
        
        <form method="POST" action="{{ url('/show-group', $group->id) }}">
				    {{ csrf_field() }}
				    {{ method_field('DELETE') }}
				    <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
				</form>

        </td>
    </tr>
    @endforeach
  </tbody> 
</table>
</div>

@endsection
