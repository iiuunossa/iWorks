

<div class="container">


@if(isset($group))
    <form action="{{url('/show-tag',$tag->id)}}" method="post" enctype="multipart/form-data"> 
    <input type="hidden" name="_method" value="PATCH"> 
@else
    <form action="tag" method="post" enctype="multipart/form-data">
@endif


<form action="tag" method="post">
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

    <div><h2>หมวดงานย่อยของงาน (Tag)</h2></div><hr></br>

    <div class="form-row">
        <div class="form-group col-md-6">
			<label for="value"><b>ชื่อหมวดงานย่อย (Tag) : </b></label>
            <input type="text" class="form-control" id="value" name="value" value="{{old('value',isset($tag) ? $tag-> value:'')}}">
		</div>
        <div class="form-group col-md-6">
            <label for="description"><b>คำอธิบาย Tag : </b></label>
            <input type="text" class="form-control" id="description" name="description" value="{{old('description',isset($description) ? $description-> description:'')}}">
        </div>
	  </div>
		<button type="submit" class="btn btn-primary">บันทึก</button>
</form>
</div>
