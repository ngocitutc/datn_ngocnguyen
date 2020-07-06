<header id="header" class="header">
    <div class="container-fluid">
        <div class="row p10l p10r" style="justify-content: space-between">
            <div class="header-simulation-logo d-none d-md-block">
                <a href="">
                    <img class="logo-header" src="{{ asset('images/logos/main-logo-2.png') }}">
                </a>
            </div>
            <div class="header-simulation-right">
                <nav class="navbar-expand-smk m10r">
                    <ul class="navbar-nav">
                        <!-- Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop"
                               data-toggle="dropdown">
                                <img class="img-user w50" src="{{ asset('images/logos/admin.jpeg') }}">
                                <span class="name-user text-center m10l text-black"> Admin</span>
                            </a>
                            <div class="dropdown-menu drop-down-for-user">
                                <a class="dropdown-item"
                                   href="{{ route(LOGOUT) }}">Đăng xuất</a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
