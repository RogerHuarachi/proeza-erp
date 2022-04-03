@extends('layouts.app')
@section('tittle')
    <div class="col-sm-6">
        <h1 class="m-0">Gastos Admnistrativos</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ route('aadmins.year') }}">gestiones</a></li>
            <li class="breadcrumb-item"><a href="{{ route('aadmins.month', $month->year->id) }}">meses</a></li>
        <li class="breadcrumb-item active">gastos adm</li>
        </ol>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                @can('aadmins.create')
                    @if ($month->monthVerifo($month->name) == date('F'))
                        <form action="{{ route('aadmins.create', $month->id) }}" method="get">
                            <button type="submit" class="btn btn-success btn-xs">
                                <i class="fas fa-plus-circle"></i>
                                <span>Registrar</span>
                            </button>
                        </form>
                    @else
                        <button class="btn btn-success btn-xs">
                            <i class="fas fa-check"></i>
                            <span>Mes</span>
                        </button>
                    @endif
                @endcan
            </div>
            <div class="card-body table-responsive">
                <table id="example1" class="table table-sm table-bordered table-striped">
                    <thead class="">
                        <tr>
                            <th>Cliente</th>
                            <th>Monto</th>
                            <th>comision</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($administratives as $administrative)
                            <tr>
                                <td>{{ $administrative->name }}</td>
                                <td>{{ $administrative->money }}</td>
                                <td>{{ $administrative->comision }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Total</th>
                            <th>{{ $totalMoney }}</th>
                            <th>{{ $totalComision }}</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
