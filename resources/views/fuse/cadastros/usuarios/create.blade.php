@extends('fuse.template.master')

@section('content')
<div class="block-header">
    <ol class="breadcrumb breadcrumb-bg-blue">
        <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
        <li><a href="javascript:void(0);"><i class="material-icons">add_circle</i> Cadastros</a></li>
        <li><a href="javascript:void(0);"><i class="material-icons">account_circle</i> Usuários</a></li>
        <li class="active"><i class="material-icons">add</i> Cadastrar</li>
    </ol>
</div>

<!-- Input Group -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    CADASTRAR USUÁRIO
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
                
                <form id="form_validation" method="POST" action="{{action('UsuariosController@store')}}">

                    {{ csrf_field() }}

                    <div class="row clearfix">
                        <div class="col-md-6">
                            
                                <b>*Nome</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="nome" type="text" class="form-control" name="nome" 
                                    value="{{ old('nome') }}" required autofocus>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            
                                <b>*Login</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="login" type="text" class="form-control" name="login" 
                                    value="{{ old('login') }}" required autofocus style="text-transform:uppercase">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-md-6">
                            
                                <b>*Perfil</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <select onchange="$(this).valid();" id="perfil" name="perfil" class="form-control show-tick required" autofocus>
                                        <option value=""><< Selecione >></option>
                                        <option value="Administrador">Administrador</option>
                                        <option value="Vendedor">Vendedor</option>
                                        <option value="Técnico">Técnico</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-md-6">
                            
                                <b for="password">*{{ __('Senha') }}</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="password" type="password" class="form-control" 
                                    name="password" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            
                                <b for="password-confirm">*{{ __('Confirmação de Senha') }}</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="password-confirm" type="password" class="form-control passwordCheck" 
                                    name="password_confirmation" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('usuarios.index') }}" class="btn btn-default waves-effect">VOLTAR</a>
                    <button type="submit" class="btn btn-success waves-effect">SALVAR</button>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection