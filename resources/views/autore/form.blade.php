<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre_autor" class="form-label">{{ __('Nombre Autor') }}</label>
            <input type="text" name="nombre_autor" class="form-control @error('nombre_autor') is-invalid @enderror" value="{{ old('nombre_autor', $autore?->nombre_autor) }}" id="nombre_autor" placeholder="Nombre Autor">
            {!! $errors->first('nombre_autor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nacionalidad" class="form-label">{{ __('Nacionalidad') }}</label>
            <input type="text" name="nacionalidad" class="form-control @error('nacionalidad') is-invalid @enderror" value="{{ old('nacionalidad', $autore?->nacionalidad) }}" id="nacionalidad" placeholder="Nacionalidad">
            {!! $errors->first('nacionalidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_nacimiento" class="form-label">{{ __('Fecha Nacimiento') }}</label>
            <input type="text" name="fecha_nacimiento" class="form-control @error('fecha_nacimiento') is-invalid @enderror" value="{{ old('fecha_nacimiento', $autore?->fecha_nacimiento) }}" id="fecha_nacimiento" placeholder="Fecha Nacimiento">
            {!! $errors->first('fecha_nacimiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>