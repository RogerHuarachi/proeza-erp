
@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Intereses</h1>
        </div>
      </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive">
                        <table  id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Agencia</th>
                                    <th>Mes</th>
                                    <th>Monto</th>
                                    <th>Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($months as $month)
                                    @foreach ($month->administratives as $administrative)
                                        <tr>
                                            <td>{{ $administrative->id }}</td>
                                            <td>{{ $administrative->agency->name }}</td>
                                            <td>{{ $month->name }}</td>
                                            <td>{{ $administrative->money }}</td>
                                            <td>
                                                @if ($administrative->created_at)
                                                    {{  strval(date_format(new DateTime($administrative->created_at), 'Y-m-d H:i:s')) }}
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
