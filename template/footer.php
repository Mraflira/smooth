<div class="footer-layout">
  <div class="footer">
    <div class="footer-menu">
      <ul>
        <a href="#"><li>Find a store</li></a>
        <a href="#"><li>Become a member</li></a>
        <a href="#"><li>Sign up for email</li></a>
        <a href="#"><li>Flashsale items</li></a>
        <a href="#"><li>Send Us Feedback</li></a>
      </ul>
      <ul>
        <li><h4>Get help</h4></li>
        <a href="#"><li>Order Status</li></a>
        <a href="#"><li>Delivery</li></a>
        <a href="#"><li>Returns</li></a>
        <a href="#"><li>Payment Option</li></a>
        <a href="#"><li>Contact Us</li></a>
      </ul>
    </div>
    <div class="social-media-footer">
        <a href="#"><ion-icon name="logo-tiktok"></ion-icon></a>
        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
        <a href="#"><ion-icon name="logo-whatsapp"></ion-icon></a>
    </div>
  </div>
  <div class="footer-menu-second">
    <div class="copyright">
      <span><b>Indonesia</b> ©2023 Smooth, All Rights Reserved</span>
    </div>
    <div class="footer-menu-second-list">
      <ul>
        <a href="#"><li>Guides</li></a>
        <a href="#"><li>Terms of sale</li></a>
        <a href="#"><li>Terms of use</li></a>
        <a href="#"><li>Smooth Privacy Policy</li></a>
      </ul>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script>
  var newArrival = new Swiper(".newArrival", {
    slidesPerView: 2,
      spaceBetween: 68,
      slidesPerGroup: 1,
      loop:true,
      cssMode:true,
    navigation: {
      nextEl: ".swiper-button-next-arrival",
      prevEl: ".swiper-button-prev-arrival",
    },
  });
</script>

<script>
    var swiper = new Swiper(".mySwiper", {
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      effect: "fade",
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
    
</script>
<script>
  var popular = new Swiper(".popularProductSlide", {
    slidesPerView: 3,
      spaceBetween: 68,
      slidesPerGroup: 3,
      loop:true,
      cssMode: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>
<script>
    var ProductSlider = new Swiper('.tranding-slider', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      loop:true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 300,
        modifier: 2,
        slideShadows: false
      },
      navigation: {
        nextEl: '.swiper-button-next-product',
        prevEl: '.swiper-button-prev-product',
      },
    });
    </script>
    <script>
      var buttonLayout = document.getElementById("size-button");
      var btnSize = buttonLayout.getElementsByClassName("btn-size");
      for (var i = 0; i < btnSize.length; i++) {
        btnSize[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
        });
      }
    </script>
    <script>
      function togglePopup() {
        var popupGuide = document.getElementById("popupGuide");
        popupGuide.style.display = popupGuide.style.display === "none" ? "block" : "none";
      }
    </script>
    <script>
      var qtyElement = document.getElementById("qty");
      var qty = 1;

      function increaseQty() {
        qty++;
        updateQty();
      }

      function decreaseQty() {
        if (qty > 1) {
          qty--;
          updateQty();
        }
      }

      function updateQty() {
        qtyElement.textContent = qty;
      }

    </script>
</body>
</html>