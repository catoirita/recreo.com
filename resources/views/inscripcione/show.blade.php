@extends('adminlte::page')

@section('template_title')
    {{ $inscripcione->name ?? __('Show') . " " . __('Inscripcione') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Inscripcione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('inscripciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nino Id:</strong>
                                    {{ $inscripcione->nino_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Inscripcion:</strong>
                                    {{ $inscripcione->fecha_inscripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado:</strong>
                                    {{ $inscripcione->estado }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
