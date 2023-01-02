@extends('layouts.plantillasidebar')
@section('content2')
    <link rel="stylesheet" href={{ asset('parking/registration.css') }}>
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

        <div align="center">
            <h3>Informacion del usuario</h3>
        </div>

        <div class="container  mt-2 justify-content-center">
            <table class="table table-dark table-hover table-bordered border-dark mt-5 justify-content-center">
                <thead>
                    <th>Dueño</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Nombre del parqueo</th>
                    <th>Ubicacion del parqueo</th>
                    <th>Cantidad de plantas</th>
                    <th>Cantidad de espacios en las plantas</th>

                    <th>Opciones</th>
                </thead>
                <tbody>
                    @foreach ($plantas as $planta)
                        <tr>
                            <td>{{ $planta->parqueo->user->name == null ? '--' : $planta->parqueo->user->name }}</td>
                            <td>{{ $planta->parqueo->user->telefono == null ? '--' : $planta->parqueo->user->telefono }}</td>
                            <td>{{ $planta->parqueo->user->email == null ? '--' : $planta->parqueo->user->email }}</td>
                            <td>{{ $planta->parqueo->nombre == null ? '--' : $planta->parqueo->nombre }}</td>


                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- @include('sweetalert::alert') --}}
    </div>



@endsection
