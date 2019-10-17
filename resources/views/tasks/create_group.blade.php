

<div class="container">

@if(isset($group))
    <form action="{{url('/show-group',$group->id)}}" method="post" enctype="multipart/form-data"> 
    <input type="hidden" name="_method" value="PATCH"> 
@else
    <form action="save" method="post" enctype="multipart/form-data">
@endif
    
<form action="group" method="post">
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

    <div><h2>หมวดงานของคณะฯ</h2></div><hr></br>

    <div class="form-row">
        <div class="form-group col-md-6">
			<label for="group_name"><b>ชื่อหมวดงาน : </b></label>
            <input type="text" class="form-control" id="group_name" name="group_name" value="{{old('group_name',isset($group) ? $group -> group_name:'')}}">
		    </div>
	  </div>
		<button type="submit" class="btn btn-primary">บันทึก</button>
</form>
</div>
