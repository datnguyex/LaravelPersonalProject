<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link type="text/css" href="/css/main.css" rel="stylesheet">
        <link type="text/css" href="/css/base.css" rel="stylesheet">
        <link type="text/css" href="/css/seller.css" rel="stylesheet">
        <link type="text/scss" href="/scss/seller.scss" rel="stylesheet">
        <link type="text/css" href="/scss/profile.css" rel="stylesheet">
        <link type="text/css" href="/scss/product_detail.css" rel="stylesheet">
        <link type="text/css" href="/scss/product.css" rel="stylesheet">
        
        
        <link rel="stylesheet" href="/font/fontawesome-free-6.5.1-web/css/all.min.css">
    </head>
    <body>
        <div class="main">
            <!-- HEADER -->
            <header class="header">
                <div class="grid">
                    <nav class="header__navbar">
                        <ul class="navbar-list">
                            <li class="navbar-item navbar-item--has-qr navbar-item--separate">
                                Vào cửa hàng ứng dụng mua sản phẩm
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
                                                    <span class="navbar__notify-name">Chúc mừng năm mới Chúc mừng năm mới Chúc mừng năm mới</span>
                                                    <span class="navbar__notify-description">Mô tả Chúc mừng năm mới Chúc mừng năm mới</span>
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
                            <img src="{{ asset('img/img_auth/' . $customerUser->img) }}" alt="" class="navbar-user-img">
                                <span class="navbar-user-name">{{$customerUser->name}}</span>
                                <ul class="navbar-user-info">
                                    <li class="navbar-user-item">
                                        <?php if(session()->has('emailCustomerUser')) {
                                            ?>
                                             <a href="{{ route('user.viewUserProfile', ['id' => $customerUser->id]) }}" class="navbar-user-link">Tài khoản</a>
                                        <?php
                                          }
                                          else if(session()->has('emailSeller')) {
                                            ?>
                                            <a href="{{ route('seller.viewSellerProfile', ['id' => $customerUser->id]) }}" class="navbar-user-link">Tài khoản</a>
                                            <?php
                                          }
                                          else if(session()->has('emailAdmin')) {
                                            ?>
                                            <a href="{{ route('admin.viewAdminProfile', ['id' => $customerUser->id]) }}" class="navbar-user-link">Tài khoản</a>
                                        <?php  
                                        }
                                          ?>
                                       
                                    </li>
                                    <li class="navbar-user-item">
                                        <a href="" class="navbar-user-link">Địa chỉ</a>
                                    </li>
                                    <li class="navbar-user-item">
                                        <a href="" class="navbar-user-link">Đơn mua</a>
                                    </li>
                                    <li class="navbar-user-item">
                                        <a href="{{ route('signOut') }}" class="navbar-user-link">Đăng xuất</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- USER -->
                        </ul>
                    </nav>
    
                    <!--HEADER WITH SEARCH -->
                    <div class="header-with-search">
                        <div class="header__logo">
                            <a href="{{ route('returnHome')}}" class="logo_link">
                                <i class="fa-solid fa-store logo_shop "></i>
                                <div class="name_header">
                                    <span style="font-size: 1.8rem; with: 100%;">SMART</span> 
                                    <span class="name_shop">STORE</span>
                                </div>
                            </a>
                        </div>
                       
    
                        <div class="header__search">
                            <div class="header__search-input-wrap">
                                <form action="{{ route('user.searchProduct')}}" method="post">
                                @csrf       
                                <input style="margin-top:10px"  name="keyword" value="" type="text" class="header__search-input" placeholder="Nhập sản phẩm tìm kiếm">
                               
                                <div class="header__search-history">
                                    <h3 class="header__search-history-heading">Lịch sử tìm kiếm</h3>
                                    <ul class="header__search-history-list">
                                        <li class="header__search-history-item">
                                            <a href="#" class="history-item-link">Kem dưỡng da</a>
                                        </li>
                                        <li class="header__search-history-item">
                                            <a href="#" class="history-item-link">Kem dưỡng da</a>
                                        </li>
                                    </ul>
                                </div>
                                </form>
                            </div>
    
                            <div class="search-select">
                                <span class="search-title">Trong Shop</span>
                                <i class="search-icon fa-solid fa-angle-down"></i>
                                <ul class="search-option">
                                    <li class="search-option-item search-option-item-action">
                                        <span>Trong Shop</span>
                                        <i class="fa-solid fa-check"></i>
                                    </li>
                                    <li class="search-option-item">
                                        <Span>Ngoài Shop</Span>
                                        <i class="fa-solid fa-check"></i>
                                    </li>
                                </ul>
                            </div>
                            
                            <button class="search-btn">
                                <i class="search-btn-icon fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
    
                        <!-- HEADER WITH CART -->
                        
                        <div class="header__cart">
                            <div class="header__cart-wrap">
                                <i class="cart-icon fa-solid fa-cart-shopping"></i>
                                @if(session()->has('emailCustomerUser'))
                                <div class="header__cart-list header__cart-no-cart">
                                    <!-- <img src="/img/no-cart.png" alt="" class="header__cart-no-cart-img">
                                    <span class="header__cart-message">Chưa có sản phẩm</span> -->
                                    
                                    <h3 class="cart-heading">Sản phẩm đã thêm</h3>
                                    <ul class="cart-list-item">
                                        <!-- cart-item -->
                                       
    @foreach($carts as $cart)
    <form class="formProductDetail2" method="post" action="{{ route('user.detailIndexCustomerUser')}}">
    @csrf 
    <input name="customerUserId" value="{{$customerUserId}}" type="hidden">
      <input name="productId" value="{{$cart->product->id}}" type="hidden">
        <li class="cart-item">
            <img src="{{ asset('img/img_auth/' . $cart->product->img) }}" alt="" class="cart-item-img">
            <div class="cart-item-info">
                <div class="cart-item-header">
                    <h5 class="cart-item-name">{{ $cart->product->product_name }}</h5>
                    <div class="cart-item-price-qnt">
                        <span class="cart-item-price">{{ $cart->product->price }}</span>
                        <span class="cart-item-multiply">x</span>
                        <span class="cart-item-qnt">{{ $cart->quantity }}</span>
                    </div>
                </div>
                <div class="cart-item-body">
                    <span class="cart-item-description">Phân loại: {{ $cart->product->category->category_name }}</span>
                    <span class="cart-item-delete">Xóa</span>
                </div>
            </div>
        </li>
        </form>
    @endforeach

                                    </ul>
                                    <a href="{{ route('user.viewCart')}}" class="header__cart-view btn btn--primary">Xem giỏ hàng</a>
                                </div>
    
                            </div>
                        </div>
                        @endif
        
                        <!-- HEADER WITH CART -->
                    </div>
                    
                </div>
            </header>
            <!-- /HEADER -->

            @yield('content')
            
            <!-- FOOTER  -->
            <footer class="footer">
                <div class="title_footer">
                  Nguyễn Thành Đạt/ Project
                </div>
            </footer>
            <!-- FOOTER  -->

        </div>
        <script src="/js/action.js"></script>
        <script src="/js/dropdown.js"></script>
        <script>
             document.addEventListener("DOMContentLoaded", function() {
    var productDetailForms = document.querySelectorAll(".formProductDetail2");

    productDetailForms.forEach(function(form) {
      var productDetailImg = form.querySelector(".cart-item-img");

      productDetailImg.addEventListener("click", function() {
        form.submit();
      });
    });
  });
        </script>
    </body>
</html>