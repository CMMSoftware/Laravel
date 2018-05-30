@extends('fuse.template.master')

@section('content')
<div class="block-header">
    <ol class="breadcrumb breadcrumb-bg-blue">
        <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
        <li><a href="javascript:void(0);"><i class="material-icons">add_circle</i> Cadastros</a></li>
        <li><a href="javascript:void(0);"><i class="material-icons">account_circle</i> Fornecedores</a></li>
        <li class="active"><i class="material-icons">add</i> Cadastrar</li>
    </ol>
</div>

<!-- Input Group -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    CADASTRAR FORNECEDOR
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
                
                <form id="form_validation" method="POST" action="{{action('FornecedoresController@store')}}">

                    {{ csrf_field() }}

                    <div class="row clearfix">
                        <div class="col-md-12">
                            
                                <b>Razão Social</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="razaoSocial" type="text" class="form-control" name="razaoSocial" 
                                    value="{{ old('razaoSocial') }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-md-6">
                            
                                <b>*Nome Fantasia</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="nomeFantasia" type="text" class="form-control" name="nomeFantasia" 
                                    value="{{ old('nomeFantasia') }}" required autofocus>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            
                                <b>Tipo Pessoa</b>
                            
                            <div class="form-line">
                                <input name="tipoPessoa" value="1" type="radio" id="tipoPessoa1" 
                                class="with-gap radio-col-red"
                                 @if(old('tipoPessoa') ==  1) checked="checked" @endif />
                                <label for="tipoPessoa1">Jurídica</label>
                                <input name="tipoPessoa" value="2" type="radio" id="tipoPessoa2" 
                                class="with-gap radio-col-pink"
                                 @if(old('tipoPessoa') ==  2) checked="checked" @endif />
                                <label for="tipoPessoa2">Física</label>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-md-6">
                            
                                <b>CNPJ</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="cnpj" id="cnpj" class="form-control cnpj" 
                                    value="{{ old('cnpj') }}">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            
                                <b>Inscrição Estadual</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" maxlength="40" name="inscricaoEstadual" id="inscricaoEstadual" class="form-control" value="{{ old('inscricaoEstadual') }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-md-6">
                            
                                <b>*Representante Principal</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="representante1" type="text" class="form-control" name="representante1" 
                                    value="{{ old('representante1') }}" required autofocus>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            
                                <b>*Telefone 1</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="telefone1" type="text" class="form-control" name="telefone1" 
                                    value="{{ old('telefone1') }}" required autofocus>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-md-6">
                            
                                <b>Representante 2</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="representante2" type="text" class="form-control" name="representante2" 
                                    value="{{ old('representante2') }}">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            
                                <b>Telefone 2</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="telefone2" type="text" class="form-control" name="telefone2" 
                                    value="{{ old('telefone2') }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-md-6">
                            
                                <b>E-Mail</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="email" type="text" class="form-control email" name="email" 
                                    value="{{ old('email') }}">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            
                                <b>Site</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="site" type="text" class="form-control" name="site" 
                                    value="{{ old('site') }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('fornecedores.index') }}" class="btn btn-default waves-effect">VOLTAR</a>
                    <button type="submit" class="btn btn-success waves-effect">SALVAR</button>
                    
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
