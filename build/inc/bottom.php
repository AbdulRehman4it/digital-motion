
    
    <!-- Footer Section -->
    <footer class="bg-[#004890] text-white p-5">
      <div class="container mx-auto flex justify-between items-center">
        <!-- Social Media Icons -->
        <div class="flex space-x-4">
          <a href="#" class="hover:text-gray-400">
            <img src="./assets/img/facebook.png" alt="Facebook Icon" class="w-6 h-6"/>
          </a>
          <a href="#" class="hover:text-gray-400">
            <img src="./assets/img/insta.png" alt="Twitter Icon" class="w-6 h-6" />
          </a>
          <a href="#" class="hover:text-gray-400">
            <img src="./assets/img/link.png" alt="Instagram Icon" class="w-6 h-6"/>
          </a>
        </div>

        <!-- Copyright Text -->
        <div class="text-right secondaryfont text-white">
          &copy;Dynamic Motion. 2024
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

  // Function to reset counters
  function resetCounters() {
    counters.forEach((counter) => {
      document.getElementById(counter.id).textContent = 0; // Reset to 0
    });
  }

  // Trigger counters on scroll
  const counters = [
    { id: "count1", endValue: 150, duration: 2000 },
    { id: "count2", endValue: 100, duration: 2000 },
    { id: "count3", endValue: 50, duration: 2000 },
    { id: "count4", endValue: 20, duration: 2000 },
  ];

  let countersAnimated = false; // Flag to track if counters have been animated

  window.addEventListener("scroll", () => {
    const section = document.querySelector("section");
    const sectionTop = section.getBoundingClientRect().top;
    const windowHeight = window.innerHeight;

    // Check if the section is in the viewport and if counters have not been animated
    if (sectionTop < windowHeight && !countersAnimated) {
      resetCounters(); // Reset counters before starting animation
      counters.forEach((counter) => {
        animateCounter(counter.id, counter.endValue, counter.duration);
      });
      countersAnimated = true; // Set the flag to true after animating
    }
  });
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
  </body>
</html>

   