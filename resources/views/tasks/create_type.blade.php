
<div class="container">

<form action="type" method="post">
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

    <div><h2>จัดการข้อมูลภาระงาน</h2></div><hr></br>


    <div class="form-group row">
        <label for="type_name" class="col-lg-2 col-md-2 col-sm-2 col-form-lable"><b>ชื่อหมวดงาน : </b></label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="type_name" name="type_name">
        </div>
    </div>

    <div class="form-group row">
            <label for="task_group" class="col-lg-2 col-md-2 col-sm-2 col-form-lable"><b>หมวดงานคณะฯ : </b></label>
            <div class="col-sm-4">
                <select class="form-control" id="task_group" name="task_group">
                  <option value="" hidden select>เลือกหมวดงาน</option>
              
                  @foreach($groups as $group)
                  <option value="{{$group['id']}}">{{$group['group_name']}}</option>
                  @endforeach

                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="task_division" class="col-lg-2 col-md-2 col-sm-2 col-form-lable"><b>หมวดงานหน่วยงานฯ : </b></label>
            <div class="col-sm-4">
                <select class="form-control" id="task_division" name="task_division">
                  <option value="" hidden select>เลือกหมวดงาน</option>

                  @foreach($task_divisions as $task_division)
                    <option value="{{$task_division['id']}}">{{$task_division['task_division_name']}}</option>
                  @endforeach

                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="pa_group" class="col-lg-2 col-md-2 col-sm-2 col-form-lable"><b>หมวดงานตาม PA : </b></label>
            <div class="col-sm-4">
                <select class="form-control" id="pa_group" name="pa_group">
                  <option value="" hidden select>เลือกหมวดงาน</option>
                  
                  @foreach($pas as $pa)
                    <option value="{{$pa['id']}}">{{$pa['pa_name']}}</option>
                  @endforeach

                </select>
            </div>
        </div>
	
        <div class="form-group row" align="center">
      <div class="col-sm-5">
        <button type="submit" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
</form>
</div>

