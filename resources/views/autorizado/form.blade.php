<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nino_id" class="form-label">{{ __('Nino Id') }}</label>
            <input type="text" name="nino_id" class="form-control @error('nino_id') is-invalid @enderror" value="{{ old('nino_id', $autorizado?->nino_id) }}" id="nino_id" placeholder="Nino Id">
            {!! $errors->first('nino_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre_autorizado" class="form-label">{{ __('Nombre Autorizado') }}</label>
            <input type="text" name="nombre_autorizado" class="form-control @error('nombre_autorizado') is-invalid @enderror" value="{{ old('nombre_autorizado', $autorizado?->nombre_autorizado) }}" id="nombre_autorizado" placeholder="Nombre Autorizado">
            {!! $errors->first('nombre_autorizado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="telefono" class="form-label">{{ __('Telefono') }}</label>
            <input type="text" name="telefono" class="form-control @error('telefono') is-invalid @enderror" value="{{ old('telefono', $autorizado?->telefono) }}" id="telefono" placeholder="Telefono">
            {!! $errors->first('telefono', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="parentesco" class="form-label">{{ __('Parentesco') }}</label>
            <input type="text" name="parentesco" class="form-control @error('parentesco') is-invalid @enderror" value="{{ old('parentesco', $autorizado?->parentesco) }}" id="parentesco" placeholder="Parentesco">
            {!! $errors->first('parentesco', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado" class="form-label">{{ __('Estado') }}</label>
            <input type="text" name="estado" class="form-control @error('estado') is-invalid @enderror" value="{{ old('estado', $autorizado?->estado) }}" id="estado" placeholder="Estado">
            {!! $errors->first('estado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>