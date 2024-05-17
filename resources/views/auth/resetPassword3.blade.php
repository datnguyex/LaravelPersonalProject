<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" href="/css/base.css" rel="stylesheet">
    <link type="text/css" href="/css/main.css" rel="stylesheet">
    <title>Document</title>
    <style>
          .alert-danger {
            color: red;
            text-align:center;
            font-size:13px;
            margin-top: -20px;
        }
        .btn--primary {
            margin-top: -30px;
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
                            <h3 class="auth-form__heading">Đổi mật khẩu</h3>
                        </div>

                       <form action="{{ route('formResetPassword3')}}" method="post">
                       @csrf 
                       <div class="auth-form__form">
                            <div class="auth-form__group">
                                <input type="password" class="auth-form__input" placeholder="Nhập Mật Khẩu Mới" id="email" class="form-control" name="Password">
                            </div>  
                        <div class="auth-form__controls">
                        <button style="margin-bottom: 30px" type="submit" class="btn btn--primary">XÁC NHẬN</button>
                        </form>
                        </div>
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