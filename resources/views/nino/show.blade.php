@extends('adminlte::page')

@section('template_title')
    {{ $nino->name ?? __('Show') . " " . __('Nino') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Nino</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('ninos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre Completo:</strong>
                                    {{ $nino->nombre_completo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Nacimiento:</strong>
                                    {{ $nino->fecha_nacimiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Direccion:</strong>
                                    {{ $nino->direccion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Telefono:</strong>
                                    {{ $nino->telefono }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado:</strong>
                                    {{ $nino->estado }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
