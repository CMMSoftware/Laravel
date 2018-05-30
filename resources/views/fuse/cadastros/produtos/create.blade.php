@extends('fuse.template.master')

@section('content')
<div class="block-header">
    <ol class="breadcrumb breadcrumb-bg-blue">
        <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
        <li><a href="javascript:void(0);"><i class="material-icons">add_circle</i> Cadastros</a></li>
        <li><a href="javascript:void(0);"><i class="material-icons">account_circle</i> Produtos</a></li>
        <li class="active"><i class="material-icons">add</i> Cadastrar</li>
    </ol>
</div>

<!-- Input Group -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    CADASTRAR PRODUTO
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
                
                <form id="form_validation" method="POST" action="{{action('ProdutosController@store')}}">

                    {{ csrf_field() }}

                    <div class="row clearfix">
                        <div class="col-md-6">
                            
                            <b>Nome do Produto</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="nomeProduto" type="text" class="form-control" name="nomeProduto" 
                                    value="{{ old('nomeProduto') }}" required autofocus>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            
                            <b>Nome Resumido PDV</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="nomeResumido" type="text" class="form-control" name="nomeResumido" 
                                    value="{{ old('nomeResumido') }}" required autofocus>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-md-4">
                            
                            <b>Código de Barras</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="codigoBarras" type="text" class="form-control" name="codigoBarras" 
                                    value="{{ old('codigoBarras') }}" required autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            
                            <b>Marca</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="marca" id="marca" class="form-control" 
                                    value="{{ old('marca') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            
                            <b>Fabricante</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" maxlength="40" name="fabricante" id="fabricante" class="form-control" value="{{ old('fabricante') }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-md-4">
                            
                            <b>Fornecedor</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="fornecedor" type="text" class="form-control" name="fornecedor" 
                                    value="{{ old('fornecedor') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            
                            <b>Localização</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="localizacao" type="text" class="form-control" name="localizacao" 
                                    value="{{ old('localizacao') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            
                            <b>Grupo</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="grupo" type="text" class="form-control" name="grupo" 
                                    value="{{ old('grupo') }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-md-4">
                            
                            <b>Estoque Atual</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="estoqueAtual" type="text" class="form-control" name="estoqueAtual" 
                                    value="{{ old('estoqueAtual') }}" required autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            
                            <b>Estoque Mínimo</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="estoqueMinimo" type="text" class="form-control" name="estoqueMinimo" 
                                    value="{{ old('estoqueMinimo') }}" required autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            
                            <b>Estoque Máximo</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="estoqueMaximo" type="text" class="form-control" name="estoqueMaximo" 
                                    value="{{ old('estoqueMaximo') }}" required autofocus>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-md-4">
                            
                            <b>Custo</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="custo" type="text" class="form-control" name="custo" 
                                    value="{{ old('custo') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            
                            <b>Comissão</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="comissao" type="text" class="form-control" name="comissao" 
                                    value="{{ old('comissao') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            
                            <b>Preço Final</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="precoFinal" type="text" class="form-control" name="precoFinal" 
                                    value="{{ old('precoFinal') }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('produtos.index') }}" class="btn btn-default waves-effect">VOLTAR</a>
                    <button type="submit" class="btn btn-success waves-effect">SALVAR</button>
                    
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
