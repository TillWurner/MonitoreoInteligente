<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Proyect</title> {{-- MODIFICAR DESPUES EL TITULO --}}
	{{-- <!-- bootstrap cdn -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
	<!-- font awesome cdn -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/> --}}
	<!-- style.css -->
	<link href={{ asset("welcome/homestyle.css") }} rel="stylesheet">
	<!-- jquery cdn -->
	{{-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script> --}}
</head>
<body>
    <div class="hero">

        <video autoplay loop muted plays-inline class="back-video" >
            <source src={{ asset('welcome/vid/video5.mp4') }} type="video/mp4">
        </video>

        <nav>
            <img src={{ asset('welcome/img/logo5.png') }} class="logo">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href={{route('login')}}>Log In</a></li>
                <li><a href={{route('register')}}>Register</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </nav>
        <div class="content">
            <h1>Bienvenido!</h1>
            <a href={{route('login')}}>Ingresar</a>
        </div>
    </div>
	<!-- scripts -->
	<!-- bootstrap javascript cdn -->
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	
</body>
</html>