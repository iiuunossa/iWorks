@extends('layouts.menu')

@section('title','Show Tag')

@section('content')

@include('tasks.create_tag')

</br>
<div class="container bg-light" ></br>
<div><h4>รายการหมวดงานย่อยของงาน (Tag) </h4></div></br>

<table class="table">
  <thead class="text-white bg-dark">
    <tr>
        <th scope="col" class="text-left">ลำดับ</th>
        <th scope="col" class="text-left">ชื่อหมวดงานย่อย (Tag)</th>
        <th scope="col" class="text-left">คำอธิบาย Tag </th>
        <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach($tags as $tag)
    <tr>    
        <td>{{ $tag->id }}</td>
        <td>{{ $tag->value}}</td>
        <td>{{ $tag->description}}</td>
        
        <form method="POST" action="{{ url('/show-tag', $tag->id) }}">
        <td align="right">
          <a role="button" class="btn btn-success" href="{{url('/show-tag',$tag->id)}}"><i class="fa fa-pencil"></i></button></a>
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
