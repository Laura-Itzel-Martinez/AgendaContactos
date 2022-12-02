@extends('layout.agenda')
@section('tituloPagina', 'editar contacto')

@section('contenido')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="co-sm-12">

                            <h2 >Editar contacto</h2>

                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-sm-12">

                            <form action="{{ route('contacto.update' , $contacto->id_contacto) }}" method="post">
                                @csrf
                                @method('PUT')

                                <label for="categoria">Categoria:</label>
                                <select name="categoria" id="categoria" class="form-select">
                                    @foreach ($categorias as $item )

                                        @if ($item->id_categoria == $contacto->id_categoria)
                                            <option selected value="{{ $item->id_categoria }}">{{ $item->nombre }}</option>

                                        @else

                                        <option value="{{ $item->id_categoria }}">{{ $item->nombre }}</option>

                                        @endif

                                    @endforeach
                                </select>

                                <label for="nombre">Apellido paterno: </label>
                                <input type="text" name="paterno" id="paterno" class="form-control" value=" {{ $contacto->paterno }}" required>

                                <label for="nombre">Apellido materno: </label>
                                <input type="text" name="materno" id="materno" class="form-control" value=" {{ $contacto->materno }}" required>

                                <label for="nombre">Nombre: </label>
                                <input type="text" name="nombre" id="nombre" class="form-control" value=" {{ $contacto->nombre }}" required>

                                <label for="nombre">Telefono: </label>
                                <input type="text" name="telefono" id="telefono" class="form-control" value=" {{ $contacto->telefono }}" required>

                                <label for="nombre">Correo electronico: </label>
                                <input type="text" name="correo" id="correo" class="form-control" value=" {{ $contacto->email }}" required>


                                <br>

                                <button  class="btn btn-outline-warning">
                                    <span class="fas fa-user-edit"></span> Actualizar</button>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
