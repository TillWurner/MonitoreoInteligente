<!DOCTYPE html>
<html lang="en" >
    <head>
      <meta charset="UTF-8">
      <title>Proyect</title>
      <link rel="stylesheet" href={{ asset('contact-us/contactus.css') }}>

    </head>
    <body>
        <div class="hero">
            <nav>
                <img src={{ asset('welcome/img/logo5.png') }} class="logo">
                <ul>
                    <li><a href={{route('main')}}>Home</a></li>
                    <li><a href={{route('login')}}>Log In</a></li>
                    <li><a href={{route('register')}}>Register</a></li>
                    <li><a href={{route('contactus')}}>Contact Us</a></li>
                </ul>
            </nav>
        </div>
        <!-- scripts -->
        <!-- bootstrap javascript cdn -->
        <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <div class="container">
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/design_128.png?raw=true">
                        <h3>Designer</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>Nombre: José Reinaldo Gonzales Montaño
                            <br>
                            Registro: 217020623
                            <br>
                            Estudiante de Ingenieria en Sistemas
                        </p>
                            <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/code_128.png?raw=true">
                        <h3>Coder</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>Nombre: Camila Reyes Duran
                            <br>
                            Registro: 217041965
                            <br>
                            Estudiante de Ingenieria en Sistemas
                        </p>
                            <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/launch_128.png?raw=true">
                        <h3>Develop</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>Nombre: Diego Rodrigo Jaldin Taboada
                            <br>
                            Registro: 217024572
                            <br>
                            Estudiante de Ingenieria en Sistemas
                        </p>
                            <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>