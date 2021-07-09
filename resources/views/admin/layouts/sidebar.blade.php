<!-- Main sidebar -->
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

<!-- Sidebar mobile toggler -->
<div class="sidebar-mobile-toggler text-center">
    <a href="#" class="sidebar-mobile-main-toggle">
        <i class="icon-arrow-left8"></i>
    </a>
    Navigation
    <a href="#" class="sidebar-mobile-expand">
        <i class="icon-screen-full"></i>
        <i class="icon-screen-normal"></i>
    </a>
</div>
<!-- /sidebar mobile toggler -->


<!-- Sidebar content -->
<div class="sidebar-content">

    <!-- User menu -->
    <div class="sidebar-user">
        <div class="card-body">
            <div class="media">
                <div class="mr-3">
                    <a href="#"><img src="{{asset('global_assets/images/demo/users/face11.jpg')}}" width="38" height="38" class="rounded-circle" alt=""></a>
                </div>

                <div class="media-body">
                    <div class="media-title font-weight-semibold">Admin</div>
                    <div class="font-size-xs opacity-50">
                        <i class="icon-pin font-size-sm"></i> &nbsp;歡迎 管理員
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /user menu -->


    <!-- Main navigation -->
    <div class="card card-sidebar-mobile">
        <ul class="nav nav-sidebar" data-nav-type="accordion">

            <!-- Main -->
            <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
            <li class="nav-item">
                <a href="{{ url('/admin')}}" class="nav-link active">
                    <i class="icon-home4"></i>
                    <span>
                        Dashboard
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('setting.index')}}" class="nav-link">
                    <i class="icon-user"></i>
                    <span>用戶管理</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin_show')}}" class="nav-link">
                    <i class="icon-pencil6"></i>
                    <span>學生作答紀錄</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('ctr_show')}}" class="nav-link">
                    <i class="icon-mouse-left"></i>
                    <span>點擊率</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('user_activity')}}" class="nav-link">
                    <i class="icon-file-text"></i>
                    <span>活動紀錄</span>
                </a>
            </li>
            <li class="nav-item nav-item-submenu">
                <a href="#" class="nav-link"><i class="icon-pencil5"></i> <span>我的課程</span></a>

                <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                    <li class="nav-item"><a href="{{route('course.index')}}" class="nav-link active">情境編輯</a></li>
                    <li class="nav-item"><a href="{{route('coursetopic.index')}}" class="nav-link">課程編輯</a></li>
                </ul>
            </li>
            <li class="nav-item nav-item-submenu">
                <a href="#" class="nav-link"><i class="icon-pencil5"></i> <span>考試</span></a>

                <ul class="nav nav-group-sub" data-submenu-title="quiz">
                    <li class="nav-item"><a href="{{route('yellow_show')}}" class="nav-link active">黃色區塊</a></li>
                    <li class="nav-item"><a href="{{route('show_data')}}" class="nav-link">學生考試狀況</a></li>
                </ul>
            </li>
            <!-- /main -->

        </ul>
    </div>
    <!-- /main navigation -->

</div>
<!-- /sidebar content -->

</div>
<!-- /main sidebar -->