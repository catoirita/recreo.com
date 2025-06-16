@extends('adminlte::page')

@section('template_title')
    {{ $tutore->name ?? __('Show') . " " . __('Tutore') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tutore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('tutores.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nino Id:</strong>
                                    {{ $tutore->nino_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre Completo:</strong>
                                    {{ $tutore->nombre_completo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado:</strong>
                                    {{ $tutore->estado }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
