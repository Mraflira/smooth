<?php
    include 'template/header.php'
?>

   <div class="checkout">
        <div class="heading-checkout">
            <h1>Checkout</h1>
        </div>
        <div class="form-checkout-layout">
            <div class="shipping-input-layout">
                <div class="form-input shipping-input-box">
                    <label>Contact</label>
                    <div class="output-contact">
                        <span>+62895-6104-11991</span>
                        <a href="#"><ion-icon name="create-outline"></ion-icon></a>
                    </div>
                </div>
                <div class="form-input shipping-input-box">
                    <label>Shipping To</label>
                    <div class="output-contact">
                        <span>Jl. Bojongnangka RT.02 RW.03 Kel.Sukamenak Kec.Purbaratu Kota Tasikmalaya Jawa Barat 19676, Indonesia</span>
                        <a href="#"><ion-icon name="create-outline"></ion-icon></a>
                    </div>
                </div>
                <div class="shipping-select">
                    <!-- <div class="wrapper">
                        <input type="radio" name="select" id="option-1" checked>
                        <input type="radio" name="select" id="option-2">
                        <label for="option-1" class="option option-1">
                            <div class="dot"></div>
                            <div class="heading-shipping-method">
                                <span>JNE - REG (Layanan Reguler)</span>
                                <p>1-2 Days</p>
                            </div>
                            <div class="price-shipping">
                                <span>Rp.9,000.00</span>
                            </div>
                        </label>
                        <label for="option-2" class="option option-2">
                            <div class="dot"></div>
                            <div class="heading-shipping-method">
                                <span>JNE - REG (Layanan Reguler)</span>
                                <p>1-2 Days</p>
                            </div>
                            <div class="price-shipping">
                                <span>Rp.9,000.00</span>
                            </div>
                        </label>
                    </div> -->
                    <div class="shipping-heading">
                        <label>Shipping Method</label>
                    </div>
                    <div class="shipping-select-layout">
                        <label class="shipping-radio">
                            <input type="radio" name="radio" checked/>
                            <span>
                                <div class="heading-shipping-method">
                                    <h3>JNE - REG (Layanan Reguler)</h3>
                                    <p>1-2 Days</p>
                                </div>
                                <div class="price-shipping">
                                    <h5>Rp.9,000.00</h5>
                                </div>
                            </span>
                        </label>
                        <label class="shipping-radio">
                            <input type="radio" name="radio"/>
                            <span>
                                <div class="heading-shipping-method">
                                    <h3>JNE - REG (Layanan Reguler)</h3>
                                    <p>1-2 Days</p>
                                </div>
                                <div class="price-shipping">
                                    <h5>Rp.9,000.00</h5>
                                </div>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-button">
                    <a href="payment.php"><button>Continue to payment</button></a>
                    <a href="information.php"><button class="register-btn">Back to information</button></a>
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