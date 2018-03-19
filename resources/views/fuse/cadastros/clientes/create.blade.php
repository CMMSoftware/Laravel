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

                <div class="row clearfix">

                    <div class="col-md-8">
                        <p>
                            <b>Nome</b>
                        </p>
                        <div class="input-group">
                            <div class="form-line">
                                <input type="text" name="nome" class="form-control" placeholder="Message">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <p>
                            <b>Data de Nascimento</b>
                        </p>
                        <div class="input-group">
                            <div class="form-line">
                                <input type="text" name="dataNascimento" class="form-control" placeholder="Message">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <p>
                            <b>CPF</b>
                        </p>
                        <div class="input-group">
                            <div class="form-line">
                                <input type="text" name="CPF" class="form-control" placeholder="Message">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <p>
                            <b>RG</b>
                        </p>
                        <div class="input-group">
                            <div class="form-line">
                                <input type="text" name="RG" class="form-control" placeholder="Message">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <p>
                            <b>E-Mail</b>
                        </p>
                        <div class="input-group">
                            <div class="form-line">
                                <input type="text" name="email" class="form-control" placeholder="Message">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <p>
                            <b>Telefone 1</b>
                        </p>
                        <div class="input-group">
                            <div class="form-line">
                                <input type="text" name="telefone1" class="form-control" placeholder="Message">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <p>
                            <b>Telefone 2</b>
                        </p>
                        <div class="input-group">
                            <div class="form-line">
                                <input type="text" name="telefone2" class="form-control" placeholder="Message">
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

            </div>
        </div>
    </div>
</div>
@endsection