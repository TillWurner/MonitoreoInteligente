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
                    @foreach ($users as $user)
                        @if ($user->cliente == 1)
                        <tr>
                            <td>{{ $user->name == null ? '--' : $user->name }}</td>
                            <td>{{ $user->telefono == null ? '--' : $user->telefono }}</td>
                            <td>{{ $user->email == null ? '--' : $user->email }}</td>
                            <td>{{ $user->parqueo->nombre == null ? '--' : $user->parqueo->nombre }}</td>
                            <td>{{ $user->parqueo->ubicacion == null ? '--' : $user->parqueo->ubicacion }}</td>
                            <td>{{ $user->parqueo->planta->numero == null ? '--' : $user->parqueo->planta->numero }}</td>
                            <td>{{ $user->parqueo->planta->cantidad_espacios == null ? '--' : $user->parqueo->planta->cantidad_espacios }}
                            </td>
                        </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- @include('sweetalert::alert') --}}
    </div>



@endsection
