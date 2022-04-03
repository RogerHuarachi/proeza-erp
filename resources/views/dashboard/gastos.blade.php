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
        <label>PLANILLA GASTOS ENERO</label>
    </div>
    <div class="row justify-content-center">
        <label>GERENCIA GENERAL</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingsgg1 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingsgg1->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>RECURSOS HUMANOS</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingsrrhh1 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingsrrhh1->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>CONTABILIDAD</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingscon1 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingscon1->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>OPERACIONES</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingsope1 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingsope1->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>





    <div class="row justify-content-center">
        <label>PLANILLA GASTOS FEBRERO</label>
    </div>
    <div class="row justify-content-center">
        <label>GERENCIA GENERAL</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingsgg2 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingsgg1->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>RECURSOS HUMANOS</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingsrrhh2 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingsrrhh1->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>CONTABILIDAD</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingscon2 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingscon1->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>OPERACIONES</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingsope2 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingsope1->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>





    <div class="row justify-content-center">
        <label>PLANILLA GASTOS MARZO</label>
    </div>
    <div class="row justify-content-center">
        <label>GERENCIA GENERAL</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingsgg3 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingsgg1->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>RECURSOS HUMANOS</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingsrrhh3 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingsrrhh1->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>CONTABILIDAD</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingscon3 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingscon1->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>OPERACIONES</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingsope3 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingsope1->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>





    <div class="row justify-content-center">
        <label>PLANILLA GASTOS ABRIL</label>
    </div>
    <div class="row justify-content-center">
        <label>GERENCIA GENERAL</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingsgg4 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingsgg4->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>RECURSOS HUMANOS</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingsrrhh4 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingsrrhh4->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>CONTABILIDAD</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingscon4 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingscon4->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>OPERACIONES</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingsope4 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingsope4->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>





    <div class="row justify-content-center">
        <label>PLANILLA GASTOS MAYO</label>
    </div>
    <div class="row justify-content-center">
        <label>GERENCIA GENERAL</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingsgg5 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingsgg5->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>RECURSOS HUMANOS</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingsrrhh5 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingsrrhh5->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>CONTABILIDAD</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingscon5 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingscon5->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>OPERACIONES</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingsope5 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingsope5->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>





    <div class="row justify-content-center">
        <label>PLANILLA GASTOS JUNIO</label>
    </div>
    <div class="row justify-content-center">
        <label>GERENCIA GENERAL</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingsgg6 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingsgg6->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>RECURSOS HUMANOS</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingsrrhh6 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingsrrhh6->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>CONTABILIDAD</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingscon6 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingscon6->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>OPERACIONES</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingsope6 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingsope6->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>





    <div class="row justify-content-center">
        <label>PLANILLA GASTOS JULIO</label>
    </div>
    <div class="row justify-content-center">
        <label>GERENCIA GENERAL</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingsgg7 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingsgg7->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>RECURSOS HUMANOS</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingsrrhh7 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingsrrhh7->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>CONTABILIDAD</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingscon7 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingscon7->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>OPERACIONES</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingsope7 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingsope7->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>





    <div class="row justify-content-center">
        <label>PLANILLA GASTOS AGOSTO</label>
    </div>
    <div class="row justify-content-center">
        <label>GERENCIA GENERAL</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingsgg8 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingsgg8->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>RECURSOS HUMANOS</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingsrrhh8 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingsrrhh8->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>CONTABILIDAD</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingscon8 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingscon8->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>OPERACIONES</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingsope8 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingsope8->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>





    <div class="row justify-content-center">
        <label>PLANILLA GASTOS SEPTIEMBRE</label>
    </div>
    <div class="row justify-content-center">
        <label>GERENCIA GENERAL</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingsgg9 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingsgg9->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>RECURSOS HUMANOS</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingsrrhh9 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingsrrhh9->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>CONTABILIDAD</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingscon9 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingscon9->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>OPERACIONES</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingsope9 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingsope9->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>





    <div class="row justify-content-center">
        <label>PLANILLA GASTOS OCTUBRE</label>
    </div>
    <div class="row justify-content-center">
        <label>GERENCIA GENERAL</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingsgg10 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingsgg10->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>RECURSOS HUMANOS</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingsrrhh10 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingsrrhh10->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>CONTABILIDAD</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingscon10 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingscon10->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>OPERACIONES</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingsope10 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingsope10->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>





    <div class="row justify-content-center">
        <label>PLANILLA GASTOS NOVIEMBRE</label>
    </div>
    <div class="row justify-content-center">
        <label>GERENCIA GENERAL</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingsgg11 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingsgg11->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>RECURSOS HUMANOS</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingsrrhh11 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingsrrhh11->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>CONTABILIDAD</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingscon11 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingscon11->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>OPERACIONES</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingsope11 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingsope11->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>





    <div class="row justify-content-center">
        <label>PLANILLA GASTOS DICIEMBRE</label>
    </div>
    <div class="row justify-content-center">
        <label>GERENCIA GENERAL</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingsgg12 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingsgg12->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>RECURSOS HUMANOS</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingsrrhh12 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingsrrhh12->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>CONTABILIDAD</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingscon12 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingscon12->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row justify-content-center">
        <label>OPERACIONES</label>
    </div>
    <div class="row">
        <table id="example1" class="table table-sm table-bordered table-striped">
            <thead class="">
                <tr>
                    <th>Categoria</th>
                    <th>Artículo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spendingsope12 as $spending)
                    <tr>
                        <td>{{ $spending->item->category->name }}</td>
                        <td>{{ $spending->item->name }}</td>
                        <td>{{ $spending->money }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th>{{ $spendingsope12->sum('money') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>

    <div class="row justify-content-center">
        <div class="col">
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
</script>
</body>
</html>
