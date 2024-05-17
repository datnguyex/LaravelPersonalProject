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
                    <button name="oldest" type="submit" class="home-filter__btn btn">Khách Hàng</button>
                    <button name="newest" type="submit" class="home-filter__btn btn btn--primary"><a style="color:white;text-decoration: none" href="{{ route('admin.viewAdminSeller') }}">Người Bán</a></button>
                    <button id="btnAddProject" name="" type="" class="home-filter__btn btn">  <a href="{{ route('admin.viewAddAdminCustomerUser') }}" class="seller__product-edit">Thêm</a></button>
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
                                @foreach($customerUsers as $customerUser)            
                                <tr>
                                    <td>
                                    <img src="{{ asset('img/img_auth/' . $customerUser->img) }}" alt="" class="seller-img_product">
                                    </td>
                                    <td class="seller__td-img">
                                        <div class="detail__product-info">
                                            <a href="" class="information__product-link">
                                                <span class="seller-name_product">{{$customerUser->name}}</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>{{$customerUser->username}}</td>
                                    <td>{{$customerUser->email}}</td>
                                    <td>{{$customerUser->phone}}</td>   
                                    <td class="action__product">
                                        <a href="{{ route('admin.viewUpdateAdminCustomerUser', ['id' => $customerUser->id]) }}" class="seller__product-edit">Cập nhật</a>
                                        <a href="" class="seller__product-detail">Xem thêm</a>
                                        <form action="{{ route('seller.deleteProduct') }}" method="post">
                                        @csrf 
                                     <input name="productId" value="" type="hidden">
                                     <input name="id_seller" value="" type="hidden">
                                     <a href="{{ route('admin.deleteAdminCustomerUser', ['id' => $customerUser->id]) }}" id="delete_Product">Xóa</a>
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