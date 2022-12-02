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
                                Agregar categoria</a>
                            <hr>

                            @if ($mensaje = Session::get('success'))

                            <div class="alert alert-info" role="alert">
                                <strong> {{ $mensaje }}</strong>
                            </div>

                            @endif
                        </div>
                    </div>

                    <div class="row text-center">
                        <div class="col-sm-12">

                            <div class="table-responsive">
                                <table class="table table-primary">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Descripción</th>
                                            <th scope="col">Editar</th>
                                            <th scope="col">Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ( $categorias as $item )


                                            <tr class="">
                                                <td scope="row">{{ $item->nombre }}</td>
                                                <td>{{ $item->descripcion}}</td>
                                                <td>
                                                    <a href="{{ route('categoria.edit', $item->id_categoria) }}" class="btn btn-warning btn-sm">editar</a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('categoria.show', $item->id_categoria) }}" class="btn btn-danger btn-sm">eliminar</a>
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
