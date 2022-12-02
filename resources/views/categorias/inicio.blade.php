@extends('layout.agenda')
@section('tituloPagina', 'categorias')

@section('contenido')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="co-sm-12">

                            <h2 >Categorias</h2>
                            <a href="{{ route('categoria.create') }}" class="btn btn-info">
                                <span class="fas fa-plus-square"></span> Agregar categoria</a>
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
                                <table class="table table-primary" id="tablaCategorias">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center">Nombre</th>
                                            <th scope="col" class="text-center">Descripción</th>
                                            <th scope="col" class="text-center">Editar</th>
                                            <th scope="col" class="text-center">Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ( $categorias as $item )


                                            <tr class="">
                                                <td scope="row" class="text-center">{{ $item->nombre }}</td>
                                                <td class="text-center">{{ $item->descripcion}}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('categoria.edit', $item->id_categoria) }}" class="btn btn-warning btn-sm">
                                                        <span class="fas fa-edit"></span></a>
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{ route('categoria.show', $item->id_categoria) }}" class="btn btn-danger btn-sm">
                                                        <span class="fas fa-trash-alt"></span></a>
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
            $('#tablaCategorias').DataTable();
        })
    </script>

@endsection
