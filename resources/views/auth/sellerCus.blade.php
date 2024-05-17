<style>

</style>
@extends('header')

@section('content')
<div  class="app__container">
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