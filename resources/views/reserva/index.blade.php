@extends('layouts.app')

@section('template_title')
    Reservas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Reservas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('reservas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        <th>Id Reserva</th>
                                        <th>Id Usuario</th>
                                        <th>Id Libro</th>
                                        <th>Fecha Reserva</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reservas as $reserva)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $reserva->id_reserva }}</td>
                                            <td>{{ $reserva->id_usuario }}</td>
                                            <td>{{ $reserva->id_libro }}</td>
                                            <td>{{ $reserva->fecha_reserva }}</td>

                                            <td>
                                                <form action="{{ route('reservas.destroy', $reserva->id_reserva) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('reservas.show', $reserva->id_reserva) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('reservas.edit', $reserva->id_reserva) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $reservas->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
