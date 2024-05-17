<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         #btnAddProject{
            margin-left: 550px;
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
          
            <!-- CATEGORY -->

            <div class="grid__column-10">
                <div class="home-filter">
                 
                  
                    <input name="id_seller" type="hidden" value="" type="text">
                    <button style="background:white" name="newest" type="submit" class="home-filter__btn btn btn--primary"><a style="color:black;text-decoration: none" href="{{ route('admin.viewAdminUserCustomer') }}">Khách Hàng</a></button>
                    <button name="newest" type="submit" class="home-filter__btn btn btn--primary"><a style="color:white;text-decoration: none" href="{{ route('admin.viewAdminSeller') }}">Người Bán</a></button>
                    <button id="btnAddProject" name="" type="" class="home-filter__btn btn">   <a href="{{ route('admin.viewAddAdminSeller') }}" class="seller__product-edit">Thêm</a></button>
                </div>

        <div class="grid__row app__contents_seller ">
                <div class="home__product">
                    <div class="grid__row">
                        <!-- PRODUCT ITEM -->
                        <div style="width : 1100px; margin-left: 50px;" class="grid__column-product">
                            <table id="customers">
                                <tr>
                                    <th>Hình ảnh</th>
                                    <th>Họ và tên</th>
                                    <th>Tên tài khoản</th>
                                    <th>Email</th>
                                    <th>Số điện thoại</th>
                                    <th>Thao tác</th>
                                </tr>  
                                @foreach($sellers as $seller)            
                                <tr>
                                    <td>
                                    <img src="{{ asset('img/img_auth/' . $seller->img) }}" alt="" class="seller-img_product">
                                    </td>
                                    <td class="seller__td-img">
                                        <div class="detail__product-info">
                                            <a href="" class="information__product-link">
                                                <span class="seller-name_product">{{$seller->name}}</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>{{$seller->username}}</td>
                                    <td>{{$seller->email}}</td>
                                    <td>{{$seller->phone}}</td>   
                                    <td class="action__product">
                                        <a href="{{ route('admin.viewUpdateAdminSeller', ['id' => $seller->id]) }}" class="seller__product-edit">Cập nhật</a>
                                        <a href="{{ route('admin.adminSellerDetail', ['id' => $seller->id])}}" class="seller__product-detail">Xem thêm</a>
                                        <form action="{{ route('seller.deleteProduct') }}" method="post">
                                        @csrf 
                                     <input name="productId" value="" type="hidden">
                                     <input name="id_seller" value="" type="hidden">
                                     <a href="{{ route('admin.deleteAdminSeller', ['id' => $seller->id]) }}" id="delete_Product">Xóa</a>
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