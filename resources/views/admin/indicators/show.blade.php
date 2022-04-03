@extends('layouts.app')
@section('tittle')
    <div class="col-sm-6">
        <h1 class="m-0">ver</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('indicators.index') }}">indicatores</a></li>
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
                            <dt class="col-sm-4">Gestion</dt>
                            <dd class="col-sm-8">
                                {{ $indicator->month->year->name }}
                            </dd>
                            <dt class="col-sm-4">Mes</dt>
                            <dd class="col-sm-8">
                                {{ $indicator->month->name }}
                            </dd>
                            <dt class="col-sm-4">Agencia</dt>
                            <dd class="col-sm-8">
                                {{ $indicator->agency->name }}
                            </dd>
                            <dt class="col-sm-4">Capital  de Trabajo</dt>
                            <dd class="col-sm-8">
                                {{ $indicator->ct }} Bs
                            </dd>
                            <dt class="col-sm-4">Prueba Acida</dt>
                            <dd class="col-sm-8">
                                {{ $indicator->pa }} %
                            </dd>
                            <dt class="col-sm-4">ren</dt>
                            <dd class="col-sm-8">
                                {{ $indicator->ren }} %
                            </dd>
                            <dt class="col-sm-4">roe</dt>
                            <dd class="col-sm-8">
                                {{ $indicator->roe }} %
                            </dd>
                            <dt class="col-sm-4">roa</dt>
                            <dd class="col-sm-8">
                                {{ $indicator->roa }} %
                            </dd>
                            <dt class="col-sm-4">mora</dt>
                            <dd class="col-sm-8">
                                {{ $indicator->mora }} %
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a class="btn btn-default" href="{{ route('indicators.index') }}">Atras</a>
            </div>
        </div>
    </div>
</div>
@endsection
