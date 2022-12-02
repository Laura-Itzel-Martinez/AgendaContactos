@extends('layout.agenda')
@section('tituloPagina', 'editar categoria')

@section('contenido')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="co-sm-12">

                            <h2 >Editar categoria</h2>

                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-sm-12">

                            <form action="{{ route('categoria.update', $categoria->id_categoria) }}" method="post">
                                @csrf
                                @method('PUT')
                                <label for="nombre">Nombre: </label>
                                <input type="text" name="nombre" id="nombre" class="form-control" required value="{{ $categoria->nombre }}">

                                <label for="descripcion">Descripción:</label>
                                <textarea name="descripcion" id="descripcion" cols="30" rows="5" class="form-control" required>{{ $categoria->descripcion}}</textarea>

                                <br>

                                <button  class="btn btn-outline-warning">Actualizar</button>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
