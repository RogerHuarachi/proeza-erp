@extends('layouts.app')
@section('tittle')
    <div class="col-sm-6">
        <h1 class="m-0">Meses</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
        <li class="breadcrumb-item active">gestiones</li>
        <li class="breadcrumb-item active">meses</li>
        </ol>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Meses Disponibles
            </div>
            <div class="card-body table-responsive">
                <table id="example1" class="table table-sm table-bordered table-striped">
                    <thead class="">
                        <tr>
                            <th>#</th>
                            <th>Meses</th>
                            <th>Capital de Trabajo</th>
                            <th>Prueba Acida</th>
                            <th>Rentabilidad</th>
                            <th>ROE</th>
                            <th>ROA</th>
                            <th>MORA</th>
                            {{-- añadir columna en migracion de acumulado por mes --}}
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($months as $month)
                            <tr>
                                <td>{{ $month->id }}</td>
                                <td>{{ $month->name }}</td>
                                <td>{{ $month->indicators->sum('ct') }}</td>
                                <td>{{ $month->indicators->sum('pa') }}</td>
                                <td>{{ $month->indicators->sum('ren') }}</td>
                                <td>{{ $month->indicators->sum('roe') }}</td>
                                <td>{{ $month->indicators->sum('roa') }}</td>
                                <td>{{ $month->indicators->sum('mora') }}</td>
                                <td>
                                    <div class="btn-group">
                                        <form action="{{ route('inadmins.indicator', $month->id) }}" method="GET">
                                            <button class="btn btn-info btn-xs" type="submit"><i class="fas fa-eye"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
