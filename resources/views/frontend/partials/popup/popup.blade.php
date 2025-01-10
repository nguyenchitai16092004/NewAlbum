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
                            <span id="emailError" style="color: red; display: none;">Email is not valid!</span>
                            <input type="password" id="password" name="password" placeholder="Password" required>
                            <span id="passwordError" style="color: red; display: none;">Password is not valid!</span>
                            <div class="button-container">
                                <button id="openPopupBtn" class="btn-left">Register</button>
                                <button type="submit" class="btn-right">Login</button>
                            </div>
                        </form>
                        <div class="parent"><button type="button" class="parent-link" id="forgotpassButton">Forgot
                                Password</button></div>
                    </div>
                </div>
                <!-- Popup Đăng ký-->
                <div id="registerPopup" class="popup hidden">
                    <div class="popup-content register">
                        <span class="close">&times;</span>
                        <h2 style="text-align: center">Register</h2>
                        <form id="registerForm">
                            @csrf
                            <input type="text" id="username" name="username" placeholder="Full Name">
                            <span id="nameError" style="color: red; display: none;">Fullname is not valid!</span>
                            <input type="email" id="email" name="email" placeholder="Email">
                            <span id="emailError" style="color: red; display: none;">Email is not valid!</span>
                            <input type="password" id="password" name="password" placeholder="Password">
                            <span id="passwordError" style="color: red; display: none;">Password is not valid!</span>
                            <input type="password" id="re-password" name="re-password" placeholder="Re-password">
                            <span id="repasswordError" style="color: red; display: none;">Password is not correct!</span>
                            <div class="button-container">
                                <button type="submit" class="btn-register">Register</button>
                            </div>
                            <div class="parent"><button class="parent-link" id="backtologinButton">Back to
                                    Login</button></div>
                        </form>
                    </div>
                </div>
                <!-- Quay lại Popup Đăng nhập-->
                <div id="loginPopup" class="popup">
                    <div class="popup-content">
                        <span class="close">&times;</span>
                        <h2 style="text-align: center">Login</h2>
                        <form id="loginForm" class="loginForm">
                            @csrf
                            <input type="email" id="email" name="email" placeholder="Email" required>
                            <span id="emailError" style="color: red; display: none;">Email is not valid!</span>
                            <input type="password" id="password" name="password" placeholder="Password" required>
                            <span id="passwordError" style="color: red; display: none;">Password is not valid!</span>
                            <div class="button-container">
                                <button id="openPopupBtn" class="btn-left">Register</button>
                                <button type="submit" class="btn-right">Login</button>
                            </div>
                        </form>
                        <div class="parent"><button type="button" class="parent-link" id="forgotpassButton">Forgot
                                Password</button></div>
                    </div>
                </div>
                <!-- Popup Quên mật khẩu-->
                <div id="forgotpassPopup" class="popup hidden">
                    <div class="popup-content">
                        <span class="close">&times;</span>
                        <h2 style="text-align: center">Forgot Password</h2>
                        <form id="forgotpassForm">
                            @csrf
                            <input type="text" id="email" name="email" placeholder="Email" required>
                            <div class="button-container">
                                <button id="openPopupOtp" class="btn-send">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
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
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Popup thay đổi password -->
                <div id="changepassPopup" class="popup">
                    <div class="popup-content">
                        <span class="close">&times;</span>
                        <h2 style="text-align: center">Enter OTP Code</h2>
                        <form id="changepassForm">
                            @csrf
                            <input type="text" id="password" name="password" placeholder="Password" required>
                            <input type="password" id="re-password" name="re-password" placeholder="Re-password"
                                required>
                            <div class="button-container">
                                <button type="submit" class="btn-submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>