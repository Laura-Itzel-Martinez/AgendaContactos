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
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
