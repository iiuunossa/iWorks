

<div class="container">

<form action="group" method="post">
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

    <div><h2>หมวดงานของคณะฯ</h2></div><hr></br>

    <div class="form-row">
        <div class="form-group col-md-6">
			<label for="group_name"><b>ชื่อหมวดงาน : </b></label>
            <input type="text" class="form-control" id="group_name" name="group_name">
		</div>
	</div>
		<button type="submit" class="btn btn-primary">บันทึก</button>
</form>
</div>
