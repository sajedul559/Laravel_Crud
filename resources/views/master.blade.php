<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student Management System</title>
	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/parsley.css')}}">

</head>
<body>
  
  <div class="container">
    
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Project Name</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class=" nav nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('index')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-info " aria-current="page" href="{{route('create')}}">Create</a>
        </li>
        
      </ul>
      <ul class="navbar-nav ml-auto">
        @if(Auth::check())
        <li class="nav-item">
          <a class="nav-link " href="{{ route('home') }}">Dashboard</a>
        </li> 

        @else
        <li class="nav-item">
          <a class="nav-link " href="{{ route('login') }}">Login</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}"> Register</a>
        </li>
        
        @endif
        
      </ul>
       
    </div>
    
  </div>
</nav>
  </div>
	


<div class="container">

@yield('content')

</div>



	<script type="text/javascript" src="{{asset('bootstrap/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('bootstrap/js/parsley.min.js')}}"></script>

</body>
</html>