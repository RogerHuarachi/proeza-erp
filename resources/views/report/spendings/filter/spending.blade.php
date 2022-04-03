@extends('layouts.app')
@section('tittle')
    <div class="col-sm-6">
        <h1 class="m-0">Gastos</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('reportSpending.year') }}">{{ $year->name }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('reportSpending.month', $month->year->id) }}">{{ $month->name }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('reportSpending.role', $month->id) }}">{{ $role->name }}</a></li>
        <li class="breadcrumb-item active">gastos</li>
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
                            <th>Categoria</th>
                            <th>Artículo</th>
                            <th>Monto</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($spendings as $spending)
                            <tr>
                                <td>{{ $spending->item->category->name }}</td>
                                <td>{{ $spending->item->name }}</td>
                                <td>{{ number_format($spending->money, 2, ',', '.') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr><th>#</th>
                            <th>Total</th>
                            <th>{{ number_format($total, 2, ',', '.') }}</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
