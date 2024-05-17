@extends('auth.account.header')

@section('content_profile')
<div class="grid__column-10">
    <div class="home_profile">
        <div class="title__home-profile">
            <div class="title__home-profile-name">Hồ sơ Người Bán</div>
            <div class="title__home-profile-auth">Quản lý thông tin hồ sơ để bảo mật tài khoản</div>
        </div>
        <div class="grid__row">
            <div class="grid__column-8">
                <div class="home__profile--info">
                    <form method="POST" action="{{ route('seller.UpdateSellerProfile')}}" class="form_profile" enctype="multipart/form-data">
                        @csrf   
                        <input type="hidden" name="id" type="text" value="{{$seller->id}}">
                        <div class="home__profile-item">
                            <label for="">Họ Tên </label>
                            <input name="name" type="text" value="{{$seller->name}}">
                        </div>
                        <div class="home__profile-item">
                            <label for="">Tên tài khoản</label>
                            <input name="username" type="text" value="{{$seller->username}}">
                        </div>
                        <div class="home__profile-item">
                            <label for="">Email</label>
                            <input name="email" type="text" value="{{$seller->email}}">
                        </div>
                        <div class="home__profile-item">
                            <label for="">Số điện thoại</label>
                            <input name="phone" type="text" value="{{$seller->phone}}">
                        </div>
                        <div class="home__profile-item">
                            <label for="">Địa chỉ</label>
                            <input  name="address" type="text" value="{{$seller->address}}">
                        </div>
                         <div class="home__profile-item">
                            <label for="">Giới tính</label>
                            <div class="check__sex">
                                <div class="check check__sex-female">
                                    <label for="">Nam</label>
                                    <input value="Nam" name="sex" type="radio" {{ $seller->sex == 'Nam' ? 'checked' : '' }} >
                                </div>
                                <div class="check check__sex-male">
                                    <label for="">Nữ</label>
                                    <input value="Nữ" name="sex" type="radio" {{ $seller->sex == 'Nữ' ? 'checked' : '' }}>
                                </div>
                                <div class="check check__sex-male">
                                    <label for="">Khác</label>
                                    <input value="Khác" name="sex" type="radio" {{ $seller->sex == 'Khác' ? 'checked' : '' }}>
                                </div>
                            </div>
                        </div>
                        <div class="home__profile-item">
                            <label for="">Ngày sinh</label>
                            <div class="input__DOB">
                                <input name="year" id="year" placeholder="2000" type="text" value="{{$year}}">
                                <input name="month" placeholder="02" type="text" value="{{$month}}">
                                <input name="day" placeholder="06" type="text" value="{{$day}}">
                            </div>
                        </div>
                        <!-- Nút cập nhật thông tin hồ sơ -->
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </form>
                </div>
            </div>
            <!-- Phần chỉnh sửa ảnh đại diện -->
            <div class="profile__edit">
                <div class="home__profile-edit">    
                    <div class="home__profile-edit-img">
                        <img  id="mainImgPrr" onerror="this.src='/img/img_auth/user.png'" src="{{ asset('img/img_auth/' . $seller->img) }}" alt="" class="img_edit">
                    </div>
                </div>
                <div class="home__btn-edit">
                    <input type="file" id="customerUserImg" style="display : none;">
                    <label for="customerUserImg" class="btn btn-primary">Thay đổi ảnh đại diện</label>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hiển thị sản phẩm của cửa hàng -->
<div class="grid__column-12">
    <div class="title__home-product">
        <div class="title__home">Sản Phẩm Của Cửa Hàng</div>
    </div>
    <div class="home__product">
        <div class="grid__row">
            <!-- Hiển thị thông tin từng sản phẩm -->
            @foreach($products as $product)
                <div class="grid__column-2-4">
                    <a href="" class="product-item">
                        <!-- Hiển thị hình ảnh sản phẩm -->
                        <div class="product-item__img"
                             style="background-image: url(/img/img_auth/iphone-15.webp);">
                        </div>
                        <!-- Hiển thị tên sản phẩm -->
                        <h4 class="product-item__name">{{$product->product_name}}</h4>
                        <!-- Hiển thị giá sản phẩm -->
                        <div class="product-item__price">
                            <span class="product-item__price_old">1.200.000đ</span>
                            <span class="product-item__price_current">{{$product->price}}</span>
                        </div>
                        <div class="product-item__action">
                            <!-- Hiển thị số sao đánh giá -->
                            <div class="product-item__rating">
                            @php
                              $averageStars = $product->averageStars;
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
                            <!-- Hiển thị số lượng đã bán -->
                            <span class="product-item__sold">
                                <span class="product-item__star--sold-quantity">{{$product->sold}}</span>
                                Đã bán
                            </span>
                        </div>
                        <!-- Hiển thị thương hiệu và danh mục của sản phẩm -->
                        <div class="product-item__origin">
                            <span class="product-item__brand">Whoo</span>
                            <span class="product-item__origin-name">{{$product->category->category_name}}</span>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
<script>
 var ipImg = document.getElementById("customerUserImg");
var mainImgPr = document.getElementById("mainImgPrr");

ipImg.addEventListener("change", function() {
    if (ipImg.files && ipImg.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            mainImgPr.src = e.target.result;
        };
        reader.readAsDataURL(ipImg.files[0]);
        mainImgPr.style.objectFit = 'cover';
        mainImgPr.style.backgroundSize = 'cover';
    }
});
</script>
@endsection
