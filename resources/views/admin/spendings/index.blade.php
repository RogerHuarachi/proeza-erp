@extends('layouts.app')
@section('tittle')
    <div class="col-sm-6">
        <h1 class="m-0">gastos</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
        <li class="breadcrumb-item active">gastos</li>
        </ol>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                @can('spendings.create')
                    <form action="{{ route('spendings.create') }}" method="get">
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
                            <th>#</th>
                            <th>Rol</th>
                            <th>Categoria</th>
                            <th>Articúlo</th>
                            <th>Mes</th>
                            <th>Monto</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($spendings as $spending)
                            <tr>
                                <td>{{ $spending->id }}</td>
                                <td>{{ $spending->item->category->role->name }}</td>
                                <td>{{ $spending->item->category->name }}</td>
                                <td>{{ $spending->item->name }}</td>
                                <td>{{ $spending->month->name }}</td>
                                <td>{{ $spending->money }}</td>
                                <td>
                                    <div class="btn-group">
                                        <form action="{{ route('spendings.show', $spending->id) }}" method="GET">
                                            <button class="btn btn-info btn-xs" type="submit"><i class="fas fa-eye"></i></button>
                                        </form>
                                        <form action="{{ route('spendings.edit', $spending->id) }}" method="GET">
                                            <button class="btn btn-warning btn-xs" type="submit"><i class="fas fa-edit"></i></button>
                                        </form>
                                        <form action="{{ route('spendings.destroy', $spending->id) }}" method="POST">
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
