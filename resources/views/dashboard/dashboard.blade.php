@extends('layouts.app')
@section('tittle')
    <div class="col-sm-6">
        <h1 class="m-0">Dashboard</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
        <li class="breadcrumb-item active">Dashboard v1</li>
        </ol>
    </div>
@endsection

@section('content')
{{-- Gastos --}}
<div class="row">
    <div class="col-lg-6">
        <div class="card card-info">
            <div class="card-header">
              <h5 class="card-title">Intereses de la Gestión</h5>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
              <div class="chart">
                <canvas id="interests" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card card-info">
            <div class="card-header">
              <h5 class="card-title">Gastos Administrativos de la gestión</h5>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
              <div class="chart">
                <canvas id="administratives" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="card card-info">
            <div class="card-header">
              <h5 class="card-title">Gastos de la Gestión</h5>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
              <div class="chart">
                <canvas id="spendings" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card card-info">
            <div class="card-header">
              <h5 class="card-title">Ingresos de la Gestión</h5>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
              <div class="chart">
                <canvas id="incomes" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="card card-info">
            <div class="card-header">
              <h5 class="card-title">Balance de la Gestión</h5>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
              <div class="chart">
                <canvas id="balances" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="card card-info">
            <div class="card-header">
              <h5 class="card-title" title="Determina los recursos financieros con que dispone la empresa, muestra si se tiene lo suficiente para operar sin sobresaltos y de forma eficiente. Cuanto más distante al valor 1 es mejor.">Capital de trabajo (Activo circulante/Pasivo circulante)</h5>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
              <div class="chart">
                <canvas id="capitalTrabajo" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card card-info">
            <div class="card-header">
              <h5 class="card-title" title="Indica si una empresa tiene efectivo suficiente para pagar sus deudas a corto plazo. Lo más recomendable es que el valor sea mayor que 1.">Prueba Acida (Disponible/Pasivo corto plazo)</h5>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
              <div class="chart">
                <canvas id="pruebaAcida" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="card card-info">
            <div class="card-header">
              <h5 class="card-title" title="Determina la capacidad que tiene la empresa para obtener utilidades sobre el total de sus ingresos. Cuanto más alto sea el valor es mucho mejor.">Margen de utilidad neta (Utilidad neta/Ingresos)</h5>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
              <div class="chart">
                <canvas id="ren" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card card-info">
            <div class="card-header">
              <h5 class="card-title" title="Permite determinar la capacidad que tiene una empresa para generar utilidades para sus propios accionistas, es uno de las ratios más importantes para los inversores.
              Los accionistas o inversionistas, en promedio consideran un ROE aceptable del 10% e inferior a éste es considerado deficiente.
              ">ROE (Reantabilidad Sobre Capital)</h5>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
              <div class="chart">
                <canvas id="roe" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="card card-info">
            <div class="card-header">
              <h5 class="card-title" title="Refleja la capacidad que tiene la empresa para generar utilidades con el total de sus activos. Para que una empresa sea considerada rentable, la cifra debe superar el 5%.">ROA (Rentabilidad Sobre Activos)</h5>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
              <div class="chart">
                <canvas id="roa" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card card-info">
            <div class="card-header">
              <h5 class="card-title" title="Incumplimiento en el pago de los montos adecuados de capital o intereses de un crédito, retraso del plan de pagos pactados con la entidad.">MORA</h5>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
              <div class="chart">
                <canvas id="mora" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function(){
        //gastos
        $.ajax({
            type:'get',
            url: '{{ url('dashboard/spending') }}',
            success: function (data) {
                var months = Object.keys(data);
                var spendings = Object.values(data);
                renderChart1(months, spendings);
            }
        });
        //gastos administrativos
        $.ajax({
            type:'get',
            url: '{{ url('dashboard/administrative') }}',
            success: function (data) {
                var months = Object.keys(data);
                var administratives = Object.values(data);
                renderChart2(months, administratives);
            }
        });
        //Intereses
        $.ajax({
            type:'get',
            url: '{{ url('dashboard/interest') }}',
            success: function (data) {
                var months = Object.keys(data);
                var interests = Object.values(data);
                renderChart3(months, interests);
            }
        });
        //ingresos
        $.ajax({
            type:'get',
            url: '{{ url('dashboard/income') }}',
            success: function (data) {
                var months = Object.keys(data);
                var incomes = Object.values(data);
                renderChart4(months, incomes);
            }
        });
        //ingresos
        $.ajax({
            type:'get',
            url: '{{ url('dashboard/balance') }}',
            success: function (data) {
                var months = Object.keys(data);
                var balances = Object.values(data);
                renderChart5(months, balances);
            }
        });
        //capital de trabajo
        $.ajax({
            type:'get',
            url: '{{ url('dashboard/ct') }}',
            success: function (data) {
                var mes = data[0];
                var na = data[1];
                var cc = data[2];
                var ep = data[3];
                var pu = data[4];
                var cv = data[5];
                var rs = data[6];
                renderChart6(mes, na, cc, ep, pu, cv, rs);
            }
        });
        //pa
        $.ajax({
            type:'get',
            url: '{{ url('dashboard/pa') }}',
            success: function (data) {
                var mes = data[0];
                var na = data[1];
                var cc = data[2];
                var ep = data[3];
                var pu = data[4];
                var cv = data[5];
                var rs = data[6];
                renderChart7(mes, na, cc, ep, pu, cv, rs);
            }
        });
        //ren
        $.ajax({
            type:'get',
            url: '{{ url('dashboard/ren') }}',
            success: function (data) {
                var mes = data[0];
                var na = data[1];
                var cc = data[2];
                var ep = data[3];
                var pu = data[4];
                var cv = data[5];
                var rs = data[6];
                renderChart8(mes, na, cc, ep, pu, cv, rs);
            }
        });
        //roe
        $.ajax({
            type:'get',
            url: '{{ url('dashboard/roe') }}',
            success: function (data) {
                var mes = data[0];
                var na = data[1];
                var cc = data[2];
                var ep = data[3];
                var pu = data[4];
                var cv = data[5];
                var rs = data[6];
                renderChart9(mes, na, cc, ep, pu, cv, rs);
            }
        });
        //roa
        $.ajax({
            type:'get',
            url: '{{ url('dashboard/roa') }}',
            success: function (data) {
                var mes = data[0];
                var na = data[1];
                var cc = data[2];
                var ep = data[3];
                var pu = data[4];
                var cv = data[5];
                var rs = data[6];
                renderChart10(mes, na, cc, ep, pu, cv, rs);
            }
        });
        //mora
        $.ajax({
            type:'get',
            url: '{{ url('dashboard/mora') }}',
            success: function (data) {
                var mes = data[0];
                var na = data[1];
                var cc = data[2];
                var ep = data[3];
                var pu = data[4];
                var cv = data[5];
                var rs = data[6];
                renderChart11(mes, na, cc, ep, pu, cv, rs);
            }
        });
    });
    //gastos
    var renderChart1 = function(labels, data){
        var ctx = document.getElementById('spendings').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [
                    {
                    label: 'Gastos',
                    data: data,
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor :  "rgba(60,141,188,0.9)",
                    }
                ]
            },
            options: {
                responsive              : true,
                scales: {
                    yAxes: [{
                        ticks: {
                            suggestedMin: 0,
                        }
                    }]
                }
            }
        });
    }
    //gastos administrativos
    var renderChart2 = function(labels, data){
        var ctx = document.getElementById('administratives').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [
                    {
                    label: 'Gastos Admnistrativos',
                    data: data,
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor :  "rgba(60,141,188,0.9)",
                    }
                ]
            },
            options: {
                responsive              : true,
                scales: {
                    yAxes: [{
                        ticks: {
                            suggestedMin: 0,
                        }
                    }]
                }
            }
        });
    }
    //gastos administrativos
    var renderChart3 = function(labels, data){
        var ctx = document.getElementById('interests').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [
                    {
                    label: 'Intereses',
                    data: data,
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor :  "rgba(60,141,188,0.9)",
                    }
                ]
            },
            options: {
                responsive              : true,
                scales: {
                    yAxes: [{
                        ticks: {
                            suggestedMin: 0,
                        }
                    }]
                }
            }
        });
    }
    //gastos administrativos
    var renderChart4 = function(labels, data){
        var ctx = document.getElementById('incomes').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [
                    {
                    label: 'Ingresos',
                    data: data,
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor :  "rgba(60,141,188,0.9)",
                    }
                ]
            },
            options: {
                responsive              : true,
                scales: {
                    yAxes: [{
                        ticks: {
                            suggestedMin: 0,
                        }
                    }]
                }
            }
        });
    }
    //gastos administrativos
    var renderChart5 = function(labels, data){
        var ctx = document.getElementById('balances').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [
                    {
                    label: 'Balance General',
                    data: data,
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor :  "rgba(60,141,188,0.9)",
                    }
                ]
            },
            options: {
                responsive              : true,
                scales: {
                    yAxes: [{
                        ticks: {
                            suggestedMin: 0,
                        }
                    }]
                }
            }
        });
    }
    //capital de trabajo
    var renderChart6 = function(mes, na, cc, ep, pu, cv, rs){
        var ctx = document.getElementById('capitalTrabajo').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: mes,
                datasets: [
                    {
                    label: 'Nacional',
                    data: na,
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "3",
                    backgroundColor :  "rgba(20,121,128,0)",
                    },
                    {
                    label: 'Cala Cala',
                    data: cc,
                    borderColor: "#00a65a",
                    borderWidth: "3",
                    backgroundColor :  "rgba(30,131,138,0)",
                    },
                    {
                    label: 'El Paso',
                    data: ep,
                    borderColor: "#f39c12",
                    borderWidth: "3",
                    backgroundColor :  "rgba(40,141,148,0)",
                    },
                    {
                    label: 'Punata',
                    data: pu,
                    borderColor: "#00c0ef",
                    borderWidth: "3",
                    backgroundColor :  "rgba(50,151,158,0)",
                    },
                    {
                    label: 'Casco Viejo',
                    data: cv,
                    borderColor: "#3c8dbc",
                    borderWidth: "3",
                    backgroundColor :  "rgba(60,161,168,0)",
                    },
                    {
                    label: 'Rio Seco',
                    data: rs,
                    borderColor: "#3c8dbc",
                    borderWidth: "3",
                    backgroundColor :  "rgba(60,161,168,0)",
                    }
                ]
            },
            options: {
                responsive              : true,
                scales: {
                    yAxes: [{
                        ticks: {
                            suggestedMin: 0,
                        }
                    }]
                }
            }
        });
    }
    //capital de trabajo
    var renderChart7 = function(mes, na, cc, ep, pu, cv, rs){
        var ctx = document.getElementById('pruebaAcida').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: mes,
                datasets: [
                    {
                    label: 'Nacional',
                    data: na,
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "3",
                    backgroundColor :  "rgba(20,121,128,0)",
                    },
                    {
                    label: 'Cala Cala',
                    data: cc,
                    borderColor: "#00a65a",
                    borderWidth: "3",
                    backgroundColor :  "rgba(30,131,138,0)",
                    },
                    {
                    label: 'El Paso',
                    data: ep,
                    borderColor: "#f39c12",
                    borderWidth: "3",
                    backgroundColor :  "rgba(40,141,148,0)",
                    },
                    {
                    label: 'Punata',
                    data: pu,
                    borderColor: "#00c0ef",
                    borderWidth: "3",
                    backgroundColor :  "rgba(50,151,158,0)",
                    },
                    {
                    label: 'Casco Viejo',
                    data: cv,
                    borderColor: "#3c8dbc",
                    borderWidth: "3",
                    backgroundColor :  "rgba(60,161,168,0)",
                    },
                    {
                    label: 'Rio Seco',
                    data: rs,
                    borderColor: "#3c8dbc",
                    borderWidth: "3",
                    backgroundColor :  "rgba(60,161,168,0)",
                    }
                ]
            },
            options: {
                responsive              : true,
                scales: {
                    yAxes: [{
                        ticks: {
                            suggestedMin: 0,
                        }
                    }]
                }
            }
        });
    }
    //ren
    var renderChart8 = function(mes, na, cc, ep, pu, cv, rs){
        var ctx = document.getElementById('ren').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: mes,
                datasets: [
                    {
                    label: 'Nacional',
                    data: na,
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "3",
                    backgroundColor :  "rgba(20,121,128,0)",
                    },
                    {
                    label: 'Cala Cala',
                    data: cc,
                    borderColor: "#00a65a",
                    borderWidth: "3",
                    backgroundColor :  "rgba(30,131,138,0)",
                    },
                    {
                    label: 'El Paso',
                    data: ep,
                    borderColor: "#f39c12",
                    borderWidth: "3",
                    backgroundColor :  "rgba(40,141,148,0)",
                    },
                    {
                    label: 'Punata',
                    data: pu,
                    borderColor: "#00c0ef",
                    borderWidth: "3",
                    backgroundColor :  "rgba(50,151,158,0)",
                    },
                    {
                    label: 'Casco Viejo',
                    data: cv,
                    borderColor: "#3c8dbc",
                    borderWidth: "3",
                    backgroundColor :  "rgba(60,161,168,0)",
                    },
                    {
                    label: 'Rio Seco',
                    data: rs,
                    borderColor: "#3c8dbc",
                    borderWidth: "3",
                    backgroundColor :  "rgba(60,161,168,0)",
                    }
                ]
            },
            options: {
                responsive              : true,
                scales: {
                    yAxes: [{
                        ticks: {
                            suggestedMin: 0,
                        }
                    }]
                }
            }
        });
    }
    //roe
    var renderChart9 = function(mes, na, cc, ep, pu, cv, rs){
        var ctx = document.getElementById('roe').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: mes,
                datasets: [
                    {
                    label: 'Nacional',
                    data: na,
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "3",
                    backgroundColor :  "rgba(20,121,128,0)",
                    },
                    {
                    label: 'Cala Cala',
                    data: cc,
                    borderColor: "#00a65a",
                    borderWidth: "3",
                    backgroundColor :  "rgba(30,131,138,0)",
                    },
                    {
                    label: 'El Paso',
                    data: ep,
                    borderColor: "#f39c12",
                    borderWidth: "3",
                    backgroundColor :  "rgba(40,141,148,0)",
                    },
                    {
                    label: 'Punata',
                    data: pu,
                    borderColor: "#00c0ef",
                    borderWidth: "3",
                    backgroundColor :  "rgba(50,151,158,0)",
                    },
                    {
                    label: 'Casco Viejo',
                    data: cv,
                    borderColor: "#3c8dbc",
                    borderWidth: "3",
                    backgroundColor :  "rgba(60,161,168,0)",
                    },
                    {
                    label: 'Rio Seco',
                    data: rs,
                    borderColor: "#3c8dbc",
                    borderWidth: "3",
                    backgroundColor :  "rgba(60,161,168,0)",
                    }
                ]
            },
            options: {
                responsive              : true,
                scales: {
                    yAxes: [{
                        ticks: {
                            suggestedMin: 0,
                        }
                    }]
                }
            }
        });
    }
    
    //roa
    var renderChart10 = function(mes, na, cc, ep, pu, cv, rs){
        var ctx = document.getElementById('roa').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: mes,
                datasets: [
                    {
                    label: 'Nacional',
                    data: na,
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "3",
                    backgroundColor :  "rgba(20,121,128,0)",
                    },
                    {
                    label: 'Cala Cala',
                    data: cc,
                    borderColor: "#00a65a",
                    borderWidth: "3",
                    backgroundColor :  "rgba(30,131,138,0)",
                    },
                    {
                    label: 'El Paso',
                    data: ep,
                    borderColor: "#f39c12",
                    borderWidth: "3",
                    backgroundColor :  "rgba(40,141,148,0)",
                    },
                    {
                    label: 'Punata',
                    data: pu,
                    borderColor: "#00c0ef",
                    borderWidth: "3",
                    backgroundColor :  "rgba(50,151,158,0)",
                    },
                    {
                    label: 'Casco Viejo',
                    data: cv,
                    borderColor: "#3c8dbc",
                    borderWidth: "3",
                    backgroundColor :  "rgba(60,161,168,0)",
                    },
                    {
                    label: 'Rio Seco',
                    data: rs,
                    borderColor: "#3c8dbc",
                    borderWidth: "3",
                    backgroundColor :  "rgba(60,161,168,0)",
                    }
                ]
            },
            options: {
                responsive              : true,
                scales: {
                    yAxes: [{
                        ticks: {
                            suggestedMin: 0,
                        }
                    }]
                }
            }
        });
    }
    //mora
    var renderChart11 = function(mes, na, cc, ep, pu, cv, rs){
        var ctx = document.getElementById('mora').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: mes,
                datasets: [
                    {
                    label: 'Nacional',
                    data: na,
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "3",
                    backgroundColor :  "rgba(20,121,128,0)",
                    },
                    {
                    label: 'Cala Cala',
                    data: cc,
                    borderColor: "#00a65a",
                    borderWidth: "3",
                    backgroundColor :  "rgba(30,131,138,0)",
                    },
                    {
                    label: 'El Paso',
                    data: ep,
                    borderColor: "#f39c12",
                    borderWidth: "3",
                    backgroundColor :  "rgba(40,141,148,0)",
                    },
                    {
                    label: 'Punata',
                    data: pu,
                    borderColor: "#00c0ef",
                    borderWidth: "3",
                    backgroundColor :  "rgba(50,151,158,0)",
                    },
                    {
                    label: 'Casco Viejo',
                    data: cv,
                    borderColor: "#3c8dbc",
                    borderWidth: "3",
                    backgroundColor :  "rgba(60,161,168,0)",
                    },
                    {
                    label: 'Rio Seco',
                    data: rs,
                    borderColor: "#3c8dbc",
                    borderWidth: "3",
                    backgroundColor :  "rgba(60,161,168,0)",
                    }
                ]
            },
            options: {
                responsive              : true,
                scales: {
                    yAxes: [{
                        ticks: {
                            suggestedMin: 0,
                        }
                    }]
                }
            }
        });
    }
</script>
@endsection
