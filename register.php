<?php
    include 'template/header.php'
?>

<div class="login-page">
    <div class="form-login">
        <h2>Register</h2>
        <p>Bergabunglah dan daftarkan akun Anda sekarang!</p>
        <div class="form-input-box">
            <div class="form-input">
                <label for="">Nama Lengkap</label>
                <input type="text">
            </div>
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
                <a href="#"><button>Register</button></a>
                <a href="#"><button class="register-btn">Login</button></a>
            </div>
            <div class="account-google-text">
                <span>or Sign up with Google</span>
            </div>
            
            <div class="button-account-google">
                <img src="image/google.png" alt="Logo Google">
                <span>Sign up with Google</span>
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