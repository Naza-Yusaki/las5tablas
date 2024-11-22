<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_reserva" class="form-label">{{ __('Id Reserva') }}</label>
            <input type="text" name="id_reserva" class="form-control @error('id_reserva') is-invalid @enderror" value="{{ old('id_reserva', $reserva?->id_reserva) }}" id="id_reserva" placeholder="Id Reserva">
            {!! $errors->first('id_reserva', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_usuario" class="form-label">{{ __('Id Usuario') }}</label>
            <input type="text" name="id_usuario" class="form-control @error('id_usuario') is-invalid @enderror" value="{{ old('id_usuario', $reserva?->id_usuario) }}" id="id_usuario" placeholder="Id Usuario">
            {!! $errors->first('id_usuario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_libro" class="form-label">{{ __('Id Libro') }}</label>
            <input type="text" name="id_libro" class="form-control @error('id_libro') is-invalid @enderror" value="{{ old('id_libro', $reserva?->id_libro) }}" id="id_libro" placeholder="Id Libro">
            {!! $errors->first('id_libro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_reserva" class="form-label">{{ __('Fecha Reserva') }}</label>
            <input type="text" name="fecha_reserva" class="form-control @error('fecha_reserva') is-invalid @enderror" value="{{ old('fecha_reserva', $reserva?->fecha_reserva) }}" id="fecha_reserva" placeholder="Fecha Reserva">
            {!! $errors->first('fecha_reserva', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>