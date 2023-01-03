@extends('layouts.plantillasidebar')
@section('content2')
<link rel="stylesheet" href={{ asset('parqueo/user_index.css') }}>
<link rel="stylesheet" href={{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css') }}
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<head>
    <title>Parqueo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    <div class="table">
        <br>
        <div class="box_title" style="margin-left: 500px ; margin-top: 60px">
            <h1 class="title_table">Lista de Parqueos</h1>
        </div>

        <div class="container  mt-2 justify-content-center">
            <table class="table table-dark table-hover table-bordered border-dark mt-5 justify-content-center">
                <thead>
                    <th>Nombre</th>
                    <th>Ubicacion</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    @foreach ($parqueo as $item)
                        <tr>
                            <td>{{ $item->nombre == null ? '--' : $item->nombre }}</td>
                            <td>{{ $item->ubicacion == null ? '--' : $item->ubicacion }}</td>
                            <td>
                                <a href="{{ route('planta.index', $item->id) }}" class="btn btn-info btn-sm ">Plantas</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection
