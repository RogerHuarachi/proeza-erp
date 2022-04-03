
@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Gastos</h1>
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
                                    <th>Rol</th>
                                    <th>Mes</th>
                                    <th>Categoria</th>
                                    <th>Artículo</th>

                                    <th>Monto</th>
                                    <th>Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($months as $month)
                                    @foreach ($month->spendings as $spending)
                                        <tr>
                                            <td>{{ $spending->id }}</td>
                                            <td>{{ $spending->role->name }}</td>
                                            <td>{{ $month->name }}</td>
                                            <td>{{ $spending->item->category->name }}</td>
                                            <td>{{ $spending->item->name }}</td>
                                            <td>{{ $spending->money }}</td>
                                            <td>
                                                @if ($spending->created_at)
                                                    {{  strval(date_format(new DateTime($spending->created_at), 'Y-m-d H:i:s')) }}
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
