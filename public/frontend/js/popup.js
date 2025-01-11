// Hiển thị dropdown khi click vào icon User
document.addEventListener('DOMContentLoaded', () => {
    const userIcon = document.getElementById('userIcon');
    const userOptions = document.getElementById('userOptions');

    // Toggle dropdown khi nhấn vào user icon
    userIcon.addEventListener('click', (e) => {
        e.preventDefault(); // Ngăn việc reload trang nếu là button trong form
        userOptions.style.display = userOptions.style.display === 'block' ? 'none' : 'block';
    });

    // Ẩn dropdown khi nhấp ra ngoài
    document.addEventListener('click', (e) => {
        if (!userIcon.contains(e.target) && !userOptions.contains(e.target)) {
            userOptions.style.display = 'none';
        }
    });
});
///Xử lý popup Đăng nhập
document.addEventListener('DOMContentLoaded', () => {
    const loginButton = document.getElementById('loginButton');
    const loginPopup = document.getElementById('loginPopup');
    const closePopup = loginPopup.querySelector('.close');

    // Hiển thị popup Đăng nhập
    loginButton.addEventListener('click', (e) => {
        e.preventDefault();
        loginPopup.style.display = 'flex';
    });

    // Đóng popup khi click vào nút close
    closePopup.addEventListener('click', () => {
        loginPopup.style.display = 'none';
    });
});
//Xử lý popup Đăng ký
document.addEventListener('DOMContentLoaded', () => {
    const loginPopup = document.getElementById('loginPopup');
    const openPopupBtn = document.getElementById('openPopupBtn');
    const registerPopup = document.getElementById('registerPopup');
    const closePopup = registerPopup.querySelector('.close');

    // Hiển thị popup khi click vào Đăng ký
    openPopupBtn.addEventListener('click', (e) => {
        e.preventDefault();
        loginPopup.style.display = 'none';
        registerPopup.style.display = 'flex';
    });

    // Đóng popup khi click vào nút close
    closePopup.addEventListener('click', () => {
        registerPopup.style.display = 'none';
    });
});

//Xử lý popup Quên mật khẩu
document.addEventListener('DOMContentLoaded', () => {
    const loginPopup = document.getElementById('loginPopup');
    const forgotpassButton = document.getElementById('forgotpassButton');
    const forgotpassPopup = document.getElementById('forgotpassPopup');
    const closePopup = forgotpassPopup.querySelector('.close');

    // Hiển thị popup khi click vào Đăng ký
    forgotpassButton.addEventListener('click', (e) => {
        e.preventDefault();
        loginPopup.style.display = 'none';
        forgotpassPopup.style.display = 'flex';
    });

    // Đóng popup khi click vào nút close
    closePopup.addEventListener('click', () => {
        forgotpassPopup.style.display = 'none';
    });
});
//Xử lý popup nhập OTP code
document.addEventListener('DOMContentLoaded', () => {
    const forgotpassPopup = document.getElementById('forgotpassPopup');
    const openPopupOtp = document.getElementById('openPopupOtp');
    const otpcodePopup = document.getElementById('otpcodePopup');
    const closePopup = otpcodePopup.querySelector('.close');

    // Hiển thị popup khi click vào Đăng ký
    openPopupOtp.addEventListener('click', (e) => {
        e.preventDefault();
        forgotpassPopup.style.display = 'none';
        otpcodePopup.style.display = 'flex';
    });

    // Đóng popup khi click vào nút close
    closePopup.addEventListener('click', () => {
        otpcodePopup.style.display = 'none';
    });
});
//Xử lý popup đổi mật khẩu
document.addEventListener('DOMContentLoaded', () => {
    const otpcodePopup = document.getElementById('otpcodePopup');
    const openPopupChange = document.getElementById('openPopupChange');
    const changepassPopup = document.getElementById('changepassPopup');
    const closePopup = changepassPopup.querySelector('.close');

    // Hiển thị popup khi click vào Đăng ký
    openPopupChange.addEventListener('click', (e) => {
        e.preventDefault();
        otpcodePopup.style.display = 'none';
        changepassPopup.style.display = 'flex';
    });

    // Đóng popup khi click vào nút close
    closePopup.addEventListener('click', () => {
        changepassPopup.style.display = 'none';
    });
});
//Xử lý quay lại popup đăng nhập
document.addEventListener('DOMContentLoaded', () => {
    const registerPopup = document.getElementById('registerPopup');
    const backtologinButton = document.getElementById('backtologinButton');
    const loginPopup = document.getElementById('loginPopup');
    const closePopup = loginPopup.querySelector('.close');

    // Hiển thị popup Đăng nhập
    backtologinButton.addEventListener('click', (e) => {
        e.preventDefault();
        registerPopup.style.display = 'none';
        loginPopup.style.display = 'flex';
    });

    // Đóng popup khi click vào nút close
    closePopup.addEventListener('click', () => {
        loginPopup.style.display = 'none';
    });
});

document.getElementById('loginPopup').addEventListener('show', function () {
    sessionStorage.removeItem('error');
});

// Kiểm tra xem có thông báo lỗi từ session hay không
document.addEventListener("DOMContentLoaded", function () {
    const errorMessage = document.getElementById('error-message');
    const successMessage = document.getElementById('success-message');
    const successSignoutMessage = document.getElementById('success-signout-message');
    
    if (successMessage) {
        setTimeout(function() {
            successMessage.style.display = 'none';
        }, 3000);
    }
    if (errorMessage) {
        setTimeout(function() {
            errorMessage.style.display = 'none';
        }, 3000);
    }
    if (successSignoutMessage) {
        setTimeout(function() {
            successSignoutMessage.style.display = 'none';
        }, 3000);
    }
});
//Kiểm tra Form Login
document.getElementById('loginForm').addEventListener('submit', function (event) {
    const loginnamePattern = /^[a-zA-Z0-9]/;
    const loginnameInput = document.getElementById('loginname');
    const loginnameError = document.getElementById('loginnameError');
    const passInput = document.getElementById('password');
    const passError = document.getElementById('passwordError');

    let hasError = false; // Biến cờ theo dõi lỗi

    if (!loginnamePattern.test(loginnameInput.value)) {
        loginnameError.style.display = 'block';
        hasError = true;
    } else {
        loginnameError.style.display = 'none';
    }

    if (passInput.value.length < 4 || passInput.value.length > 15) {
        passError.style.display = 'block';
        hasError = true;
    } else {
        passError.style.display = 'none';
    }

    if (hasError) {
        event.preventDefault();
        return;
    }
});

//Kiểm tra Form Register
document.getElementById('registerForm').addEventListener('submit', function (event) {
    //event.preventDefault(); // Ngăn submit mặc định

    // Lấy các trường và thông báo lỗi
    const nameInput = document.getElementById('username');
    const nameError = document.getElementById('nameError');
    const emailInput = document.getElementById('email');
    const emailError = document.getElementById('emailError');
    const passInput = document.getElementById('password');
    const passError = document.getElementById('passwordError');
    const confirmPassword = document.getElementById('re-password');
    const errorMessage = document.getElementById('repasswordError');

    // Định dạng kiểm tra
    const namePattern = /^[a-zA-Z]/;
    const emailPattern = /^[a-zA-Z0-9]+@gmail\.com$/;

    let hasError = false; // Biến cờ theo dõi lỗi

    // Kiểm tra username
    if (!namePattern.test(nameInput.value)) {
        nameError.style.display = 'block';
        hasError = true; // Đánh dấu lỗi
    } else {
        nameError.style.display = 'none';
    }

    // Kiểm tra email
    if (!emailPattern.test(emailInput.value)) {
        emailError.style.display = 'block';
        hasError = true;
    } else {
        emailError.style.display = 'none';
    }

    // Kiểm tra password
    if (passInput.value.length < 4 || passInput.value.length > 8) {
        passError.style.display = 'block';
        hasError = true;
    } else {
        passError.style.display = 'none';
    }

    // Kiểm tra mật khẩu trùng khớp
    if (passInput.value !== confirmPassword) {
        errorMessage.style.display = 'block';
        hasError = true;
    } else {
        errorMessage.style.display = 'none';
    }

    // Nếu có lỗi, dừng xử lý form
    if (hasError) {
        return;
    }


});




