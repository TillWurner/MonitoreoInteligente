@extends('layouts.plantillasidebar')
@section('content2')
    <link rel="stylesheet" href={{ asset('planta/index.css') }}>
    <link rel="stylesheet" href={{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css') }}
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <head>
        <title>Usuarios</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    @if ($errors->count() > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="table">
        <br>
        <div class="box_title" style="margin-left: 500px ; margin-top: 60px">
            <h1 class="title_table">Plantas</h1>
        </div>

        <div class="container  mt-2 justify-content-center">
            <table class="table table-dark table-hover table-bordered border-dark mt-5 justify-content-center">
                <thead>
                    <th>Parqueo</th>
                    <th>Numero de planta</th>
                    <th>Cantidad espacios</th>
                    <th>Opciones</th>
                </thead>
                <tbody>
                    @foreach ($plantas as $planta)
                        <tr>
                            <td>{{ $planta->parqueo->nombre == null ? '--' : $planta->parqueo->nombre }}</td>
                            <td>{{ $planta->numero == null ? '--' : $planta->numero }}</td>
                            <td>{{ $planta->cantidad_espacios == null ? '--' : $planta->cantidad_espacios }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- @include('sweetalert::alert') --}}
    </div>



@endsection
