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

                <div style="width: 840px" class="home__product">
                    <div class="grid__row-product">
                        <!-- PRODUCT ITEM -->
                        <form method="POST" action="{{ route('admin.formAddAdminSeller')}}" class="home__product-form" enctype="multipart/form-data">
                           @csrf    
                        <div class="product__item-form">
                        <input name="seller_id" type="hidden" value="">
                                <label for="">Hình ảnh người Bán</label>
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
                            <input style="position:absolute; opacity: 0;padding-bottom:77px; width:78px;margin-left:302px" id="imgCus" class="" type="file" name="img">
                                 <!-- <input type="file" name="img"> -->
                            </div>
                            <div class="product__item-form">
                                <label for="">Tên người bán</label>
                                <input class="product__name-form" type="text" name="name" placeholder="Nhập vào">
                            </div>
                            <div class="product__item-form">
                                <label for="">Tên tài khoản</label>
                                <input class="product__name-form" type="text" name="username" placeholder="Nhập vào">
                            </div>
                            <div class="product__item-form">
                                <label for="">Mật khẩu</label>
                                <input class="product__name-form" type="text" name="password" placeholder="Nhập vào">
                             </div>
                            <div class="product__item-form">
                                <label for="">Email</label>
                                <input class="product__name-form" type="text" name="email" placeholder="Nhập vào">
                            </div>
                            <div class="product__item-form">
                                <label for="">Số điện thoại</label>
                                <input class="product__name-form" type="text" name="phone" placeholder="Nhập vào">
                            </div>
                            <div class="product__item-form">
                                <label for="">Địa chỉ</label>
                                <input class="product__name-form" type="text" name="address" placeholder="Nhập vào">
                            </div>
                            <div class="home__profile-item">
                            <label for="">Giới tính</label>
                            <div class="check__sex">
                                <div class="check check__sex-female">
                                    <label for="">Nam</label>
                                    <input value="Nam" name="sex" type="radio" >
                                </div>
                                <div class="check check__sex-male">
                                    <label for="">Nữ</label>
                                    <input value="Nữ" name="sex" type="radio">
                                </div>
                                <div class="check check__sex-male">
                                    <label for="">Khác</label>
                                    <input value="Khác" name="sex" type="radio">
                                </div>
                            </div>
                            <div class="product__item-form">
                            <label for="">Ngày sinh</label>
                            <div class="input__DOB">
                                <input name="year" id="year" placeholder="2000" type="text" value="">
                                <input name="month" placeholder="02" type="text" value="">
                                <input name="day" placeholder="06" type="text" value="">
                            </div>
                        </div>
                        </div>
                            
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
var ipImg = document.getElementById("imgCus");
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