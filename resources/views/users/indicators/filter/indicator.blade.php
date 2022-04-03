@extends('layouts.app')
@section('tittle')
    <div class="col-sm-6">
        <h1 class="m-0">Indicador</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ route('inadmins.year') }}">gestiones</a></li>
            <li class="breadcrumb-item"><a href="{{ route('inadmins.month', $month->year->id) }}">meses</a></li>
        <li class="breadcrumb-item active">indicador</li>
        </ol>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                @can('inadmins.create')
                    <form action="{{ route('inadmins.create', $month->id) }}" method="get">
                        <button type="submit" class="btn btn-success btn-xs">
                            <i class="fas fa-plus-circle"></i>
                            <span>Registrar</span>
                        </button>
                    </form>
                @endcan
            </div>
            <div class="card-body table-responsive">
                <table id="example1" class="table table-sm table-bordered table-striped">
                    <thead class="">
                        <tr>
                            <th>Agencia</th>
                            <th>Capital de Trabajo (Bs)</th>
                            <th>Prueba Acida (%)</th>
                            <th>Rentabilidad (%)</th>
                            <th>ROE (%)</th>
                            <th>ROA (%)</th>
                            <th>MORA (%)</th>
                            <th>Opciones (%)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($indicators as $indicator)
                            <tr>
                                <td>{{ $indicator->agency->name }}</td>
                                <td>{{ $indicator->ct }} Bs</td>
                                <td>{{ $indicator->pa }} %</td>
                                <td>{{ $indicator->ren }} %</td>
                                <td>{{ $indicator->roe }} %</td>
                                <td>{{ $indicator->roa }} %</td>
                                <td>{{ $indicator->mora }} %</td>
                                <td>
                                    <div class="btn-group">
                                        <form action="{{ route('inadmins.edit', $indicator->id) }}" method="GET">
                                            <button class="btn btn-warning btn-xs" type="submit"><i class="fas fa-edit"></i></button>
                                        </form>
                                        <form action="{{ route('inadmins.destroy', $indicator->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger btn-xs" type="button" onclick="if(confirm('Deseas continuar?')){ this.form.submit();}"><i class="fas fa-trash-alt"></i></button>
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
