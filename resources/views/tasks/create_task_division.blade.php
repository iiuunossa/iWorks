
@extends('layouts.app')

@section('title','Group Division')

@section('content')
<div class="container">

<form action="save" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> </br> 

    @if($message = Session::get('success'))
      <div class="alert alert-success">
        {{$message}}
      </div>
    @endif

    @if($errors->any())
      <div class="alert alert-danger">
        <ul> 
          @foreach($errors->all() as $error)
            <li> {{$error}}</li> 
          @endforeach
        </ul> 
      </div> 
    @endif 

    <div><h2>หมวดงานของหน่วยงาน</h2></div><hr></br>

    <div class="form-row">
        <div class="form-group col-md-6">
			<label for="task_division_name"><b>ชื่อหมวดงาน : </b></label>
            <input type="text" class="form-control" id="task_division_name" name="task_division_name">
		</div>
	</div>
		<button type="submit" class="btn btn-primary">บันทึก</button>
</form>
</div>
@endsection