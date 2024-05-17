@extends('auth.account.header')

@section('content_profile')
<div class="grid__column-10">
    <div class="home_profile">
        <div class="title__home-profile">
            <div class="title__home-profile-name">Hồ sơ của tôi</div>
            <div class="title__home-profile-auth">Quản lý thông tin hồ sơ để bảo mật tài khoản</div>
        </div>
        <div class="grid__row">
            <div class="grid__column-8">
                <div class="home__profile--info">
                    <form method="POST" action="{{ route('admin.UpdateAdminProfile')}}" class="form_profile" enctype="multipart/form-data">
                    @csrf   
                         <input name="id" type="hidden" value="{{$admin->id}}">
                        <div class="home__profile-item">
                            <label for="">Họ Tên </label>
                            <input name="name" type="text" value="{{$admin->name}}">
                        </div>
                        <div class="home__profile-item">
                            <label for="">Tên tài khoản</label>
                            <input name="username" type="text" value="{{$admin->username}}">
                        </div>
                        <div class="home__profile-item">
                            <label for="">Email</label>
                            <input name="email" type="text" value="{{$admin->email}}">
                        </div>
                        <div class="home__profile-item">
                            <label for="">Số điện thoại</label>
                            <input name="phone" type="text" value="{{$admin->phone}}">
                        </div>
                        <div class="home__profile-item">
                            <label for="">Địa chỉ</label>
                            <input  name="address" type="text" value="{{$admin->address}}">
                        </div>
                         <div class="home__profile-item">
                            <label for="">Giới tính</label>
                            <div class="check__sex">
                                <div class="check check__sex-female">
                                    <label for="">Nam</label>
                                    <input value="Nam" name="sex" type="radio" {{ $admin->sex == 'Nam' ? 'checked' : '' }} >
                                </div>
                                <div class="check check__sex-male">
                                    <label for="">Nữ</label>
                                    <input value="Nữ" name="sex" type="radio" {{$admin->sex == 'Nữ' ? 'checked' : '' }}>
                                </div>
                                <div class="check check__sex-male">
                                    <label for="">Khác</label>
                                    <input value="Khác" name="sex" type="radio" {{$admin->sex == 'Khác' ? 'checked' : '' }}>
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
                        <input style="opacity: 0; margin-top: -200px" id="customerUserImg" name="img" type="file">
                        <div class="btn__save">
                            <button type="submit" class="btn save">Lưu</button>
                        </div>

                    </form>
                </div>
            </div>
          
                <div class="profile__edit">
                    <div class="home__profile-edit">    
                        <div class="home__profile-edit-img">
                        <img  id="mainImgPrr" onerror="this.src='/img/img_auth/user.png'" src="{{ asset('img/img_auth/' . $admin->img) }}" alt="" class="img_edit">
                        </div>
                    </div>
                    <div class="home__btn-edit">
                        <!-- <input type="file" id="getImg" style="display : none;"> -->
                        <button class="btn" onclick="document.getElementById('getImg').click()"> chọn ảnh
                        </button>
                    </div>
                </div>
         
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
