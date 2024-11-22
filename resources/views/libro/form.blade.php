<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="titulo" class="form-label">{{ __('Titulo') }}</label>
            <input type="text" name="titulo" class="form-control @error('titulo') is-invalid @enderror" value="{{ old('titulo', $libro?->titulo) }}" id="titulo" placeholder="Titulo">
            {!! $errors->first('titulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_autor" class="form-label">{{ __('Id Autor') }}</label>
            <input type="text" name="id_autor" class="form-control @error('id_autor') is-invalid @enderror" value="{{ old('id_autor', $libro?->id_autor) }}" id="id_autor" placeholder="Id Autor">
            {!! $errors->first('id_autor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="genero" class="form-label">{{ __('Genero') }}</label>
            <input type="text" name="genero" class="form-control @error('genero') is-invalid @enderror" value="{{ old('genero', $libro?->genero) }}" id="genero" placeholder="Genero">
            {!! $errors->first('genero', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_publicacion" class="form-label">{{ __('Fecha Publicacion') }}</label>
            <input type="text" name="fecha_publicacion" class="form-control @error('fecha_publicacion') is-invalid @enderror" value="{{ old('fecha_publicacion', $libro?->fecha_publicacion) }}" id="fecha_publicacion" placeholder="Fecha Publicacion">
            {!! $errors->first('fecha_publicacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>