<?php
    include 'template/header.php'
?>

<div class="cart wishlist">
        <div class="cart-product-layout">
            <div class="cart-product-heading">
                <h1>Wishlist</h1>
                <button class="cart-product-remove">
                    <ion-icon name="trash-outline"></ion-icon>
                    <span>Remove</span>
                </button>
            </div>
            <div class="wishlist-product-box">
                <div class="cart-product-detail">
                    <div class="cart-product-image">
                        <img src="image/jacket-2.jpg" alt="">
                    </div>
                    <div class="cart-product-name">
                        <h3>SMOOTH JACKET SERIES - GLITTERY EMERALD WHITE LKSLDHLSHFLKSHL</h3>
                        <span>M</span>
                        <div class="price-product-wishlist">
                            <span>IDR 190.000</span>
                        </div>
                        <span class="instock">In Stock</span>
                        <div class="btn-product-wishlist">
                            <a href="cart.php">
                                <button>Add to cart</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="price-product-wishlist">
                    <span>IDR 190.000</span>
                </div>
                <div class="stock-product-wishlist">
                    <span>In Stock</span>
                </div>
                <div class="btn-product-wishlist">
                    <a href="cart.php">
                        <button>Add to cart</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

<?php
    include 'template/footer.php'
?>