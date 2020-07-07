<aside class="main-sidebar-left nav-side-menu">
    @php
    $user = \Illuminate\Support\Facades\Auth::user();
    $routeIndex = request()->route()->getName();
    @endphp
        <div class="content">
            <div id="jquery-accordion-menu" class="jquery-accordion-menu h-100" style="padding-top: 20px">
                <div class="jquery-accordion-menu-header fs18">DANH MỤC QUẢN LÝ</div>
                <ul>
                    @if($user->role == ADMIN)
                        <li class="@if($routeIndex == USER_INDEX) active @endif"><a class="fs16" href="{{ route(USER_INDEX) }}"><i class="fa fa-home"></i>Quản lý tài khoản</a></li>
                    @elseif($user->role == DEAN)
                        <li><a href="#"><i class="fa fa-file-image-o"></i>Gallery </a><span class="jquery-accordion-menu-label fs16">Phê duyệt đề tài</span></li>
                        <li><a href="#"><i class="fa fa-file-image-o"></i>Gallery </a><span class="jquery-accordion-menu-label fs16">Phê duyệt đề tài</span></li>
                        <li><a href="#"><i class="fa fa-file-image-o"></i>Gallery </a><span class="jquery-accordion-menu-label fs16">Phê duyệt đề tài</span></li>
                    @elseif($user->role == TEACHER)
                        <li class="@if($routeIndex == TEACHER_TOPIC_INDEX) active @endif"><a class="fs16" href="{{ route(TEACHER_TOPIC_INDEX) }}"><i class="fa fa-glass"></i>Quản lý đề tài </a></li>
                        <li class="@if($routeIndex == TEACHER_STUDENT) active @endif"><a class="fs16" href="{{ route(TEACHER_STUDENT) }}"><i class="fa fa-glass"></i>Quản lý sinh viên hướng dẫn </a></li>
                        <li class="@if($routeIndex == TEACHER_TOPIC_OFFER) active @endif"><a class="fs16" href="{{ route(TEACHER_TOPIC_OFFER) }}"><i class="fa fa-glass"></i>Duyệt đề tài </a></li>
                        <li class="@if($routeIndex == TEACHER_STUDENT_OFFER) active @endif"><a class="fs16" href="{{ route(TEACHER_STUDENT_OFFER) }}"><i class="fa fa-glass"></i>Duyệt sinh viên hướng dẫn </a></li>
                    @elseif($user->role == STUDENT)
                        <li class="@if($routeIndex == STUDENT_TOPIC) active @endif"><a href="{{ route(STUDENT_TOPIC) }}"><i class="fa fa-glass"></i>Định hướng đề tài</a></li>
                        <li class="@if($routeIndex == STUDENT_TEACHER) active @endif"><a class="fs16" href="{{ route(STUDENT_TEACHER) }}"><i class="fa fa-glass"></i>Đăng ký giảng viên hướng dẫn</a></li>
                        <li class="@if($routeIndex == TEACHER_STUDENT_OFFER) active @endif"><a class="fs16" href="{{ route(TEACHER_STUDENT_OFFER) }}"><i class="fa fa-glass"></i>Nộp báo cáo</a></li>
                        <li class="@if($routeIndex == TEACHER_STUDENT_OFFER) active @endif"><a class="fs16" href="{{ route(TEACHER_STUDENT_OFFER) }}"><i class="fa fa-glass"></i>Thông tin đồ án</a></li>
                        <li class="@if($routeIndex == TEACHER_STUDENT_OFFER) active @endif"><a class="fs16" href="{{ route(TEACHER_STUDENT_OFFER) }}"><i class="fa fa-glass"></i>Thông tin giảng viên hướng dẫn</a></li>
                    @else
                    @endif
                </ul>
            </div>
        </div>
</aside>
