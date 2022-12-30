@extends('layouts.plantillasidebar')
@section('content2')
    <link rel="stylesheet" href={{ asset('homebase/home.css') }}>
    <link rel="stylesheet" href={{asset("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css")}} integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <body>
        <div class="content">
            <!-- <img src="/logincss/img/banner5.jpg" >-->
                 {{-- <div class="header">
                    Hola {{ Auth::user()->name }} !
                 </div> --}}
                 <p>
                  <div class="text" style="display: inline-block">
                     <h1 class="aws">¡ Bienvenido !</h1>
                  </div>
                 </p>
                 <p style="font-size: 30px">
                    Gracias por escogernos para administrar 
                    <br>
                    tus parqueos! 
                 </p>
                 <p style="font-size: 30px">
                    Prueba todas las opciones que tenemos para usted.
                 </p>
          </div>
    </body>
@endsection
