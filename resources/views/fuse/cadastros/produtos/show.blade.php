@extends('fuse.template.master')

@section('content')
<div class="block-header">
    <ol class="breadcrumb breadcrumb-bg-blue">
        <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
        <li><a href="javascript:void(0);"><i class="material-icons">add_circle</i> Cadastros</a></li>
        <li><a href="javascript:void(0);"><i class="material-icons">account_circle</i> Produtos</a></li>
        <li class="active"><i class="material-icons">details</i> Detalhar</li>
    </ol>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    DETALHAR PRODUTO
                </h2>
            </div>
            <div class="body">
                
                <div class="row clearfix">
                    <div class="col-md-6">
                        
                        <b>Nome do Produto</b>
                        
                        <div class="form-group">
                            <div class="form-line">
                                {{$produto->nomeProduto}}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        
                        <b>Nome Resumido PDV</b>
                        
                        <div class="form-group">
                            <div class="form-line">
                                {{$produto->nomeResumido}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-md-4">
                        
                        <b>Código de Barras</b>
                        
                        <div class="form-group">
                            <div class="form-line">
                                {{$produto->codigoBarras}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        
                        <b>Marca</b>
                        
                        <div class="form-group">
                            <div class="form-line">
                                {{$produto->marca}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        
                        <b>Fabricante</b>
                        
                        <div class="form-group">
                            <div class="form-line">
                                {{$produto->fabricante}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-md-4">
                        
                        <b>Fornecedor</b>
                        
                        <div class="form-group">
                            <div class="form-line">
                                {{$produto->fornecedor}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        
                        <b>Localização</b>
                        
                        <div class="form-group">
                            <div class="form-line">
                                {{$produto->localizacao}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                            
                        <b>Grupo</b>
                        
                        <div class="form-group">
                            <div class="form-line">
                                {{$produto->grupo}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-md-4">
                        
                        <b>Estoque Atual</b>
                        
                        <div class="form-group">
                            <div class="form-line">
                                {{$produto->estoqueAtual}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        
                        <b>Estoque Mínimo</b>
                        
                        <div class="form-group">
                            <div class="form-line">
                                {{$produto->estoqueMinimo}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        
                        <b>Estoque Máximo</b>
                        
                        <div class="form-group">
                            <div class="form-line">
                                {{$produto->estoqueMaximo}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-md-4">
                        
                        <b>Custo</b>
                        
                        <div class="form-group">
                            <div class="form-line">
                                {{$produto->custo}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        
                        <b>Comissão</b>
                        
                        <div class="form-group">
                            <div class="form-line">
                                {{$produto->comissao}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        
                        <b>Preço Final</b>
                        
                        <div class="form-group">
                            <div class="form-line">
                                {{$produto->precoFinal}}
                            </div>
                        </div>
                    </div>
                </div>

                <a href="{{ route('produtos.index') }}" class="btn btn-default waves-effect">VOLTAR</a>
            </div>
        </div>
    </div>
</div>
@endsection
