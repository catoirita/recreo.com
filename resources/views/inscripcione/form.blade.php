<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nino_id" class="form-label">{{ __('Nino Id') }}</label>
            <input type="text" name="nino_id" class="form-control @error('nino_id') is-invalid @enderror" value="{{ old('nino_id', $inscripcione?->nino_id) }}" id="nino_id" placeholder="Nino Id">
            {!! $errors->first('nino_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
          <div class="form-group mb-2 mb20">
            <label for="tutor_id" class="form-label">{{ __('Tutor Id') }}</label>
            <input type="text" name="tutor_id" class="form-control @error('tutor_id') is-invalid @enderror" value="{{ old('tutor_id', $inscripcione?->tutor_id) }}" id="tutor_id" placeholder="Tutor Id">
            {!! $errors->first('tutor_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_inscripcion" class="form-label">{{ __('Fecha Inscripcion') }}</label>
            <input type="date" name="fecha_inscripcion" class="form-control @error('fecha_inscripcion') is-invalid @enderror" value="{{ old('fecha_inscripcion', $inscripcione?->fecha_inscripcion) }}" id="fecha_inscripcion" placeholder="Fecha Inscripcion">
            {!! $errors->first('fecha_inscripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <h2>DETALLE DE INSCRIPCION </h2>
        
        <div class="form-group mb-2 mb20">
            <label for="programas_id" class="form-label">{{ __('Programas Id') }}</label>
            <input type="text" name="programas_id" class="form-control @error('programas_id') is-invalid @enderror" value="{{ old('programas_id', $inscripcione?->programas_id) }}" id="programas_id" placeholder="Programas Id">
            {!! $errors->first('programas_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado" class="form-label">{{ __('Estado') }}</label>
            <input type="text" name="estado" class="form-control @error('estado') is-invalid @enderror" value="{{ old('estado', $inscripcione?->estado) }}" id="estado" placeholder="Estado">
            {!! $errors->first('estado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>