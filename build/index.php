<?php
$webtitle='Home';
require_once('./inc/top.php');
?>

    <!-- hero start -->
    <section
      class="relative h-screen flex items-center lg:justify-start md:justify-center justify-center px-12"
      data-aos="fade-up"
    >
      <!-- Background Video -->
      <video
        autoplay
        muted
        loop
        class="absolute inset-0 w-full h-full object-cover"
      >
        <source src="./assets/img/video.mp4" type="video/mp4" />
       
      </video>

      <!-- Overlay to make text stand out -->
      <div class="absolute inset-0 bg-transparent opacity-50"></div>

      <!-- Text Content on Top of Video -->
      <div
        class="relative z-10 text-left text-white lg:basis-3/4 basis-full flex flex-col items-center md:items-center lg:items-start"
        data-aos="flip-left"
      >
        <!-- Heading -->
        <!-- <h1
          class="text-5xl  herofont uppercase font-extrabold text-center lg:text-left leading-tight sm:leading-snug md:leading-normal lg:leading-normal"
        >
        Step into a world where visions take shape. At Dynamic Motion, we bring 
        </h1> -->

        <!-- Spacing between heading and span -->
        <!-- <span
          class="typewriter bg-[#004890] text-white px-4 py-2 rounded-lg text-3xl md:text-5xl lg:text-6xl herofont uppercase font-extrabold mt-4 lg:mt-6 text-center lg:text-left"
        >
        imagination to life.
        </span> -->
      </div>
    </section>

    <!-- hero end -->
 

    <!-- mobileslider -->
    <!-- <section class="py-6 px-6">
      <div class="carousel sm:hidden mx-3">
        <div class="carousel-item">
          <img
            src="./assets/img/Mask group.png"
            alt="Image 1"
            class="w-full h-40 object-contain mx-3"
          />
        </div>
        <div class="carousel-item hidden">
          <img
            src="./assets/img/Mask group-1.png"
            alt="Image 2"
            class="w-full h-40 object-contain mx-3"
          />
        </div>
        <div class="carousel-item hidden">
          <img
            src="./assets/img/Mask group-2.png"
            alt="Image 3"
            class="w-full h-40 object-contain mx-3"
          />
        </div>
        <div class="carousel-item hidden">
          <img
            src="./assets/img/Mask group-3.png"
            alt="Image 4"
            class="w-full h-40 object-contain mx-3"
          />
        </div>
        <div class="carousel-item hidden">
          <img
            src="./assets/img/Mask group-4.png"
            alt="Image 5"
            class="w-full h-40 object-contain mx-3"
          />
        </div>
        <div class="carousel-item hidden">
          <img
            src="./assets/img/Mask group-5.png"
            alt="Image 6"
            class="w-full h-40 object-contain mx-3"
          />
        </div>
      
        <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
        <button class="next" onclick="changeSlide(1)">&#10095;</button>
      </div>
    </section> -->

    <!-- clientsection end -->

    <!-- service section start -->
    <section
      class="bg-[#004890] py-10 lg:py-20 flex items-center"
      data-aos="fade-up"
    >
      <div class="container mx-auto flex flex-col md:flex-row h-full gap-8">
        <!-- Div 1: Left Side -->
        <div
          class="w-full lg:w-1/2 md:w-full p-4 flex flex-col justify-center text-center md:text-center lg:text-left"
          data-aos="flip-left"
        >
          <!-- Title Section with Span -->
          <span
            class="bg-white text-[#004890] px-4 py-2 rounded-lg text-2xl md:text-3xl lg:text-5xl herofont uppercase font-extrabold mt-4 lg:mt-6 block mb-6"
          >
          From Vision to Reality: 
          </span>

          <!-- Main Heading -->
          <h1
            class="text-3xl md:text-3xl lg:text-5xl herofont uppercase font-extrabold leading-tight sm:leading-snug md:leading-normal lg:leading-normal text-white mb-8"
          >
          Tailored Solutions in Marketing, Promotion, and Exceptional Spaces.

          </h1>

          <!-- Paragraphs Section -->
          <p
            class="secondaryfont text-white text-base md:text-lg lg:text-xl leading-relaxed lg:leading-[1.75] mb-6 combined-animation"
          >
          Dynamic Motion is your trusted partner for Event Turnkey Construction, Structure Buildups, POSM, Fit-Outs, and Exhibitions. With cutting-edge production plants in Dubai and Riyadh, we deliver exceptional quality across the MENA and GCC regions. Our strategic locations and regional offices ensure seamless execution and on-time delivery for both regional and global clients.  

          </p>

          <p
            class="secondaryfont text-white text-base md:text-lg lg:text-xl leading-relaxed lg:leading-[1.75] mb-6 combined-animation"
          >
          We stand out with our personalized approach, crafting unique solutions that align with your brand’s goals. Trusted by leading brands, multinationals, and government entities, we take your vision from concept to reality—delivering impactful, results-driven experiences every time.

          </p>
          <p
            class="secondaryfont text-white text-base md:text-lg lg:text-xl leading-relaxed lg:leading-[1.75] mb-6 combined-animation"
          >
          Our tailored services span the complete spectrum of marketing, promotional, and live event support. From the initial discovery meeting through to post-event or campaign follow-up, we take your brief to heart, working closely with you to create meaningful value at every step.

          </p>
        </div>

        <!-- Div 2: Right Side -->
        <div
          class=" lg:grid md:w-1/2 grid-cols-2 gap-6"
          data-aos="flip-right"
        >
          <!-- Row 1 -->
   <!-- Div 1 -->
   <a href="./Event Turnkey.php">
  <div class="relative w-full sm:w-[300px] md:w-[350px] h-[300px] md:h-[300px] flex flex-col items-center justify-end bg-cover bg-center group" style="background-image: url('./assets/img/s1.webp')">
    
    <!-- Overlay -->
    <div class="absolute bottom-0 left-0 w-full h-[100%] bg-[#004890] bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
      <span class="text-white text-center"> Event Turnkey Construction 
      </span>
    </div>
  </div>
  </a>
  <!-- Div 2 -->
   <a href="./BUILT-UP STRUCTURES.php">
  <div class="relative w-full sm:w-[300px] md:w-[300px] h-[300px] md:h-[300px] flex flex-col items-center justify-end bg-cover bg-center group" style="background-image: url('./assets/img/s2.JPEG')">
    
    <!-- Overlay -->
    <div class="absolute bottom-0 left-0 w-full h-[100%] bg-[#004890] bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
      <span class="text-white text-center">Structure Build-Up</span>
    </div>
  </div>
  </a>
  <!-- Div 3 -->
   <a href="./FIlloutandinterior.php">
  <div class="relative w-full sm:w-[300px] md:w-[300px] h-[300px] md:h-[300px] flex flex-col items-center justify-end bg-cover bg-center group" style="background-image: url('./assets/img/s3.JPG')">
    
    <!-- Overlay -->
    <div class="absolute bottom-0 left-0 w-full h-[100%] bg-[#004890] bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
      <span class="text-white text-center">POSM</span>
    </div>
  </div>
  </a>

          <!-- Row 2 -->
      <!-- Div 1 -->
      <a href="./Event Managment.php">
    <div class="relative w-full sm:w-[300px] md:w-[300px] h-[300px] md:h-[300px] flex flex-col items-center justify-end bg-cover bg-center group" style="background-image: url('./assets/img/s4.webp')">
      
      <!-- Overlay -->
      <div class="absolute bottom-0 left-0 w-full h-[100%] bg-[#004890] bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
        <span class="text-white text-center">Fit-Outs</span>
      </div>
    </div>
    </a>
    <!-- Div 2 -->
     <a href="./Exibition Stand.php">
    <div class="relative w-full sm:w-[300px] md:w-[300px] h-[300px] md:h-[300px] flex flex-col items-center justify-end bg-cover bg-center group" style="background-image: url('./assets/img/s5.png')">
      
      <!-- Overlay -->
      <div class="absolute bottom-0 left-0 w-full h-[100%] bg-[#004890] bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
        <span class="text-white text-center">Concept and Design</span>
      </div>
    </div>
    </a>
    <!-- Div 3 -->
     <a href="./Pointofsale.php">
    <div class="relative w-full sm:w-[300px] md:w-[300px] h-[300px] md:h-[300px] flex flex-col items-center justify-end bg-cover bg-center group" style="background-image: url('./assets/img/s6.png')">
      
      <!-- Overlay -->
      <div class="absolute bottom-0 left-0 w-full h-[100%] bg-[#004890] bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
        <span class="text-white text-center">Exhibitions</span>
      </div>
    </div>
    </a>



        <!-- Sliders for md and sm -->
        <!-- <div class="md:hidden w-full">
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img
                  src="./assets/img/ser1.png"
                  alt="Image 1"
                  class="w-full h-auto object-cover"
                />
              </div>
              <div class="swiper-slide">
                <img
                  src="./assets/img/ser2.png"
                  alt="Image 2"
                  class="w-full h-auto object-cover"
                />
              </div>
              <div class="swiper-slide">
                <img
                  src="./assets/img/ser3.png"
                  alt="Image 3"
                  class="w-full h-auto object-cover"
                />
              </div>
              <div class="swiper-slide">
                <img
                  src="./assets/img/ser4.png"
                  alt="Image 4"
                  class="w-full h-auto object-cover"
                />
              </div>
              <div class="swiper-slide">
                <img
                  src="./assets/img/ser5.png"
                  alt="Image 5"
                  class="w-full h-auto object-cover"
                />
              </div>
              <div class="swiper-slide">
                <img
                  src="./assets/img/ser6.png"
                  alt="Image 6"
                  class="w-full h-auto object-cover"
                />
              </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div> -->
      </div>
    </section>


   <!-- clientsection start  -->
   <section class="py-12 px-12">
      <!-- Row 1 -->
      <div
        class="flex flex-col items-center md:flex-row md:space-x-8 justify-between"
      >
        <!-- Left Image -->
        <div
          class="mb-4 md:mb-0 hidden sm:block image-container"
          data-aos="flip-left"
        >
          <img
            src="./assets/img/heroleft.png"
            alt="Left Image"
            class="rotating-image w-16 h-16 md:w-20 md:h-20 lg:w-24 lg:h-24 lg:mt-6 object-cover"
          />
        </div>

        <!-- Center Heading -->
        <h1
          class="herofont uppercase font-extrabold text-center text-[#004890] lg:text-6xl md:text-4xl text-2xl md:mx-4"
          data-aos="fade-up"
        >
          OUR
          <span
            class="herofont uppercase font-extrabold text-center bg-[#004890] text-white px-2 py-1 rounded-lg"
          >
            CLIENTS</span
          >
        </h1>

        <!-- Right Image -->
        <div
          class="mt-4 md:mt-0 hidden sm:block image-container"
          data-aos="flip-right"
        >
          <img
            src="./assets/img/heroright.png"
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
          Over the last 20 years, Dynamic Motion has had the privilege to work
          with a high-profile community of market-leading local, regional, and
          international brands, including
        </p>
      </div>
    </section>

    <!-- Slider Start -->
    <section class="py-12 ">
      <!-- Row 3 -->
      <div class="overflow-hidden">
        <!-- Slider Container with Marquee Effect -->
        <div class="marquee animate-slide flex space-x-4">
          <!-- Logo Items (6 logos, each taking equal width) -->
          <img
            src="./assets/img/client1.png"
            alt="Company 1"
            class="h-20 flex-shrink-0 w-1/6 object-contain"
          />
          <img
            src="./assets/img/client2.webp"
            alt="Company 2"
            class="h-20 flex-shrink-0 w-1/6 object-contain"
          />
          <img
            src="./assets/img/client3.jpg"
            alt="Company 3"
            class="h-20 flex-shrink-0 w-1/6 object-contain"
          />
          <img
            src="./assets/img/client4.png"
            alt="Company 4"
            class="h-20 flex-shrink-0 w-1/6 object-contain"
          />
          <img
            src="./assets/img/client5.svg"
            alt="Company 5"
            class="h-20 flex-shrink-0 w-1/6 object-contain"
          />
         
          <!-- Duplicate the logos for continuous scrolling effect -->
            <img
            src="./assets/img/client1.png"
            alt="Company 1"
            class="h-20 flex-shrink-0 w-1/6 object-contain"
          />
          <img
            src="./assets/img/client2.webp"
            alt="Company 2"
            class="h-20 flex-shrink-0 w-1/6 object-contain"
          />
          <img
            src="./assets/img/client3.jpg"
            alt="Company 3"
            class="h-20 flex-shrink-0 w-1/6 object-contain"
          />
          <img
            src="./assets/img/client4.png"
            alt="Company 4"
            class="h-20 flex-shrink-0 w-1/6 object-contain"
          />
          <img
            src="./assets/img/client5.svg"
            alt="Company 5"
            class="h-20 flex-shrink-0 w-1/6 object-contain"
          />
        </div>
      </div>
    </section>
    <!-- Slider End -->

    <!-- service section end -->
    <!-- service 2 start -->
    <section class="py-10 lg:py-20">
      <div class="container mx-auto flex flex-col space-y-7">
        <div
          class="flex flex-col items-center md:flex-row md:space-x-8 justify-between"
        >
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
          where vision 

            <br class="hidden sm:block" />
            <span
              class="typewriter lg:text-6xl md:text-4xl text-2xl herofont uppercase font-extrabold text-center bg-[#004890] text-white px-2 py-1 rounded-lg block mt-2"
              >meets precision</span
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
        <div class="flex flex-wrap justify-center gap-4">
  <!-- Div 1 -->
   <a href="./Event Turnkey.php">
  <div class="relative w-full sm:w-[300px] md:w-[300px] h-[300px] md:h-[300px] flex flex-col items-center justify-end bg-cover bg-center group" style="background-image: url('./assets/img/s1.webp')">
    
    <!-- Overlay -->
    <div class="absolute bottom-0 left-0 w-full h-[100%] bg-[#004890] bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
      <span class="text-white text-center"> Event Turnkey Construction 
      </span>
    </div>
  </div>
  </a>
  <!-- Div 2 -->
   <a href="./BUILT-UP STRUCTURES.php">
  <div class="relative w-full sm:w-[300px] md:w-[300px] h-[300px] md:h-[300px] flex flex-col items-center justify-end bg-cover bg-center group" style="background-image: url('./assets/img/s2.JPEG')">
    
    <!-- Overlay -->
    <div class="absolute bottom-0 left-0 w-full h-[100%] bg-[#004890] bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
      <span class="text-white text-center">Structure Build-Up</span>
    </div>
  </div>
  </a>
  <!-- Div 3 -->
   <a href="./FIlloutandinterior.php">
  <div class="relative w-full sm:w-[300px] md:w-[300px] h-[300px] md:h-[300px] flex flex-col items-center justify-end bg-cover bg-center group" style="background-image: url('./assets/img/s3.JPG')">
    
    <!-- Overlay -->
    <div class="absolute bottom-0 left-0 w-full h-[100%] bg-[#004890] bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
      <span class="text-white text-center">POSM</span>
    </div>
  </div>
  </a>
</div>

<!-- Row 2 -->
<div class="flex justify-center">
  <div class="flex flex-wrap justify-center gap-4">
    <!-- Div 1 -->
     <a href="./Event Managment.php">
    <div class="relative w-full sm:w-[300px] md:w-[300px] h-[300px] md:h-[300px] flex flex-col items-center justify-end bg-cover bg-center group" style="background-image: url('./assets/img/s4.webp')">
      
      <!-- Overlay -->
      <div class="absolute bottom-0 left-0 w-full h-[100%] bg-[#004890] bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
        <span class="text-white text-center">Fit-Outs</span>
      </div>
    </div>
    </a>
    <!-- Div 2 -->
     <a href="./Exibition Stand.php">
    <div class="relative w-full sm:w-[300px] md:w-[300px] h-[300px] md:h-[300px] flex flex-col items-center justify-end bg-cover bg-center group" style="background-image: url('./assets/img/s5.png')">
      
      <!-- Overlay -->
      <div class="absolute bottom-0 left-0 w-full h-[100%] bg-[#004890] bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
        <span class="text-white text-center">Concept and Design</span>
      </div>
    </div>
    </a>
    <!-- Div 3 -->
     <a href="./Pointofsale.php">
    <div class="relative w-full sm:w-[300px] md:w-[300px] h-[300px] md:h-[300px] flex flex-col items-center justify-end bg-cover bg-center group" style="background-image: url('./assets/img/s6.png')">
      
      <!-- Overlay -->
      <div class="absolute bottom-0 left-0 w-full h-[100%] bg-[#004890] bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
        <span class="text-white text-center">Exhibitions</span>
      </div>
    </div>
    </a>
  </div>
</div>

    </section>

    <!-- service 2 end -->

    <!-- mission section start -->
    
    <!-- counter start -->
    <section class="py-10 lg:py-20 bg-[url('../img/counterbg.png')]" data-aos="fade-up" id="impactSection">
  <div class="flex flex-col items-center text-center" data-aos="fade-up">
    <h2 class="text-3xl md:text-4xl lg:text-5xl text-white mb-8 herofont uppercase font-extrabold">
      Our Impact in Numbers
    </h2>
    <div class="flex flex-wrap justify-center w-full">
      <!-- Counter 1 -->
      <div class="flex flex-col items-center text-center p-4 sm:p-6 md:p-8 lg:p-10 w-full sm:w-1/2 md:w-1/4" data-aos="fade-up">
        <span id="count1" class="text-7xl sm:text-8xl md:text-9xl herofont uppercase font-extrabold text-white">0</span>
        <span class="text-xl sm:text-xl secondaryfont text-white uppercase">Years of Experience</span>
      </div>

      <!-- Counter 2 -->
      <div class="flex flex-col items-center text-center p-4 sm:p-6 md:p-8 lg:p-10 w-full sm:w-1/2 md:w-1/4" data-aos="fade-up">
        <span id="count2" class="text-7xl sm:text-8xl md:text-9xl herofont uppercase font-extrabold text-white">0</span>
        <span class="text-xl sm:text-xl secondaryfont text-white uppercase">Successful Projects</span>
      </div>

      <!-- Counter 3 -->
      <div class="flex flex-col items-center text-center p-4 sm:p-6 md:p-8 lg:p-10 w-full sm:w-1/2 md:w-1/4" data-aos="fade-up">
        <span id="count3" class="text-7xl sm:text-8xl md:text-9xl herofont uppercase font-extrabold text-white">0</span>
        <span class="text-xl sm:text-xl secondaryfont text-white uppercase" >Global Brands Served</span>
      </div>

      <!-- Counter 4 -->
      <div class="flex flex-col items-center text-center p-4 sm:p-6 md:p-8 lg:p-10 w-full sm:w-1/2 md:w-1/4" data-aos="fade-up">
        <span id="count4" class="text-7xl sm:text-8xl md:text-9xl herofont uppercase font-extrabold text-white">0</span>
        <span class="text-xl sm:text-xl secondaryfont text-white uppercase">Client Retention Rate</span>
      </div>
    </div>
  </div>
</section>

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
    { id: "count1", endValue: 30, duration: 2000 },
    { id: "count2", endValue: 10000, duration: 2000 },
    { id: "count3", endValue: 300, duration: 2000 },
    { id: "count4", endValue: 100, duration: 2000 },
  ];

  // Intersection Observer to detect when the section is in view
  const section = document.getElementById("impactSection");

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        // Reset counters to 0 before animating
        counters.forEach((counter) => {
          document.getElementById(counter.id).textContent = 0; // Reset to 0
          animateCounter(counter.id, counter.endValue, counter.duration); // Animate the counter
        });
      }
    });
  });

  // Start observing the section
  observer.observe(section);
</script>

<section class="py-10 px-5 lg:px-20 bg-white">
  <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
    <!-- Column 1 -->
    <div class="flex flex-col items-center space-y-4" data-aos="fade-up">
      <!-- Video Div -->
      <div class="w-full h-full bg-gray-200">
        <video class="w-full h-full object-cover" autoplay muted loop>
          <source src="./assets/img/v1.mp4" type="video/mp4" />
          Your browser does not support the video tag.
        </video>
      </div>
      <!-- Text Div -->
      <div class="text-center">
      <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl herofont uppercase font-extrabold text-[#004890] mb-4 lg:mb-6">
             CHINA
             </h1>
             <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-[#444444] leading-relaxed secondaryfont mb-4">
                 Fit-outs and Interior Concepts. Design Visionaries. Event Innovators. Production Specialists. For over two decades, Dynamic Motion has helped world-leading brands and businesses connect meaningfully with their audiences.

             </p>
      </div>
    </div>

    <!-- Column 2 -->
    <div class="flex flex-col items-center space-y-4" data-aos="fade-up">
      <!-- Video Div -->
      <div class="w-full h-full bg-gray-200">
        <video class="w-full h-full object-cover" autoplay muted loop>
          <source src="./assets/img/v2.mp4" type="video/mp4" />
          Your browser does not support the video tag.
        </video>
      </div>
      <!-- Text Div -->
      <div class="text-center">
      <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl herofont uppercase font-extrabold text-[#004890] mb-4 lg:mb-6">
             EGYPT
             </h1>
             <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-[#444444] leading-relaxed secondaryfont mb-4">
                 Fit-outs and Interior Concepts. Design Visionaries. Event Innovators. Production Specialists. For over two decades, Dynamic Motion has helped world-leading brands and businesses connect meaningfully with their audiences.

             </p>
      </div>
    </div>

    <!-- Column 3 -->
    <div class="flex flex-col items-center space-y-4" data-aos="fade-up">
      <!-- Video Div -->
      <div class="w-full h-full bg-gray-200">
        <video class="w-full h-full object-cover" autoplay muted loop>
          <source src="./assets/img/v3.mp4" type="video/mp4" />
          Your browser does not support the video tag.
        </video>
      </div>
      <!-- Text Div -->
      <div class="text-center">
      <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl herofont uppercase font-extrabold text-[#004890] mb-4 lg:mb-6">
             KSA
             </h1>
             <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-[#444444] leading-relaxed secondaryfont mb-4">
                 Fit-outs and Interior Concepts. Design Visionaries. Event Innovators. Production Specialists. For over two decades, Dynamic Motion has helped world-leading brands and businesses connect meaningfully with their audiences.

             </p>
      </div>
    </div>

    <!-- Column 4 -->
    <div class="flex flex-col items-center space-y-4" data-aos="fade-up">
      <!-- Video Div -->
      <div class="w-full h-full bg-gray-200">
        <video class="w-full h-full object-cover" autoplay muted loop>
          <source src="./assets/img/v4.mp4" type="video/mp4" />
          Your browser does not support the video tag.
        </video>
      </div>
      <!-- Text Div -->
      <div class="text-center">
      <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl herofont uppercase font-extrabold text-[#004890] mb-4 lg:mb-6">
             UAE
             </h1>
             <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-[#444444] leading-relaxed secondaryfont mb-4">
                 Fit-outs and Interior Concepts. Design Visionaries. Event Innovators. Production Specialists. For over two decades, Dynamic Motion has helped world-leading brands and businesses connect meaningfully with their audiences.

             </p>
      </div>
    </div>
  </div>
</section>


    <!-- about sectionstart -->
     <section class="my-24 px-6 md:px-12 lg:px-24" data-aos="flip-right">
        <div class="bg-background p-8 flex flex-col items-center space-y-14">
            <div class="flex justify-between w-full">
                <img src="./assets/img/c1.png" alt="Left Image" class="hidden md:inline-block w-20 h-20"> <!-- Small image on the left side -->
                <h1 class="herofont uppercase font-extrabold text-center text-[#004890] lg:text-4xl md:text-2xl text-2xl leading-[40px] md:leading-[75px] lg:leading-[100px]" data-aos="fade-up">
                    <span class="herofont uppercase font-extrabold text-center bg-[#004890] text-white lg:text-5xl md:text-4xl text-2xl px-2 py-1 rounded-lg">Ready to Bring Your Vision to Life?
                    </span>
                    <br>
                    Reach Out for Inquiries and Collaboration
                </h1>
                <img src="./assets/img/c2.png" alt="Right Image" class="hidden md:inline-block w-20 h-20"> <!-- Small image on the right side -->
            </div>
            <p class="text-lg md:text-xl lg:text-2xl leading-relaxed text-[#444444] secondaryfont" data-aos="fade-up">
            Connect with us to discuss your ideas and explore how we can create something exceptional together. Use the form to reach out, and our team will respond promptly to get started.


            </p>
            <form class="space-y-6 w-full mx-auto"> <!-- LG properties -->
                <div class="flex flex-wrap -mx-2">
                    <div class="w-full md:w-1/2 px-2 mb-4 md:mb-0"> <!-- LG properties -->
                        <label class="block text-[#004890] font-bold mb-2" for="name">Name*</label>
                        <input class="w-full p-4 border border-[#004890] rounded-full focus:outline-none focus:ring-2 focus:ring-[#004890] transition duration-200" type="text" id="name" placeholder="Enter your name here" required />
                    </div>
                    <div class="w-full md:w-1/2 px-2 mb-4 md:mb-0"> <!-- LG properties -->
                        <label class="block text-[#004890] font-bold mb-2" for="email">Email*</label>
                        <input class="w-full p-4 border border-[#004890] rounded-full focus:outline-none focus:ring-2 focus:ring-[#004890] transition duration-200" type="email" id="email" placeholder="Enter your email here" required />
                    </div>
                </div>
                <div class="flex flex-wrap -mx-2 items-center"> 
                    <div class="w-full md:w-3/4 px-2 mb-4 md:mb-0 mt-3"> <!-- LG properties -->
                        <label class="block text-[#004890] font-bold mb-2" for="message">Message</label>
                        <textarea class="w-full p-4 border border-[#004890] rounded-full focus:outline-none focus:ring-2 focus:ring-[#004890] transition duration-200 h-16 resize-none" id="message" placeholder="Type here..." required></textarea>
                    </div>
                    <div class="w-full md:w-1/4 px-2 flex items-center pt-9"> <!-- LG properties -->
                        <button class="text-[#004890] hover:text-white bg-white hover:bg-[#004890] p-4 md:p-1 lg:p-4 font-bold border border-[#004890] rounded-full w-full h-16 transition duration-200" type="submit">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- counter start -->
    <section class="py-10 lg:py-20 bg-[url('../img/counterbg.png')]" data-aos="fade-up" id="impactSection">
  <div class="flex flex-col items-center text-center" data-aos="fade-up">
  <blockquote class="instagram-media w-[80%]" data-instgrm-permalink="https://www.instagram.com/dynamicmotion.mena" data-instgrm-version="14">
</blockquote>
<script async src="//www.instagram.com/embed.js"></script>
</div>
</section>
     <?php
require_once('./inc/bottom.php');
?>