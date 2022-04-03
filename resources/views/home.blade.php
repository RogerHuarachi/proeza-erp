@extends('layouts.app')
@section('tittle')
    <div class="col-sm-6">
        <h1 class="m-0">Inicio</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
        <li class="breadcrumb-item active">Dashboard v1</li>
        </ol>
    </div>
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <h3>Bienvenido</h3>
            </div>
            <div class="card-body">
                <label for="">Definición de un sistema ERP</label>
                <p>
                    El término ERP se refiere a Enterprise Resource Planning, que significa 
                    “sistema de planificación de recursos empresariales”. 
                    Estos programas se hacen cargo de distintas operaciones internas de una empresa, 
                    desde producción a distribución o incluso recursos humanos.
                </p>
                <label for="">Ventajas de un sistema ERP</label>
                <p>
                    <ul>
                        <li>Automatización de procesos de la empresa.</li>
                        <li>Disponibilidad de la información de la empresa en una misma plataforma.</li>
                        <li>Integración de las distintas bases de datos de una compañía en un solo programa.</li>
                        <li>Ahorro de tiempo y costes.</li>
                    </ul>
                </p>
                <label for="">PROEZA ERP</label>
                <p>
                    Con el objetivo de implementar un ERP en PROEZA se desarrollo de un sistema web escalable que gestione cada una de las areas de PROEZA
                     desde Gerencia General, los diferentes Departamentos, Jefaturas y Encargados de Sucursales.
                </p>
                <p>
                    PROEZA ERP se ciomenzo a desarrollar en marzo del 2021 con el objetivo de implementar el primer 
                    modulo para el Departamento contable, en en Mayo de la misma gestion se puso en marcha el Sistema PROEZA ERP
                    con el primer modulo dirigito especialmente al Departamento contable, recolectando datos y brindando inforamcion de los estados economicos de PROEZA.
                </p>
                <p>
                    PROEZA continua con el proceso de Transformacion Digital desarrollando otros modulos para las distintas areas.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
