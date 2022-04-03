@extends('layouts.app')
@section('tittle')
    <div class="col-sm-6">
        <h1 class="m-0">Historico</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
        <li class="breadcrumb-item active">historico</li>
        </ol>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Historico de Cambios en Inversionistas
            </div>
            <div class="card-body table-responsive">
                <table id="example1" class="table table-sm table-bordered table-striped">
                    <thead class="">
                        <tr>
                            <th>Nombre</th>
                            <th>Estado</th>
                            <th>Fecha de Pago</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($changes as $change)
                            <tr>
                                <td>{{ $change->name }}</td>
                                <td>{{ $change->state }}</td>
                                <td>{{ $change->pay }}</td>
                                <td>
                                    <div class="btn-group">
                                        <form action="{{ route('changes.show', $change->id) }}" method="GET">
                                            <button class="btn btn-info btn-xs" type="submit"><i class="fas fa-eye"></i></button>
                                        </form>
                                        <form action="{{ route('changes.destroy', $change->id) }}" method="POST">
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
