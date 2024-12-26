<?php
$webtitle='About';
require_once('./inc/top.php');
?>
<!-- Preloader -->
<div id="preloader" class="fixed inset-0 bg-white flex justify-center items-center z-50">
    <img src="./assets/img/video.gif" alt="Loading..." class="w-16 h-16">
</div>
<section class="space-y-10 mt-10">
    <!-- Row 1: Meet Our Team Heading -->
    <div class="flex flex-col items-center justify-center w-full">
    <h1
      class="herofont uppercase font-extrabold text-center text-[#004890] lg:text-6xl md:text-4xl text-3xl md:mx-4"
      data-aos="fade-up"
    >
     Company
      <span
        class="herofont uppercase font-extrabold text-center bg-[#004890] text-white px-2 py-1 rounded-lg"
      >
       Overview
      </span>
    </h1>
  </div>
<div class="relative h-[500px] bg-cover bg-center" style="background-image: url('./assets/img/aboutjumbo.png');">
  <!-- Overlay -->
  <div class="absolute inset-0 "></div>


</div>


</section>


<!-- team section main -->
<section class="lg:py-12 md:py-12 py-4 lg:px-12 md:px-12 px-1 flex flex-col items-center text-center">


  <!-- Row 2: Introduction Text -->
  <div class="my-12 w-full">
    <p
      class="text-lg md:text-xl lg:text-2xl leading-relaxed text-[#444444] secondaryfont"
      data-aos="fade-up"
    >
    Founded in 2000, Dynamic Motion started with a passion for creativity and excellence, crafting custom POSM displays and brand stands. Today, with over 20 years of expertise, we operate globally through hubs in the UAE, KSA, Egypt, and China, delivering impactful retail activations, innovative POSM setups, and world-class event productions.

With a team of 200+ professionals, we collaborate with top brands to create unforgettable experiences anywhere in the world. Dynamic Motion is dedicated to innovation, growth, and delivering standout solutions that connect brands with audiences globally.

    </p>
  </div>


</section>
<!-- mission section start -->
<section
      class="py-10 lg:py-20 bg-contain bg-center"
      style="background-image: url('./assets/img/missinbg.png')"
      data-aos="fade-up"
    >
      <div
        class="container mx-auto flex flex-col md:flex-row gap-8 p-6 rounded-lg"
      >
        <!-- Left Div -->
        <div class="flex flex-col w-full md:w-1/2" data-aos="flip-left">
          <div class="flex items-center mb-4">
            <img src="./assets/img/i1.png" alt="Icon 1" class="w-8 h-8 mr-2" />
            <!-- Adjust icon size as needed -->
            <h1
              class="text-2xl md:text-3xl lg:text-4xl font-bold text-[#004890] primaryfont"
            >
              Mission
            </h1>
          </div>
          <p
            class="text-base md:text-lg lg:text-xl text-[#444444] lg:leading-[46px] secondaryfont"
          >
          Dynamic Motion brings its clients' visions to life with unparalleled professionalism and dedication. Through world-class construction, design, and event solutions, the firm is committed to elevating brands, enhancing experiences, and driving progress across the region.
          </p>
        </div>

        <!-- Right Div -->
        <div class="flex flex-col w-full md:w-1/2" data-aos="flip-right">
          <div class="flex items-center mb-4">
            <img src="./assets/img/i2.png" alt="Icon 2" class="w-8 h-8 mr-2" />
            <!-- Adjust icon size as needed -->
            <h1
              class="text-2xl md:text-3xl lg:text-4xl font-bold text-[#004890] primaryfont"
            >
              Vision
            </h1>
          </div>
          <p
            class="text-base md:text-lg lg:text-xl text-[#444444] lg:leading-[46px] secondaryfont"
          >
          Dynamic Motion aims to participate in the enhancement and transformation of the MENA and GCC regions through visionary construction, innovative event solutions, and immersive brand experiences, where creativity and precision redefine the future of impactful spaces.    
        </p>
        </div>
      </div>
    </section>

    <!-- mission section end -->



<section class="py-16 mx-[100px] flex flex-col items-center">
    <h2 class="uppercase font-extrabold text-[#004890] text-4xl md:text3xl lg:text-5xl text-center mb-8">Our Core Values</h2>
    <div class="flex flex-col md:flex-row justify-center gap-6 md:gap-8">
        <!-- Core Value 1 -->
        <div class="flex-1 bg-[#004890] p-4 md:p-6 rounded-lg shadow-md text-center space-y-12">
            <h3 class="uppercase font-extrabold text-white text-xl md:text-2xl lg:text-3xl">Integrity</h3>
            <p class="text-base md:text-lg lg:text-xl text-white secondaryfont leading-relaxed">We believe in transparency and accountability in all our actions. At Dynamic Motion, integrity guides every decision we make, building trust with clients, partners, and our team. By upholding the highest ethical standards, we ensure that our relationships are strong, lasting, and built on mutual respect.
            </p>
        </div>
        
        <!-- Core Value 2 -->
        <div class="flex-1 bg-[#004890] p-4 md:p-6 rounded-lg shadow-md text-center space-y-12">
            <h3 class="uppercase font-extrabold text-white text-xl md:text-2xl lg:text-3xl">Innovation</h3>
            <p class="text-base md:text-lg lg:text-xl text-white secondaryfont leading-relaxed">We’re dedicated to understanding each client’s vision and goals, delivering impactful solutions that align with their needs. From concept to execution, we approach every project as a true partnership, blending client insights with our expertise in a collaborative, give-and-take process. Our clients' success is our success, and we’re here to achieve it together.
            </p>
        </div>
        
        <!-- Core Value 3 -->
        <div class="flex-1 bg-[#004890] p-4 md:p-6 rounded-lg shadow-md text-center space-y-12">
            <h3 class="uppercase font-extrabold text-white text-xl md:text-2xl lg:text-3xl">Customer Focus</h3>
            <p class="text-base md:text-lg lg:text-xl text-white secondaryfont leading-relaxed">At Dynamic Motion, we’re focused on delivering solutions that not only meet but exceed our clients’ expectations. Every project is approached with precision and a commitment to measurable impact, ensuring that each outcome aligns with our clients’ goals. Our dedication to quality and reliability makes us a trusted partner, delivering consistently excellent results that clients can count on.
            </p>
        </div>
    </div>
</section>
 <!-- tean section main end -->
   <!-- counter start -->
   <section class="py-10 lg:py-20 bg-[url('../img/counterbg.png')]" data-aos="fade-up" id="impactSection">
  <div class="flex flex-col items-center text-center" data-aos="fade-up">
    <h2 class="text-3xl md:text-4xl lg:text-5xl text-white mb-8 herofont uppercase font-extrabold">
      Our Impact in Numbers
    </h2>
    <div class="flex flex-wrap justify-center w-full">
      <!-- Counter 1 -->
      <div class="flex flex-col items-center text-center p-4 sm:p-6 md:p-8 lg:p-10 w-full sm:w-1/2 md:w-1/4" data-aos="fade-up">
        <span id="count1" class="text-7xl sm:text-4xl lg:text-6xl xl:text-9xl herofont uppercase font-extrabold text-white">0</span>
        <span class="text-xl sm:text-base lg:text-xl secondaryfont text-white uppercase">Years of Experience</span>
      </div>

      <!-- Counter 2 -->
      <div class="flex flex-col items-center text-center p-4 sm:p-6 md:p-8 lg:p-10 w-full sm:w-1/2 md:w-1/4" data-aos="fade-up">
        <span id="count2" class="text-7xl sm:text-4xl lg:text-6xl xl:text-9xl herofont uppercase font-extrabold text-white">0</span>
        <span class="text-xl sm:text-base lg:text-xl secondaryfont text-white uppercase">Successful Projects</span>
      </div>

      <!-- Counter 3 -->
      <div class="flex flex-col items-center text-center p-4 sm:p-6 md:p-8 lg:p-10 w-full sm:w-1/2 md:w-1/4" data-aos="fade-up">
        <span id="count3" class="text-7xl sm:text-4xl lg:text-6xl xl:text-9xl herofont uppercase font-extrabold text-white">0</span>
        <span class="text-xl sm:text-base lg:text-xl secondaryfont text-white uppercase" >Global Brands Served</span>
      </div>

      <!-- Counter 4 -->
      <div class="flex flex-col items-center text-center p-4 sm:p-6 md:p-8 lg:p-10 w-full sm:w-1/2 md:w-1/4" data-aos="fade-up">
        <span id="count4" class="text-7xl sm:text-4xl lg:text-6xl xl:text-9xl herofont uppercase font-extrabold text-white">0</span>
        <span class="text-xl sm:text-base lg:text-xl secondaryfont text-white uppercase">Client Retention Rates</span>
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
    { id: "count2", endValue: 1000, duration: 2000 },
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

   <?php
require_once('./inc/bottom.php');
?>