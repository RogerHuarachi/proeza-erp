@extends('layouts.app')
@section('tittle')
    <div class="col-sm-6">
        <h1 class="m-0">Gastos por Roles</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('reportSpending.year') }}">{{ $year->name }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('reportSpending.month', $month->year->id) }}">{{ $month->name }}</a></li>
        <li class="breadcrumb-item">gastos</li>
        </ol>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Roles Disponibles
            </div>
            <div class="card-body table-responsive">
                <table id="example1" class="table table-sm table-bordered table-striped">
                    <thead class="">
                        <tr>
                            <th>Rol</th>
                            <th>Total</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($spendings as $spending)
                            <tr>
                                <td>{{ $spending->name }}</td>
                                <td>{{ number_format($spending->total, 2, ',', '.') }}</td>
                                <td>
                                    <div class="btn-group">
                                        <form action="{{ route('reportSpending.spending', [$month->id, $spending->name]) }}" method="GET">
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
                            <th>{{ number_format($total, 2, ',', '.') }}</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
