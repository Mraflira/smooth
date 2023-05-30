<?php
    include 'template/header.php'
?>
<div class="product-page">
    <div class="container-slide">
        <div class="swiper tranding-slider">
            <div class="swiper-wrapper">
            <!-- Slide-start --> 
            <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                    <img src="image/jacket-2.jpg" alt="Tranding" data-fancybox="gallery" data-src="image/jacket-2.jpg" >
                </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                    <img src="image/glittery-1.jpg" alt="Tranding" data-fancybox="gallery" data-src="image/glittery-1.jpg" >
                </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                    <img src="image/glittery-2.jpg" alt="Tranding" data-fancybox="gallery" data-src="image/glittery-2.jpg" >
                </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                    <img src="image/glittery-3.jpg" alt="Tranding" data-fancybox="gallery" data-src="image/glittery-3.jpg" >
                </div>
            </div>
            <!-- Slide-end -->
                <!-- Slide-start -->
                <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                     <img src="image/glittery-4.jpg" alt="Tranding" data-fancybox="gallery" data-src="image/glittery-4.jpg" >
                </div>
            </div>
            <!-- Slide-end -->
            </div>

            <div class="swiper-button-prev-product"></div>
            <div class="swiper-button-next-product"></div>

        </div>
        <!-- Tambahkan modal popup FancyBox -->
        <div id="popupModal" style="display: none;">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="image/jacket-2.jpg" alt="Popup Image 1" />
                    </div>
                    <div class="swiper-slide">
                        <img src="image/glittery-1.jpg" alt="Popup Image 2" />
                    </div>
                    <div class="swiper-slide">
                        <img src="image/glittery-2.jpg" alt="Popup Image 2" />
                    </div>
                    <div class="swiper-slide">
                        <img src="image/glittery-3.jpg" alt="Popup Image 2" />
                    </div>
                    <div class="swiper-slide">
                        <img src="image/glittery-4.jpg" alt="Popup Image 2" />
                    </div>
                </div>

                <!-- Tambahkan tombol navigasi Swiper.js -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>

    <div class='product-box'>
        <div class='product-box-category'>
            <span>Product Category : <b>Fusion Jacket</b></span>
        </div>
        <div class='product-box-name'>
            <h1>Glittery Emerald White</h1>
        </div>
        <div class='product-box-spesification'>
        <div class='spesification-icon'>
            <div class='spesification-icon-image'>
            <img src='image/sablon.png'/>
            </div>
            <span>RN</span>
        </div>
        <div class='spesification-icon'>
            <div class='spesification-icon-image'>
            <img src='image/zipper.png'/>
            </div>
            <span>Lock Zipper</span>
        </div>
        <div class='spesification-icon'>
            <div class='spesification-icon-image'>
            <img src='image/fabric.png'/>
            </div>
            <span>Taslan Columbia</span>
        </div>
        <div class='spesification-icon'>
            <div class='spesification-icon-image'>
            <img src='image/cotton.png'/>
            </div>
            <span>Veil Cotton</span>
        </div>
        </div>
        <div class='product-box-price'>
            <h5>IDR 199.000 <span>325.000</span></h5>
        </div>
        <div class='product-box-desc'>
        <h3>Description :</h3>
        <p>Haloo teman smooth! Hoodie Unisex Smooth Basic vintage series menggunakan bahan fleece cotton 100% dengan jahitan yang rapi overdeck/kumis kecil</p>
        </div>
        <div class='product-box-action'>
        <div class='qty-box'>
            <span>Quantity :</span>
            <div class='qty-layout'>
                <button onclick="decreaseQty()">-</button>
                <p id="qty">1</p>
                <button onclick="increaseQty()">+</button>
            </div>
        </div>
        <div class='size-select'>
            <span>Size :</span>
            <div class='qty-layout'>
                <div id="size-button">
                    <button class="btn-size" disabled>S</button>
                    <button class="btn-size active">M</button>
                    <button class="btn-size">L</button>
                    <button class="btn-size">XL</button>
                </div>
            <button class='size-guide' onclick="togglePopup()">Size Guide...</button>
            </div>
        </div>
        </div>
        <div class='product-box-btn'>
            <a href="cart.php">
                <button class='add-to-cart-product'>
                    <ion-icon name="bag-handle-outline"></ion-icon>Add to Cart
                </button>
            </a>
            <a href="wishlist.php">
                <button class='add-to-wishlist-product'>
                    <ion-icon name="heart-outline"></ion-icon>
                </button>
            </a>
            
        </div>
    </div>
    <div class="popup" id="popupGuide" style="display: none;">
        <div class="popup-content">
            <div class="popup-chart-img">
                <img src="image/jacket-size-chart.webp" alt="">
            </div>
            <div class="popup-chart-content">
                <p>Panduan Ukuran Hoodie
                Lebar Sweater diukur mulai dari ujung kiri sampai ke ujung kanan ketiak, sedangkan panjang Sweater diukur mulai dari bahu sampai ke ujung bawah Sweater. Toleransi ukuran kurang lebih 1cm - 2cm. Jika menginginkan baju yang lebih longgar, harap pilih satu ukuran lebih besar.</p>
            </div>
            <button onclick="togglePopup()"><ion-icon name="close-outline"></ion-icon></button>
        </div>
    </div>

    <div class='related-product'>
        <div class='heading-related-product'>
          <h1>Related Product</h1>
        </div>
        <div class='related-product-layout'>
        <a href="#">
            <div class='related-product-box'>
              <div class="product-popular">
                <img src="image/jacket-1.jpg" alt="" />
              </div>
              <div class="product-popular-content">
                <div class="product-popular-desc">
                    <span><b>Fusion Series</b></span>
                    <span>Oversized Tees Obeylix White</span>
                    <span>Tees Collections</span>
                </div>
                <div class="product-popular-price">
                    <span>190.000</span>
                    <h5>99.000</h5>
                </div>
              </div>
          </div>
        </a>
        <a href="#">
            <div class='related-product-box'>
              <div class="product-popular">
                <img src="image/jacket-1.jpg" alt="" />
              </div>
              <div class="product-popular-content">
                <div class="product-popular-desc">
                    <span><b>Fusion Series</b></span>
                    <span>Oversized Tees Obeylix White</span>
                    <span>Tees Collections</span>
                </div>
                <div class="product-popular-price">
                    <span>190.000</span>
                    <h5>99.000</h5>
                </div>
              </div>
          </div>
        </a>
        <a href="#">
            <div class='related-product-box'>
              <div class="product-popular">
                <img src="image/jacket-1.jpg" alt="" />
              </div>
              <div class="product-popular-content">
                <div class="product-popular-desc">
                    <span><b>Fusion Series</b></span>
                    <span>Oversized Tees Obeylix White</span>
                    <span>Tees Collections</span>
                </div>
                <div class="product-popular-price">
                    <span>190.000</span>
                    <h5>99.000</h5>
                </div>
              </div>
          </div>
        </a>
        <a href="#">
            <div class='related-product-box'>
              <div class="product-popular">
                <img src="image/jacket-1.jpg" alt="" />
              </div>
              <div class="product-popular-content">
                <div class="product-popular-desc">
                    <span><b>Fusion Series</b></span>
                    <span>Oversized Tees Obeylix White</span>
                    <span>Tees Collections</span>
                </div>
                <div class="product-popular-price">
                    <span>190.000</span>
                    <h5>99.000</h5>
                </div>
              </div>
          </div>
        </a>
          
          
        </div>
      </div>
</div>


<?php 
include 'template/footer.php'
?>