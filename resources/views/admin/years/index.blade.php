@extends('layouts.app')
@section('tittle')
    <div class="col-sm-6">
        <h1 class="m-0">gestiones</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
        <li class="breadcrumb-item active">gestiones</li>
        </ol>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                @can('years.create')
                    <form action="{{ route('years.create') }}" method="get">
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
                            <th>Gestión</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($years as $year)
                            <tr>
                                <td>{{ $year->id }}</td>
                                <td>{{ $year->name }}</td>
                                <td>
                                    <div class="btn-group">
                                        <form action="{{ route('years.show', $year->id) }}" method="GET">
                                            <button class="btn btn-info btn-xs" type="submit"><i class="fas fa-eye"></i></button>
                                        </form>
                                        <form action="{{ route('years.edit', $year->id) }}" method="GET">
                                            <button class="btn btn-warning btn-xs" type="submit"><i class="fas fa-edit"></i></button>
                                        </form>
                                        <form action="{{ route('years.destroy', $year->id) }}" method="POST">
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
