

<div class="container">

@if(isset($task_division))
    <form action="{{url('/show-division',$task_division->id)}}" method="post" enctype="multipart/form-data"> 
    <input type="hidden" name="_method" value="PATCH"> 
@else
    <form action="division" method="post" enctype="multipart/form-data">
@endif

<form action="division" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> </br> 

    @if($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{$message}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif

  @if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <ul> 
        @foreach($errors->all() as $error)
          <li> {{$error}}</li> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        @endforeach
      </ul> 
    </div> 
  @endif 

    <div><h2>หมวดงานของหน่วยงาน</h2></div><hr></br>

    <div class="form-row">
        <div class="form-group col-md-6">
			<label for="task_division_name"><b>ชื่อหมวดงาน : </b></label>
        <input type="text" class="form-control" id="task_division_name" name="task_division_name" value="{{old('task_division_name',isset($task_division) ? $task_division -> task_division_name:'')}}">
		</div>
	</div>
		<button type="submit" class="btn btn-primary">บันทึก</button>
</form>
</div>
