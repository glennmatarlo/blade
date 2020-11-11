<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courseware | Glenn Matarlo</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="{{asset('js/bootstrap.js')}}"></script>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">COURSEWARE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}">HOME</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{url('/instructors')}}">INSTRUCTORS</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{url('/learners')}}">LEARNERS</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{url('/courses')}}">COURSES</a>
            </li>
            </ul>
        </div>
  </div>
</nav>

<div class="container">
    @yield('content')
</div>


</body>
</html>