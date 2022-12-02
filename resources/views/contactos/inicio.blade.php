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
                                <span class="fas fa-user-plus"></span> Agregar nuevo contacto</a>
                            <hr>

                            @if ($mensaje = Session::get('success'))

                            <div class="alert alert-info" role="alert">
                                <strong> {{ $mensaje }}</strong>
                            </div>

                            @endif

                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-sm-12">

                            <div class="table-responsive">
                                <table class="table table-primary" id="tablaContactos">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center">Apellido paterno</th>
                                            <th scope="col" class="text-center">Apellido materno</th>
                                            <th scope="col" class="text-center">Nombre</th>
                                            <th scope="col" class="text-center">Telefono</th>
                                            <th scope="col" class="text-center">Email</th>
                                            <th scope="col" class="text-center">Categoria</th>
                                            <th scope="col" class="text-center">Editar</th>
                                            <th scope="col" class="text-center">Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $listado as $item )

                                            <tr class="">
                                                <td scope="row" class="text-center">{{ $item->paterno }}</td>
                                                <td class="text-center">{{ $item->materno }}</td>
                                                <td class="text-center">{{ $item->nombre }}</td>
                                                <td class="text-center">{{ $item->telefono }}</td>
                                                <td class="text-center">{{ $item->email }}</td>
                                                <td class="text-center">{{ $item->nombre_categoria}}</td>

                                                <td class="text-center">
                                                    <a href="{{ route('contacto.edit' , $item->id_contacto) }}" class="btn btn-warning btn-sm">
                                                        <span class="fas fa-user-edit"></span></a>
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{ route('contacto.show', $item->id_contacto)}}" class="btn btn-danger btn-sm">
                                                        <span class="fas fa-user-times"></span></a>
                                                </td>


                                            </tr>
                                        @endforeach
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

@section('dataTable')

    <script>
        $(document).ready(function(){
            $('#tablaContactos').DataTable();
        })
    </script>

@endsection
