<div id="loginPopup" class="popup">
    <div class="popup-content">
        <span class="close" onclick="window.location.href='/'">&times;</span>
        <h2 style="text-align: center">Login</h2>
        <form action="{{ route('Login_User') }}" method="POST" id="loginForm" class="loginForm">
            @csrf
            <input type="text" id="loginname" name="loginname" placeholder="Login name" required>
            <span id="loginnameError" style="color: red; display: none;">Login name is not valid!</span>

            <input type="password" id="password" name="password" placeholder="Password" required>
            <span id="passwordError" style="color: red; display: none;">Password is not valid!</span>

            <div class="button-container">
                <button id="openPopupBtn" type="button" class="btn-left"
                    onclick="window.location.href='{{ route('Register_User') }}'">Register</button>
                <button type="submit" class="btn-right">Login</button>
            </div>
        </form>
        <div class="parent">
            <button type="button" class="parent-link"
                onclick="window.location.href='{{ route('Forgot_Password') }}'">Forgot Password</button>
        </div>
    </div>
</div>