
<div class="container">

<form action="pa" method="post">
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

    <div><h2>หมวดงานรายบุคคล (PA)</h2></div><hr></br>

    <div class="form-row">
      <div class="col-sm-12 col-md-2"> 
        <div class="form-group">
			    <label for="pa_year"><b>ปีประเมิน : </b></label>
          <input type="number" class="form-control" id="pa_year" name="pa_year">
        </div>
      </div>

      <div class="col-sm-12 col-md-6"> 
        <div class="form-group">
          <label for="pa_round"><b>รอบการประเมิน : </b></label><br>
            <div class="form-check-inline">
              <label class="form-check-label">
              <input type="radio" class="form-check-input" name="pa_round" id="pa_round"><label for="pa_round">รอบที่ 1</label>
              </label>
            </div>
              <div class="form-check-inline">
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="pa_round" id="pa_round2"><label for="pa_round2">รอบที่ 2</label>
                </label>
              </div>
          </div>
      </div>
    </div>



    <div class="form-row">
        <div class="form-group col-md-6">
			    <label for="pa_name"><b>งานที่รับผิดชอบ (PA) : </b></label>
          <textarea class="form-control" rows="5" id="pa_name" name="pa_name"></textarea>
		    </div>

      <fieldset class="form-group">
      <div class="row">
        <legend class="col-form-label col-sm-12 pt-0"><b>หมวดงานของคณะฯ : </b></legend>
        <div class="col-sm-12">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="group" id="group1" value="0" checked>
            <label class="form-check-label" for="group1">
            งานตามพันธกิจ
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="group" id="group2" value="1">
            <label class="form-check-label" for="group2">
            งานตามตำแหน่ง
            </label>
          </div>
        </div>
      </div>
      </fieldset>
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
