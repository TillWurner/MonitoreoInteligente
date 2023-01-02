@extends('layouts.plantillasidebar')
@section('content2')
    <div class="table">
        <br>
        <div class="container justify-content-center text-center pt-3 mt-2"
            style="background: rgba(255, 255, 255, 0.471); width:300px; border-radius: 5px;text-align: center;border:2px solid black">
            <h1 style="color: rgb(254, 10, 10); font-weight: 4;font-family: Times New Roman">Lista de Parqueos</h1>
        </div>

        <div class="container  mt-2 justify-content-center">
            <table class="table table-dark table-hover table-bordered border-dark mt-5 justify-content-center">
                <thead>
                    <th>Nombre</th>
                    <th>Ubicacion</th>

                </thead>
                <tbody>
                    @foreach ($parqueo as $item)
                        <tr>
                            <td>{{ $item->nombre == null ? '--' : $item->nombre }}</td>
                            <td>{{ $item->ubicacion == null ? '--' : $item->ubicacion }}</td>
                           {{--  <td>
                                <a href="{{ route('parqueo.index', $user->id) }}" class="btn btn-info btn-sm ">Plantas</a>
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection
