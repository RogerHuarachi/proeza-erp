@extends('layouts.app')
@section('tittle')
    <div class="col-sm-6">
        <h1 class="m-0">ver</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('investors.index') }}">intereses</a></li>
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
                            <dt class="col-sm-4">Nombre</dt>
                            <dd class="col-sm-8">
                                {{ $investor->name }}
                            </dd>
                            <dt class="col-sm-4">Estado</dt>
                            <dd class="col-sm-8">
                                {{ $investor->state }}
                            </dd>
                            <dt class="col-sm-4">Fecha de Ingreso</dt>
                            <dd class="col-sm-8">
                                {{ $investor->deposit }}
                            </dd>
                            <dt class="col-sm-4">Monto</dt>
                            <dd class="col-sm-8">
                                {{ $investor->amount }}
                            </dd>
                            <dt class="col-sm-4">Moneda</dt>
                            <dd class="col-sm-8">
                                {{ $investor->money }}
                            </dd>
                            <dt class="col-sm-4">Tasa de Interes</dt>
                            <dd class="col-sm-8">
                                {{ $investor->ti }}
                            </dd>
                            <dt class="col-sm-4">Interes Mensual</dt>
                            <dd class="col-sm-8">
                                {{ $investor->interest }}
                            </dd>
                            <dt class="col-sm-4">Fecha de Pago</dt>
                            <dd class="col-sm-8">
                                {{ $investor->pay }}
                            </dd>
                            <dt class="col-sm-4">Fecha de Vencimiento</dt>
                            <dd class="col-sm-8">
                                {{ $investor->expiration }}
                            </dd>
                            <dt class="col-sm-4">Comentario</dt>
                            <dd class="col-sm-8">
                                {{ $investor->comentary }}
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a class="btn btn-default" href="{{ route('investors.index') }}">Atras</a>
            </div>
        </div>
    </div>
</div>
@endsection
