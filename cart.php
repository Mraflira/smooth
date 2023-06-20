<?php
    include 'template/header.php'
?>
    <div class="cart">
        <div class="cart-product-layout">
            <div class="cart-product-heading">
                <h1>Cart</h1>
                <button class="cart-product-remove">
                    <ion-icon name="trash-outline"></ion-icon>
                    <span>Remove</span>
                </button>
            </div>

            <div class="cart-product-body-heading">
                <h3>Product</h3>
                <h3>Quantity</h3>
                <h3>Price</h3>
            </div>
            <div class="cart-product-box">
                <div class="cart-product-detail">
                    <div class="cart-product-image">
                        <img src="image/jacket-2.jpg" alt="">
                    </div>
                    <div class="cart-product-name">
                        <h3>SMOOTH JACKET SERIES - GLITTERY EMERALD WHITE</h3>
                        <span>M</span>
                    </div>
                </div>
                <div class="cart-product-quantity">
                    <div class='qty-layout'>
                        <button onclick="decreaseQty()">-</button>
                        <input type="text" value="1" id="qty"/>
                        <button onclick="increaseQty()">+</button>
                    </div>
                    <div class="cart-product-option">
                        <button>
                            <ion-icon name="trash-outline"></ion-icon>
                        </button>
                        <button>
                            <ion-icon name="heart-outline"></ion-icon>
                        </button>
                    </div>
                </div>
                <div class="product-layout-price">
                    <span>IDR 190.000</span>
                </div>
            </div>
            <div class="cart-product-box">
                <div class="cart-product-detail">
                    <div class="cart-product-image">
                        <img src="image/jacket-2.jpg" alt="">
                    </div>
                    <div class="cart-product-name">
                        <h3>SMOOTH JACKET SERIES - GLITTERY EMERALD WHITE</h3>
                        <span>M</span>
                    </div>
                </div>
                <div class="cart-product-quantity">
                    <div class='qty-layout'>
                        <button onclick="decreaseQty()">-</button>
                        <p id="qty">1</p>
                        <button onclick="increaseQty()">+</button>
                    </div>
                    <div class="cart-product-option">
                        <button>
                            <ion-icon name="trash-outline"></ion-icon>
                        </button>
                        <button>
                            <ion-icon name="heart-outline"></ion-icon>
                        </button>
                    </div>
                </div>
                <div class="product-layout-price">
                    <span>IDR 190.000</span>
                </div>
            </div>
            <div class="cart-product-box">
                <div class="cart-product-detail">
                    <div class="cart-product-image">
                        <img src="image/jacket-2.jpg" alt="">
                    </div>
                    <div class="cart-product-name">
                        <h3>SMOOTH JACKET SERIES - GLITTERY EMERALD WHITE</h3>
                        <span>M</span>
                    </div>
                </div>
                <div class="cart-product-quantity">
                    <div class='qty-layout'>
                        <button onclick="decreaseQty()">-</button>
                        <p id="qty">1</p>
                        <button onclick="increaseQty()">+</button>
                    </div>
                    <div class="cart-product-option">
                        <button>
                            <ion-icon name="trash-outline"></ion-icon>
                        </button>
                        <button>
                            <ion-icon name="heart-outline"></ion-icon>
                        </button>
                    </div>
                </div>
                <div class="product-layout-price">
                    <span>IDR 190.000</span>
                </div>
            </div>
        </div>
        <div class="cart-sidebar-layout">
            <div class="cart-sidebar-content">
                <p>Subtotal</p>
                <span>IDR 190.000</span>
            </div>
            <div class="cart-sidebar-content">
                <p>Discount</p>
                <span>IDR 95.000(-50%)</span>
            </div>
            <div class="cart-sidebar-content grand-total">
                <p>Grand total</p>
                <h3>IDR 95.000</h3>
            </div>
            <div class="cart-sidebar-button">
                <a href="information.php">
                    <button>Checkout now</button>
                </a>
            </div>
        </div>
    </div>

<?php
    include 'template/footer.php'
?>