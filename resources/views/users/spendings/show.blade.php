@extends('layouts.app')
@section('tittle')
    <div class="col-sm-6">
        <h1 class="m-0">ver</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ route('eadmins.year') }}">gestiones</a></li>
            <li class="breadcrumb-item"><a href="{{ route('eadmins.month', $spending->month->year->id) }}">meses</a></li>
            <li class="breadcrumb-item"><a href="{{ route('eadmins.spending', $spending->month->id) }}">gastos</a></li>
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
                            <dt class="col-sm-4">Rol</dt>
                            <dd class="col-sm-8">
                                {{ $spending->item->category->role->name }}
                            </dd>
                            <dt class="col-sm-4">Categoria</dt>
                            <dd class="col-sm-8">
                                {{ $spending->item->category->name }}
                            </dd>
                            <dt class="col-sm-4">Artículo</dt>
                            <dd class="col-sm-8">
                                {{ $spending->item->name }}
                            </dd>
                            <dt class="col-sm-4">Gasto</dt>
                            <dd class="col-sm-8">
                                {{ $spending->money }}
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a class="btn btn-default" href="{{ route('eadmins.spending', $spending->month->id) }}">Atras</a>
            </div>
        </div>
    </div>
</div>
@endsection
