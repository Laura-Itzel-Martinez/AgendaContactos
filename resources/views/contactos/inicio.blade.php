@extends('layout.agenda')
@section('tituloPagina', 'contactos')

@section('contenido')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="co-sm-12">

                            <h2 >Contactos</h2>
                            <a href="{{ route('contacto.create') }}" class="btn btn-info">
                                Agregar nuevo contacto</a>
                            <hr>
                        </div>
                    </div>

                    <div class="row text-center">
                        <div class="col-sm-12">

                            <div class="table-responsive">
                                <table class="table table-primary">
                                    <thead>
                                        <tr>
                                            <th scope="col">Apellido paterno</th>
                                            <th scope="col">Apellido materno</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Telefono</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Categoria</th>
                                            <th scope="col">Editar</th>
                                            <th scope="col">Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="">
                                            <td scope="row">R1C1</td>
                                            <td>R1C2</td>
                                            <td>R1C3</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
