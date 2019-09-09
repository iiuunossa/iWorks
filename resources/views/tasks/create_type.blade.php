@extends('layouts.app')

@section('title','Show Type')

@section('content')

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

    <div><h2>จัดการข้อมูลภาระงาน</h2></div><hr></br>


    <div class="form-group row">
        <label for="end_time" class="col-lg-2 col-md-2 col-sm-2 col-form-lable"><b>ชื่อหมวดงาน : </b></label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="end_time" name="end_time">
        </div>
    </div>

    <div class="form-group row">
            <label for="task_group" class="col-lg-2 col-md-2 col-sm-2 col-form-lable"><b>หมวดงานคณะฯ : </b></label>
            <div class="col-sm-4">
                <select class="form-control" id="task_group" name="task_group">
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
            <label for="task_group" class="col-lg-2 col-md-2 col-sm-2 col-form-lable"><b>หมวดงานหน่วยงานฯ : </b></label>
            <div class="col-sm-4">
                <select class="form-control" id="task_group" name="task_group">
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
            <label for="task_group" class="col-lg-2 col-md-2 col-sm-2 col-form-lable"><b>หมวดงานตาม PA : </b></label>
            <div class="col-sm-4">
                <select class="form-control" id="task_group" name="task_group">
                  <option value="" hidden select>เลือกหมวดงาน</option>
                    <option value="1">บริหารจัดการ</option>
                    <option value="2">พัฒนาระบบ</option>
                    <option value="3">MA</option>
                    <option value="4">IT Support</option>
                    <option value="5">ครุภัณฑ์</option>
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
@endsection
