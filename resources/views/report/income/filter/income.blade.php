@extends('layouts.app')
@section('tittle')
    <div class="col-sm-6">
        <h1 class="m-0">Ingresos</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('reportIncome.year') }}">{{ $year->name }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('reportIncome.month', $month->year->id) }}">{{ $month->name }}</a></li>
        <li class="breadcrumb-item active">ingresos</li>
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
                            <th>Interes</th>
                            <th>Gastos Adm</th>
                            <th>Ingresos</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($incomes as $income)
                            <tr>
                                <td>{{ $income->agency }}</td>
                                <td>{{ number_format($income->interest, 2, ',', '.') }}</td>
                                <td>{{ number_format($income->comision, 2, ',', '.') }}</td>
                                <td>{{ number_format($income->result, 2, ',', '.') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Total</th>
                            <th>{{ number_format($totalI, 2, ',', '.') }}</th>
                            <th>{{ number_format($totalC, 2, ',', '.') }}</th>
                            <th>{{ number_format($totalI + $totalC, 2, ',', '.') }}</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
