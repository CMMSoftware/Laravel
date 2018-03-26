@extends('fuse.template.master')

@section('content')
<div class="block-header">
    <ol class="breadcrumb breadcrumb-bg-blue">
        <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
        <li><a href="javascript:void(0);"><i class="material-icons">add_circle</i> Cadastros</a></li>
        <li><a href="javascript:void(0);"><i class="material-icons">account_circle</i> Clientes</a></li>
        <li class="active"><i class="material-icons">details</i> Detalhar</li>
    </ol>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    DETALHAR CLIENTE
                </h2>
            </div>
            <div class="body">
                
                <div class="row clearfix">

                    <div class="col-md-4">
                        <p>
                            <b>Nome</b>
                        </p>
                        <div class="input-group">
                            <div class="form-line">
                                {{ $cliente->nome }}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <p>
                            <b>Gênero</b>
                        </p>
                        <div class="input-group">
                            <div class="form-line">
                        		{{ $cliente->genero }}
                        	</div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <p>
                            <b>Data de Nascimento</b>
                        </p>
                        <div class="input-group">
                            <div class="form-line">
                                {{ $cliente->dataNascimento }}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <p>
                            <b>CPF</b>
                        </p>
                        <div class="input-group">
                            <div class="form-line">
                                {{ $cliente->cpf }}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <p>
                            <b>RG</b>
                        </p>
                        <div class="input-group">
                            <div class="form-line">
                                {{ $cliente->rg }}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <p>
                            <b>E-Mail</b>
                        </p>
                        <div class="input-group">
                            <div class="form-line">
                                {{ $cliente->email }}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <p>
                            <b>Telefone Celular 1</b>
                        </p>
                        <div class="input-group">
                            <div class="form-line">
                                {{ $cliente->telefone1 }}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <p>
                            <b>Telefone Celular 2</b>
                        </p>
                        <div class="input-group">
                            <div class="form-line">
                                {{ $cliente->telefone2 }}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <p>
                            <b>Telefone Fixo</b>
                        </p>
                        <div class="input-group">
                            <div class="form-line">
                                {{ $cliente->telefone2 }}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <p>
                            <b>Endereço</b>
                        </p>
                        <div class="input-group">
                            <div class="form-line">
                                {{ $cliente->endereco->endereco }}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <p>
                            <b>Bairro</b>
                        </p>
                        <div class="input-group">
                            <div class="form-line">
                                {{ $cliente->endereco->bairro }}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <p>
                            <b>Número</b>
                        </p>
                        <div class="input-group">
                            <div class="form-line">
                                {{ $cliente->endereco->numero }}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <p>
                            <b>Cidade</b>
                        </p>
                        <div class="input-group">
                            <div class="form-line">
                                {{ $cliente->endereco->cidade }}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <p>
                            <b>Estado</b>
                        </p>
                        <div class="input-group">
                            <div class="form-line">
                                {{ $cliente->endereco->estado }}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <p>
                            <b>CEP</b>
                        </p>
                        <div class="input-group">
                            <div class="form-line">
                                {{ $cliente->endereco->cep }}
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('clientes.index') }}" class="btn btn-default waves-effect">VOLTAR</a>
            </div>
        </div>
    </div>
</div>
@endsection