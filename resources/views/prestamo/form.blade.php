<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_prestamo" class="form-label">{{ __('Id Prestamo') }}</label>
            <input type="text" name="id_prestamo" class="form-control @error('id_prestamo') is-invalid @enderror" value="{{ old('id_prestamo', $prestamo?->id_prestamo) }}" id="id_prestamo" placeholder="Id Prestamo">
            {!! $errors->first('id_prestamo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_usuario" class="form-label">{{ __('Id Usuario') }}</label>
            <input type="text" name="id_usuario" class="form-control @error('id_usuario') is-invalid @enderror" value="{{ old('id_usuario', $prestamo?->id_usuario) }}" id="id_usuario" placeholder="Id Usuario">
            {!! $errors->first('id_usuario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_libro" class="form-label">{{ __('Id Libro') }}</label>
            <input type="text" name="id_libro" class="form-control @error('id_libro') is-invalid @enderror" value="{{ old('id_libro', $prestamo?->id_libro) }}" id="id_libro" placeholder="Id Libro">
            {!! $errors->first('id_libro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_prestamo" class="form-label">{{ __('Fecha Prestamo') }}</label>
            <input type="text" name="fecha_prestamo" class="form-control @error('fecha_prestamo') is-invalid @enderror" value="{{ old('fecha_prestamo', $prestamo?->fecha_prestamo) }}" id="fecha_prestamo" placeholder="Fecha Prestamo">
            {!! $errors->first('fecha_prestamo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_devolucion" class="form-label">{{ __('Fecha Devolucion') }}</label>
            <input type="text" name="fecha_devolucion" class="form-control @error('fecha_devolucion') is-invalid @enderror" value="{{ old('fecha_devolucion', $prestamo?->fecha_devolucion) }}" id="fecha_devolucion" placeholder="Fecha Devolucion">
            {!! $errors->first('fecha_devolucion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>