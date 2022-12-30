@extends('layouts.plantillasidebar2')
@section('content2')  <!--Section of Register -->
    <link rel="stylesheet" href={{ asset('parking/registration.css') }}>
    <link rel="stylesheet" href={{asset("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css")}} integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <body >
    </body>
    <!--Formulario Registro-->
    <div id="registro">
        <div class="regform">
            <h1> Registro de Vehiculo </h1>
        </div> 
        <div class="main">
            <form>
                <div id="name">
                    <h2 class="name">Conductor</h2>
                    <input class="firstname" type="text" name="first_name"><br>
                    <label class="firstlabel">Nombre</label>
                    <input class="lastname" type="text" name="last_name">
                    <label class="lastlabel">Apellido</label>
                </div>

                <h2 id="compa" class="name">Matricula</h2>
                <input class="company" name="company" type="text">
                
                <?php
                    date_default_timezone_set('America/La_Paz');
                    $fecha_actual = date("Y-m-d H:i:s");
                ?>


                <h2 class="name">Fecha</h2>
                <input class="date" name="date" type="datetime" value="<?= $fecha_actual?>">

                <h2 class="name">Celular</h2>
               {{--  <input class="code" name="area_code" type="text">
                <label class="area-code">Area Code</label> --}}
                <input class="number" name="phone" type="text">
                <label class="phone-number">Numero de Celular</label>

                <h2 class="name">Parqueos</h2>
                <select class="option" name="subject">
                    <option disabled="disabled" selected="selected">--Seleccionar--</option>
                    <option> Parqueo 1 </option>
                    <option> Parqueo 2 </option>
                    <option> Parqueo 3 </option>
                </select>

                {{-- <h2 id="student">Are you beginner ?</h2>

                <label class="radio">
                    <input class="radio-one" type="radio" checked='checked' name="">
                    <span class="checkmark"></span>
                    Yes
                </label>
                <label class="radio">
                    <input class="radio-two" type="radio" name="">
                    <span class="checkmark"></span>
                    No
                </label> --}}
                <br>
                <button type="submit">Registrar</button>

            </form>
        </div> 
    </div> 
    <!--Ventana de video-->
    <div class="Title">
        <h1 style="font-size: 30px"> Vista Camara </h1>
    </div>
    <div class="camera">
        <video autoplay loop muted plays-inline class="back-video" >
            <source src={{ asset('welcome/vid/video5.mp4') }} type="video/mp4">
        </video>
    </div>  
      
@endsection
