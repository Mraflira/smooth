<?php
    include 'template/header.php'
?>

   <div class="checkout">
        <div class="heading-checkout">
            <h1>Information</h1>
        </div>
        <div class="form-checkout-layout">
            <div class="form-checkout-contact">
                <div class="form-input">
                    <label for="nama-lengkap">Nama Lengkap</label>
                    <input type="text" name='nama-lengkap'>
                </div>
                <div class="form-input">
                    <label for="nomor-email">Email atau nomor telepon</label>
                    <input type="text" name='nomor-email'>
                </div>
                <div class="form-input">
                    <label for="negara">Negara</label>
                    <input type="text" name='negara'>
                </div>
                <div class="form-input">
                    <label for="kota">Kota/Kabupaten</label>
                    <input type="text" name='kota'>
                </div>
                <div class="form-input-column">
                    <div class="form-input">
                        <label for="provinsi">Provinsi</label>
                        <input type="text" name='provinsi'>
                    </div>
                    <div class="form-input">
                        <label for="province">Kode Pos</label>
                        <input type="text" name='province'>
                    </div>
                </div>
                <div class="form-input">
                    <label for="alamat-lengkap">Alamat Lengkap</label>
                    <textarea name="alamat-lengkap" rows="2"></textarea>
                </div>
                <div class="form-input space-between">
                    <div>
                        <label class="remind">Save this information for next time
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <div class="form-button">
                    <a href="shipping.php"><button>Continue to shipping</button></a>
                    <a href="cart.php"><button class="register-btn">Back to cart</button></a>
                </div>
            </div>
            <div class="sidebar-checkout">
                <div class="product-checkout">
                    <div class="image-product-checkout">
                        <img src="image/jacket-2.jpg" alt="">
                    </div>
                    <div class="content-product-checkout">
                        <h3>SMOOTH JACKET SERIES - GLITTERY EMERALD WHITE</h3>
                        <span>L</span>
                    </div>
                    <div class="price-product-checkout">
                        <span>Rp190,000.00</span>
                    </div>
                </div>
                <div class="product-checkout">
                    <div class="image-product-checkout">
                        <img src="image/jacket-2.jpg" alt="">
                    </div>
                    <div class="content-product-checkout">
                        <h3>SMOOTH JACKET SERIES - GLITTERY EMERALD WHITE</h3>
                        <span>M</span>
                    </div>
                    <div class="price-product-checkout">
                        <span>Rp190,000.00</span>
                    </div>
                </div>
                <div class="cart-sidebar-layout checkout-sidebar-total">
                    <div class="cart-sidebar-content">
                        <p>Subtotal</p>
                        <span>Rp190,000.00</span>
                    </div>
                    <div class="cart-sidebar-content">
                        <p>Discount</p>
                        <span>Rp95,000.00(-50%)</span>
                    </div>
                    <div class="cart-sidebar-content grand-total">
                        <p>Grand total</p>
                        <h3>IDR Rp95.000,00</h3>
                    </div>
                </div>
            </div>
        </div>
        
   </div>

<?php
    include 'template/footer.php'
?>