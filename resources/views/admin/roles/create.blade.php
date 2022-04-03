@extends('layouts.app')
@section('tittle')
    <div class="col-sm-6">
        <h1 class="m-0">crear</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">roles</a></li>
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
            <form action="{{ route('roles.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>slug</label>
                                <input type="text" class="form-control form-control-border"
                                placeholder="slug" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>nombre</label>
                                <input type="text" class="form-control form-control-border"
                                placeholder="nombre" name="slug" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Permisos</label>
                                <div class="select2-primary">
                                  <select class="select2" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-primary" style="width: 100%;" name="permissions[]" required>
                                    @foreach ($permissions as $permission)
                                        <option value="{{ $permission->name }}">{{ $permission->slug }}</option>
                                    @endforeach
                                  </select>
                                </div>
                            </div>
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
