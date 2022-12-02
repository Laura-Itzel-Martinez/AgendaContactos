@extends('layout.agenda')
@section('tituloPagina', 'eliminar categoria')

@section('contenido')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="co-sm-12">

                            <h2 >Eliminar</h2>

                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-sm-12">
                            <div class="alert alert-danger" role="alert">
                                <strong>Estas seguro de eliminar este registro</strong>
                                <p>Una vez eliminado no sera recuperado</p>

                                <table class="table table-sm">
                                    <thead>
                                        <th>Nombre</th>
                                        <th>Descipción</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $categoria->nombre }}</td>
                                            <td>{{  $categoria->descripcion }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <form action="{{ route('categoria.destroy', $categoria->id_categoria)  }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger">
                                        <span class="fas fa-trash-alt"></span> Eliminar</button>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
