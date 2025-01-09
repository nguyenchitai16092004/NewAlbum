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

//Kiểm tra Form Login
document.getElementById('loginForm').addEventListener('submit', function (event) {
    const emailPattern = /^[a-zA-Z0-9]+@gmail\.com$/;
    const emailInput = document.getElementById('email');
    const emailError = document.getElementById('emailError');
    const passInput = document.getElementById('password');
    const passError = document.getElementById('passwordError');

    event.preventDefault(); // Ngăn submit form mặc định

    let hasError = false; // Biến cờ theo dõi lỗi

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

    // Nếu có lỗi, dừng xử lý form
    if (hasError) {
        return;
    }

    // Nếu không có lỗi, gửi dữ liệu đến server để kiểm tra trong database
    fetch('your-backend-url', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            email: email,
            password: password,
        })
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Đăng nhập thành công!'); // Chuyển hướng hoặc thực hiện hành động sau khi đăng nhập thành công
            } else {
                alert('Sai email hoặc mật khẩu!');
            }
        })
        .catch(error => {
            alert('Có lỗi xảy ra. Vui lòng thử lại!');
        });
});

//Kiểm tra Form Register
document.getElementById('registerForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Ngăn submit mặc định

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

    // Nếu không có lỗi, gửi dữ liệu đến server
    fetch('https://example.com/register', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            username: nameInput.value,
            email: emailInput.value,
            password: passInput.value,
        })
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Đăng ký thành công!');
            } else {
                alert('Đăng ký thất bại!');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Có lỗi xảy ra. Vui lòng thử lại!');
        });
});




