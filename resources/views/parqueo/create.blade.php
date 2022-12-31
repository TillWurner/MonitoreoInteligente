@extends('layouts.plantillasidebar')
@section('content2')
    <link rel="stylesheet" href={{ asset('parking/registration.css') }}>
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
    <div align="center">
        <h3>Crear Parqueo</h3>
    </div>
    <div class="container justify-content-center text-center pt-3 mt-2" style="background: rgba(255, 255, 255, 0.471); width:400px; border-radius: 5px;text-align: center;border:2px solid black">
        <div class="container">
            <form class="container" method="POST" action="{{ route('parqueo.store') }}" enctype="multipart/form-data">
                @csrf
                <label for=nombre>Nombre del parqueo: </label>
                <input name="nombre" type="text">
                <br>
                <label for="ubicacion">Ubicacion: </label>
                <br>
                <input name="ubicacion" type="text">
                <br>
                <input type="hidden" name="id_user" value="{{$user->id}}">
                <br>


                <div align="center">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Guardar') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
