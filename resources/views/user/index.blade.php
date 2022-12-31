@extends('layouts.plantillasidebar2')
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
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <h2>Lista de Usuarios</h2>
            </li>
            {{-- <li class="list-group-item"><a href= {{route('user.register') }} ><button type="button" class="btn btn-success btn-lg btn-block">Nuevo usuario</button></a></li> --}}
        </ul>
        <table class="newtable">
            <thead>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Opciones</th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name == null ? '--' : $user->name }}</td>
                        <td>{{ $user->telefono == null ? '--' : $user->telefono }}</td>
                        <td>{{ $user->email == null ? '--' : $user->email }}</td>

                        <td>
                            <a href="#" class="btn btn-info btn-sm ">Mas informacion</a>
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-info btn-sm ">editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



@endsection
