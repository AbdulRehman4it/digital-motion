
    
    <!-- Footer Section -->
    <footer class="bg-[#004890] text-white p-5">
      <div class="container mx-auto flex justify-between items-center">
        <!-- Social Media Icons -->
        <div class="flex space-x-4">
          <a href="#" class="hover:text-gray-400">
            <img src="./assets/img/facebook.png" alt="Facebook Icon" />
          </a>
          <a href="#" class="hover:text-gray-400">
            <img src="./assets/img/insta.png" alt="Twitter Icon" />
          </a>
          <a href="#" class="hover:text-gray-400">
            <img src="./assets/img/link.png" alt="Instagram Icon" />
          </a>
        </div>

        <!-- Copyright Text -->
        <div class="text-right secondaryfont text-white">
          &copy;Dynamic Motion. 2020
        </div>
      </div>
    </footer>

    <script>
  // Function to animate counters
  function animateCounter(id, endValue, duration) {
    let startValue = 0;
    const stepTime = Math.abs(Math.floor(duration / endValue));
    const counterElement = document.getElementById(id);
    const counter = setInterval(() => {
      startValue += 1;
      counterElement.textContent = startValue;
      if (startValue === endValue) {
        clearInterval(counter);
      }
    }, stepTime);
  }
  // Trigger counters on scroll
  const counters = [
    { id: "count1", endValue: 150, duration: 2000 },
    { id: "count2", endValue: 100, duration: 2000 },
    { id: "count3", endValue: 50, duration: 2000 },
    { id: "count4", endValue: 20, duration: 2000 },
  ];
  let hasAnimated = false;
  const checkSectionVisibility = () => {
    const section = document.querySelector("section");
    const sectionTop = section.getBoundingClientRect().top;
    const windowHeight = window.innerHeight;
    // Start the counter if the section is visible
    if (!hasAnimated && sectionTop < windowHeight) {
      counters.forEach((counter) => {
        animateCounter(counter.id, counter.endValue, counter.duration);
      });
      hasAnimated = true; // Prevents counter from animating multiple times
    }
  };
  // Check visibility on scroll
  window.addEventListener("scroll", checkSectionVisibility);
  // Check visibility on page load
  window.addEventListener("load", checkSectionVisibility);
</script>
    

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
  </body>
</html>

   