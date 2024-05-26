@extends('adminlte::page')

@section('title','Agregar Unidad de Medida')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Unidad de Medida</span>
                    </div>
                    @if ($message = Session::get('danger'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{ route('unidad-medidas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('unidad-medida.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
