<div class="box box-info padding-1">
    <div class="box-body">

        <div class="container">
            <div class="row">
                <div class="col-sm-8 form-group">
                    {{ Form::label('descripcion','Descripción') }}
                    <span style="color:red">*</span>
                    {{ Form::text('descripcion', $unidadMedida->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripción', 'autocomplete'=>'off']) }}
                    {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col-sm-2 form-group">
                    {{ Form::label('clave_sat','Clave SAT') }}
                    <span style="color:red">*</span>
                    {{ Form::text('clave_sat', $unidadMedida->clave_sat, ['class' => 'form-control' . ($errors->has('clave_sat') ? ' is-invalid' : ''), 'placeholder' => 'Clave SAT', 'autocomplete'=>'off']) }}
                    {!! $errors->first('clave_sat', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col-sm-2 form-group">
                    {{ Form::label('activo') }}
                    <span style="color:red">*</span>
                    {{ Form::select('activo', ['1' => 'Activo', '0' => 'Inactivo'], $unidadMedida->activo, ['class' => 'form-control activo' . ($errors->has('activo') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona Estado']) }}
                    {{-- {!! Form::select('miSelect', ['opcion1' => 'Opción 1', 'opcion2' => 'Opción 2'], null, ['class' => 'form-control']) !!} --}}

                    {{-- {{ Form::text('activo', $unidadMedida->activo, ['class' => 'form-control' . ($errors->has('activo') ? ' is-invalid' : ''), 'placeholder' => 'Activo']) }} --}}
                    {!! $errors->first('activo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>


    </div>
    <br>
    <div class="row d-flex justify-content-center">
        <a href="{{ route('unidad-medidas.index') }}" class="btn btn-danger col col-sm-2">{{ __('Cancelar') }}</a>
        <div class="col col-sm-2"></div>
        <button type="submit" id="btn-aceptar" onclick="myFunction();"
            class="btn btn-primary col col-sm-2">Aceptar</button>
    </div>
</div>

@section('js')
    <script>
         // elementos coloreados obligatorios
         const elementos = ['clave_sat','activo','descripcion'];
        elementos.forEach(function(id) {
            const miElemento = new Identid(id);
            miElemento.cambiaColor();
        });
    </script>
@endsection