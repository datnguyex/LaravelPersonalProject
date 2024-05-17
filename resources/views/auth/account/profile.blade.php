@extends('auth.account.header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
        position: absolute;
       background-color: black;
        opacity: 1;
        z-index: 1;
        left: calc(50% - 100px);
        top: calc(50%);
        border-radius: 5px; 
        width: 400px;
        height: 230px;        
        border: 1px solid ;
        }
        .overlay {
        position: fixed;
         top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.4);
}
        .container h2 {
         font-size:25px;
        color: yellow;
         margin-left: 15px;
        }
        .close-btn {
         position: absolute;
        top: 15px;
         right: 15px;
         font-size: 20px;
         color: white;
         cursor: pointer;
}
    .close {
        position: absolute;
        bottom: 10px;
        right:15px;
        background-color: blue;
        color: white;
        font-size: 15px;
        border: 1px solid black;
        cursor: pointer;
        border-radius: 3px;
        padding: 10px 17px;
        font-size: 17px;
    }

.notification {
    position: relative;
  color: white;
  padding: 20px;
  font-size: 18px;
  width: 240px;
}
.thanhNgang {
    border: 1px solid white;
    width: 100%;
    height: 1px;
}

    </style>
</head>
<body>
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
                    <form method="POST" action="{{ route('user.UpdateUserProfile')}}" class="form_profile" enctype="multipart/form-data">
                    @csrf   
                    <input type="hidden" name="id" type="text" value="{{$customerUser->id}}">
                        <div class="home__profile-item">
                            <label for="">Họ Tên </label>
                            <input name="name" type="text" value="{{$customerUser->name}}">
                        </div>
                        <div class="home__profile-item">
                            <label for="">Tên tài khoản</label>
                            <input name="username" type="text" value="{{$customerUser->username}}">
                        </div>
                        <div class="home__profile-item">
                            <label for="">Email</label>
                            <input name="email" type="text" value="{{$customerUser->email}}">
                        </div>
                        <div class="home__profile-item">
                            <label for="">Số điện thoại</label>
                            <input name="phone" type="text" value="{{$customerUser->phone}}">
                        </div>
                        <div class="home__profile-item">
                            <label for="">Địa chỉ</label>
                            <input  name="address" type="text" value="{{$customerUser->address}}">
                        </div>
                         <div class="home__profile-item">
                            <label for="">Giới tính</label>
                            <div class="check__sex">
                                <div class="check check__sex-female">
                                    <label for="">Nam</label>
                                    <input value="Nam" name="sex" type="radio" {{ $customerUser->sex == 'Nam' ? 'checked' : '' }} >
                                </div>
                                <div class="check check__sex-male">
                                    <label for="">Nữ</label>
                                    <input value="Nữ" name="sex" type="radio" {{ $customerUser->sex == 'Nữ' ? 'checked' : '' }}>
                                </div>
                                <div class="check check__sex-male">
                                    <label for="">Khác</label>
                                    <input value="Khác" name="sex" type="radio" {{ $customerUser->sex == 'Khác' ? 'checked' : '' }}>
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
                        <input id="customerUserImg" name="img" type="file">
                        <div class="btn__save">
                            <button type="submit" class="btn save">Lưu</button>
                        </div>

                    </form>
                </div>
            </div>
          
                <div class="profile__edit">
                    <div class="home__profile-edit">    
                        <div class="home__profile-edit-img">
                        <img  id="mainImgPrr" onerror="this.src='/img/img_auth/user.png'" src="{{ asset('img/img_auth/' . $customerUser->img) }}" alt="" class="img_edit">
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

@if(session('success1')) 
<div id="container" class="container">
<div class="overlay"></div> 
  <h2>Thông báo</h2>
  <div id="thanhNgang" class="thanhNgang"></div>
  <div id="notification" class="notification">
  {{ session('success1') }}
  </div>
  <div class="thanhNgang"></div>
  <span id="close-btn" class="close-btn" onclick="closeNotification()">X</span>
  <button id="close-btn" class="close">close</button>
</div>
<div id="overlay" class="overlay"></div> 
@endif


<script>
var overlay = document.querySelector('#overlay');
var closeBtn = document.querySelectorAll('#close-btn');
var container = document.querySelector('#container');

closeBtn.forEach(element => {
    element.addEventListener('click', function() {
        container.style.display = 'none';
        overlay.style.display = 'none';
    })
});

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

</body>
</html>
