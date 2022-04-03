@extends('layouts.app')
@section('tittle')
    <div class="col-sm-6">
        <h1 class="m-0">Gastos</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('eadmins.year') }}">gestiones</a></li>
        <li class="breadcrumb-item"><a href="{{ route('eadmins.month', $month->year->id) }}">{{ $month->name }}</a></li>
        <li class="breadcrumb-item">gastos</li>
        </ol>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                @can('eadmins.create')
                    {{-- @if ($month->monthVerifo($month->name) == date('F')) --}}
                        <form action="{{ route('eadmins.create', $month->id) }}" method="get">
                            <button type="submit" class="btn btn-success btn-xs">
                                <i class="fas fa-plus-circle"></i>
                                <span>Registrar</span>
                            </button>
                        </form>
                    {{-- @else
                        <button class="btn btn-success btn-xs">
                            <i class="fas fa-check"></i>
                            <span>Mes</span>
                        </button>
                    @endif --}}
                @endcan
            </div>
            <div class="card-body table-responsive">
                <table id="example1" class="table table-sm table-bordered table-striped">
                    <thead class="">
                        <tr>
                            <th>Categoria</th>
                            <th>Artículo</th>
                            <th>Monto</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($spendings as $spending)
                            <tr>
                                <td>{{ $spending->item->category->name }}</td>
                                <td>{{ $spending->item->name }}</td>
                                <td>{{ $spending->money }}</td>
                                <td>
                                    <div class="btn-group">
                                        <form action="{{ route('eadmins.edit', $spending->id) }}" method="GET">
                                            <button class="btn btn-warning btn-xs" type="submit"><i class="fas fa-edit"></i></button>
                                        </form>
                                        <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#spendingSum{{ $spending->id }}"><i class="fas fa-plus"></i></button>
                                        @include('users.spendings.sum')
                                        <form action="{{ route('eadmins.destroy', $spending->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger btn-xs" type="button" onclick="if(confirm('Deseas continuar?')){ this.form.submit();}"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="2">Total</th>
                            <th>{{ $total }}</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
