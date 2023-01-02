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
        <div class="container justify-content-center text-center pt-3 mt-2" style="background: rgba(255, 255, 255, 0.471); width:300px; border-radius: 5px;text-align: center;border:2px solid black">
            <h1  style="color: rgb(254, 10, 10); font-weight: 4;font-family: Times New Roman">Lista de Usuarios</h1>
        </div>

        <div class="container  mt-2 justify-content-center">
            <table class="table table-dark table-hover table-bordered border-dark mt-5 justify-content-center">
                <thead>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Opciones</th>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    @if ($user->cliente == 1)
                        <tr>
                            <td>{{ $user->name == null ? '--' : $user->name }}</td>
                            <td>{{ $user->telefono == null ? '--' : $user->telefono }}</td>
                            <td>{{ $user->email == null ? '--' : $user->email }}</td>
                           {{--  <td>
                                <a href="{{route('user.informacion',$user->id)}}" class="btn btn-info btn-sm ">Ver informacion</a>
                            </td> --}}
                            <td>
                                <a href="{{route('parqueo.userindex',$user->id)}}" class="btn btn-info btn-sm ">Ver Parqueos</a>
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
