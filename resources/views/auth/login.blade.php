<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Snake Highlight | Nothing4us </title>
  <link rel="stylesheet" href={{ asset('log-in/login.css') }}>

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> Snake Highlight | Nothing4us </title>
  <link rel="stylesheet" href={{ asset('log-in/login.css') }}>

</head>
<body>
    
<!-- partial:index.partial.html -->
<div class="page">
  <div class="container">
    <div class="left">
      <div class="login">Login</div>
      <img src={{ asset('welcome/img/logo5.png') }} style="left: 500px" class="log"> 
      <div class="eula">Porfavor introduce tus datos de usuario para poder utilizar todas las herramientas de nuestro software!</div>
    </div>
    <div class="right">
      <svg viewBox="0 0 320 300">
        <defs>
          <linearGradient
                          inkscape:collect="always"
                          id="linearGradient"
                          x1="13"
                          y1="193.49992"
                          x2="307"
                          y2="193.49992"
                          gradientUnits="userSpaceOnUse">
            <stop
                  style="stop-color:#ff00ff;"
                  offset="0"
                  id="stop876" />
            <stop
                  style="stop-color:#ff0000;"
                  offset="1"
                  id="stop878" />
          </linearGradient>
        </defs>
        <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
      </svg>
      <div class="form">
        <label for="email">Email</label>
        <input type="email" id="email">
        <label for="password">Contraseña</label>
        <input type="password" id="password">
        <input type="submit" id="submit" value="Ingresar">
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js'></script><script  src=<link rel="stylesheet" href={{ asset('log-in/script.js') }}></script>

</body>
<div class="hero">
    <nav>
        <img src={{ asset('welcome/img/logo5.png') }} style="left: 500px" class="logo"> 
        <ul>
            <li><a href={{route('main')}}>Home</a></li>
            <li><a href={{route('login')}}>Log In</a></li>
            <li><a href={{route('register')}}>Register</a></li>
            <li><a href={{route('parking.registration')}}>Contact Us</a></li>
        </ul>
    </nav>
</div>
</html>
<!-- partial -->
  <script  src={{ asset('log-in/script.js') }}></script>

</body>
</html>
