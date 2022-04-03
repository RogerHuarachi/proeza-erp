@extends('layouts.app')
@section('tittle')
    <div class="col-sm-6">
        <h1 class="m-0">crear</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('investors.index') }}">inversionistas</a></li>
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
            <form action="{{ route('investors.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" class="form-control form-control-border"
                                placeholder="Monto" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Estado</label>
                                <div class="select2-primary">
                                    <select class="select2" data-placeholder="Select a State" data-dropdown-css-class="select2-primary" style="width: 100%;" name="state" required>
                                        <option value="Vigente">Vigente</option>
                                        <option value="Cancelado">Cancelado</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Fecha de ingreso</label>
                                <input type="date" class="form-control form-control-border"
                                placeholder="Fecha de ingreso" name="deposit" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Monto</label>
                                <input type="text" class="form-control form-control-border"
                                placeholder="Monto" name="amount" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Moneda</label>
                                <div class="select2-primary">
                                    <select class="select2" data-placeholder="Select a State" data-dropdown-css-class="select2-primary" style="width: 100%;" name="money" required>
                                        <option value="Bs">Bs</option>
                                        <option value="$">$</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Tasa de Interes %</label>
                                <input type="text" class="form-control form-control-border"
                                placeholder="Tasa de Interes" name="ti" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Interes Mensual </label>
                                <input type="text" class="form-control form-control-border"
                                placeholder="Interes Mensual" name="interest" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Fecha de Pago</label>
                                <input type="date" class="form-control form-control-border"
                                placeholder="Fecha de Pago" name="pay" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Fecha de Vencimiento</label>
                                <input type="date" class="form-control form-control-border"
                                placeholder="Fecha de Vencimiento" name="expiration" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Comentario</label>
                                <input type="text" class="form-control form-control-border"
                                placeholder="Comentario" name="comentary" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a class="btn btn-default" href="{{ route('investors.index') }}">Atras</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
