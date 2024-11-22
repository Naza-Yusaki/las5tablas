@extends('layouts.app')

@section('template_title')
    {{ $reserva->name ?? __('Show') . " " . __('Reserva') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Reserva</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('reservas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Reserva:</strong>
                                    {{ $reserva->id_reserva }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Usuario:</strong>
                                    {{ $reserva->id_usuario }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Libro:</strong>
                                    {{ $reserva->id_libro }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Reserva:</strong>
                                    {{ $reserva->fecha_reserva }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
