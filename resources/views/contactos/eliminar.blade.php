@extends('layout.agenda')
@section('tituloPagina', 'eliminar contacto')

@section('contenido')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="co-sm-12">

                            <h2 >Eliminar contacto</h2>

                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-sm-12">
                            <div class="alert alert-danger" role="alert">
                                <strong>Estas seguro de eliminar este registro</strong>
                                <p>Una vez eliminado no sera recuperado</p>

                                <div class="table-responsive">
                                    <table class="table table-info">
                                        <thead>
                                            <tr>
                                                <th scope="col">Apellido paterno</th>
                                                <th scope="col">Apellido materno</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Telefono</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Categoria</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="">
                                                <td scope="row">{{ $contacto->paterno }}</td>
                                                <td>{{ $contacto->materno }}</td>
                                                <td>{{ $contacto->nombre }}</td>
                                                <td>{{ $contacto->telefono }}</td>
                                                <td>{{ $contacto->email }}</td>
                                                <td>{{ $contacto->nombre_categoria}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <form action="{{ route('contacto.destroy', $contacto->id_contacto) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">
                                            <span class="fas fa-user-times"></span> Eliminar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
