@extends('auth.account.header')

@section('content_profile')
<div class="grid__column-10">
    <div class="home_profile">
        <div class="title__home-profile">
            <div class="title__home-profile-name">Hồ sơ của tôi</div>
            <div class="title__home-profile-auth">Quản lý thông tin hồ sơ để bảo mật tài khoản</div>
        </div>
        <div class="grid__row">
            <div class="grid__column-12">
                <div class="home__profile--info">
                    <form action="" class="form_profile form_profile--password">
                        <div class="home__profile-item">
                            <label for="">Mật khẩu hiện tại</label>
                            <input type="password" value="">
                        </div>
                        <div class="home__profile-item">
                            <label for="">Mật khẩu mới</label>
                            <input type="text" value="">
                        </div>
                        <div class="btn__save">
                            <button class="btn save">Lưu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection