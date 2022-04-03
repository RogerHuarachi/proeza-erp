@extends('layouts.app')
@section('tittle')
    <div class="col-sm-6">
        <h1 class="m-0">ver</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('users.index') }}">usuarios</a></li>
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
                                {{ $user->name }}
                            </dd>
                            <dt class="col-sm-4">Correo</dt>
                            <dd class="col-sm-8">
                                {{ $user->email }}
                            </dd>
                            <dt class="col-sm-4">Rol</dt>
                            <dd class="col-sm-8">
                                @foreach ($user->roles as $role)
                                    <span class="badge bg-primary">{{ $role->slug }}</span>
                                @endforeach
                            </dd>
                            <dt class="col-sm-4">Agencia</dt>
                            <dd class="col-sm-8">
                                {{ $user->agency->name }}
                            </dd>
                            <dt class="col-sm-4">Estado</dt>
                            <dd class="col-sm-8">
                                @if ($user->active())
                                    Activo
                                @else
                                    Inactivo
                                @endif
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a class="btn btn-default" href="{{ route('users.index') }}">Atras</a>
            </div>
        </div>
    </div>
</div>
@endsection
