<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{url('/css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('/css/font-awesome/css/font-awesome.min.css')}}">
    
    <title>@yield('title')</title>
</head>
<body>
        @if(Auth::user())
  
	        <form action="{{ url('logout') }}" method="POST">
		     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="col-sm-12" align="right"></br>
                <input type="submit" name="submit" value="Logout">
                </div>
	        </form>
	    @endif
        
    <p>
        @yield('content')
    </p>

    <footer>
        @yield('footer')
    </footer>
</body>

<script src="{{url('/js/jquery-3.4.0.min.js') }}"></script>
<script src="{{url('/js/popper.min.js')}}"></script>
<script src= "{{url('/js/bootstrap/bootstrap.min.js')}}"></script>
</html>