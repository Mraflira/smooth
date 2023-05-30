<?php
    include 'template/header.php'
?>

<div class="login-page">
    <div class="form-login">
        <h2>Login</h2>
        <p>Selamat datang kembali! Silakan masuk ke akun Anda.</p>
        <div class="form-input-box">
            <div class="form-input">
                <label for="email">Email</label>
                <input type="email" name='email'>
            </div>
            <div class="form-input">
                <label for="password">Password</label>
                <input type="password" name='password'>
            </div>
            <div class="form-input space-between">
                <div>
                    <label class="remind">Remember Me
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="forgot-password">
                    <a href="#">Forgot Password?</a>
                </div>
            </div>
            <div class="form-button">
                <a href="#"><button>Login</button></a>
                <a href="register.php"><button class="register-btn">Register</button></a>
            </div>
            <div class="account-google-text">
                <span>or Sign in with Google</span>
            </div>
            
            <div class="button-account-google">
                <img src="image/google.png" alt="Logo Google">
                <span>Sign in with Google</span>
            </div>
        </div>
        
    </div>
    <div class="form-login-slide">
        <div class="swiper swiperLogin">
            <div class="swiper-wrapper">
                <div class="swiper-slide swiper-slide-login">
                    <div class="slide-img-login">
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-login-2">
                    <div class="slide-img-login">
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-login-3">
                    <div class="slide-img-login">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include 'template/footer.php'
?>