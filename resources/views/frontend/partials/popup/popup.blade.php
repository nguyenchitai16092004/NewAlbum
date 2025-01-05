
<!-- User Login Info -->
<div class="user-login-info">
    <a href="#" id="userIcon"><img src="img/core-img/user.svg" alt="User"></a>
    <div id="userOptions" class="dropdown-user">
        <ul>
            <li><a href="{{ asset('/account') }}">Profile</a></li>
            <li><a href="{{ asset('/') }}" id="loginButton">Login</a>
                <!-- Popup Đăng nhập-->
                <div id="loginPopup" class="popup">
                    <div class="popup-content">
                        <span class="close">&times;</span>
                        <h2 style="text-align: center">Login</h2>
                        <form id="loginForm" class="loginForm">
                            @csrf
                            <input type="email" id="email" name="email" placeholder="Email" required>
                            <input type="password" id="password" name="password" placeholder="Password" required>
                            <div class="button-container">
                                <button id="openPopupBtn" class="btn-left">Register</button>
                                <!-- Popup Đăng ký-->
                                <div id="registerPopup" class="popup">
                                    <div class="popup-content register">
                                        <span class="close">&times;</span>
                                        <h2 style="text-align: center">Register</h2>
                                        <form id="registerForm">
                                            @csrf
                                            <input type="text" id="username" name="username" placeholder="Full Name" required>
                                            <input type="email" id="email" name="email" placeholder="Email" required>
                                            <input type="password" id="password" name="password" placeholder="Password" required>
                                            <div class="button-container">
                                                <button type="submit" class="btn-register">Register</button>
                                            </div>
                                            <div class="parent"><a href="{{ asset('/') }}" class ="parent-link" id="loginButton">Back to Login</a></div>
                                        </form>
                                    </div>
                                </div>
                                <button type="submit" class="btn-right">Login</button>
                            </div>
                            <div class="parent"><a href="{{ asset('/') }}" class ="parent-link" id="forgotpassButton">Forgot Password</a></div>
                            <!-- Popup Quên mật khẩu-->
                            <div id="forgotpassPopup" class="popup">
                                <div class="popup-content">
                                    <span class="close">&times;</span>
                                    <h2 style="text-align: center">Forgot Password</h2>
                                    <form id="forgotpassForm">
                                        @csrf
                                        <input type="text" id="email" name="email" placeholder="Email" required>
                                        <div class="button-container">
                                            <button id="openPopupOtp" class="btn-send">Send</button>
                                            <!-- Popup OTP Code-->
                                            <div id="otpcodePopup" class="popup">
                                                <div class="popup-content">
                                                    <span class="close">&times;</span>
                                                    <h2 style="text-align: center">Enter OTP Code</h2>
                                                    <form id="otpcodeForm">
                                                        @csrf
                                                        <input type="text" id="otp" name="otp" placeholder="OTP" required>
                                                        <div class="button-container">
                                                            <button id="openPopupChange" class="btn-send">Send</button>
                                                            <!-- Popup thay đổi password -->
                                                            <div id="changepassPopup" class="popup">
                                                                <div class="popup-content">
                                                                    <span class="close">&times;</span>
                                                                    <h2 style="text-align: center">Enter OTP Code</h2>
                                                                    <form id="changepassForm">
                                                                        @csrf
                                                                        <input type="text" id="password" name="password" placeholder="Password" required>
                                                                        <input type="re-password" id="re-password" name="re-password" placeholder="Re-password" required>
                                                                        <div class="button-container">
                                                                            <button type="submit" class="btn-submit">Submit</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>