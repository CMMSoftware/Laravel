@extends('fuse.template.master')

@section('content')
<div class="block-header">
    <ol class="breadcrumb breadcrumb-bg-blue">
        <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
        <li><a href="javascript:void(0);"><i class="material-icons">add_circle</i> Cadastros</a></li>
        <li><a href="javascript:void(0);"><i class="material-icons">account_circle</i> Usuários</a></li>
        <li class="active"><i class="material-icons">edit</i> Editar</li>
    </ol>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    EDITAR USUÁRIO
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
                
                <form id="form_validation" action="{{action('UsuariosController@update', $usuario->id)}}" method="POST">

                    {{ csrf_field() }}
                    {{ method_field('PUT')}}

                    <div class="row clearfix">
                        <div class="col-md-6">
                            
                                <b>*Nome</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="nome" type="text" class="form-control" name="nome" 
                                    value="{{ $usuario->nome }}" required autofocus>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            
                                <b>*Login</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="login" type="text" class="form-control" name="login" 
                                    value="{{ $usuario->login }}" required autofocus style="text-transform:uppercase">
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
                                        <option value="Administrador" 
                                            {{ $usuario->perfil == 'Administrador' ? 'selected="selected"' : '' }}>Administrador
                                        </option>
                                        <option value="Vendedor" 
                                            {{ $usuario->perfil == 'Vendedor' ? 'selected="selected"' : '' }}>Vendedor
                                        </option>
                                        <option value="Técnico" 
                                            {{ $usuario->perfil == 'Técnico' ? 'selected="selected"' : '' }}>Técnico
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            
                                <b>*Situação</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <select onchange="$(this).valid();" id="situacao" name="situacao" class="form-control show-tick required">
                                        <option value=""><< Selecione >></option>
                                        <option value="1" 
                                        {{ $usuario->situacao == 1 ? 'selected="selected"' : '' }}>Ativo</option>
                                        <option value="2" 
                                        {{ $usuario->situacao == 2 ? 'selected="selected"' : '' }}>Inativo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-md-6">
                            
                                <b for="password">{{ __('Senha') }}</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="password" type="password" class="form-control" 
                                    name="password">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            
                                <b for="password-confirm">{{ __('Confirmação de Senha') }}</b>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="password-confirm" type="password" class="form-control passwordCheck" 
                                    name="password_confirmation">
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