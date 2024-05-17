@extends('header')
@section('content')
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
    
</body>
</html>
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
                            <div class="content__info-name">{{$customerUser->name}}</div>
                            <div class="content__info-phone">{{$customerUser->phone}}</div>
                        </div>
                        <div class="payment-content-address">{{$customerUser->address}}</div>
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
                                @foreach($cartProducts as $cartProduct) 
                                <tr class="product__cart-item">
                                    <td class="seller__td-img">
                                        <div class="detail__product-info">
                                        <img src="{{ asset('img/img_auth/' . $cartProduct->product->img) }}" alt="" class="seller-img_product">
                                            <a href="" class="information__product-link">
                                                <span class="seller-name_product">{{$cartProduct->product->product_name}}</span>
                                                <span class="seller-description_product">Mô tả chức năng</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="price__product-cart">{{$cartProduct->product->price}}</span>
                                        <span>đ</span>
                                    </td>
                                    <td>
                                        <div class="quantity__cart">
                                            <div class="number_quantity">{{$cartProduct->quantity}}</div>
                                        </div>
                                    </td>
                                    <td>
                                        
                                        <span class="total__product-cart">{{$cartProduct->product->price * $cartProduct->quantity}}.00</span>
                                        <span>đ</span>
                                    </td>
                                </tr>
                                @endforeach
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
                       <div class="payment-method__item">Thanh toán khi nhận hàng</div>
                       <div class="payment-method__item">Thẻ tín dụng/Ghi nợ</div>
                       <div class="payment-method__item">Ví SmartStore</div>
                    </div>
                </div>

                <!-- PAYMENT -->
                
               <form action="{{ route('user.mailPurchase')}}" method="post">
                   @csrf
                <input id="shipMethod" name="shipMethod" value="" type="hidden">
               <div class="grid payment__cart-item">
                    <div class="action__cart">
                        <div class="payment__cart-title">
                            Tổng tiền:
                            <input name="totalPayment" value="{{$totalPayment}}" type="hidden">
                            <span class="price_total-payment">{{$totalPayment}}</span>
                        </div>
                        <div class="payment__cart-btn">
                            <button class="btn btn--primary">Thanh toán</button>
                        </div>
                    </div>
                </div>
               </form>
            </div>
        </div>
    </div>
</div>
<script>
    const paymentMethodItem = document.querySelectorAll('.payment-method__item');
const shipMethod = document.querySelector('#shipMethod');
paymentMethodItem.forEach(element => {
    element.addEventListener('click', function() {
        shipMethod.value = element.innerHTML;
    });
});
</script>
@endsection