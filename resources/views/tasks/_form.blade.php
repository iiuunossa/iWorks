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

    <div class="form-row">
      <h2>ข้อมูลภาระงาน</h2>
    </div><hr>
    <div class="form-row">
      <div class="col-12">
        <div class="form-group row">
            <label for="date" class="col-sm-2 col-md-2 col-lg-2 col-form-lable"><b>วันที่ทำงาน : </b></label>
            <div class="col-sm-10 col-md-4">
              <input type="date" class="form-control" id="date" name="date">
            </div>
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-12">
          <div class="form-group row">
            <label for="beg_time" class="col-sm-2 col-md-2 col-lg-2 col-form-lable"><b>เวลาที่เริ่มต้น : </b></label>
            <div class="col-sm-12 col-md-4">
              <input type="time" class="form-control" id="beg_time" name="beg_time">
            </div>
          </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-12">
          <div class="form-group row">
            <label for="end_time" class="col-sm-2 col-md-2 col-lg-2 col-form-lable"><b>เวลาที่สิ้นสุด : </b></label>
            <div class="col-sm-12 col-md-4">
              <input type="time" class="form-control" id="end_time" name="end_time">
            </div>
          </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-12">
          <div class="form-group row">
              <label for="type_id" class="col-sm-2 col-md-2 col-lg-2 col-form-lable"><b>หมวดงาน (หน่วยงาน) : </b></label>
              <div class="col-sm-4">
                  <select class="form-control" id="task_id" name="task_id">
                    <option value="" hidden select>เลือกหมวดงาน</option>
                    @foreach($task_divisions as $task_division)
                      <option value="{{$task_division->id}}">{{$task_division->task_division_name}}</option>
                    @endforeach
                  </select>
              </div>
          </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-12">
          <div class="form-group row">
            <label for="detail" class="col-sm-2 col-md-2 col-lg-2 col-form-lable"><b>รายละเอียดงาน : </b></label>
            <div class="col-sm-6">
              <textarea class="form-control" rows="5" id="detail" name="detail"></textarea>
            </div>
          </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-12">
          <div class="form-group row">
            <label for="tags" class="col-sm-2 col-md-2 col-lg-2 col-form-lable"><b>Tags : </b></label>
            <div class="col-sm-6">
              <input class="form-control" name='tags' id ="tags" placeholder="Try to add tags from the list">
            </div>
          </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-12">
        
      </div>
    </div>
    <div class="form-row">
      <div class="col-12">
          <div class="form-group row">
            <label for="status" class="col-sm-2 col-md-2 col-lg-2 col-form-lable"><b>วันที่ทำงาน : </b></label>
            <div class="col-sm-12 col-md-4">
              <div class="form-check-inline">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="status" value="0">อยู่ระหว่างดำเนินการ
                </label>
              </div>
              <div class="form-check-inline">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="status" value="1">ดำเนินการเรียบร้อย
                </label>
              </div>
            </div>
          </div>
      </div>  
    </div>    
    <div class="form-row">
      <div class="col-sm-5">
          <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">บันทึก</button>
          </div>
      </div>
    </div>
  </div>
</form>
@section('extra-script')
<script> 
  var input = document.querySelector('input[name=tags]'),
  tagify = new Tagify(input, {
      whitelist: @json($tags),
      enforceWhitelist: true,
  });
  // tagify.addTags();
</script>
@endsection