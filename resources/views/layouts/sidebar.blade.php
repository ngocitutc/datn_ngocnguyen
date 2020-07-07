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
                    @elseif($user->role == DEAN)
                        <li><a href="#"><i class="fa fa-file-image-o"></i>Gallery </a><span class="jquery-accordion-menu-label">Phê duyệt đề tài</span></li>
                        <li><a href="#"><i class="fa fa-file-image-o"></i>Gallery </a><span class="jquery-accordion-menu-label">Phê duyệt đề tài</span></li>
                        <li><a href="#"><i class="fa fa-file-image-o"></i>Gallery </a><span class="jquery-accordion-menu-label">Phê duyệt đề tài</span></li>
                    @elseif($user->role == TEACHER)
                        <li><a href="{{ route(TEACHER_TOPIC_INDEX) }}"><i class="fa fa-glass"></i>Quản lý đề tài </a></li>
                        <li><a href="{{ route(TEACHER_STUDENT) }}"><i class="fa fa-glass"></i>Quản lý sinh viên hướng dẫn </a></li>
                        <li><a href="{{ route(TEACHER_TOPIC_OFFER) }}"><i class="fa fa-glass"></i>Duyệt đề tài </a></li>
                        <li><a href="{{ route(TEACHER_STUDENT_OFFER) }}"><i class="fa fa-glass"></i>Duyệt sinh viên hướng dẫn </a></li>
                    @elseif($user->role == STUDENT)
                        <li><a href="{{ route(STUDENT_TOPIC) }}"><i class="fa fa-glass"></i>Định hướng đề tài</a></li>
                        <li><a href="{{ route(STUDENT_TEACHER) }}"><i class="fa fa-glass"></i>Đăng ký giảng viên hướng dẫn</a></li>
                        <li><a href="{{ route(TEACHER_STUDENT_OFFER) }}"><i class="fa fa-glass"></i>Nộp báo cáo</a></li>
                        <li><a href="{{ route(TEACHER_STUDENT_OFFER) }}"><i class="fa fa-glass"></i>Thông tin đồ án</a></li>
                        <li><a href="{{ route(TEACHER_STUDENT_OFFER) }}"><i class="fa fa-glass"></i>Thông tin giảng viên hướng dẫn</a></li>
                    @else
                    @endif
                </ul>
            </div>
        </div>
        
</aside>
