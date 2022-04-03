<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
</head>
<body style="font-size: smaller">
    <div class="row justify-content-center">
        <img class="" src="{{ asset('dist/img/proeza.jpg') }}"  width="100">
    </div>

    <div class="row justify-content-center">
        <label>PLANILLA GASTOS ADMINISTRATIVOS ENERO</label>
    </div>
    <div class="row justify-content-center">
        <label>CALA CALA</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativescc1 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativescc1->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>EL PASO</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativesep1 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativesep1->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>PUNATA</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativespu1 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativespu1->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>CASCO VIEJO</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativescv1 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativescv1->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>RIO SECO</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativesrs1 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativesrs1->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>





    <div class="row justify-content-center">
        <label>PLANILLA GASTOS ADMINISTRATIVOS FEBRERO</label>
    </div>
    <div class="row justify-content-center">
        <label>CALA CALA</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativescc2 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativescc1->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>EL PASO</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativesep2 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativesep1->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>PUNATA</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativespu2 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativespu1->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>CASCO VIEJO</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativescv2 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativescv1->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativesrs2 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativesrs2->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>





    <div class="row justify-content-center">
        <label>PLANILLA GASTOS ADMINISTRATIVOS MARZO</label>
    </div>
    <div class="row justify-content-center">
        <label>CALA CALA</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativescc3 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativescc1->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>EL PASO</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativesep3 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativesep1->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>PUNATA</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativespu3 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativespu1->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>CASCO VIEJO</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativescv3 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativescv1->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativesrs3 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativesrs3->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>





    <div class="row justify-content-center">
        <label>PLANILLA GASTOS ADMINISTRATIVOS ABRIL</label>
    </div>
    <div class="row justify-content-center">
        <label>CALA CALA</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativescc4 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativescc4->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>EL PASO</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativesep4 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativesep4->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>PUNATA</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativespu4 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativespu4->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>CASCO VIEJO</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativescv4 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativescv4->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativesrs4 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativesrs4->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>





    <div class="row justify-content-center">
        <label>PLANILLA GASTOS ADMINISTRATIVOS MAYO</label>
    </div>
    <div class="row justify-content-center">
        <label>CALA CALA</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativescc5 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativescc5->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>EL PASO</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativesep5 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativesep5->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>PUNATA</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativespu5 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativespu5->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>CASCO VIEJO</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativescv5 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativescv5->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativesrs5 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativesrs5->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>





    <div class="row justify-content-center">
        <label>PLANILLA GASTOS ADMINISTRATIVOS JUNIO</label>
    </div>
    <div class="row justify-content-center">
        <label>CALA CALA</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativescc6 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativescc6->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>EL PASO</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativesep6 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativesep6->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>PUNATA</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativespu6 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativespu6->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>CASCO VIEJO</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativescv6 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativescv6->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativesrs6 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativesrs6->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>





    <div class="row justify-content-center">
        <label>PLANILLA GASTOS ADMINISTRATIVOS JULIO</label>
    </div>
    <div class="row justify-content-center">
        <label>CALA CALA</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativescc7 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativescc7->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>EL PASO</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativesep7 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativesep7->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>PUNATA</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativespu7 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativespu7->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>CASCO VIEJO</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativescv7 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativescv7->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativesrs7 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativesrs7->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>





    <div class="row justify-content-center">
        <label>PLANILLA GASTOS ADMINISTRATIVOS AGOSTO</label>
    </div>
    <div class="row justify-content-center">
        <label>CALA CALA</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativescc8 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativescc8->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>EL PASO</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativesep8 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativesep8->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>PUNATA</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativespu8 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativespu8->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>CASCO VIEJO</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativescv8 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativescv8->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativesrs8 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativesrs8->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>





    <div class="row justify-content-center">
        <label>PLANILLA GASTOS ADMINISTRATIVOS SEPTIEMBRE</label>
    </div>
    <div class="row justify-content-center">
        <label>CALA CALA</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativescc9 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativescc9->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>EL PASO</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativesep9 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativesep9->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>PUNATA</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativespu9 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativespu9->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>CASCO VIEJO</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativescv9 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativescv9->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativesrs9 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativesrs9->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>





    <div class="row justify-content-center">
        <label>PLANILLA GASTOS ADMINISTRATIVOS OCTUBRE</label>
    </div>
    <div class="row justify-content-center">
        <label>CALA CALA</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativescc10 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativescc10->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>EL PASO</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativesep10 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativesep10->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>PUNATA</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativespu10 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativespu10->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>CASCO VIEJO</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativescv10 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativescv10->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativesrs10 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativesrs10->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>





    <div class="row justify-content-center">
        <label>PLANILLA GASTOS ADMINISTRATIVOS NOVIEMBRE</label>
    </div>
    <div class="row justify-content-center">
        <label>CALA CALA</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativescc11 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativescc11->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>EL PASO</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativesep11 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativesep11->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>PUNATA</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativespu11 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativespu11->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>CASCO VIEJO</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativescv11 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativescv11->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativesrs11 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativesrs11->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>





    <div class="row justify-content-center">
        <label>PLANILLA GASTOS ADMINISTRATIVOS DICIEMBRE</label>
    </div>
    <div class="row justify-content-center">
        <label>CALA CALA</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativescc12 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativescc12->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>EL PASO</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativesep12 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativesep12->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>PUNATA</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativespu12 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativespu12->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>CASCO VIEJO</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativescv12 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativescv12->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Comision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrativesrs12 as $administrative)
                    <tr>
                        <td>{{ $administrative->name }}</td>
                        <td>{{ $administrative->money }}</td>
                        <td>{{ $administrative->comision }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $administrativesrs12->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>

    <div class="row justify-content-center">
        <div class="col">
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



<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
<script>
    $(document).ready(function(){
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
    });
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
</script>
</body>
</html>
