<!-- User Info -->
<div class="user-info">
    <div class="image">
        <img src="http://images.eonline.com/eol_images/Entire_Site/201553//rs_586x875-150603063141-johnny_depp_z4mtzin9x2vc_rt.gif" width="48" height="48" alt="User" />
    </div>
    <div class="info-container">
        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
        <div class="email">{{ Auth::user()->email }}</div>
        <div class="btn-group user-helper-dropdown">
            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
            <ul class="dropdown-menu pull-right">
                <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                <li role="seperator" class="divider"></li>
                <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                <li role="seperator" class="divider"></li>

                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
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
                    <a href="">Usuários</a>
                </li>
                <li>
                    <a href="{{ route('clientes.index') }}">Clientes</a>
                </li>
                <li>
                    <a href="">Fornecedores</a>
                </li>
                <li>
                    <a href="">Produtos</a>
                </li>
                <li>
                    <a href="">Serviços OS</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">laptop_chromebook</i>
                <span>Serviços</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <span>Vendas</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="">Realizar</a>
                        </li>
                        <li>
                            <a href="">Consultar</a>
                        </li>
                        <li>
                            <a href="">Baixa de Parcela</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="">Ordem de Serviço</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">content_copy</i>
                <span>Relatórios</span> 
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="">Vendas</a>
                </li>
                <li>
                    <a href="">Ordens de Serviços</a>
                </li>
                <li>
                    <a href="">Produtos</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">settings</i>
                <span>Configurações</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="">Empresa</a>
                </li>
                <li>
                    <a href="">Backup</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">help</i>
                <span>Ajuda</span>
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
