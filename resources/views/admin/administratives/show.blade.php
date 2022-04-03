@extends('layouts.app')
@section('tittle')
    <div class="col-sm-6">
        <h1 class="m-0">ver</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('administratives.index') }}">gastos admin</a></li>
        <li class="breadcrumb-item active">ver</li>
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
                Detalles
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <dl class="row">
                            <dt class="col-sm-4">Cliente</dt>
                            <dd class="col-sm-8">
                                {{ $administrative->name }}
                            </dd>
                            <dt class="col-sm-4">Money</dt>
                            <dd class="col-sm-8">
                                {{ $administrative->money }}
                            </dd>
                            <dt class="col-sm-4">Comision</dt>
                            <dd class="col-sm-8">
                                {{ $administrative->comision }}
                            </dd>
                            <dt class="col-sm-4">Mes</dt>
                            <dd class="col-sm-8">
                                {{ $administrative->month->name }}
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a class="btn btn-default" href="{{ route('administratives.index') }}">Atras</a>
            </div>
        </div>
    </div>
</div>
@endsection
