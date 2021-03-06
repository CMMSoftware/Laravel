@extends('fuse.template.master')

@section('content')
<div class="block-header">
    <ol class="breadcrumb breadcrumb-bg-blue">
        <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
        <li><a href="javascript:void(0);"><i class="material-icons">add_circle</i> Cadastros</a></li>
        <li><a href="javascript:void(0);"><i class="material-icons">account_circle</i> Clientes</a></li>
        <li class="active"><i class="material-icons">add</i> Cadastrar</li>
    </ol>
</div>

<!-- Input Group -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    CADASTRAR CLIENTE
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
                
                <form id="form_validation" method="POST" action="{{action('ClientesController@store')}}">

                    {{ csrf_field() }}

                    <div class="row clearfix">
                        <div class="col-md-4">
                            
                                <b>*Nome</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="nome" type="text" class="form-control" name="nome" 
                                    value="{{ old('nome') }}" required autofocus>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            
                                <b>Gênero</b>
                            
                            <div class="form-line">
                                <input name="genero" value="1" type="radio" id="genero_1" class="with-gap radio-col-red"
                                 @if(old('genero') ==  1) checked="checked" @endif />
                                <label for="genero_1">Masculino</label>
                                <input name="genero" value="2" type="radio" id="genero_2" class="with-gap radio-col-pink"
                                 @if(old('genero') ==  2) checked="checked" @endif />
                                <label for="genero_2">Feminino</label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            
                                <b>*Data de Nascimento</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="dataNascimento" id="dataNascimento" 
                                    class="form-control date" value="{{old('data')}}" required autofocus>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-md-4">
                            
                                <b>*CPF</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="cpf" id="cpf" class="form-control cpf" 
                                    value="{{old('cpf')}}" required autofocus>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            
                                <b>RG</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="rg" id="rg" class="form-control" 
                                    value="{{old('rg')}}">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            
                                <b>E-Mail</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" maxlength="40" name="email" class="form-control email" 
                                    value="{{old('email')}}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-md-4">
                            
                                <b>*Telefone Celular 1</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="telefone1" id="celular1" class="form-control" 
                                    value="{{old('telefone1')}}" required autofocus>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            
                                <b>Telefone Fixo</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="telefone2" id="celular2" class="form-control mobile-phone-number" value="{{old('telefone2')}}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-md-4">
                            
                                <b>CEP</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="cep" id="cep" class="form-control" 
                                    value="{{old('cep')}}">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            
                                <b>Cidade</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" maxlength="40" name="cidade" class="form-control" 
                                    value="{{old('cidade')}}">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            
                                <b>Estado</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" maxlength="40" name="estado" class="form-control" 
                                    value="{{old('estado')}}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-md-4">
                            
                                <b>Endereço</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" maxlength="40" name="endereco" class="form-control" 
                                    value="{{old('endereco')}}">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            
                                <b>Número</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="numero" id="numero" class="form-control" 
                                    value="{{old('numero')}}">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            
                                <b>Bairro</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" maxlength="40" name="bairro" class="form-control" 
                                    value="{{old('bairro')}}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('clientes.index') }}" class="btn btn-default waves-effect">VOLTAR</a>
                    <button type="submit" class="btn btn-success waves-effect">SALVAR</button>
                    
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
