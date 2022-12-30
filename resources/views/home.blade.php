@extends('layouts.plantillasidebar')
@section('content2')
    <link rel="stylesheet" href={{ asset('homebase/home.css') }}>
    <link rel="stylesheet" href={{asset("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css")}} integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <body>
        <div class="content">
                 <p>
                  <div class="text" style="display: inline-block">
                     <h1 class="aws">¡ Bienvenido !</h1>
                  </div>
                 </p>
                 <p style="font-size: 30px">
                  <div class="text" style="display: inline-block">
                     <h1 class="aws2" style="overflow: hidden;">
                     Gracias por escogernos para administrar 
                     </h1>
                     <h1 class="aws3">
                        tus parqueos!
                     </h1>
                     
                  </div>
                 </p>
                 <p style="font-size: 30px">
                  <div class="text" style="display: inline-block">
                     <h1 class="aws4">
                        Prueba todas las funcionalidades que tenemos para ti.
                     </h1>
                  </div>
                 </p>
          </div>
    </body>
@endsection
