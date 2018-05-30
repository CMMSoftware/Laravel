@extends('fuse.template.master')

@section('content')
<div class="block-header">
    <ol class="breadcrumb breadcrumb-bg-blue">
        <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
        <li><a href="javascript:void(0);"><i class="material-icons">add_circle</i> Cadastros</a></li>
        <li><a href="javascript:void(0);"><i class="material-icons">account_circle</i> Fornecedores</a></li>
        <li class="active"><i class="material-icons">details</i> Detalhar</li>
    </ol>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    DETALHAR FORNECEDOR
                </h2>
            </div>
            <div class="body">
                
                <div class="row clearfix">
                    <div class="col-md-6">
                        
                            <b>Razão Social</b>
                        
                        <div class="form-group">
                            <div class="form-line">
                                {{$fornecedor->razaoSocial}}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        
                            <b>Nome Fantasia</b>
                        
                        <div class="form-group">
                            <div class="form-line">
                                {{$fornecedor->nomeFantasia}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-md-4">
                        
                            <b>CNPJ</b>
                        
                        <div class="form-group">
                            <div class="form-line">
                                {{$fornecedor->cnpj}}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        
                            <b>Tipo Pessoa</b>
                        
                        <div class="form-group">
                            <div class="form-line">
                                {{$fornecedor->tipoPessoa}}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        
                            <b>Inscrição Estadual</b>
                        
                        <div class="form-group">
                            <div class="form-line">
                                {{$fornecedor->inscricaoEstadual}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-md-6">
                        
                            <b>Representante Principal</b>
                        
                        <div class="form-group">
                            <div class="form-line">
                                {{$fornecedor->representante1}}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        
                            <b>Representante 2</b>
                        
                        <div class="form-group">
                            <div class="form-line">
                                {{$fornecedor->representante2}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-md-6">
                        
                            <b>Telefone 1</b>
                        
                        <div class="form-group">
                            <div class="form-line">
                                {{$fornecedor->telefone1}}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        
                            <b>Telefone 2</b>
                        
                        <div class="form-group">
                            <div class="form-line">
                                {{$fornecedor->telefone2}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-md-6">
                        
                            <b>E-Mail</b>
                        
                        <div class="form-group">
                            <div class="form-line">
                                {{$fornecedor->email}}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        
                            <b>Site</b>
                        
                        <div class="form-group">
                            <div class="form-line">
                                {{$fornecedor->site}}
                            </div>
                        </div>
                    </div>
                </div>
                
                <a href="{{ route('fornecedores.index') }}" class="btn btn-default waves-effect">VOLTAR</a>
            </div>
        </div>
    </div>
</div>
@endsection
