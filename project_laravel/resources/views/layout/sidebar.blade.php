<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Lyn</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item"><a class="nav-link" href="#"></a></li>
    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-home"></i>
            <span>Trang chủ</span>
        </a>
    </li>
    <li class="nav-item"><a class="nav-link" href="#"></a></li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fa fa-list"></i>
            <span>Danh mục</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fa fa-fw fa-archive"></i>
            <span>Sản phẩm</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fa fa-clipboard"></i>
            <span>Đơn hàng</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">Chưa xử lý</a>
                <a class="collapse-item" href="#">Đã xử lý</a>
                <a class="collapse-item" href="#">Tất cả</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.users.index') }}">
            <i class="fa fa-fw fa-table"></i>
            <span>Khách hàng</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.users.index') }}">
            <i class="fa fa-user fa-table"></i>
            <span>Người dùng</span>
        </a>
    </li>
    <li class="nav-item"><a class="nav-link" href="#"></a></li>
    <li class="nav-item"><a class="nav-link" href="#"></a></li>
    <li class="nav-item"><a class="nav-link" href="#"></a></li>
    <li class="nav-item"><a class="nav-link" href="#"></a></li>
    <hr class="sidebar-divider d-none d-md-block">
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>