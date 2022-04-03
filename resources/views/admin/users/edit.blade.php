@extends('layouts.app')
@section('tittle')
    <div class="col-sm-6">
        <h1 class="m-0">editar</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('users.index') }}">roles</a></li>
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
            <form action="{{ route('users.update', $user->id) }}" method="POST">
                {{ csrf_field() }}
                {{ @method_field('PUT') }}
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>nombre completo</label>
                                <input type="text" class="form-control form-control-border"
                                placeholder="Apellidos Nombres" name="name" value="{{ $user->name }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>correo</label>
                                <input type="email" class="form-control form-control-border"
                                placeholder="Correo" name="email" value="{{ $user->email }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>contraseña</label>
                                <input type="password" class="form-control form-control-border"
                                placeholder="Contraseña" name="password" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>confirmar contraseña</label>
                                <input type="password" class="form-control form-control-border"
                                placeholder="Confirmar Contraseña" name="password_confirmation">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Rol</label>
                                @foreach ($roles as $role)
                                    @if ($user->hasRole($role->name))
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="role"  value="{{ $role->name }}" checked>
                                            <label class="form-check-label">{{ $role->slug }}</label>
                                        </div>
                                    @else
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="role" value="{{ $role->name }}" >
                                            <label class="form-check-label">{{ $role->slug }}</label>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Agencia</label>
                                <div class="select2-primary">
                                  <select class="select2" data-placeholder="Select a State" data-dropdown-css-class="select2-primary" style="width: 100%;" name="agency_id" required>
                                    <option value="{{ $user->agency->id }}">{{ $user->agency->name }}</option>
                                    @foreach ($agencies as $agency)
                                        <option value="{{ $agency->id }}">{{ $agency->name }}</option>
                                    @endforeach
                                  </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a class="btn btn-default" href="{{ route('users.index') }}">Atras</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
