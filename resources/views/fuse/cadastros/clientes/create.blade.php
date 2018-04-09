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

                @if($errors->any())
                    <ul class="list-group">
                        @foreach($errors->all() as $erro)
                            <li class="list-group-item list-group-item-warning">
                                {{ $erro }}
                            </li>
                        @endforeach 
                    </ul>
                @endif
                
                <form action="{{action('ClientesController@store')}}" method="POST">

                    {{ csrf_field() }}

                    <div class="row clearfix">

                        <div class="col-md-4">
                            <p>
                                <b>Nome</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" maxlength="40" name="nome" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <b>Gênero</b>
                            </p>
                            <div class="form-line">
                                <input name="genero" value="1" type="radio" id="genero_1" class="with-gap radio-col-red" />
                                <label for="genero_1">Masculino</label>
                                <input name="genero" value="2" type="radio" id="genero_2" class="with-gap radio-col-pink" />
                                <label for="genero_2">Feminino</label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <b>Data de Nascimento</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" name="dataNascimento" id="data" class="form-control date">
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <b>CPF</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" name="cpf" id="cpf" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <b>RG</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" name="rg" id="rg" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <b>E-Mail</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" maxlength="40" name="email" class="form-control email">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <b>Telefone Celular 1</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" name="telefone1" id="celular1" class="form-control mobile-phone-number">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <b>Telefone Celular 2</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" name="telefone2" id="celular2" class="form-control mobile-phone-number">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <b>Telefone Fixo</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" name="telefone3" id="telefone" class="form-control mobile-phone-number">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <b>Endereço</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" maxlength="40" name="endereco" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <b>Bairro</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" maxlength="40" name="bairro" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <b>Número</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" name="numero" id="numero" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <b>Cidade</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" maxlength="40" name="cidade" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <b>Estado</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" maxlength="40" name="estado" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <b>CEP</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" name="cep" id="cep" class="form-control">
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