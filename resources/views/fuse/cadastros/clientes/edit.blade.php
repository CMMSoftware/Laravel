@extends('fuse.template.master')

@section('content')
<div class="block-header">
    <ol class="breadcrumb breadcrumb-bg-blue">
        <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
        <li><a href="javascript:void(0);"><i class="material-icons">add_circle</i> Cadastros</a></li>
        <li><a href="javascript:void(0);"><i class="material-icons">account_circle</i> Clientes</a></li>
        <li class="active"><i class="material-icons">edit</i> Editar</li>
    </ol>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    EDITAR CLIENTE
                </h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                        aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);">Limpar Formulário</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                
                <form action="{{action('ClientesController@update', $cliente->id)}}" method="POST">

                    {{ csrf_field() }}
                    {{ method_field('PUT')}}

                    <div class="row clearfix">

                        <div class="col-md-4">
                            <p>
                                <b>Nome</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" value="{{$cliente->nome}}" maxlength="40" name="nome" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <b>Gênero</b>
                            </p>
                            <div class="form-line">
                                <input name="genero" value="Masculino" type="radio" id="genero_1" class="with-gap radio-col-red" />
                                <label for="genero_1">Masculino</label>
                                <input name="genero" value="Feminino" type="radio" id="genero_2" class="with-gap radio-col-pink" />
                                <label for="genero_2">Feminino</label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <b>Data de Nascimento</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" value="{{$cliente->dataNascimento}}" name="dataNascimento" class="form-control date">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <b>CPF</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" value="{{$cliente->cpf}}" name="cpf" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <b>RG</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" value="{{$cliente->rg}}" name="rg" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <b>E-Mail</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" value="{{$cliente->email}}" name="email" class="form-control email">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <b>Telefone Celular 1</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" value="{{$cliente->telefone1}}" name="telefone1" value="{{$cliente->telefone1}}" class="form-control mobile-phone-number">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <b>Telefone Celular 2</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" value="{{$cliente->telefone2}}" name="telefone1" class="form-control mobile-phone-number">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <b>Telefone Fixo</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" value="{{$cliente->telefone3}}" name="telefone2" class="form-control mobile-phone-number">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <b>Endereço</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" value="{{$cliente->endereco->endereco}}" name="endereco" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <b>Bairro</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" value="{{$cliente->endereco->bairro}}" name="bairro" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <b>Número</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" value="{{$cliente->endereco->numero}}" name="numero" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <b>Cidade</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" value="{{$cliente->endereco->cidade}}" name="cidade" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <b>Estado</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" value="{{$cliente->endereco->estado}}" name="estado" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <b>CEP</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" value="{{$cliente->endereco->cep}}" name="cep" class="form-control">
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