@extends('layouts.plantillasidebar')
@section('content2')
    <link rel="stylesheet" href={{ asset('user/create.css') }}>
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
        <h3>Nuevo Usuario</h3>
    </div>
    <div class="main">
        <div class="container">
            <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
                @csrf
                    {{-- <label for=name>Nombre completo: </label> --}}
                    <h2 class="name">Nombre completo: </h2>
                    <input class="name_input" name="name" type="text">
                    <br>
                    {{-- <label for="email">Correo Electronico: </label> --}}
                    <h2 class="email">Correo Electronico: </h2>
                    <br>
                    <input class="email_input" name="email" type="email">
                    <br>
                    <h2 class="password">Contraseña: </h2>
                    <br>
                    <input class="password_input" type="password" name="password">
                    <br>
                    <h2 class="telefono">Telefono: </h2>
                    <br>
                    <input class="telefono_input" name="telefono" type="text">
                    <br>
                    <input type="hidden" name="admin" value=0>
                    <input type="hidden" name="cliente" value=1>
                    <div>
                        <button type="submit" class="guardar">
                            {{ __('Guardar') }}
                        </button>
                    </div>
            </form>
        </div>
    </div>

@endsection
