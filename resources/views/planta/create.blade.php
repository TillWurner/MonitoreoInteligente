@extends('layouts.plantillasidebar')
@section('content2')
    <link rel="stylesheet" href={{ asset('parking/registration.css') }}>
    <link rel="stylesheet" href={{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css') }}
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<script>
    $(function() {
        $("#adicional").on('click', function() {
            $("#tabla tbody tr:eq(0)").clone().removeClass('fila-fiJa').appendTo("#tabla");
        });
        $(document).on("click", ".eliminar", function() {
            var parent = $(this).parents().get(0);
            $(parent).remove();
        });
    });
</script>


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
        <h3>Crear Planta</h3>
    </div>
    <div class="container justify-content-center text-center pt-3 mt-2" style="background: rgba(255, 255, 255, 0.471); width:700px; border-radius: 5px;text-align: center;border:2px solid black">
        <div class="container">

            <form method="POST" action="{{ route('planta.store') }}"
            enctype="multipart/form-data">
            @csrf
            <table class="table bg-info" id="tabla">
                <tr class="fila-fila">
                    <td><input name="numero[]" placeholder="Numero de planta" type="number"></td>
                    <td><input name="cantidad_espacios[]" placeholder="Cantidad de espacios" type="number"></td>
                    <td><input type="hidden" name="id_parqueo[]" value="{{ $parqueo->id }}">
                    <td class="eliminar"><input type="button" value="Menos -"> </td>
                </tr>
            </table>

            <div class="btn-der">

                <input type="submit" name="insertar" value="Guardar" class="btn btn-info" />
                <button id="adicional" name="adicional" type="button" class="btn btn-warning">MAS +</button>
            </div>
        </form>
        </div>
    </div>
    <script src=    {{asset("https://code.jquery.com/jquery-3.4.1.slim.min.js")}} integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src=    {{asset("https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js")}} integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src=   {{asset("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js")}} integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

@endsection
