
@extends('layouts.app')

@section('title','Form Task')

@section('content')
<div class="container">

<form action="save" method="post">
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

    <div><h2>ข้อมูลภาระงาน</h2></div><hr></br>
        <div class="form-group row">
            <label for="type" class="col-sm-2 col-form-label"><b>หมวดงาน : </b></label>
            <div class="col-sm-10">
                <select class="form-control" id="type" name="type">
                  <option value="" hidden select>เลือกหมวดงาน</option>
                    <option value="1">บริหารจัดการ</option>
                    <option value="2">พัฒนาระบบ</option>
                    <option value="3">MA</option>
                    <option value="4">IT Support</option>
                    <option value="5">ครุภัณฑ์</option>
                </select>
            </div>
        </div>


    <div class="form-group row">
      <label for="detail" class="col-lg-2 col-md-2 col-sm-2 col-form-lable"><b>รายละเอียดงาน : </b></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="detail" name="detail">
      </div>
    </div>

    <div class="form-group row">
    <label for="detail" class="col-lg-2 col-md-2 col-sm-2 col-form-lable"><b>วัน/เวลาที่เริ่มต้น : </b></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="detail" name="detail">
    </div>
    </div>

    <div class="form-group row">
      <label for="detail" class="col-lg-2 col-md-2 col-sm-2 col-form-lable"><b>วัน/เวลาที่สิ้นสุด : </b></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="detail" name="detail">
      </div>
    </div>

    <div class="form-group row">
      <label for="name" class="col-sm-2 col-form-label"><b>เวลาทำงาน : </b></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
      </div>
    </div>

    <fieldset class="form-group">
      <div class="row">
        <legend class="col-form-label col-sm-2 pt-0"><b>สถานะงาน : </b></legend>
        <div class="col-sm-10">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="status1" value="0" checked>
            <label class="form-check-label" for="status1">
              On going
            </label>  
            
          </div>
         
          <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="status2" value="1">
            <label class="form-check-label" for="status2">
              Complete
            </label>
          </div>
        </div>
      </div>
    </fieldset>
    
    <div class="form-group row" align="center">
      <div class="col-sm-5">
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </div>
    

</form>
</div>
@endsection