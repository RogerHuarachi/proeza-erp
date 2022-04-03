@extends('layouts.app')
@section('tittle')
    <div class="col-sm-6">
        <h1 class="m-0">Gastos Administrativos Agencias</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('reportAdministrative.year') }}">{{ $year->name }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('reportAdministrative.month', $month->year->id) }}">{{ $month->name }}</a></li>
        <li class="breadcrumb-item">agencias</li>
        </ol>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Reporte
            </div>
            <div class="card-body table-responsive">
                <table id="example1" class="table table-sm table-bordered table-striped">
                    <thead class="">
                        <tr>
                            <th>Agencias</th>
                            <th>Monto</th>
                            <th>Comision</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($administratives as $administrative)
                            <tr>
                                <td>{{ $administrative->name }}</td>
                                <td>{{ number_format($administrative->money, 2, ',', '.') }}</td>
                                <td>{{ number_format($administrative->comision, 2, ',', '.') }}</td>
                                <td>
                                    <div class="btn-group">
                                        <form action="{{ route('reportAdministrative.administrative', [$month->id, $administrative->id]) }}" method="GET">
                                            <button class="btn btn-info btn-xs" type="submit"><i class="fas fa-eye"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Total</th>
                            <th>{{ number_format($money, 2, ',', '.') }}</th>
                            <th>{{ number_format($comision, 2, ',', '.') }}</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
