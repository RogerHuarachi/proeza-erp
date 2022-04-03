@extends('layouts.app')
@section('tittle')
    <div class="col-sm-6">
        <h1 class="m-0">editar</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ route('inadmins.year') }}">gestiones</a></li>
            <li class="breadcrumb-item"><a href="{{ route('inadmins.month', $month->year->id) }}">meses</a></li>
            <li class="breadcrumb-item"><a href="{{ route('inadmins.indicator', $month->id) }}">intereses</a></li>
            <li class="breadcrumb-item active">editar</li>
        </ol>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col">
        @include('option.error')
        @include('option.validation')
        @include('option.confirmation')
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                formulario
            </div>
            <form action="{{ route('inadmins.update', $indicator->id) }}" method="POST">
                {{ csrf_field() }}
                {{ @method_field('PUT') }}
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Meses</label>
                                <div class="select2-primary">
                                    <select class="select2" data-placeholder="Select a State" data-dropdown-css-class="select2-primary" style="width: 100%;" name="month_id" required>
                                        <option value="{{ $indicator->month->id }}">{{ $indicator->month->name }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Agencias</label>
                                <div class="select2-primary">
                                    <select class="select2" data-placeholder="Select a State" data-dropdown-css-class="select2-primary" style="width: 100%;" name="agency_id" required>
                                        <option value="{{ $indicator->agency->id }}">{{ $indicator->agency->name }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Capital de Trabajo</label>
                                <input type="text" class="form-control form-control-border"
                                placeholder="Capital de Trabajo" name="ct" value="{{ $indicator->ct }}" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Prueba Acida</label>
                                <input type="text" class="form-control form-control-border"
                                placeholder="Prueba Acida" name="pa" value="{{ $indicator->pa }}" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Rentabilidad</label>
                                <input type="text" class="form-control form-control-border"
                                placeholder="Rentabilidad" name="ren" value="{{ $indicator->ren }}" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>ROE</label>
                                <input type="text" class="form-control form-control-border"
                                placeholder="ROE" name="roe" value="{{ $indicator->roe }}" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>ROA</label>
                                <input type="text" class="form-control form-control-border"
                                placeholder="ROA" name="roa" value="{{ $indicator->roa }}" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>MORA</label>
                                <input type="text" class="form-control form-control-border"
                                placeholder="MORA" name="mora" value="{{ $indicator->mora }}" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a class="btn btn-default" href="{{ route('inadmins.indicator', $month->id) }}">Atras</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
