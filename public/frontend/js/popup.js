// Hiển thị dropdown khi click vào icon User
document.addEventListener('DOMContentLoaded', () => {
    const userIcon = document.getElementById('userIcon');
    const userOptions = document.getElementById('userOptions');

    // Toggle dropdown khi nhấn vào user icon
    userIcon.addEventListener('click', (e) => {
        e.preventDefault();
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

    // Hiển thị popup khi click vào Login
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
    const openPopupBtn = document.getElementById('openPopupBtn');
    const registerPopup = document.getElementById('registerPopup');
    const closePopup = registerPopup.querySelector('.close');

    // Hiển thị popup khi click vào Đăng ký
    openPopupBtn.addEventListener('click', (e) => {
        e.preventDefault();
        registerPopup.style.display = 'flex';
    });

    // Đóng popup khi click vào nút close
    closePopup.addEventListener('click', () => {
        registerPopup.style.display = 'none';
    });
});

//Xử lý popup Quên mật khẩu
document.addEventListener('DOMContentLoaded', () => {
    const forgotpassButton = document.getElementById('forgotpassButton');
    const forgotpassPopup = document.getElementById('forgotpassPopup');
    const closePopup = forgotpassPopup.querySelector('.close');

    // Hiển thị popup khi click vào Đăng ký
    forgotpassButton.addEventListener('click', (e) => {
        e.preventDefault();
        forgotpassPopup.style.display = 'flex';
    });

    // Đóng popup khi click vào nút close
    closePopup.addEventListener('click', () => {
        forgotpassPopup.style.display = 'none';
    });
});
//Xử lý popup nhập OTP code
document.addEventListener('DOMContentLoaded', () => {
    const openPopupOtp = document.getElementById('openPopupOtp');
    const otpcodePopup = document.getElementById('otpcodePopup');
    const closePopup = otpcodePopup.querySelector('.close');

    // Hiển thị popup khi click vào Đăng ký
    openPopupOtp.addEventListener('click', (e) => {
        e.preventDefault();
        otpcodePopup.style.display = 'flex';
    });

    // Đóng popup khi click vào nút close
    closePopup.addEventListener('click', () => {
        otpcodePopup.style.display = 'none';
    });
});
//Xử lý popup đổi mật khẩu
document.addEventListener('DOMContentLoaded', () => {
    const openPopupChange = document.getElementById('openPopupChange');
    const changepassPopup = document.getElementById('changepassPopup');
    const closePopup = changepassPopup.querySelector('.close');

    // Hiển thị popup khi click vào Đăng ký
    openPopupChange.addEventListener('click', (e) => {
        e.preventDefault();
        changepassPopup.style.display = 'flex';
    });

    // Đóng popup khi click vào nút close
    closePopup.addEventListener('click', () => {
        changepassPopup.style.display = 'none';
    });
});
