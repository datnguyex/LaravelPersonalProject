@extends('header')

@section('content')

<div class="app__container">
    <div class="grid">
        <div class="grid__row app__contents_seller ">
            <!-- CATEGORY -->
            <div class="grid__column-5">
                <div class="product__img-detail">
                    <img class="img__product-detail" src="{{('img/img_auth/' . $product->img) }}" />
                </div>
            </div>
            <!-- CATEGORY -->

            <div class="grid__column-7">
                <div class="title_product-detail">
                    <div class="product-detail-name">{{$product->product_name}}</div>
                    <div class="product-detail-info">
                        <div class="product-detail-rate">
                        @php
                        $averageStarz = $product->averageStars;
                        @endphp

@if($averageStarz > 0)
    @for($i = 0; $i < intval($averageStarz); $i++)
        <i class="product-item__star--gold fa-solid fa-star"></i>
    @endfor
    @if($averageStarz != intval($averageStarz))
        <i id="star-gradient" class="product-item__star--gold fa-solid fa-star"></i>
    @endif
@else
    <i class="product-item__star--gold fa-solid fa-star"></i>
@endif

                        
                        </div>
                        <div class="product-detail product-detail-Evaluate">Đánh giá</div>
                        <div class="product-detail product-detail-sold">Đã bán</div>
                    </div>
                    <div class="product-detail-cate">{{$product->category->category_name}}</div>
                    <div class="product-detail-price">{{$product->price}}<span>đ</span></div>
                    <div class="product-detail-des">{{$product->description}}</div>
                    <div class="product-detail-action">
                        <div class="product-detail-quantity">{{$product->quantity}}</div>
                        <div class="product-detail-quantities">
                            <div class="product-detail-add">
                                <i class="fa-solid fa-plus"></i>
                            </div>
                            <div class="product-detail-number">1</div>
                            <div class="product-detail-sub">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                        </div>
                        <div class="product-detail-sold"><span>{{$product->quantity - $product->sold}}</span>Sản phẩm còn lại</div>
                    </div>
                    <div class="product-detail-button">
                        <div class="btn btn--cart">
                            <i class="fa-solid fa-cart-plus"></i>
                            Thêm vào giỏ hàng
                        </div>
                        <div class="btn btn--primary">Mua ngay</div>
                    </div>

                </div>
            </div>

            <!-- USER -->
            <div class="grid__column-12">
                <div class="info__shop">
                    <img class="info__shop-img" src="{{('img/img_auth/' . $seller->img) }}" />
                    <div class="info__shop-item">
                        <div class="info__shop-information">
                            <div class="info__shop-name">{{$seller->name}}</div>
                            <div class="info__shop-phone">{{$seller->phone}}</div>
                        </div>
                        <div class="info__shop-btn">
                           <form action="{{ route('seller.viewSeller') }}" method="post">
                           @csrf 
                           <button type="submit" class="btn info__shop-btn__see">
                                <input name="id_seller" value="{{$product->seller_id}}" type="hidden" />
                                <i class="fa-regular fa-eye"></i>
                                Xem shop
                            </button>
                           </form>
                            <button class="btn btn--primary info__shop-btn__chat">
                                Chat shop
                                <i class="fa-regular fa-comment"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- USER -->

            <div class="grid__column-12">
                <div class="title__home-product">
                    <div class="title__home">Gợi ý liên quan</div>
                </div>

                <div class="home__product">
                    <div class="grid__row">
                        <!-- PRODUCT ITEM -->
                      @foreach($productRelates as $productRelate)
                      <div class="grid__column-2-4">
                            <a href="" class="product-item">
                            <div class="product-item__img" style="background-image: url('{{ asset('img/img_auth/' . $productRelate->img) }}');"></div>
                                <h4 class="product-item__name">{{$productRelate->product_name}}</h4>
                                <div class="product-item__price">
                                    <span class="product-item__price_old">1.200.000đ</span>
                                    <span class="product-item__price_current">{{$productRelate->price}}đ</span>
                                </div>
                                <div class="product-item__action">
                                    <span class="product-item_like product-item_liked">
                                        <i class="product-item_like-icon-empty fa-regular fa-heart"></i>
                                        <i class="product-item_liked-icon-fill fa-solid fa-heart"></i>
                                    </span>
                                    <div class="product-item__rating">
                                    @php
                        $averageStars = $productRelate->averageStars;
                        @endphp

                        @if(is_int($averageStars))
                        @for($i = 0; $i < $averageStars; $i++)
                        <i class="product-item__star--gold fa-solid fa-star"></i>
                        @endfor
                        @else
                        @for($i = 0; $i < intval($averageStars); $i++)
                        <i class="product-item__star--gold fa-solid fa-star"></i>
                        @endfor
                        <i id="star-gradient" class="product-item__star--gold fa-solid fa-star"></i>
                        @endif
                                    </div>
                                    <span class="product-item__sold">
                                        <span class="product-item__star--sold-quantity">{{$productRelate->quantity}}</span>
                                        Đã bán
                                    </span>
                                </div>
                                <div class="product-item__origin">
                                    <span class="product-item__brand">Whoo</span>
                                    <span class="product-item__origin-name">{{$productRelate->Category->category_name}}</span>
                                </div>
                            </a>
                        </div>
                      @endforeach
                        <!-- PRODUCT ITEM -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
