
    
    <!-- Footer Section -->
    <footer class="bg-[#004890] text-white p-5">
      <div class="container mx-auto flex justify-between items-center">
        <!-- Social Media Icons -->
        <div class="flex space-x-4">
          <a href="https://www.facebook.com/profile.php?id=100039447206044" target="_blank" class="hover:text-gray-400">
            <img src="./assets/img/facebook.png" alt="Facebook Icon" class="w-6 h-6"/>
          </a>
          <a href="https://www.instagram.com/dynamicmotion.mena" target="_blank" class="hover:text-gray-400">
            <img src="./assets/img/insta.png" alt="Twitter Icon" class="w-6 h-6" />
          </a>
          <a href="https://www.linkedin.com/company/dynamic-motion-llc/" target="_blank" class="hover:text-gray-400">
            <img src="./assets/img/link.png" alt="Instagram Icon" class="w-6 h-6"/>
          </a>
        </div>

        <!-- Copyright Text -->
        <div class="text-right secondaryfont text-white">
          &copy;Dynamic Motion. 2024
        </div>
      </div>
    </footer>



   


    <!-- counter end -->
    
    <script>
      const mobileMenuButton = document.getElementById("mobile-menu-button");
      const mobileMenu = document.getElementById("mobile-menu");

      mobileMenuButton.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
      });
    </script>
    <script>
      let currentSlide = 0;

      function showSlide(index) {
        const slides = document.querySelectorAll(".carousel-item");
        slides.forEach((slide, i) => {
          slide.classList.toggle("hidden", i !== index);
        });
      }

      function changeSlide(direction) {
        const slides = document.querySelectorAll(".carousel-item");
        currentSlide =
          (currentSlide + direction + slides.length) % slides.length;
        showSlide(currentSlide);
      }

      // Show the first slide on load
      showSlide(currentSlide);
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
        <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
    <script>
document.querySelector('.unique-animation-container').addEventListener('mouseover', function() {
  const containers = Array.from(this.querySelectorAll('.unique-image-wrapper'));
  const images = containers.map(container => container.querySelector('img'));

  // Shuffle images array
  const newSrcs = [...images.map(img => img.src)].sort(() => Math.random() - 0.5);

  containers.forEach((container, index) => {
    const img = container.querySelector('img');

    img.style.transform = `translate(${(Math.random() * 10 - 5)}px, ${(Math.random() * 10 - 5)}px)`; // Random slight movement
    setTimeout(() => {
      img.src = newSrcs[index]; // Update the image source after a delay
      img.style.transform = 'translate(0, 0)'; // Reset the position after the image is changed
    }, 250); // Allow slight movement to be seen before changing image
  });
});


    </script>
      <script>
    // window.addEventListener("load", function () {
    //     const preloader = document.getElementById("preloader");
    //     if (preloader) {
    //         preloader.style.opacity = "0";
    //         setTimeout(() => preloader.style.display = "none", 5000); // Smooth hide
    //     }
    // });
</script>
<script>
    window.addEventListener("load", function () {
        const preloader = document.getElementById("preloader");
        if (preloader) {
            setTimeout(() => {
                preloader.style.opacity = "0";
                setTimeout(() => preloader.style.display = "none", 500); // Smooth hide after fade-out
            }, 8000); // Keep the loader visible for 10 seconds
        }
    });
</script>

  </body>


</html>

   