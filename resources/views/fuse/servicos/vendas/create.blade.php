@extends('fuse.template.master')

@section('content')
<div class="block-header">
    <ol class="breadcrumb breadcrumb-bg-blue">
        <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
        <li><a href="javascript:void(0);"><i class="material-icons">add_circle</i> Serviços</a></li>
        <li><a href="javascript:void(0);"><i class="material-icons">account_circle</i> Vendas</a></li>
        <li class="active"><i class="material-icons">add</i> Realizar</li>
    </ol>
</div>

<!-- Input Group -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    REALIZAR VENDA
                </h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);">Limpar Formulário</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                
                <form id="form_validation" method="POST" action="{{action('VendasController@store')}}">

                    {{ csrf_field() }}

                    <div class="row clearfix">
                        <div class="col-md-12">
                            <b>Cliente</b>
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control show-tick" data-live-search="true">
                                        @foreach ($clientes as $cliente)
                                            <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('vendas.index') }}" class="btn btn-default waves-effect">VOLTAR</a>
                    <button type="submit" class="btn btn-success waves-effect">FINALIZAR</button>
                    
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
