@inject('PermissionService', 'App\Http\Services\PermissionService')
<header class="header">
    <nav class="nav container">
        <div class="nav__data">
            <a href="{{ route('home') }}" class="nav__logo" style="color: {{ Auth::check() && $PermissionService->isAdmin(Auth::user()->id) ? 'green' : '' }}">
                <i class="ri-planet-line" style="color: {{ Auth::check() && $PermissionService->isAdmin(Auth::user()->id) ? 'green' : '' }}"></i> MATRIZ
            </a>

            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line nav__burger"></i>
                <i class="ri-close-line nav__close"></i>
            </div>
        </div>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li><a href="{{ route('home') }}" class="nav__link">Início</a></li>

                <li><a href="#" class="nav__link">Sobre</a></li>

                <li class="dropdown__item">
                    <div class="nav__link">
                        Dados <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <ul class="dropdown__menu">
                        <li>
                            <a href="#" class="dropdown__link">
                                <i class="ri-pie-chart-line"></i> Gráficos
                            </a>
                        </li>

                        <li>
                            <a href="#" class="dropdown__link">
                                <i class="ri-arrow-up-down-line"></i> Transações
                            </a>
                        </li>

                        <li class="dropdown__subitem">
                            <div class="dropdown__link">
                                <i class="ri-bar-chart-line"></i> Informações <i class="ri-add-line dropdown__add"></i>
                            </div>

                            <ul class="dropdown__submenu">
                                <li>
                                    <a href="#" class="dropdown__sublink">
                                        <i class="ri-file-list-line"></i> Documentos
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="dropdown__sublink">
                                        <i class="ri-cash-line"></i> Pagamentos
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="dropdown__sublink">
                                        <i class="ri-refund-2-line"></i> Estorno
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li><a href="#" class="nav__link">Produtos</a></li>

                <li class="dropdown__item">
                    <div class="nav__link">
                        Usuários <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <ul class="dropdown__menu">
                        @if (Auth::check() && $PermissionService->isAdmin(Auth::user()->id))
                            <li>
                                <a href="{{ route('guidePermission') }}" class="dropdown__link">
                                    <i class="ri-shield-user-line"></i> Permissões
                                </a>
                            </li>
                        @endif
                        <li>
                            <a href=" {{ route('guideProfile') }}" class="dropdown__link">
                                <i class="ri-user-line"></i> Perfis
                            </a>
                        </li>

                        <li>
                            <a href="#" class="dropdown__link">
                                <i class="ri-lock-line"></i> Conta
                            </a>
                        </li>

                        <li>
                            <a href="#" class="dropdown__link">
                                <i class="ri-message-3-line"></i> Mensagens
                            </a>
                        </li>
                    </ul>
                </li>
                <li><a href="#" class="nav__link">Contato</a></li>
                <li class="nav__link">
                    @if (Auth::check())
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="nav__link" id="btn_logout">Sair</button>
                        </form>
                    @else
                        <a href="{{ route('guideLogin') }}" class="nav__link">Fazer Login</a>
                    @endif
                </li>
            </ul>
        </div>
    </nav>
</header>
