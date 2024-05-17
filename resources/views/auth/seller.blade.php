<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #btnAddProject{
            margin-left: 15px;
        }
        #btnAddProject a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    
@extends('header')

@section('content')
<div class="app__container">
    <div class="grid">
        <div class="grid__row app__contents_seller ">
            <!-- CATEGORY -->
            <div class="gird__column-2_seller">
                <nav class="category">
                    <ul class="category-list">
                        <li class="category-item category-item--active">
                            <a href="" class="category-item__link">Quản lý đơn hàng</a>
                        </li>
                        <li class="category-item">
                            <a href="" class="category-item__link">Quản lý sản phẩm</a>
                        </li>
                        <li class="category-item">
                            <a href="" class="category-item__link">Quản lý shop</a>
                        </li>
                        <li class="category-item">
                            <a href="" class="category-item__link">Chăm sóc khách hàng</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- CATEGORY -->

            <div class="grid__column-10">
                <div class="home-filter">
                    <span class="home-filter-title">Sắp xếp theo</span>
                   
                    <form action="{{ route('seller.viewSeller') }}" method="POST">
                    @csrf
                    <input name="id_seller" type="hidden" value="{{ $idSeller }}" type="text">
                    <button name="oldest" type="submit" class="home-filter__btn btn">Cũ nhất</button>
                    <button name="newest" type="submit" class="home-filter__btn btn btn--primary">Mới nhất</button>
                    <button name="bestselling" type="submit" class="home-filter__btn btn">Bán chạy</button>
                   
                    <div class="select-input">
                        <span class="home-filter__label" for="">Giá</span>
                        <i class="search-icon fa-solid fa-angle-down"></i> 

                        <!-- SELECT-INPUT-LIST -->
                         <ul class="select-input__list">
                            <li class="select-input__item">
                             <button id="btn-sellect-priceASC" name="priceASC" type="submit">Cao Đến Thấp</button>
                            </li>
                            <li class="select-input__item">
                               <button id="btn-sellect-priceDESC" name="priceDESC" type="submit">Thấp Đến Cao</button>
                            </li>
                        </ul>
                    </div>  
                </form>

                    

                    <!-- <div class="home-filter__paginate">
                        <span class="home-filter__page-num">
                            <span class="page-current">1</span>
                            /14
                        </span>

                        <div class="home-filter__page-control">
                            <a href="" class="page-control-link page-control-link-icon-disabled">
                                <i class="page-control-link-icon fa-solid fa-angle-left"></i>
                            </a>
                            <a href="" class="page-control-link">
                                <i class="page-control-link-icon fa-solid fa-angle-right"></i>
                            </a>
                        </div>
                    </div> -->
                    <button id="btnAddProject" name="" type="" class="home-filter__btn btn"><a href="{{ route('seller.viewAddProduct', ['id' => $idSeller]) }}" class="seller__product-edit">Thêm</a></button>
                    <h3>Tổng sản phẩm: {{$sellerTotal}}</h3>
                </div>

                <div class="home__product">
                    <div class="grid__row">
                        <!-- PRODUCT ITEM -->
                        <div class="grid__column-product">
                            <table id="customers">
                                <tr>
                                    <th>Tên sản phẩm</th>
                                    <th>Phân loại</th>
                                    <th>Giá</th>
                                    <th>Kho hàng</th>
                                    <th>Doanh số</th>
                                    <th>Thao tác</th>
                                </tr>
                              
                                @foreach( $products as $product)
                                <tr>
                                  <td class="seller__td-img">
                                        <div class="detail__product-info">
                                            <img src="{{('img/img_auth/' . $product->img) }}" alt="" class="seller-img_product">
                                            <a href="" class="information__product-link">
                                                <span class="seller-name_product">{{ $product->product_name }}</span>
                                                <span class="seller-description_product">{{ $product->description }}</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>{{ $product->category->category_name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>{{ $product->price - $product->sold }}</td>
                                    
                                    <td class="action__product">
                                        <a href="{{ route('seller.viewUpdateProduct', ['id' => $product->id]) }}" class="seller__product-edit">Cập nhật</a>
                                        <a href="{{ route('seller.viewDetailProduct', ['id' => $product->id]) }}" class="seller__product-detail">Xem thêm</a>
                                        <form action="{{ route('seller.deleteProduct') }}" method="post">
                                        @csrf 
                                     <input name="productId" value="{{ $product->id }}" type="hidden">
                                     <input name="id_seller" value="{{ $idSeller }}" type="hidden">
                                     <button id="delete_Product" type="submit">Xóa</button>
                                    </form>
                                    </td>
                                </tr>

                                @endforeach
                              
                            </table>
                        </div>
                        <!-- PRODUCT ITEM -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>
