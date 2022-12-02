@extends('layout.agenda')
@section('tituloPagina', 'agregar categoria')

@section('contenido')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="co-sm-12">

                            <h2 >Agregar nueva categoria</h2>

                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-sm-12">

                            <form action="{{ route('categoria.store') }}" method="post">

                              <!--csrf es un token en laravel y el metodo es post  -->

                              @csrf
                              @method('POST')

                                <label for="nombre">Nombre: </label>
                                <input type="text" name="nombre" id="nombre" class="form-control" required>

                                <label for="descripcion">Descripción:</label>
                                <textarea name="descripcion" id="descripcion" cols="30" rows="5" class="form-control" required></textarea>

                                <br>

                                <button  class="btn btn-outline-primary"><span class="fas fa-plus-square"></span> Agregar</button>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
