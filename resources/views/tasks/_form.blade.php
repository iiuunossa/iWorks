<div class="container">

<form action="create" method="post">
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

    <div><h2>ข้อมูลภาระงาน</h2></div><hr></br>

    <div class="form-group row">
    <label for="date" class="col-lg-2 col-md-2 col-sm-2 col-form-lable"><b>วันที่ทำงาน : </b></label>
    <div class="col-sm-4">
      <input type="date" class="form-control" id="date" name="date">
    </div>
    </div>


    <div class="form-group row">
    <label for="beg_time" class="col-lg-2 col-md-2 col-sm-2 col-form-lable"><b>เวลาที่เริ่มต้น : </b></label>
    <div class="col-sm-4">
      <input type="time" class="form-control" id="beg_time" name="beg_time">
    </div>
    </div>

    <div class="form-group row">
      <label for="end_time" class="col-lg-2 col-md-2 col-sm-2 col-form-lable"><b>เวลาที่สิ้นสุด : </b></label>
      <div class="col-sm-4">
        <input type="time" class="form-control" id="end_time" name="end_time">
      </div>
    </div>

    <div class="form-group row">
            <label for="type_id" class="col-lg-2 col-md-2 col-sm-2 col-form-lable"><b>หมวดงาน : </b></label>
            <div class="col-sm-4">
                <select class="form-control" id="type_id" name="type_id">
                  <option value="" hidden select>เลือกหมวดงาน</option>

                  @foreach($types as $type)
                    <option value="{{$type['id']}}">{{$type['type_name']}}</option>
                  @endforeach


                </select>
            </div>
        </div>


    <div class="form-group row">
      <label for="detail" class="col-lg-2 col-md-2 col-sm-2 col-form-lable"><b>รายละเอียดงาน : </b></label>
      <div class="col-sm-6">
        <textarea class="form-control" rows="5" id="detail" name="detail"></textarea>
      </div>
    </div>

    <fieldset class="form-group">
      <div class="row">
        <legend class="col-form-label col-sm-2 pt-0"><b>สถานะงาน : </b></legend>
        <div class="col-sm-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="status1" value="0" checked>
            <label class="form-check-label" for="status1">
              อยู่ระหว่างดำเนินการ
            </label>  
            
          </div>
         
          <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="status2" value="1">
            <label class="form-check-label" for="status2">
              ดำเนินการเรียบร้อย
            </label>
          </div>
        </div>
      </div>
    </fieldset>

    <div class="form-group row" align="center">
      <div class="col-sm-5">
        <button type="submit" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
</form>
</div>
