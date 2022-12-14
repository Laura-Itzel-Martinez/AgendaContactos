@extends('layout.agenda')
@section('tituloPagina', 'agregar contacto')

@section('contenido')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="co-sm-12">

                            <h2 >Agregar nuevo contacto</h2>

                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-sm-12">

                            <form action="{{ route('contacto.store') }}" method="post">

                                @csrf
                                @method('POST ')

                                <label for="categoria">Categoria:</label>
                                <select name="categoria" id="categoria" class="form-select" required>

                                    @foreach ($categorias as $item )
                                        <option value="">Selecciona una opción</option>
                                        <option value="{{ $item->id_categoria }}">{{ $item->nombre }}</option>

                                    @endforeach

                                </select>

                                <label for="nombre">Apellido paterno: </label>
                                <input type="text" name="paterno" id="paterno" class="form-control" required>

                                <label for="nombre">Apellido materno: </label>
                                <input type="text" name="materno" id="materno" class="form-control" required>

                                <label for="nombre">Nombre: </label>
                                <input type="text" name="nombre" id="nombre" class="form-control" required>

                                <label for="nombre">Telefono: </label>
                                <input type="text" name="telefono" id="telefono" class="form-control" required>

                                <label for="nombre">Correo electronico: </label>
                                <input type="text" name="correo" id="correo" class="form-control" required>


                                <br>

                                <button  class="btn btn-outline-primary">
                                    <span class="fas fa-user-plus"></span> Agregar</button>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
