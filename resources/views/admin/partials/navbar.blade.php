<header class="header">
    <nav class="navbar fixed-top">
        <div class="navbar-holder d-flex align-items-center align-middle justify-content-between">
            <div class="navbar-header">
                <a href="{{ route('admin.index') }}" class="navbar-brand">
                    <div class="brand-image brand-big">
                        <img src="{{ mix('assets/images/logo.png') }}" alt="logo" class="logo-big">
                    </div>
                    <div class="brand-image brand-small">
                        <img src="{{ mix('assets/images/logo.png') }}" alt="logo" class="logo-small">
                    </div>
                </a>
                <a id="toggle-btn" href="#" class="menu-btn active">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
            <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center pull-right">
                <li class="nav-item dropdown">
                    <a id="user" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">
                        <img src="{{ avatar() }}" alt="..." class="avatar rounded-circle">
                    </a>
                    <ul aria-labelledby="user" class="user-size dropdown-menu">
                        <li class="welcome">
                            <img src="{{ avatar() }}" alt="..." class="rounded-circle">
                        </li>
                        <li>
                            <a href="#" class="dropdown-item">
                                Perfil
                            </a>
                        </li>
                        <li class="separator"></li>
                        <li>
                            <a rel="nofollow" href="{{ route('logout') }}" class="dropdown-item logout text-center">
                                <i class="ti-power-off"></i>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
