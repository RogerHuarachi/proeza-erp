<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta agency- name="viewport" content="width=device-width, initial-scale=1.0">
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
        <label>PLANILLA INTERESES ENERO</label>
    </div>
    <div class="row justify-content-center">
        <label>CALA CALA</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestscc1 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestscc1->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestsep1 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestsep1->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestspu1 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestspu1->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestscv1 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestscv1->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestsrs1 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestsrs1->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>





    <div class="row justify-content-center">
        <label>PLANILLA INTERESES FEBRERO</label>
    </div>
    <div class="row justify-content-center">
        <label>CALA CALA</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestscc2 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestscc1->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestsep2 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestsep1->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestspu2 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestspu1->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestscv2 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestscv1->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestsrs2 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestsrs2->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>





    <div class="row justify-content-center">
        <label>PLANILLA INTERESES MARZO</label>
    </div>
    <div class="row justify-content-center">
        <label>CALA CALA</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestscc3 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestscc1->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestsep3 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestsep1->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestspu3 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestspu1->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestscv3 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestscv1->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestsrs3 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestsrs3->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>





    <div class="row justify-content-center">
        <label>PLANILLA INTERESES ABRIL</label>
    </div>
    <div class="row justify-content-center">
        <label>CALA CALA</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestscc4 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestscc4->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestsep4 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestsep4->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestspu4 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestspu4->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestscv4 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestscv4->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestsrs4 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestsrs4->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>





    <div class="row justify-content-center">
        <label>PLANILLA INTERESES MAYO</label>
    </div>
    <div class="row justify-content-center">
        <label>CALA CALA</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestscc5 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestscc5->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestsep5 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestsep5->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestspu5 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestspu5->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestscv5 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestscv5->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestsrs5 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestsrs5->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>





    <div class="row justify-content-center">
        <label>PLANILLA INTERESES JUNIO</label>
    </div>
    <div class="row justify-content-center">
        <label>CALA CALA</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestscc6 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestscc6->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestsep6 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestsep6->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestspu6 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestspu6->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestscv6 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestscv6->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestsrs6 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestsrs6->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>





    <div class="row justify-content-center">
        <label>PLANILLA INTERESES JULIO</label>
    </div>
    <div class="row justify-content-center">
        <label>CALA CALA</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestscc7 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestscc7->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestsep7 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestsep7->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestspu7 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestspu7->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestscv7 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestscv7->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestsrs7 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestsrs7->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>





    <div class="row justify-content-center">
        <label>PLANILLA INTERESES AGOSTO</label>
    </div>
    <div class="row justify-content-center">
        <label>CALA CALA</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestscc8 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestscc8->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestsep8 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestsep8->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestspu8 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestspu8->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestscv8 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestscv8->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestsrs8 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestsrs8->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>





    <div class="row justify-content-center">
        <label>PLANILLA INTERESES SEPTIEMBRE</label>
    </div>
    <div class="row justify-content-center">
        <label>CALA CALA</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestscc9 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestscc9->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestsep9 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestsep9->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestspu9 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestspu9->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestscv9 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestscv9->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestsrs9 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestsrs9->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>





    <div class="row justify-content-center">
        <label>PLANILLA INTERESES OCTUBRE</label>
    </div>
    <div class="row justify-content-center">
        <label>CALA CALA</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestscc10 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestscc10->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestsep10 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestsep10->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestspu10 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestspu10->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestscv10 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestscv10->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestsrs10 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestsrs10->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>





    <div class="row justify-content-center">
        <label>PLANILLA INTERESES NOVIEMBRE</label>
    </div>
    <div class="row justify-content-center">
        <label>CALA CALA</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestscc11 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestscc11->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestsep11 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestsep11->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestspu11 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestspu11->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestscv11 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestscv11->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestsrs11 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestsrs11->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>





    <div class="row justify-content-center">
        <label>PLANILLA INTERESES DICIEMBRE</label>
    </div>
    <div class="row justify-content-center">
        <label>CALA CALA</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestscc12 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestscc12->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestsep12 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestsep12->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestspu12 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestspu12->sum('money') }}</th>
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
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestscv12 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestscv12->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Agencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interestsrs12 as $interest)
                    <tr>
                        <td>{{ $interest->agency->name }}</td>
                        <td>{{ $interest->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $interestsrs12->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>

    <div class="row justify-content-center">
        <div class="col">
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
    });
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
</script>
</body>
</html>
