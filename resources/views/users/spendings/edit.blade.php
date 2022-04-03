@extends('layouts.app')
@section('tittle')
    <div class="col-sm-6">
        <h1 class="m-0">editar</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ route('eadmins.year') }}">gestiones</a></li>
            <li class="breadcrumb-item"><a href="{{ route('eadmins.month', $spending->month->year->id) }}">meses</a></li>
            <li class="breadcrumb-item"><a href="{{ route('eadmins.spending', $spending->month->id) }}">gastos</a></li>
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
            <form action="{{ route('eadmins.update', $spending->id) }}" method="POST">
                {{ csrf_field() }}
                {{ @method_field('PUT') }}
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Meses</label>
                                <div class="select2-primary">
                                    <select id="month" class="select2" data-placeholder="Select a State" data-dropdown-css-class="select2-primary" style="width: 100%;" name="month_id" required>
                                        <option value="{{ $spending->month->id }}">{{ $spending->month->name }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Categoria</label>
                                <div class="select2-primary">
                                    <select id="category" class="select2" data-placeholder="Select a State" data-dropdown-css-class="select2-primary" style="width: 100%;" required>
                                        <option value="{{ $spending->item->category->id }}">{{ $spending->item->category->name }}</option>
                                        {{-- @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach --}}
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Artículo</label>
                                <div class="select2-primary">
                                    <select id="item" class="select2" data-placeholder="Select a State" data-dropdown-css-class="select2-primary" style="width: 100%;" name="item_id" required>
                                        <option value="{{ $spending->item->id }}">{{ $spending->item->name }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Monto</label>
                                <input type="text" class="form-control form-control-border"
                                placeholder="Monto" name="money" value="{{ $spending->money }}" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a class="btn btn-default" href="{{ route('eadmins.spending', $spending->month->id) }}">Atras</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
{{-- <script>
    $(function () {
        $('#year').on('change', onYear);
        $('#role').on('change', onRole);
        $('#category').on('change', onCategory);
    });
    function onYear() {
        var year = $(this).val();

        //ajax
        $.get('/spendings/filter/months/'+year+'', function (data) {
            var html_select = '<option value=""></option>';
            for(var i=0; i<data.length; ++i){
                html_select += '<option value="'+data[i].id+'">'+data[i].name+'</option>'
                console.log(html_select);
            }
            $('#month').html(html_select);
        });
    }
    function onRole() {
        var role = $(this).val();

        //ajax
        $.get('/spendings/filter/categories/'+role+'', function (data) {
            var html_select = '<option value=""></option>';
            for(var i=0; i<data.length; ++i){
                html_select += '<option value="'+data[i].id+'">'+data[i].name+'</option>'
                console.log(html_select);
            }
            $('#category').html(html_select);
        });
    }
    function onCategory() {
        var category = $(this).val();
        var month = document.getElementById("month").value;

        //ajax
        $.get('/spendings/filter/items2/'+category+'/'+month+'', function (data) {
            var html_select = '<option value=""></option>';
            for(var i=0; i<data.length; ++i){
                html_select += '<option value="'+data[i].id+'">'+data[i].name+'</option>'
                console.log(html_select);
            }
            $('#item').html(html_select);
        });
    }
</script> --}}
@endsection
