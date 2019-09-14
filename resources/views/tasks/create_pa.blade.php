
<div class="container">

<form action="pa" method="post">
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

    <div><h2>หมวดงานรายบุคคล (PA)</h2></div><hr></br>

    <div class="form-row">
        <div class="form-group col-md-3">
			    <label for="pa_year"><b>ปีประเมิน : </b></label>
          <input type="number" class="form-control" id="pa_year" name="pa_year">
		    </div>
        <div class="form-group col-md-3">
			    <label for="pa_round"><b>รอบประเมิน : </b></label>
          <input type="number" class="form-control" id="pa_round" name="pa_round">
		    </div>
	  </div>
    
    <div class="form-row">
        <div class="form-group col-md-6">
			    <label for="pa_name"><b>งานที่รับผิดชอบ (PA) : </b></label>
          <textarea class="form-control" rows="5" id="pa_name" name="pa_name"></textarea>
		    </div>
	  </div>

    <div class="form-row">
        <div class="form-group col-md-6">
			<label for="pa_weight"><b>น้ำหนัก (%) : </b></label>
            <input type="number" class="form-control" id="pa_weight" name="pa_weight">
		    </div>
    </div>
		<button type="submit" class="btn btn-primary">บันทึก</button>
</form>
</div>
