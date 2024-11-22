@extends('layouts.app')

@section('template_title')
    {{ $autore->name ?? __('Show') . " " . __('Autore') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Autore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('autores.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre Autor:</strong>
                                    {{ $autore->nombre_autor }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nacionalidad:</strong>
                                    {{ $autore->nacionalidad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Nacimiento:</strong>
                                    {{ $autore->fecha_nacimiento }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
