
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
      <div class="row">
        <div class="col-12">
          <h2>หมวดงานรายบุคคล (PA)</h2> 
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <hr>
        </div>
      </div>
      <div class="row">
        <!-- ปีประเมิน -->
        <div class="col-sm-12 col-md-6"> 
          <div class="form-group">
            <label for="pa_year"><b>ปีประเมิน : </b></label>
            <input type="number" class="form-control" id="pa_year" name="pa_year">
          </div>
        </div> 
        <!-- รอบการประเมิน -->
        <div class="col-sm-12 col-md-6"> 
          <div class="form-group">
            <label for="pa_round"><b>รอบการประเมิน : </b></label><br>
            <div class="form-check-inline pt-1">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="pa_round" id="pa_round" value="1" checked><label for="pa_round">รอบที่ 1</label>
              </label>
            </div>
            <div class="form-check-inline">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="pa_round" id="pa_round2" value="2"><label for="pa_round2">รอบที่ 2</label>
              </label>
            </div>
          </div>
        </div> 
      </div>
      <div class="row">
          <!-- งานที่รับผิดชอบ (PA) -->
          <div class="col-sm-12 col-md-6">
            <div class="form-group">
              <label for="pa_name"><b>งานที่รับผิดชอบ (PA) : </b></label>
              <textarea class="form-control" rows="3" id="pa_name" name="pa_name"></textarea>
            </div>
          </div>
          <!-- หมวดงานของคณะฯ  -->
          <div class="col-sm-12 col-md-6">
            <div class="form-group">
              <label><b>หมวดงานของคณะฯ : </b></label>
              @foreach($groups as $group)
                <div class="form-check">
                <input class="form-check-input" type="radio" name="pa_group_id" id="{{ $group->id }}" value="{{ $group->id}}">
                  <label class="form-check-label" for="{{ $group->id }}"> {{ $group->group_name }}</label>
                </div>
              @endforeach
            </div>
          </div>  
      </div>
      <div class="row">
        <!-- น้ำหนัก (%)  -->
        <div class="col-md-6">
          <div class="form-group">
            <label for="pa_weight"><b>หมวดงานของหน่วยงาน :</b></label><br/>
            @foreach($task_divisions as $task_division)
              <label class="checkbox-inline">
                <input name="task_divisions[]" type="checkbox" value="{{ $task_division->id }}">
                {{ $task_division->task_division_name }}
              </label>
            @endforeach
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="pa_weight"><b>น้ำหนัก (%) : </b></label>
            <input type="number" class="form-control" id="pa_weight" name="pa_weight">
          </div>
        </div> 
      </div>
      <div class="row">
        <div class="col-12">
          <button type="submit" class="btn btn-primary">บันทึก</button>
        </div>
      </div>
  </form>
</div>
