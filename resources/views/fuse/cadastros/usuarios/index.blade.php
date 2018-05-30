@extends('fuse.template.master')

@section('content')
<div class="block-header">
    <ol class="breadcrumb breadcrumb-bg-blue">
        <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
        <li><a href="javascript:void(0);"><i class="material-icons">add_circle</i> Cadastros</a></li>
        <li class="active"><i class="material-icons">account_circle</i> Usuários</li>
    </ol>
</div>

@if ($message = Session::get('success'))
    <div class="alert bg-green alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <p>{{ $message }}</p>
    </div>
@endif

@if(count($errors) > 0)
    <ul>
        @foreach($errors->all() as $error)
            <li>
                <div class="alert bg-red alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <p>{{$error}}</p>
                </div>
            </li>
        @endforeach
    </ul>
@endif

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    USUÁRIOS
                </h2>
            </div>

            <div class="body">

                <a class="btn btn-success waves-effect" href="{{ route('usuarios.create') }}">CADASTRAR</a>

                <div class="table-responsive">
                    <table id="example" class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>USUÁRIO</th>
                                <th>LOGIN</th>
                                <th>PERFIL</th>
                                <th>SITUAÇÃO</th>
                                <th width="28%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $usuario)
                                <tr>
                                    <th scope="row">{{ $usuario->id }}</th>
                                    <td>{{ $usuario->nome }}</td>
                                    <td>{{ $usuario->login }}</td>
                                    <td>{{ $usuario->perfil }}</td>
                                    <td>{{ $usuario->situacao }}</td>
                                    <td class="text-center">
                                        <a class="btn btn-primary waves-effect" 
                                        href="{{ route('usuarios.edit', $usuario) }}">EDITAR</a>
                                        <a class="btn btn-danger waves-effect"
                                        data-toggle="modal" data-target="#modalCliente{{$usuario->id}}">DELETAR</a>
                                    </td>
                                </tr>
                                <div class="modal fade" id="modalCliente{{$usuario->id}}" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content modal-col-red">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="defaultModalLabel">EXCLUSÃO</h4>
                                            </div>
                                            <div class="modal-body">
                                                Deseja Realmente Excluir o Usuário <b>{{$usuario->nome}}</b>?
                                            </div>
                                            <div class="modal-footer">
                                                <form style="display: inline;" 
                                                action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-link waves-effect">CONFIRMAR</button>
                                                </form>
                                                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">FECHAR</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection