@extends('header')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('../public/style.css') }}">
<div class="app__container">
    <div class="grid">
        <div class="grid__row app__contents_seller ">
            <!-- CATEGORY -->
            <div class="gird__column-2_seller">
                <nav class="category">
                    <ul class="category-list">
                        <li class="category-item category-item--active">
                            <a href="" class="category-item__link">Thông tin cơ bản</a>
                        </li>
                        <li class="category-item">
                            <a href="" class="category-item__link">Thông tin khác</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- CATEGORY -->

            <div class="grid__column-10_product">
                <div class="home-filter">
                    <span class="home-filter-title product-filter-title">Thông tin cơ bản</span>
                </div>

                <div class="home__product">
                    <div class="grid__row-product">
                        <!-- PRODUCT ITEM -->
                        <form method="POST" action="{{ route('seller.addProduct') }}" class="home__product-form" enctype="multipart/form-data">
                           @csrf    
                        <div class="product__item-form">
                        <input name="seller_id" type="hidden" value="{{$seller_id}}">
                                <label for="">Hình ảnh sản phẩm</label>
                                <button class="btn--textFile have-img" onclick="document.getElementById('getFile').click()">
                                    <div class="delete__img">
                                        <i class="fa-solid fa-x"></i>
                                    </div>
                                    <img src="/img/img_auth/iphone-15.webp" alt="">
                                </button>

                                <button id="btnImg" class="btn--textFile no-img">
                                <img id="main-imgPr" src="/img/img_auth/themanh.png" alt="">
                            <span id="textBtnImg">Thêm hình ảnh</span>  
                            </button>
                        <input id="ipImg" class="" type="file" name="img">
                                 <!-- <input type="file" name="img"> -->
                            </div>
                            <div class="product__item-form">
                                <label for="">Tên sản phẩm</label>
                                <input class="product__name-form" type="text" name="name" placeholder="Nhập vào">
                            </div>
                            <div class="product__item-form">
                                <div class="product__item-price">
                                    <label for="">Đơn giá</label>
                                    <input class="product__price-form" type="number" name="price" placeholder="Nhập vào">
                                </div>
                                <div class="product__item-quantity">
                                    <label for="">Số lượng</label>
                                    <input class="product__quantity-form" type="number" name="quantity" placeholder="Nhập vào">
                                </div>
                            </div>
                            <div class="product__item-form">
                                <label for="">Danh mục sản phẩm</label>
                                <!-- <div class="product__item-cate">
                                    <input id="selectCate" class="product__cate-form" type="text" name="category" readonly placeholder="Chọn danh mục">
                                    <div class="select__cate">
                                    @foreach($categories as $category)  
                                        <div value="{{$category->category_id}}" class="option__cate">{{$category->category_name}}</div>
                                        <div id ="valueCate">1</div>
                                        @endforeach  
                                    </div>
                                <</div> -->
                             
                                <select id="cars" name="category_id">
                                @foreach($categories as $category)  
                                <option value="{{$category->category_id}}">{{$category->category_name}}</option>
                                @endforeach    
                                 </select>
                            </div>
                           
                           
                            <div class="product__item-form">
                                <label for="">Mô tả sản phẩm</label>
                                <textarea class="product__des-form" type="text" name="des"> </textarea>
                            </div>
                            <div class="home__product-btn">
                                <button class="btn ">Hủy</button>
                                <button  type="submit" class="btn btn--primary">Lưu</button>
                            </div>
                        </form>
                        <!-- PRODUCT ITEM -->
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
<script>
var ipImg = document.getElementById("ipImg");
var mainImgPr = document.getElementById("main-imgPr");

ipImg.addEventListener("change", function() {
    if (ipImg.files && ipImg.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            mainImgPr.src = e.target.result;
        };
        reader.readAsDataURL(ipImg.files[0]);
        document.getElementById("textBtnImg").textContent = "";
        mainImgPr.style.height = '70px'; // Sửa lại cú pháp ở đây
    }
});



</script>
@endsection