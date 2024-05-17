@extends('header')

@section('content')
<!-- CONTAINER -->
<div class="app__container payment__cart">
    <div class="grid">
        <div class="grid__row app__contents">
           
            <div class="home__product">
                <div class="grid__row">
                    <!-- PRODUCT ITEM -->
                    <div class="grid__column-product_cart">
                        <form class="formProductDetail" method="post" action="{{ route('user.detailIndexCustomerUser')}}">
                            @csrf 
                            <table class="table__product-cart" id="customers">
                                <tr class="">
                                    <th>Tên sản phẩm</th>
                                    <th>Đơn Giá</th>
                                    <th>Số lượng</th>
                                    <th>Số tiền</th>
                                    <th>Thao tác</th>
                                </tr>
                                @foreach($carts as $cart) 
                                <tr class="product__cart-item">
                                    <td class="seller__td-img">
                                        <input name="customerUserId" type="hidden" value="{{$customerUserId}}">
                                        <input name="productId" type="hidden" value="{{ $cart->product->id}}">
                                        <div class="detail__product-info">
                                            <input value="{{$cart->id}}" class="checkProductCart" type="checkbox">
                                            <img src="{{('img/img_auth/' . $cart->product->img) }}" alt="" class="seller-img_product">
                                            <a href="" class="information__product-link">
                                                <span class="seller-name_product">{{ $cart->product->product_name }}</span>
                                                <span class="seller-description_product">{{ $cart->product->description }}</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="price__product-cart">{{$cart->product->price}}</span>
                                        <span>đ</span>
                                    </td>
                                    <td>
                                        <div class="quantity__cart">
                                            <div class="sub_quantity">
                                                <a href="{{ route('user.subProductCart', ['id' => $cart->id]) }}"><i id="sub" class="fa-solid fa-minus"></i></a>
                                            </div>
                                            <div id="quantityProductCart" value="{{ $cart->quantity }}" class="number_quantity">{{ $cart->quantity }}</div>
                                            <div class="add_quantity">
                                                <a href="{{ route('user.plusProductCart', ['id' => $cart->id]) }}"> <i id="plus" class="fa-solid fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="total__product-cart">{{$cart->product->price *  $cart->quantity}}</span><span>.00</span>
                                        <span>đ</span>
                                    </td>
                                    <td class="action__product">
                                        <a href="{{ route('user.deleteCart', ['id' => $cart->id]) }}" class="seller__product-delete">Xóa</a>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </form>
                    </div>
                   
                    <!-- PRODUCT ITEM -->
                    <div class="grid payment__cart-item">
                        <form action="{{ route('user.purchaseInCart')}}" method="post">
                            @csrf
                            <div class="action__cart">
                                <div class="payment__cart-title">
                                    <input name="arrayProductCart" value="" class="arrayProductCart" type="hidden">
                                    Tổng tiền:
                                    <input value="" name="totalPayment" type="text" class="price_total-payment"></input>
                                </div>
                                <div class="payment__cart-btn">
                                    <button type="submit" class="btn btn--primary">Thanh toán</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
   document.addEventListener("DOMContentLoaded", function() {
    var productDetailImages = document.querySelectorAll(".seller-img_product");

    productDetailImages.forEach(function(image) {
        image.addEventListener("click", function() {
            // Find the closest form element
            var form = image.closest("form");
            // Submit the form
            form.submit();
        });
    });
});

</script>
@endsection
