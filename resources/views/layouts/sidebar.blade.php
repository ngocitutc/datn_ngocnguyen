<aside class="main-sidebar-left nav-side-menu">
    @php
    $user = \Illuminate\Support\Facades\Auth::user();
    @endphp
        <div class="content">
            <div id="jquery-accordion-menu" class="jquery-accordion-menu">
                <div class="jquery-accordion-menu-header">Danh mục quản lý</div>
                <ul>
                    @if($user->role == ADMIN)
                    <li class="active"><a href="{{ route(USER_INDEX) }}"><i class="fa fa-home"></i>Quản lý tài khoản</a></li>
                    @endif
                        @if($user->role == TEACHER)
                    <li><a href="#"><i class="fa fa-glass"></i>Quản lý đề tài </a></li>
                        @endif
                    <li><a href="#"><i class="fa fa-file-image-o"></i>Gallery </a><span class="jquery-accordion-menu-label">12 </span></li>
                    <li><a href="#"><i class="fa fa-cog"></i>Services </a>
                        <ul class="submenu">
                            <li><a href="#">
                            Web Design </a></li>
                            <li><a href="#">Hosting </a></li>
                            <li><a href="#">Design </a>
                                <ul class="submenu">
                                    <li><a href="#">Graphics </a></li>
                                    <li><a href="#">Vectors </a></li>
                                    <li><a href="#">Photoshop </a></li>
                                    <li><a href="#">Fonts </a></li>
                                </ul>
                            </li>
                            <li><a href="#">Consulting </a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-newspaper-o"></i>News </a></li>
                    <li><a href="#"><i class="fa fa-suitcase"></i>Portfolio </a>
                        <ul class="submenu">
                            <li><a href="#">Web Design </a></li>
                            <li><a href="#">Graphics </a><span class="jquery-accordion-menu-label">10 </span></li>
                            <li><a href="#">Photoshop </a></li>
                            <li><a href="#">Programming </a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-user"></i>About </a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i>Contact </a></li>
                </ul>
            </div>
        </div>
        
</aside>
