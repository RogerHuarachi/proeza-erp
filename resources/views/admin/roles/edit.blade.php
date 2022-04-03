@extends('layouts.app')
@section('tittle')
    <div class="col-sm-6">
        <h1 class="m-0">editar</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">roles</a></li>
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
            <form action="{{ route('roles.update', $role->id) }}" method="POST">
                {{ csrf_field() }}
                {{ @method_field('PUT') }}
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>slug</label>
                                <input type="text" class="form-control form-control-border"
                                placeholder="slug" name="name" value="{{ $role->name }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>nombre</label>
                                <input type="text" class="form-control form-control-border"
                                placeholder="nombre" name="slug" value="{{ $role->slug }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label>Permisos</label>
                            @foreach ($permissions as $permission)
                                @if ($role->hasPermissionTo($permission->name))
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $permission->name }}" checked>
                                        <label class="form-check-label">{{ $permission->slug }}</label>
                                    </div>
                                @else
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $permission->name }}">
                                        <label class="form-check-label">{{ $permission->slug }}</label>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a class="btn btn-default" href="{{ route('roles.index') }}">Atras</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
