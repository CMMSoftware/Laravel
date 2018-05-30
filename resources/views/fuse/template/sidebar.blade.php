<!-- User Info -->
<div class="user-info">
    <div class="image">
        
    </div>
    <div class="info-container">
        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->nome }}</div>
        <div class="email"><b>{{ Auth::user()->perfil }}</b></div>
        <div class="btn-group user-helper-dropdown">
            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
            <ul class="dropdown-menu pull-right">
                <li><a href="javascript:void(0);"><i class="material-icons">person</i>Meu Perfil</a></li>
                <li role="seperator" class="divider"></li>
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Sair') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>

            </ul>
        </div>
    </div>
</div>

<!-- Menu -->
<div class="menu">
    <ul class="list">
        <li class="header">MENU PRINCIPAL</li>
        <li class="active">
            <a href="{{ route('home') }}">
                <i class="material-icons">home</i>
                <span>Home</span>
            </a>
        </li>
        
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">add_circle</i>
                <span>Cadastros</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="{{ route('usuarios.index') }}">Usuários</a>
                </li>
                <li>
                    <a href="{{ route('clientes.index') }}">Clientes</a>
                </li>
                <li>
                    <a href="{{ route('fornecedores.index') }}">Fornecedores</a>
                </li>
                <li>
                    <a href="{{ route('produtos.index') }}">Produtos</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">shop</i>
                <span>Serviços</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="{{ route('vendas.index') }}">Vendas</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">monetization_on</i>
                <span>Financeiro</span> 
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <span>Contas a Receber</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="">Lançamento de Titulo a Receber</a>
                        </li>
                        <li>
                            <a href="">Recebimento/Alteração de Titulo</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <span>Contas a Pagar</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="">Lançamento de Titulo a Pagar</a>
                        </li>
                        <li>
                            <a href="">Pagamento/Alteração de Titulo</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">settings</i>
                <span>Painel de Controle e Acesso</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <span>Controle de Acesso do Sistema</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="">Cadastrar Perfil</a>
                        </li>
                    </ul>
                    <ul class="ml-menu">
                        <li>
                            <a href="">Cadastrar Permissões</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="ml-menu">
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <span>Painel de Controle</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="">Painel NF-e</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">help</i>
                <span>Ferramentas</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="">Manual do Usuário</a>
                </li>
                <li>
                    <a href="">Sobre</a>
                </li>
            </ul>
        </li>
        
    </ul>
</div>

<!-- Footer -->
<div class="legal">
    <div class="copyright">
        &copy; 2018 <a href="javascript:void(0);">CCM Soft - SIVM</a>.
    </div>
    <div class="version">
        <b>Version: </b> 1.0.0
    </div>
</div>

</aside>

<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
