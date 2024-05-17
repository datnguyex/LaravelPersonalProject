<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" href="/css/base.css" rel="stylesheet">
    <link type="text/css" href="/css/main.css" rel="stylesheet">
    <title>Document</title>
    <style>
        
    
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
        .btn__icon-google {
            border: 1px solid black;
        }
       .btn__size-s span {
        margin-right: 20px;
        font-size:13px;
       } 
    </style>
</head>

<body>
    <!-- modal -->
    <div class="modal">
        <div class="modal__overlay"></div>

        <div class="modal__body">
            <!-- Register form -->
         
             
               <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng ký</h3>
                        <a href="{{ route('viewLogin')}}" class="auth-form__switch-btn">Đăng nhập</a>
                    </div>
                    <form action="{{ route('formRegister')}}" method="POST">
                    @csrf 
                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" class="auth-form__input" placeholder="Name" name="name">
                        </div>
                        <div class="auth-form__group">
                            <input type="text" class="auth-form__input" placeholder="Email" name="email">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" class="auth-form__input" placeholder="Password" name="password">
                        </div>
                        <label id="role" for="seller">Người Bán</label>
                        <input  id="customer" name="role" value="seller" type="radio">

                        <label id="role" for="customer">Người Mua</label>
                        <input id="customer" name="role" value="customer" type="radio">

                    </div>

                    <div class="auth-form__aside">
                        <p class="auth-form__policy-text">
                            Bằng việc đăng ký, bạn đã đồng ý với Shoppe về
                            <a href="" class="auth-form__text-link">Điều khoản dịch vụ</a>
                            &
                            <a href="" class="auth-form__text-link">Chính xác bảo mật</a>
                        </p>
                    </div>

                    <div class="auth-form__controls">
                        <button type="submit" class="btn btn--primary">ĐĂNG KÝ</button>
                    </div>
                </div>

               </form>
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
                @if(session('error'))
    <div class="alert alert-danger">
        <h4>{{ session('error') }}</h4>
    </div>
@endif
        </div>
        
    </div>
</body>

</html>