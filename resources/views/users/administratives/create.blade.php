@extends('layouts.app')
@section('tittle')
    <div class="col-sm-6">
        <h1 class="m-0">crear</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('aadmins.year') }}">gestiones</a></li>
        <li class="breadcrumb-item"><a href="{{ route('aadmins.month', $month->year->id) }}">meses</a></li>
        <li class="breadcrumb-item"><a href="{{ route('aadmins.administrative', $month->id) }}">gastos adm</a></li>
        <li class="breadcrumb-item active">crear</li>
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
            <form action="{{ route('aadmins.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Meses</label>
                                <div class="select2-primary">
                                    <select class="select2" data-placeholder="Select a State" data-dropdown-css-class="select2-primary" style="width: 100%;" name="month_id" required>
                                        <option value="{{ $month->id }}">{{ $month->name }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Cliente</label>
                                <input type="text" class="form-control form-control-border"
                                onkeyup="javascript:this.value=this.value.toUpperCase();"
                                placeholder="Apellidos y Nombres" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Monto</label>
                                <input type="text" class="form-control form-control-border"
                                placeholder="Monto" name="money" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a class="btn btn-default" href="{{ route('aadmins.administrative', $month->id) }}">Atras</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
