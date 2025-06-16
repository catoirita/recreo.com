@extends('adminlte::page')

@section('template_title')
    {{ $autorizado->name ?? __('Show') . " " . __('Autorizado') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Autorizado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('autorizados.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nino Id:</strong>
                                    {{ $autorizado->nino_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre Autorizado:</strong>
                                    {{ $autorizado->nombre_autorizado }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Telefono:</strong>
                                    {{ $autorizado->telefono }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Parentesco:</strong>
                                    {{ $autorizado->parentesco }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado:</strong>
                                    {{ $autorizado->estado }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
