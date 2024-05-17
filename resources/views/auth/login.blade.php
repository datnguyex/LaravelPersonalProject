<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" href="/css/base.css" rel="stylesheet">
    <link type="text/css" href="/css/main.css" rel="stylesheet">
    <title>Document</title>
    <style>
        #capCha {
        border: 1px solid black;
        padding: 5px 10px;
        font-size: 16px;
        margin-top: 17px;
        width: 70px;
        height: 37px;
        text-align:center;
        pointer-events: none;
        font-family: Cursive;
        color: blue;
        }
        .formCapCha {
            display: flex;
           
        }
        .formCapCha .auth-form__group{
            width: 300px;
            margin-left: 20px;
        }
        #role {
            font-weight: bold;
            font-size: 13px;
        }
        #customer {
           margin-top: 10px;
        
        }
        .btn--primary {
            margin-top: -30px;
            margin-bottom: 20px;
        }
        .auth-form__socials {
            background-color: white;
        }
        .alert-danger {
            color: red;
            text-align:center;
            font-size:13px;
            margin-bottom: 10px;
           
        }
        .alert-notify {
            color: blue;
            text-align:center;
            font-size:13px;
            margin-bottom: 10px;
        }
        .btn__icon-google {
            border: 1px solid black;
        }
       
        
    </style>
</head>
<body>
    <!-- modal -->
    <div class="modal">
            <div class="modal__overlay"></div>

            <div class="modal__body">

                <!-- LogIn form -->
             
                    <div class="auth-form__container">
                        <div class="auth-form__header">
                            <h3 class="auth-form__heading">Đăng nhập</h3>
                            <a href="{{ route('viewRegister')}}" class="auth-form__switch-btn">Đăng ký</a>
                        </div>

                       <form action="{{ route('login')}}" method="post">
                       @csrf 
                       <div class="auth-form__form">
                            <div class="auth-form__group">
                                <input type="text" class="auth-form__input" placeholder="Email" id="email" class="form-control" name="email">
                            </div>
                            <div class="auth-form__group">
                                <input type="password" class="auth-form__input" placeholder="Password" id="password" class="form-control" name="password">
                            </div>
                        </div>   
                        <label id="role" for="seller">Người Bán</label>
                        <input id="seller" name="role" value="seller" type="radio">

                        <label id="role" for="customer">Người Mua</label>
                        <input id="customer" name="role" value="customer" type="radio">

                        <label  id="role" for="customer">Quản Trị Viên</label>
                        <input id=" " name="role" value="admin" type="radio">
                        <br>
                       <div>
                       <div>
                       <div class="formCapCha">
                       <input name="CapCha" id="capCha" class="form-control capCha" value="{{$capCha}}" readonly>
                        <!-- <input  placeholder="Nhập mã..." class="inputCapcha" id="inputCapcha" name="inputCapcha" value="" type="text">
                     -->
                     <div class="auth-form__group">
                        <input name="inputCapcha" type="" class="auth-form__input" placeholder="Nhập mã..." id="password" class="form-control">    
                     </div>
                       </div>
                    
                        <div class="auth-form__aside">
                            <p class="auth-form__help">
                                <a href="{{ route('viewResetPassword1')}}" class="auth-form__help-link auth-form__help-forgot">Quên mật khẩu</a>
                                <span class="auth-form__help-separate"></span>
                                <a href="" class="auth-form__help-link">Cần trợ giúp?</a>
                            </p>
                        </div>
                        
                        <div class="auth-form__controls">
                        <button type="submit" class="btn btn--primary">ĐĂNG NHẬP</button>
                        </form>
                        </div>
                    </div>

                    <div class="auth-form__socials">
                        <a href="" class="btn btn__size-s btn--with-icon btn__icon-fb">
                            <i class="auth-form__socials-icon fa-brands fa-square-facebook"></i>
                            <span>Kết nối với Facebook</span>
                            
                        </a>
                        <a href="{{route('login-by-google')}}" class="btn btn__size-s btn--with-icon btn__icon-google">
                            <i class="auth-form__socials-icon fa-brands fa-google"></i>
                            <span>Kết nối với Google</span>
                        </a>
                    </div>
              
            </div>
        </div>


@if(session('error'))
    <div class="alert alert-danger">
        <h4>{{ session('error') }}</h4>
    </div>
@endif

@if(session('notify'))
    <div class="alert alert-notify">
        <h4>{{ session('notify') }}</h4>
    </div>
@endif

</body>
</html>