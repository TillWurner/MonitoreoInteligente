@extends('layouts.plantillasidebar')
@section('content2')
    <div class="container center">
        <div class="row">
            <div class="col">
                <form>
                    <div class="mb-3">
                        <h2>Parqueo</h2>
                        <label for="" class="form-label">Nombre del Parqueo</label>
                        <input type="text" class="form-control" id="">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Ubicacion</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Agregar Planta
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Nueva Planta</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Numero de planta</label>
                                            <input type="text" class="form-control" id="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Espacios Disponibles </label>
                                            <input type="number" class="form-control">
                                        </div>

                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <div class="col">

            </div>


        </div>

    </div>
    <div>

    </div>
@endsection
