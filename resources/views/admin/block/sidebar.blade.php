<nav class="sidebar sidebar-offcanvas d-flex " id="sidebar">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admindex') }}">
                <i class="fa-solid fa-house"></i>
                <span class="menu-title text-dark" >Trang chủ</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('sanpham.index') }}">
                <i class="fa-solid fa-list"></i>
                <span class="menu-title  text-dark">Sản phẩm</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('danhmucs.index')}}">
                <i class="fa-solid fa-bookmark"></i>
                <span class="menu-title  text-dark">Danh mục</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="fa-solid fa-shopping-cart"></i>
                <span class="menu-title  text-dark">Đơn hàng</span>
            </a>
        </li>
    </ul>
</nav>