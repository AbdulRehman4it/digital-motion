<?php
$webtitle='About';
require_once('./inc/top.php');
?>

<!-- Slider Section -->
<section class="py-12 px-12">
<div class="flex flex-col items-center md:flex-row md:space-x-8 justify-between">
          <!-- Left Image -->
          <div
            class="mb-4 md:mb-0 hidden sm:block image-container"
            data-aos="flip-left"
          >
            <img
              src="./assets/img/shape3.png"
              alt="Left Image"
              class="rotating-image w-16 h-16 md:w-20 md:h-20 lg:w-24 lg:h-24 lg:mt-6 object-cover"
            />
          </div>

          <!-- Center Heading -->
          <h1
            class="herofont uppercase font-extrabold text-center text-[#004890] lg:text-6xl md:text-4xl text-2xl md:mx-4 px-2 py-1 leading-tight"
            data-aos="fade-up"
          >
          Trends & Tips for
            <br class="hidden sm:block" />
            <span
              class="typewriter lg:text-6xl md:text-4xl text-2xl herofont uppercase font-extrabold text-center bg-[#004890] text-white px-2 py-1 rounded-lg block mt-2"
              >Success</span
            >
          </h1>

          <!-- Right Image -->
          <div
            class="mt-4 md:mt-0 hidden sm:block image-container"
            data-aos="flip-right"
          >
            <img
              src="./assets/img/shape4.png"
              alt="Right Image"
              class="rotating-image w-16 h-16 md:w-20 md:h-20 lg:w-24 lg:h-24 object-cover"
            />
          </div>
        </div>

<!-- Row 2 -->
<div class="my-12 text-center">
        <p
          class="text-lg md:text-xl lg:text-2xl leading-relaxed text-[#444444] secondaryfont"
          data-aos="fade-up"
        >
        Stay updated with the latest trends, tips, and stories in marketing, design, and event production. Explore our expert insights to help your brand thrive.
        </p>
      </div>

  <div class="swiper-container overflow-hidden">
    <div class="swiper-wrapper flex items-center h-full">
      <!-- Slide 1 -->
      <div class="swiper-slide">
        <div class="relative overflow-hidden rounded-lg shadow-lg h-full flex flex-col">
          <img class="w-full h-full object-cover" src="./assets/img/t1.png" alt="Team Member 1" />
          <div class="absolute inset-0 bg-[#004890] bg-opacity-50 flex items-end justify-center opacity-0 hover:opacity-100 transition-opacity duration-300">
            <div class="text-white text-center p-4">
              <h3 class="text-lg font-semibold">Sarah Johnson</h3>
              <p class="text-sm">Creative Director</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Slide 2 -->
      <div class="swiper-slide">
        <div class="relative overflow-hidden rounded-lg shadow-lg h-full flex flex-col">
          <img class="w-full h-full object-cover" src="./assets/img/t2.png" alt="Team Member 2" />
          <div class="absolute inset-0 bg-[#004890] bg-opacity-50 flex items-end justify-center opacity-0 hover:opacity-100 transition-opacity duration-300">
            <div class="text-white text-center p-4">
              <h3 class="text-lg font-semibold">John Doe</h3>
              <p class="text-sm">Lead Developer</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Slide 3 -->
      <div class="swiper-slide">
        <div class="relative overflow-hidden rounded-lg shadow-lg h-full flex flex-col">
          <img class="w-full h-full object-cover" src="./assets/img/t3.png" alt="Team Member 3" />
          <div class="absolute inset-0 bg-[#004890] bg-opacity-50 flex items-end justify-center opacity-0 hover:opacity-100 transition-opacity duration-300">
            <div class="text-white text-center p-4">
              <h3 class="text-lg font-semibold">Emily Smith</h3>
              <p class="text-sm">Marketing Specialist</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Slide 4 -->
      <div class="swiper-slide">
        <div class="relative overflow-hidden rounded-lg shadow-lg h-full flex flex-col">
          <img class="w-full h-full object-cover" src="./assets/img/t4.png" alt="Team Member 4" />
          <div class="absolute inset-0 bg-[#004890] bg-opacity-50 flex items-end justify-center opacity-0 hover:opacity-100 transition-opacity duration-300">
            <div class="text-white text-center p-4">
              <h3 class="text-lg font-semibold">Michael Brown</h3>
              <p class="text-sm">UX Designer</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Slide 5 -->
      <div class="swiper-slide">
        <div class="relative overflow-hidden rounded-lg shadow-lg h-full flex flex-col">
          <img class="w-full h-full object-cover" src="./assets/img/t5.png" alt="Team Member 5" />
          <div class="absolute inset-0 bg-[#004890] bg-opacity-50 flex items-end justify-center opacity-0 hover:opacity-100 transition-opacity duration-300">
            <div class="text-white text-center p-4">
              <h3 class="text-lg font-semibold">Linda Davis</h3>
              <p class="text-sm">Product Manager</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Slide 6 -->
      <div class="swiper-slide">
        <div class="relative overflow-hidden rounded-lg shadow-lg h-full flex flex-col">
          <img class="w-full h-full object-cover" src="./assets/img/t6.png" alt="Team Member 6" />
          <div class="absolute inset-0 bg-[#004890] bg-opacity-50 flex items-end justify-center opacity-0 hover:opacity-100 transition-opacity duration-300">
            <div class="text-white text-center p-4">
              <h3 class="text-lg font-semibold">James Wilson</h3>
              <p class="text-sm">Data Analyst</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Search Bar Section -->
<section class="py-12 px-12">
  <div class="relative w-full max-w-full mb-8">
    <!-- Input container with relative positioning -->
    <input type="text" placeholder="Search..." class="w-full p-4 pl-12 border border-gray-300 rounded-lg shadow-lg focus:outline-none focus:ring-2 focus:ring-[#004890]">
    <!-- Search icon positioned inside the input field -->
    <img src="./assets/img/serach.png" alt="Search" class="absolute top-1/2 left-3 transform -translate-y-1/2 h-6 w-6">
  </div>

  <!-- Cards Section -->
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    <!-- Card 1 -->
    <div class="bg-[#F5F8FB] rounded-lg shadow-lg overflow-hidden flex flex-col">
      <img src="./assets/img/b1.png" alt="Card 1" class="h-40 sm:h-48 md:h-56 lg:h-64 w-full object-cover">
      <div class="p-4 flex-grow flex flex-col space-y-4">
        <h3 class="text-lg herofont uppercase font-extrabold text-center text-[#004890]">Elevating Brands Through Immersive Events</h3>
        <p class="text-center text-[#444444] secondaryfont">Our custom events engage audiences and boost brand success globally.</p>
        <span class="mt-auto text-right text-sm text-gray-500">Date: 2024-10-05</span>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="bg-[#F5F8FB] rounded-lg shadow-lg overflow-hidden flex flex-col">
      <img src="./assets/img/b2.png" alt="Card 2" class="h-40 sm:h-48 md:h-56 lg:h-64 w-full object-cover">
      <div class="p-4 flex-grow flex flex-col space-y-4">
        <h3 class="text-lg herofont uppercase font-extrabold text-center text-[#004890]">Elevating Brands Through Immersive Events</h3>
        <p class="text-center text-[#444444] secondaryfont">Our custom events engage audiences and boost brand success globally.</p>
        <span class="mt-auto text-right text-sm text-gray-500">Date: 2024-10-05</span>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="bg-[#F5F8FB] rounded-lg shadow-lg overflow-hidden flex flex-col">
      <img src="./assets/img/b3.png" alt="Card 3" class="h-40 sm:h-48 md:h-56 lg:h-64 w-full object-cover">
      <div class="p-4 flex-grow flex flex-col space-y-4">
        <h3 class="text-lg herofont uppercase font-extrabold text-center text-[#004890]">Elevating Brands Through Immersive Events</h3>
        <p class="text-center text-[#444444] secondaryfont">Our custom events engage audiences and boost brand success globally.</p>
        <span class="mt-auto text-right text-sm text-gray-500">Date: 2024-10-05</span>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="bg-[#F5F8FB] rounded-lg shadow-lg overflow-hidden flex flex-col">
      <img src="./assets/img/b4.png" alt="Card 4" class="h-40 sm:h-48 md:h-56 lg:h-64 w-full object-cover">
      <div class="p-4 flex-grow flex flex-col space-y-4">
        <h3 class="text-lg herofont uppercase font-extrabold text-center text-[#004890]">Elevating Brands Through Immersive Events</h3>
        <p class="text-center text-[#444444] secondaryfont">Our custom events engage audiences and boost brand success globally.</p>
        <span class="mt-auto text-right text-sm text-gray-500">Date: 2024-10-05</span>
      </div>
    </div>

    <!-- Additional Cards -->
    <div class="bg-[#F5F8FB] rounded-lg shadow-lg overflow-hidden flex flex-col">
      <img src="./assets/img/b5.png" alt="Card 5" class="h-40 sm:h-48 md:h-56 lg:h-64 w-full object-cover">
      <div class="p-4 flex-grow flex flex-col space-y-4">
        <h3 class="text-lg herofont uppercase font-extrabold text-center text-[#004890]">Elevating Brands Through Immersive Events</h3>
        <p class="text-center text-[#444444] secondaryfont">Our custom events engage audiences and boost brand success globally.</p>
        <span class="mt-auto text-right text-sm text-gray-500">Date: 2024-10-05</span>
      </div>
    </div>

    <div class="bg-[#F5F8FB] rounded-lg shadow-lg overflow-hidden flex flex-col space-y-4">
      <img src="./assets/img/b6.png" alt="Card 6" class="h-40 sm:h-48 md:h-56 lg:h-64 w-full object-cover">
      <div class="p-4 flex-grow flex flex-col  space-y-4">
        <h3 class="text-lg herofont uppercase font-extrabold text-center text-[#004890]">Elevating Brands Through Immersive Events</h3>
        <p class="text-center text-[#444444] secondaryfont">Our custom events engage audiences and boost brand success globally.</p>
        <span class="mt-auto text-right text-sm text-gray-500">Date: 2024-10-05</span>
      </div>
    </div>

    <div class="bg-[#F5F8FB] rounded-lg shadow-lg overflow-hidden flex flex-col">
      <img src="./assets/img/b7.png" alt="Card 7" class="h-40 sm:h-48 md:h-56 lg:h-64 w-full object-cover">
      <div class="p-4 flex-grow flex flex-col space-y-4">
        <h3 class="text-lg herofont uppercase font-extrabold text-center text-[#004890]">Elevating Brands Through Immersive Events</h3>
        <p class="text-center text-[#444444] secondaryfont">Our custom events engage audiences and boost brand success globally.</p>
        <span class="mt-auto text-right text-sm text-gray-500">Date: 2024-10-05</span>
      </div>
    </div>

    <div class="bg-[#F5F8FB] rounded-lg shadow-lg overflow-hidden flex flex-col">
      <img src="./assets/img/b8.png" alt="Card 8" class="h-40 sm:h-48 md:h-56 lg:h-64 w-full object-cover">
      <div class="p-4 flex-grow flex flex-col space-y-4">
        <h3 class="text-lg herofont uppercase font-extrabold text-center text-[#004890]">Elevating Brands Through Immersive Events</h3>
        <p class="text-center text-[#444444] secondaryfont">Our custom events engage audiences and boost brand success globally.</p>
        <span class="mt-auto text-right text-sm text-gray-500">Date: 2024-10-05</span>
      </div>
    </div>
  </div>
</section>







<script>
  const swiper = new Swiper('.swiper-container', {
    slidesPerView: 1, // Default to 1 for small screens
    spaceBetween: 20, // Space between slides
    centeredSlides: true,
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    grabCursor: true,
  });

  // Adjust slide properties for medium screens
  const mediaQuery = window.matchMedia('(min-width: 640px)'); // md breakpoint

  function handleMediaChange(e) {
    if (e.matches) {
      swiper.params.slidesPerView = 2; // 2 slides on md screens
      swiper.params.spaceBetween = 30; // Increased space for md screens
    } else {
      swiper.params.slidesPerView = 1; // 1 slide on sm screens
      swiper.params.spaceBetween = 20; // Reduced space for sm screens
    }
    swiper.update(); // Apply changes
  }

  // Initial check
  handleMediaChange(mediaQuery);
  mediaQuery.addEventListener('change', handleMediaChange);

    // Add CSS for active slide effect
    const style = document.createElement('style');
    style.innerHTML = `
        .swiper-slide {
            transition: transform 0.3s ease, opacity 0.3s ease;
            opacity: 0.5; /* Reduced opacity for non-active slides */
            width: 495.92px; /* Set width for non-active slides (lg only) */
            height: 661.23px; /* Set height for non-active slides (lg only) */
        }
        .swiper-slide-active {
            width: 600px; /* Set width for active slide (lg only) */
            height: 800px; /* Set height for active slide (lg only) */
            z-index: 10; /* Ensure the active slide is on top */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5); /* Shadow for 3D effect */
            opacity: 1; /* Full opacity for active slide */
        }
        
        /* Media Queries for sm and md */
        @media (max-width: 1024px) {
            .swiper-slide {
                width: 100%; /* Example value for md */
                height: auto; /* Example value for md */
            }
            .swiper-slide-active {
                width: 100%; /* Example value for md */
                height: auto; /* Example value for md */
            }
        }
        
        @media (max-width: 640px) {
            .swiper-slide {
                width: 100%; /* Example value for sm */
                height: auto; /* Example value for sm */
            }
            .swiper-slide-active {
                width: 100%; /* Example value for sm */
                height: auto; /* Example value for sm */
            }
        }
    `;
    document.head.appendChild(style);
</script>

<?php
require_once('./inc/bottom.php');
?>
