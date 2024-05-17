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
                        <form method="POST" action="{{ route('seller.updateProduct') }}" class="home__product-form" enctype="multipart/form-data">
                        @csrf    
                        <input name="seller_id" type="hidden" value="{{$product->seller_id}}">
                        <input name="id" type="hidden" value="{{$product->id}}">
                            <div class="product__item-form">
                                <label for="">Hình ảnh sản phẩm</label>
                                <button class="btn--textFile have-img" onclick="document.getElementById('getFile').click()">
                                    <div class="delete__img">
                                        <i class="fa-solid fa-x"></i>
                                    </div>
                                    <img src="/img/img_auth/iphone-15.webp" alt="">
                                </button>

                                <button class="btn--textFile no-img"
                                    onclick="document.getElementById('getFile').click()">
                                    <img id="main-imgPr2" src="{{('img/img_auth/' . $product->img) }}" alt="">
                                </button>
                                    <input id="ipImg" class="" type="file" name="img">
                               
                            </div>
                            <div class="product__item-form">
                                <label for="">Tên sản phẩm</label>
                                <input placeholder="" class="product__name-form" type="text" name="name" value="{{$product->product_name}}">
                            </div>
                            <div class="product__item-form">
                                <div class="product__item-price">
                                    <label for="">Đơn giá</label>
                                    <input class="product__price-form" type="" name="price"
                                        value="{{$product->price}}">
                                </div>
                                <div class="product__item-quantity">
                                    <label for="">Số lượng</label>
                                    <input class="product__quantity-form" type="number" name="quantity"
                                        value="{{$product->quantity}}">
                                </div>
                            </div>
                            <div class="product__item-form">
                                <label for="">Danh mục sản phẩm</label>
                                <!-- <div class="product__item-cate">
                                    <input class="product__cate-form" type="text" name="category" readonly
                                        value="Điện thoại">
                                    <div class="select__cate">
                                        <div class="option__cate">Điện thoại</div>
                                        <div class="option__cate">Laptop</div>
                                        <div class="option__cate">Máy tính bàn</div>
                                    </div>
                                </div> -->
                                <select id="cars" name="category_id">
                                <option value="{{$product->category->category_id}}">{{$product->category->category_name}}</option> -->
                                 @foreach($categories as $category)  
                                <option value="{{$category->category_id}}">{{$category->category_name}}</option>
                                @endforeach   
                                 </select>
                            </div>
                            <div class="product__item-form">
                                <label for="">Mô tả sản phẩm</label>
                                <textarea class="product__des-form" type="text" name="des" value="">{{$product->description}}</textarea>
                            </div>
                            <div class="home__product-btn">
                                <button class="btn ">Hủy</button>
                                <button type="submit" class="btn btn--primary">Lưu</button>
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
var mainImgPr = document.getElementById("main-imgPr2");

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