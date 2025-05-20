@extends('frontend.layouts.master')
@section('title', 'Account')
@section('main')
    <link rel="stylesheet" href="css/account.css">
    <div class="ctn-rating-product">
        <div class="header">
            <div>
                <h1>Welcome back!</h1>
            </div>
        </div>
        <p>You can review and edit your personal information here.</p>
        <nav class="navigation">
            <ul>
                <li><a href="{{ asset('/account') }}" class="active">Account Information</a></li>
                <li><a href="{{ route('hoa_don_history', ['id' => session('User')->MaKH]) }}">Order History</a></li>
                <li><a href="{{ asset('/wishlist') }}">Wish List</a></li>
                <li><a href="{{ asset('/rating-product') }}" >Rating Product</a></li>
            </ul>
        </nav>
    </div>
    <div class="account-container">
        <div class="account-content">
            <div class="account-card">
                <h2>Account Information</h2>
                <div class="account-info">
                    <div class="account-field name-field">
                        <label>Full name</label>
                        <span>{{ session('User')->TenKH }}</span>
                    </div>
                    <div class="account-field name-field">
                        <label>Email</label>
                        <span style="margin-left: 96px">{{ session('User')->Email }}</span>
                    </div>
                    <div class="account-field phone-field">
                        <label>Phone number</label>
                        <span style="margin-left: 37px;">{{ session('User')->SDT ?? 'Not provided' }}</span>
                    </div>
                    <div class="account-field sex-field">
                        <label>Sex</label>
                        <div class="sex-options">
                            <input type="radio" id="male" name="sex" {{ session('User')->GioiTinh == 1 ? 'checked' : '' }}  style="margin-left: 11px;">
                            <label for="male">Male</label>
                    
                            <input type="radio" id="female" name="sex" {{ session('User')->GioiTinh == 0 ? 'checked' : '' }}>
                            <label for="female">Female</label>
                        </div>
                    </div>                    
                    <div class="account-field birthday-field">
                        <label>Birthday</label>
                        <span style="margin-left: 78px;">{{ session('User')->NgaySinh ?? 'Not provided' }}</span>
                    </div>
                    <div class="account-field address-field">
                        <label>Address</label>
                        <span style="margin-left: 78px;">{{ session('User')->DiaChiKH ?? 'Not provided' }}</span>
                    </div>
                </div>
            </div>
            <div class="account-card">
                <h2>Login Information</h2>
                <div class="account-info">
                    <div class="account-field email-field">
                        <label>Username</label>
                        <span>{{ session('User')->TenDN }}</span>
                    </div>
                    <div class="account-field password-field" style="display: flex;">
                        <label>Password</label>
                        <input type="password" id="passwordInput" value="{{ session('User')->MatKhau }}" style="width: 300px; height: 30px; margin-left: 65px;"> <!-- Mật khẩu sẽ được hiển thị dưới dạng dấu hoa thị -->
                        <button type="button" id="togglePassword" class="btn-toggle-password">Show</button> <!-- Nút để chuyển đổi trạng thái -->
                    </div> 
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('togglePassword').addEventListener('click', function() {
        var passwordInput = document.getElementById('passwordInput');
        var button = document.getElementById('togglePassword');
    
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text'; // Hiển thị mật khẩu
            button.innerHTML = 'Hide'; // Đổi chữ thành "Hide"
        } else {
            passwordInput.type = 'password'; // Ẩn mật khẩu
            button.innerHTML = 'Show'; // Đổi chữ thành "Show"
        }
    });
    </script>
@stop
