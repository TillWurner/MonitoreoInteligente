@extends('layouts.plantillasidebar')
@section('content2')
    <link rel="stylesheet" href={{ asset('parqueo/create.css') }}>
    <link rel="stylesheet" href={{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css') }}
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    @if ($errors->count() > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="pet" style="font-size: 0">
        <a href="#">No Borrar</a>
        <br>
        <a href="#">No Borrar</a>
    </div>
    <div class="title">
        <h3>Crear Parqueo</h3>
    </div>
    <div class="main">
        <div class="container">
            <form method="POST" action="{{ route('parqueo.store') }}" enctype="multipart/form-data">
                @csrf
                <h2 class="name">Nombre del parqueo: </h2>
                <input class="name_input" name="nombre" type="text">
                <br>
                <h2 class="ubicacion">Ubicacion: </h2>
                <input class="ubicacion_input" name="ubicacion" type="text">
                <br>
                <input type="hidden" name="id_user" value="{{$user->id}}">
                <br>

                <div>
                    <button type="submit" class="guardar">
                        {{ __('Guardar') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
