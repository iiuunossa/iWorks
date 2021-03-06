
<div class="container">


@if(isset($pa))
    <form action="{{url('/show-pa',$pa->id)}}" method="post" enctype="multipart/form-data"> 
    <input type="hidden" name="_method" value="PATCH"> 
@else
    <form action="pa" method="post" enctype="multipart/form-data">
@endif



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
            <label for="year"><b>ปีประเมิน : </b></label>
            <input type="number" class="form-control" id="year" name="year" value="{{old('year',isset($pa) ? $pa -> year:'')}}">
          </div>
        </div> 
        <!-- รอบการประเมิน -->
        <div class="col-sm-12 col-md-6"> 
          <div class="form-group">
            <label for="round"><b>รอบการประเมิน : </b></label><br>
            <div class="form-check-inline pt-1">
              <label class="form-check-label">
                {{-- <input type="radio" class="form-check-input" name="round" id="round" value="1" checked><label for="round">รอบที่ 1</label> --}}
                <input type="radio" class="form-check-input" name="round" id="round" value="1" checked {{ old('round') == 1 ? 'checked' : ''}}><label for="round">รอบที่ 1</label>
              </label>
            </div>
            <div class="form-check-inline">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="round" id="round2" value="2" {{ old('round') == 0 && old('round') !== null ? 'checked' : ''}}><label for="round2">รอบที่ 2</label>
              </label>
            </div>
          </div>
        </div> 
      </div>
      <div class="row">
          <!-- งานที่รับผิดชอบ (PA) -->
          <div class="col-sm-12 col-md-6">
            <div class="form-group">
              <label for="name"><b>งานที่รับผิดชอบ (PA) : </b></label>
            <textarea class="form-control" rows="3" id="name" name="name" value="{{old('name',isset($pa) ? $pa -> name:'')}}"></textarea>
            </div>
          </div>
          <!-- หมวดงานของคณะฯ  -->
          <div class="col-sm-12 col-md-6">
            <div class="form-group">
              <label><b>หมวดงานของคณะฯ : </b></label>
              @foreach($groups as $group)
                <div class="form-check">
                {{-- <input class="form-check-input" type="radio" name="group_id" id="{{ $group->id }}" value="{{ $group->id}}"> --}}
                <input class="form-check-input" type="radio" name="group_id" id="{{ $group->id }}" value="{{ old('group_id',isset($group->id) ? $group -> id:'')}}">
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
            <label for="task_divisions"><b>หมวดงานของหน่วยงาน :</b></label><br/>
            @foreach($task_divisions as $task_division)
              <label class="checkbox-inline">
                {{-- <input name="task_divisions[]" type="checkbox" value="{{ $task_division->id }}"> --}}
                <input name="task_divisions[]" type="checkbox" value="{{ old('task_divisions[]',isset($task_division->id) ? $task_division -> id:'')}}">
                {{ $task_division->task_division_name }}
              </label>
            @endforeach
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="weight"><b>น้ำหนัก (%) : </b></label>
            <input type="number" class="form-control" id="weight" name="weight" value="{{old('weight',isset($pa) ? $pa -> weight:'')}}">
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
