<style>
    /* Navbar Sticky */
    .navbar {
        position: fixed; /* Cố định navbar ở đầu trang */
        top: 0; /* Đặt ở đỉnh */
        width: 100%; /* Full width */
        z-index: 1000; /* Đảm bảo navbar nằm trên các phần tử khác */
        padding: 0;
    }
    
    /* Điều chỉnh body để tránh nội dung bị che bởi navbar */
    body {
        padding-top: 70px; /* Khoảng cách bằng chiều cao navbar, điều chỉnh nếu cần */
    }
    
    .navbar-brand {
        margin-left: 1rem;
        padding: 1rem;
        display: flex;
        align-items: center;
        color: white;
        text-decoration: none;
    }
    
    .navbar-logo {
        height: 40px;
        width: auto;
        margin-right: 10px;
        margin-left: 10px;
    }
    
    .navbar-nav {
        margin-right: 1rem;
    }
    
    .nav-item {
        transition: all 0.3s ease;
    }
    
    .nav-link {
        color: white;
        padding: 1rem;
        display: block;
    }
    
    .nav-item.active-page {
        background-color: #ffc107;
        border-radius: 10px;
    }
    
    .nav-item.active-page .nav-link {
        color: black !important;
    }
    
    .navbar-expand-lg .navbar-collapse {
        justify-content: flex-end;
    }
    </style>
    
    
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand ms-3" href="/">
            <img src="{{ asset('img/logo/logo.jpg') }}" alt="Logo" class="navbar-logo">
            Hồ Gươm Travel
        </a>
        <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto me-3">
                <li class="nav-item {{ request()->is('/') ? 'active-page' : '' }}">
                    <a class="nav-link" href="/">Trang Chủ</a>
                </li>
                <li class="nav-item {{ request()->routeIs('member.priceList') ? 'active-page' : '' }}">
                    <a class="nav-link" href="{{ route('member.priceList') }}">Bảng Giá</a>
                </li>
                <li class="nav-item {{ request()->routeIs('member.news') ? 'active-page' : '' }}">
                    <a class="nav-link" href="{{ route('member.news') }}">Tin Tức</a>
                </li>
                <li class="nav-item {{ request()->is('about') ? 'active-page' : '' }}">
                    <a class="nav-link" href="/about">Giới Thiệu</a>
                </li>
                <li class="nav-item {{ request()->is('contact') ? 'active-page' : '' }}">
                    <a class="nav-link" href="/">Liên Hệ</a>
                </li>
            </ul>
        </div>
    </nav>