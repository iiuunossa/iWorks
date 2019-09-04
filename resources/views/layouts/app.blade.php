<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    
    
    <title>@yield('title')</title>
</head>
<body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Med-Si-iWorks</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            
            <!-- ส่วนที่ 1 ลงข้อมูลภาระงาน -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="add_task" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                ภาระงาน
                </a>
                <div class="dropdown-menu" aria-labelledby="Add_task">
                <a class="dropdown-item" href="/create">ลงข้อมูลภาระงาน</a>
                </div>
            </li>

            <!-- ส่วนที่ 2 จัดการข้อมูลภาระงาน -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="manage_task" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                จัดการข้อมูลภาระงาน
                </a>
                <div class="dropdown-menu" aria-labelledby="manage_task">
                <a class="dropdown-item" href="/">จัดการข้อมูลภาระงาน</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/show-group">หมวดงานของคณะฯ</a>
                <a class="dropdown-item" href="/show-division">หมวดงานของหน่วยงาน</a>
                <a class="dropdown-item" href="/show-pa">หมวดงานรายบุุคคล</a>
                </div>
            </li>
             <!-- ส่วนที่ 3 รายงาน -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="rep_task" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                รายงาน
                </a>
                <div class="dropdown-menu" aria-labelledby="rep_task">
                <a class="dropdown-item" href="#">รายงานรายบุคคล</a>
                <a class="dropdown-item" href="#">รายงานของหน่วยงาน</a>
                </div>
            </li>
   
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        </nav>

    <p>
        @yield('content')
    </p>

    <footer>
        @yield('footer')
    </footer>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>