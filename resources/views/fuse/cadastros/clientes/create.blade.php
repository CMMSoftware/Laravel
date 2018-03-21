@extends('fuse.template.master')

@section('content')
<div class="block-header">
    <h2>Cadastros / Clientes / Cadastrar Clientes</h2>
</div>

<!-- Input Group -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    CADASTRAR CLIENTES
                </h2>
            </div>
            <div class="body">
                
                <form action="{{action('ClientesController@store')}}" method="POST">

                    {{ csrf_field() }}

                    <div class="row clearfix">

                        <div class="col-md-8">
                            <p>
                                <b>Nome</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" maxlength="30" name="nome" class="form-control" placeholder="Cliente">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <b>Data de Nascimento</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" name="dataNascimento" class="form-control date" placeholder="Exemplo: 30/07/2016">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <b>CPF</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" name="cpf" class="form-control" placeholder="Exemplo: 000.000.000-00">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <b>RG</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" name="rg" class="form-control" placeholder="Exemplo: 00000000-00">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <b>E-Mail</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" name="email" class="form-control email" placeholder="Exemplo: fulano@exemplo.com">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <b>Telefone Celular</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" name="telefone1" class="form-control mobile-phone-number" placeholder="Exemplo: (00) 9 0000-0000">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <b>Telefone Fixo</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" name="telefone2" class="form-control mobile-phone-number" placeholder="Exemplo: (00) 0000-0000">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <b>Situação</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" name="situacao" class="form-control" placeholder="Message">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">SALVAR</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection