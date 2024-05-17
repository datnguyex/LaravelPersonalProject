<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" href="/css/main.css" rel="stylesheet">
    <link type="text/css" href="/css/base.css" rel="stylesheet">
    <link type="text/css" href="/css/seller.css" rel="stylesheet">
    <link type="text/css" href="/scss/cart.css" rel="stylesheet">
    <link type="text/css" href="/scss/payment.css" rel="stylesheet">
    <link type="text/scss" href="/scss/seller.scss" rel="stylesheet">
    <link rel="stylesheet" href="/font/fontawesome-free-6.5.1-web/css/all.min.css">
</head>

<body>
    <!-- HEADER -->
    <header class="header_cart">
        <div class="header_cart-item--top">
            <div class="grid">
                <nav class="header__navbar">
                    <ul class="navbar-list">
                        <li class="navbar-item navbar-item--has-qr navbar-item--separate">
                            Trang người bán
                        </li>
                        <li class="navbar-item navbar-item--has-qr navbar-item--separate">
                            Tải ứng dụng
                            <div class="navbar__qr">
                                <img src="/img/QRcode.png" alt="" class="navbar__qr-img">
                                <div class="navbar__qr-apps">
                                    <a href="" class="navbar__qr-link">
                                        <img src="/img/ggplay.png" class="navbar__qr-apps-img">
                                        </img></a>
                                    <a href="" class="navbar__qr-link">
                                        <img src="/img/apple.png" class="navbar__qr-apps-img"></img>
                                    </a>

                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar__list">
                        <li class="navbar-item navbar-item--has-notify">
                            <a href="#" class="navbar-item-link">
                                <i class="navbar-icon-link fa-solid fa-bell"></i>
                                Thông báo
                            </a>
                            <div class="navbar__notify">
                                <header class="navbar__notify-header">
                                    <h3>Thông báo mới nhận</h3>
                                </header>
                                <ul class="navbar__notify-list">
                                    <li class="navbar__notify-item navbar__notify-item--viewed">
                                        <a href="" class="navbar__notify-link">
                                            <span>
                                                <img src="/img/notify.jpg" alt="" class="navbar__notify-img">
                                            </span>
                                            <div class="navbar__notify-info">
                                                <span class="navbar__notify-name">Chúc mừng năm mới</span>
                                                <span class="navbar__notify-description">Mô tả</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="navbar__notify-item navbar__notify-item--viewed">
                                        <a href="" class="navbar__notify-link">
                                            <span>
                                                <img src="/img/notify.jpg" alt="" class="navbar__notify-img">
                                            </span>
                                            <div class="navbar__notify-info">
                                                <span class="navbar__notify-name">Chúc mừng năm mới</span>
                                                <span class="navbar__notify-description">Mô tả</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="navbar__notify-item navbar__notify-item--viewed">
                                        <a href="" class="navbar__notify-link">
                                            <span>
                                                <img src="/img/notify.jpg" alt="" class="navbar__notify-img">
                                            </span>
                                            <div class="navbar__notify-info">
                                                <span class="navbar__notify-name">Chúc mừng năm mới Chúc mừng năm mới
                                                    Chúc
                                                    mừng năm mới</span>
                                                <span class="navbar__notify-description">Mô tả Chúc mừng năm mới Chúc
                                                    mừng
                                                    năm mới</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <footer class="navbar__notify-footer">
                                    <a href="" class="navbar__notify-footer-btn">Xem tất cả</a>
                                </footer>
                            </div>
                        </li>
                        <li class="navbar-item">
                            <a href="#" class="navbar-item-link">
                                <i class="navbar-icon-link fa-regular fa-circle-question"></i>
                                Trợ giúp
                            </a>
                        </li>
                        <!-- <li class="navbar-item navbar-item--strong navbar-item--separate">Đăng ký</li>
                                <li class="navbar-item navbar-item--strong">Đăng nhập</li> -->

                        <!-- USER -->
                        <li class="navbar-item navbar-user">
                            <img src="/img/user_img.jpg" alt="" class="navbar-user-img">
                            <span class="navbar-user-name">Nguyễn Minh Hiệp</span>
                            <ul class="navbar-user-info">
                                <li class="navbar-user-item">
                                    <a href="" class="navbar-user-link">Tài khoản</a>
                                </li>
                                <li class="navbar-user-item">
                                    <a href="" class="navbar-user-link">Địa chỉ</a>
                                </li>
                                <li class="navbar-user-item">
                                    <a href="" class="navbar-user-link">Đơn mua</a>
                                </li>
                                <li class="navbar-user-item">
                                    <a href="" class="navbar-user-link">Đăng xuất</a>
                                </li>
                            </ul>
                        </li>
                        <!-- USER -->
                    </ul>
                </nav>
            </div>
        </div>
        <div class="header_cart-item--bottom">
            <div class="grid">
                <div class="header-with-search header-with-search-cart">
                    <div class="header__logo">
                        <a href="{{ route('returnHome')}}" class="logo_link">
                            <i class="fa-solid fa-store logo_shop "></i>
                            <div class="name_header">
                                <span style="font-size: 1.8rem; with: 100%;">SMART</span>
                                <span class="name_shop">STORE</span>
                            </div>
                        </a>
                    </div>

                    <div class="header__icon-next">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>

                    <div class="header__title-page">
                        Giỏ hàng
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER -->
    
    <!-- CONTAINER -->
    @yield('content_cart')
    <!-- CONTAINER -->
    <script src="/js/cart.js"></script>
</body>

</html>