@extends('header_cart')
@if(is_int($evarageStars))
            @for($i = 0; $i < $evarageStars; $i++) 
                <i class="fa-solid fa-star"></i>
              @endfor
            @endif
@section('content_cart')
<!-- CONTAINER -->
<div class="app__container payment__cart">
    <div class="grid">
        <div class="grid__row app__contents">
            <div class="grid__column-12">
                <div class="home-filter_payment">
                    <div class="title__home-filter">
                        <i class="fa-solid fa-location-dot"></i>
                        <div class="title__home-page">Địa chỉ</div>
                    </div>
                    <div class="filter_payment-content">
                        <div class="payment-content-info">
                            <div class="content__info-name">Nguyễn Minh Hiệp</div>
                            <div class="content__info-phone">0834983286</div>
                        </div>
                        <div class="payment-content-address">Bình Thành, Đức Huệ, Long An</div>
                    </div>
                </div>
                <div class="home__product">
                    <div class="grid__row">
                        <!-- PRODUCT ITEM -->
                        <div class="grid__column-product_cart">
                            <table class="table__product-payment" id="customers__payment">
                                <tr class="">
                                    <th>Tên sản phẩm</th>
                                    <th>Đơn Giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                </tr>
                                <tr class="product__cart-item">
                                    <td class="seller__td-img">
                                        <div class="detail__product-info">
                                            <img src="/img/img_auth/iphone-15.webp" alt="" class="seller-img_product">
                                            <a href="" class="information__product-link">
                                                <span class="seller-name_product">Iphone 13</span>
                                                <span class="seller-description_product">Mô tả chức năng</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="price__product-cart">29900000</span>
                                        <span>đ</span>
                                    </td>
                                    <td>
                                        <div class="quantity__cart">
                                            <div class="sub_quantity">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <div class="number_quantity">1</div>
                                            <div class="add_quantity">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="total__product-cart">29900000</span>
                                        <span>đ</span>
                                    </td>
                                </tr>
                                <tr class="product__cart-item">
                                    <td class="seller__td-img">
                                        <div class="detail__product-info">
                                            <img src="/img/img_auth/iphone-15.webp" alt="" class="seller-img_product">
                                            <a href="" class="information__product-link">
                                                <span class="seller-name_product">Iphone 13</span>
                                                <span class="seller-description_product">Mô tả chức năng</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="price__product-cart">29900000</span>
                                        <span>đ</span>
                                    </td>
                                    <td>
                                        <div class="quantity__cart">
                                            <div class="sub_quantity">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <div class="number_quantity">1</div>
                                            <div class="add_quantity">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="total__product-cart">29900000</span>
                                        <span>đ</span>
                                    </td>
                                </tr>
                                <tr class="product__cart-item">
                                    <td class="seller__td-img">
                                        <div class="detail__product-info">
                                            <img src="/img/img_auth/iphone-15.webp" alt="" class="seller-img_product">
                                            <a href="" class="information__product-link">
                                                <span class="seller-name_product">Iphone 13</span>
                                                <span class="seller-description_product">Mô tả chức năng</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="price__product-cart">29900000</span>
                                        <span>đ</span>
                                    </td>
                                    <td>
                                        <div class="quantity__cart">
                                            <div class="sub_quantity">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <div class="number_quantity">1</div>
                                            <div class="add_quantity">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="total__product-cart">29900000</span>
                                        <span>đ</span>
                                    </td>
                                </tr>
                            </table>

                        </div>
                        <!-- PRODUCT ITEM -->
                    </div>
                </div>
                <div class="home-filter_payment-method">
                    <div class="title__home-filter">
                        <i class="fa-regular fa-money-bill-1"></i>
                        <div class="title__home-page">Phương thức thanh toán</div>
                    </div>
                    <div class="payment-method__list">
                       <div class="payment-method__item active__method">Thanh toán khi nhận hàng</div>
                       <div class="payment-method__item">Thánh toán bằng cart</div>
                       <div class="payment-method__item">Chuyển khoản thanh toán</div>
                    </div>
                </div>

                <!-- PAYMENT -->
                <div class="grid payment__cart-item">
                    <div class="action__cart">
                        <div class="payment__cart-title">
                            Tổng tiền:
                            <span class="price_total-payment">25.999.000 <span>đ</span></span>
                        </div>
                        <div class="payment__cart-btn">
                            <button class="btn btn--primary">Thanh toán</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection