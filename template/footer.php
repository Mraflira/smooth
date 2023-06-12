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
<!-- jQuery (diperlukan oleh FancyBox) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- FancyBox JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>


<script>
  // const accordionHeaders = document.querySelectorAll('.accordion-header');

  // accordionHeaders.forEach(header => {
  //   header.addEventListener('click', () => {
  //     const accordionItem = header.parentElement;
  //     const accordionContent = accordionItem.querySelector('.accordion-content');

  //     accordionItem.classList.toggle('active');

  //     if (accordionItem.classList.contains('active')) {
  //       accordionContent.style.display = 'block';
  //     } else {
  //       accordionContent.style.display = 'none';
  //     }
  //   });
  // });
  // const accordionHeaders = document.querySelectorAll('.accordion-header');

  // accordionHeaders.forEach(header => {
  //   header.addEventListener('click', () => {
  //     const accordionItem = header.parentElement;
  //     const accordionContent = accordionItem.querySelector('.accordion-content');

  //     accordionItem.classList.toggle('active');
  //     accordionContent.style.display = accordionItem.classList.contains('active') ? 'block' : 'none';
  //   });
  // });
//   const accordionHeaders = document.querySelectorAll('.accordion-header');

// accordionHeaders.forEach(header => {
//   header.addEventListener('click', () => {
//     const accordionItem = header.parentElement;
//     const accordionContent = accordionItem.querySelector('.accordion-content');
//     const icon = header.querySelector('ion-icon');

//     accordionItem.classList.toggle('active');

//     if (accordionItem.classList.contains('active')) {
//       accordionContent.style.display = 'block';
//       icon.classList.add('rotate');
//     } else {
//       accordionContent.style.display = 'none';
//       icon.classList.remove('rotate');
//     }
//   });
// });


</script>

<script>
    var swiper = new Swiper(".swiperLogin", {
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      loop:true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      effect: "fade",
    });
  </script>

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
      // grabCursor: true,
      centeredSlides: true,
      loop:true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 0,
        stretch: 70,
        depth: 390,
        modifier: 2,
        slideShadows: false
      },
      navigation: {
        nextEl: '.swiper-button-next-product',
        prevEl: '.swiper-button-prev-product',
      },
    });

    $('[data-fancybox="gallery"]').fancybox({
    afterShow: function(instance, current) {
      // Inisialisasi Swiper.js di dalam popup
      var popupSwiper = new Swiper('#popupModal .swiper-container', {
        navigation: {
          nextEl: '#popupModal .swiper-button-next',
          prevEl: '#popupModal .swiper-button-prev',
        },
        loop:true,
      });

      // Perbarui posisi slide Swiper.js popup sesuai dengan slide yang sedang ditampilkan
        var activeIndex = current.index;
        popupSwiper.slideTo(activeIndex, 0);
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
    <script>
      var popupButtons = document.querySelectorAll(".popupButtonCatalog");
      var popupContainers = document.querySelectorAll(".popupCatalogProduct");
      var closeButtons = document.querySelectorAll(".closeButtonCatalog");

      popupButtons.forEach(function(button, index) {
        button.addEventListener("click", function() {
          popupContainers[index].style.display = "block";
        });
      });

      closeButtons.forEach(function(button, index) {
        button.addEventListener("click", function() {
          popupContainers[index].style.display = "none";
        });
      });

    </script>
    <script>
      var swiperCategoryHome = new Swiper(".swiperCategoryHome", {
      navigation: {
        nextEl: ".swiper-button-next-category",
        prevEl: ".swiper-button-prev-category",
      },
      slidesPerView: 3,
      spaceBetween: 60,
      });
    </script>
</body>
</html>