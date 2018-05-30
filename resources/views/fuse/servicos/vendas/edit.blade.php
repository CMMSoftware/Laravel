@extends('fuse.template.master')

@section('content')
<div class="block-header">
    <ol class="breadcrumb breadcrumb-bg-blue">
        <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
        <li><a href="javascript:void(0);"><i class="material-icons">add_circle</i> Cadastros</a></li>
        <li><a href="javascript:void(0);"><i class="material-icons">account_circle</i> Fornecedores</a></li>
        <li class="active"><i class="material-icons">edit</i> Editar</li>
    </ol>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    EDITAR FORNECEDOR
                </h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                        aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a onclick="limparFormulario()">Limpar Formulário</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">

                @if($errors->any())
                    <ul class="list-group">
                        @foreach($errors->all() as $erro)
                            <li class="list-group-item list-group-item-warning">
                                {{ $erro }}
                            </li>
                        @endforeach 
                    </ul>
                @endif
                
                <form id="form_validation" method="POST" action="{{action('FornecedoresController@update', $fornecedor->id)}}">

                    {{ csrf_field() }}
                    {{ method_field('PUT')}}

                    <div class="row clearfix">
                        <div class="col-md-12">
                            
                            <b>*Razão Social</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="razaoSocial" type="text" class="form-control" name="razaoSocial" 
                                    value="{{$fornecedor->razaoSocial}}" required autofocus>
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
                                    value="{{$fornecedor->nomeFantasia}}" required autofocus>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            
                            <b>Tipo Pessoa</b>
                            
                            <div class="form-line">
                                @if ($fornecedor->tipoPessoa == 1)
                                    <input name="tipoPessoa" checked="true" value="1" type="radio" id="tipoPessoa1" 
                                    class="with-gap radio-col-red" />
                                    <label for="tipoPessoa1">Jurídica</label>
                                @else
                                    <input name="tipoPessoa" value="2" type="radio" id="tipoPessoa1" 
                                    class="with-gap radio-col-red" />
                                    <label for="tipoPessoa1">Jurídica</label>
                                @endif
                                
                                @if ($fornecedor->tipoPessoa == 2)
                                    <input name="tipoPessoa" checked="true" value="2" type="radio" id="tipoPessoa2" 
                                    class="with-gap radio-col-red" />
                                    <label for="tipoPessoa2">Física</label>
                                @else
                                    <input name="tipoPessoa" value="2" type="radio" id="tipoPessoa2" 
                                    class="with-gap radio-col-red" />
                                    <label for="tipoPessoa2">Física</label>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-md-6">
                            
                            <b>*CNPJ</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="cnpj" id="cnpj" class="form-control cnpj" 
                                    value="{{$fornecedor->cnpj}}" required autofocus>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            
                            <b>Inscrição Estadual</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" maxlength="40" name="inscricaoEstadual" id="inscricaoEstadual" class="form-control" value="{{$fornecedor->inscricaoEstadual}}">
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
                                    value="{{$fornecedor->representante1}}" required autofocus>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            
                            <b>*Telefone 1</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="telefone1" type="text" class="form-control" name="telefone1" 
                                    value="{{$fornecedor->telefone1}}" required autofocus>
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
                                    value="{{$fornecedor->representante2}}" required autofocus>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            
                            <b>Telefone 2</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="telefone2" type="text" class="form-control" name="telefone2" 
                                    value="{{$fornecedor->telefone2}}" required autofocus>
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
                                    value="{{$fornecedor->email}}" required autofocus>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            
                            <b>Site</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="site" type="text" class="form-control" name="site" 
                                    value="{{$fornecedor->site}}" required autofocus>
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
