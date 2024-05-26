@extends('adminlte::page')

@section('title', 'Mostrar Unidad De Medida')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Unidad De Medida</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('unidad-medidas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $unidadMedida->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Clave SAT:</strong>
                            {{ $unidadMedida->clave_sat }}
                        </div>
                        <div class="form-group">
                            <strong>Activo:</strong>
                            @if ($unidadMedida->activo == 0)
                                INACTIVO
                            @else
                                ACTIVO
                            @endif
                        </div>
                        <div class="form-group">
                            <strong>Usuario Creó:</strong>
                            {{ $unidadMedida->user_c->name . ' - ' . $unidadMedida->created_at }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Modificó:</strong>
                            @if ($unidadMedida->user_m)
                            {{ $unidadMedida->user_m->name . ' - ' . $unidadMedida->updated_at}}
                            @else
                                <span class="text-danger">Sin modificaciones </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
