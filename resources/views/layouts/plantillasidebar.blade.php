<!DOCTYPE html>
<html lang="en" dir="ltr">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Monitoreo Inteligente</title>
    <link rel="stylesheet" href={{ asset('sidebar/sidebar.css') }}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>


{{--     boostrap--}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <div class="btnside">
        <span style="background: #1b1b1b; height: 45px; width: 45px;" class="fas fa-bars"></span>
    </div>
    <nav class="sidebar">
        <div class="text">-- Menu --</div>
        <ul>
            @if (Auth::user()->admin == 1)
                <li>
                    <a href={{ route('home') }}>Home</a>
                </li>
                <li>
                    <a href={{ route('user.create') }}>Nuevo Usuario</a>
                </li>
                <li>
                    <a href={{ route('user.index') }}>Ver Clientes</a>
                </li>
                <li><a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Cerrar Sesion
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            @endif

            @if (Auth::user()->cliente == 1)
                <li>
                    <a href="#">Perfil</a>
                </li>
                <li>
                    <a href="#">Ingresos</a>
                </li>

                <li>
                    <a href="#" class="feat-btnside">Parqueos
                        <span class="fas fa-caret-down first"></span>
                    </a>
                    <ul class="feat-show" style="margin-left: -30px">
                        <li><a href="#" style="font-size: 15.4px; height: 50px;" >Ver parqueos</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="serv-btnside" >Vigilancia
                        <span class="fas fa-caret-down second"></span>
                    </a>
                    <ul class="serv-show" style="margin-left: -30px">
                        <li><a href="#" style="font-size: 15.4px; height: 50px;">Planta 1</a></li>
                        <li><a href="#" style="font-size: 15.4px; height: 50px;">Planta 2</a></li>
                    </ul>
                </li>
                <li><a href={{ route('parking.registration') }}>Registro de vehiculo</a></li>
                <!--Mover dicho boton-->
                {{-- <li><a href="{{ route('logout') }}">Salirse</a></li> --}}
                <li><a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                        Salirse
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            @endif
        </ul>

    </nav>

    {{-- Scripts --}}
    <script>
        $('.btnside').click(function() {
            $(this).toggleClass("click");
            $('.sidebar').toggleClass("show");
        });
        $('.feat-btnside').click(function() {
            $('nav ul .feat-show').toggleClass("show");
            $('nav ul .first').toggleClass("rotate");
        });
        $('.serv-btnside').click(function() {
            $('nav ul .serv-show').toggleClass("show1");
            $('nav ul .second').toggleClass("rotate");
        });
        $('nav ul li').click(function() {
            $(this).addClass("active").siblings().removeClass("active");
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
        integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
@yield('content2')
</html>
