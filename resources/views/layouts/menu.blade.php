<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{url('/css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('/css/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ url('/css/tagify/tagify.css') }}">
    
    
    <title>@yield('title')</title>
</head>
<body>


        @if(Auth::user())
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #88DDBB">
        <a class="navbar-brand" href="/"><i class="fa fa-home" aria-hidden="true">  Med-Si-iWorks</i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            
            <!-- ส่วนที่ 1 ลงข้อมูลภาระงาน -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="add_task" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-pencil-square-o" aria-hidden="true"> ภาระงาน</i>
                </a>
                <div class="dropdown-menu" aria-labelledby="Add_task">
                <a class="dropdown-item" href="/show-task">ลงข้อมูลภาระงาน</a>
                </div>
            </li>

            <!-- ส่วนที่ 2 จัดการข้อมูลภาระงาน -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="manage_task" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-cog" aria-hidden="true"> จัดการข้อมูลภาระงาน</i>
                </a>
                <div class="dropdown-menu" aria-labelledby="manage_task">
                <a class="dropdown-item" href="/show-type">หมวดงานย่อย (Tag)</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/show-group">หมวดงานของคณะฯ</a>
                <a class="dropdown-item" href="/show-division">หมวดงานของหน่วยงาน</a>
                <a class="dropdown-item" href="/show-pa">หมวดงานรายบุคคล</a>
                </div>
            </li>
             <!-- ส่วนที่ 3 รายงาน -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="rep_task" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-line-chart" aria-hidden="true"> รายงาน</i>
                </a>
                <div class="dropdown-menu" aria-labelledby="rep_task">
                <a class="dropdown-item" href="#">รายงานรายบุคคล</a>
                <a class="dropdown-item" href="#">รายงานของหน่วยงาน</a>
                </div>
            </li>

            </ul>
            
            <a class="nav-link navbar-nav ml-auto text-dark"><i class="fa fa-user" aria-hidden="true"> {{ Auth::user()->name }}</i></a>
        @endif
            <form class="form-inline my-2 my-lg-0">
                 <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
            </form>
            <form action="{{ url('logout')}}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token()}}">
                <button class="btn btn-outline my-2 my-sm-0 text-secondary" type="submit" value="Logout"/><i class="fa fa-power-off" aria-hidden="true"></i></button>
            </form>
        </div>
        </nav>
        

    <div class="container">
        @yield('content')
    </div>


    <footer>
        @yield('footer')
    </footer>
    <script src="{{url('/js/jquery-3.4.0.min.js') }}"></script>
    <script src="{{url('/js/popper.min.js')}}"></script>
    <script src= "{{url('/js/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{ url('/css/tagify/tagify.js') }}"></script>
    @yield('extra-script')
</body>
</html>