<?php
$webtitle='About';
require_once('./inc/top.php');
?>
<section class="space-y-10 mt-10">
    <!-- Row 1: Meet Our Team Heading -->
    <div class="flex flex-col items-center justify-center w-full">
    <h1
      class="herofont uppercase font-extrabold text-center text-[#004890] lg:text-6xl md:text-4xl text-3xl md:mx-4"
      data-aos="fade-up"
    >
      Meet our
      <span
        class="herofont uppercase font-extrabold text-center bg-[#004890] text-white px-2 py-1 rounded-lg"
      >
        Team
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
      At Dynamic Motion, we believe that great results come from working together.
      Our team is a collective of passionate professionals dedicated to bringing
      your vision to life. From concept development to full-scale execution, we
      ensure that every project benefits from our team's experience, creativity,
      and commitment to excellence.
    </p>
  </div>


</section>



<section class="lg:py-12 md:py-12 py-4 lg:px-12 md:px-12 px-1 bg-[#F5F8FB]">
  <!-- Row 3: Team Members and Center Content -->
  <div class="flex flex-col lg:flex-row justify-between items-center lg:items-start lg:space-x-8 space-y-8 lg:space-y-0">
    
    <!-- Center Heading and Paragraph (Move to Top on sm/md) -->
    <div class="w-full lg:w-1/3 order-1 lg:order-2 text-center px-4 lg:px-0 py-0 md:py-0 lg:py-20" data-aos="fade-up">
      <h1 class="text-3xl lg:text-4xl herofont uppercase font-extrabold text-[#004890] mb-4">
        Meet Our Team
      </h1>
      <p class="text-lg lg:text-xl text-[#444444] secondaryfont">
        We pride ourselves on a talented team that delivers top-notch services for our clients globally. Our team consists of experts in marketing, creativity, and innovation.
      </p>
    </div>

    <!-- Team Member 1 (Left) (Move to Bottom on sm/md) -->
    <div class="max-w-xs w-full lg:w-1/3 order-2 lg:order-1 text-center bg-white shadow-lg rounded-lg p-6 space-y-4 lg:mx-0 mb-8 lg:mb-0" data-aos="fade-up">
      <img class="rounded-lg" src="./assets/img/team1.png" alt="John Smith" />
      <h3 class="text-2xl herofont uppercase font-extrabold text-[#004890] mt-4">JOHN SMITH</h3>
      <p class="text-[#444444] secondaryfont">Chief Executive Officer</p>
      <p class="text-[#444444] secondaryfont">
        With over 25 years of experience in marketing and event production, John leads the Dynamic Motion team with a passion for innovation and a commitment to delivering top-tier solutions for clients worldwide.
      </p>
    </div>

    <!-- Team Member 2 (Right) (Move to Bottom on sm/md) -->
    <div class="max-w-xs w-full lg:w-1/3 order-3 text-center bg-white shadow-lg rounded-lg p-6 space-y-4 lg:mx-0" data-aos="fade-up">
      <img class="rounded-lg" src="./assets/img/team2.png" alt="Jane Doe" />
      <h3 class="text-2xl herofont uppercase font-extrabold text-[#004890] mt-4">JANE DOE</h3>
      <p class="text-[#444444] secondaryfont">Creative Director</p>
      <p class="text-[#444444] secondaryfont">
        A visionary in design, Jane transforms concepts into visually stunning experiences, ensuring every project maintains a high standard of creativity and cohesion.
      </p>
    </div>

  </div>
</section>


<section class="py-16 mx-[100px] flex flex-col items-center">
    <h2 class="uppercase font-extrabold text-[#004890] text-4xl md:text3xl lg:text-5xl text-center mb-8">Our Core Values</h2>
    <div class="flex flex-col md:flex-row justify-center gap-6 md:gap-8">
        <!-- Core Value 1 -->
        <div class="flex-1 bg-white p-4 md:p-6 rounded-lg shadow-md text-center space-y-12">
            <h3 class="uppercase font-extrabold text-[#004890] text-xl md:text-2xl lg:text-3xl">Integrity</h3>
            <p class="text-base md:text-lg lg:text-xl text-[#444444] secondaryfont leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam soluta totam vel at quibusdam quas reiciendis dolores, libero nam quae, nulla dicta ipsum incidunt. Doloremque nulla soluta alias! Soluta, optio.</p>
        </div>
        
        <!-- Core Value 2 -->
        <div class="flex-1 bg-white p-4 md:p-6 rounded-lg shadow-md text-center space-y-12">
            <h3 class="uppercase font-extrabold text-[#004890] text-xl md:text-2xl lg:text-3xl">Innovation</h3>
            <p class="text-base md:text-lg lg:text-xl text-[#444444] secondaryfont leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam soluta totam vel at quibusdam quas reiciendis dolores, libero nam quae, nulla dicta ipsum incidunt. Doloremque nulla soluta alias! Soluta, optio.</p>
        </div>
        
        <!-- Core Value 3 -->
        <div class="flex-1 bg-white p-4 md:p-6 rounded-lg shadow-md text-center space-y-12">
            <h3 class="uppercase font-extrabold text-[#004890] text-xl md:text-2xl lg:text-3xl">Customer Focus</h3>
            <p class="text-base md:text-lg lg:text-xl text-[#444444] secondaryfont leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam soluta totam vel at quibusdam quas reiciendis dolores, libero nam quae, nulla dicta ipsum incidunt. Doloremque nulla soluta alias! Soluta, optio.</p>
        </div>
    </div>
</section>
 <!-- tean section main end -->
   <!-- counter start -->
   <section class="py-10 lg:py-20 bg-[#004890]" data-aos="fade-up" id="impactSection">
  <div class="flex flex-col items-center text-center" data-aos="fade-up">
    <h2 class="text-3xl md:text-4xl lg:text-5xl text-white mb-8 herofont uppercase font-extrabold">
      Our Impact in Numbers
    </h2>
    <div class="flex flex-wrap justify-center w-full">
      <!-- Counter 1 -->
      <div class="flex flex-col items-center text-center p-4 sm:p-6 md:p-8 lg:p-10 w-full sm:w-1/2 md:w-1/4" data-aos="fade-up">
        <span id="count1" class="text-7xl sm:text-8xl md:text-9xl herofont uppercase font-extrabold text-white">0</span>
        <span class="text-lg sm:text-xl secondaryfont text-white">Years of Experience</span>
      </div>

      <!-- Counter 2 -->
      <div class="flex flex-col items-center text-center p-4 sm:p-6 md:p-8 lg:p-10 w-full sm:w-1/2 md:w-1/4" data-aos="fade-up">
        <span id="count2" class="text-7xl sm:text-8xl md:text-9xl herofont uppercase font-extrabold text-white">0</span>
        <span class="text-lg sm:text-xl secondaryfont text-white">Successful Projects</span>
      </div>

      <!-- Counter 3 -->
      <div class="flex flex-col items-center text-center p-4 sm:p-6 md:p-8 lg:p-10 w-full sm:w-1/2 md:w-1/4" data-aos="fade-up">
        <span id="count3" class="text-7xl sm:text-8xl md:text-9xl herofont uppercase font-extrabold text-white">0</span>
        <span class="text-lg sm:text-xl secondaryfont text-white">Global Brands Served</span>
      </div>

      <!-- Counter 4 -->
      <div class="flex flex-col items-center text-center p-4 sm:p-6 md:p-8 lg:p-10 w-full sm:w-1/2 md:w-1/4" data-aos="fade-up">
        <span id="count4" class="text-7xl sm:text-8xl md:text-9xl herofont uppercase font-extrabold text-white">0</span>
        <span class="text-lg sm:text-xl secondaryfont text-white">Client Retention Rate</span>
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

 
<!-- Image Cards Section -->
<section class="lg:py-12 md:py-12 py-4 lg:px-12 md:px-12 px-1 space-y-9">
  <!-- Row 1: Meet Our Team Heading -->
  <div class="flex flex-col items-center justify-center w-full">
    <h1
      class="herofont uppercase font-extrabold text-center text-[#004890] lg:text-6xl md:text-4xl text-3xl md:mx-4"
      data-aos="fade-up"
    >
      Our Core
      <span
        class="herofont uppercase font-extrabold text-center bg-[#004890] text-white px-2 py-1 rounded-lg"
      >
        Team
      </span>
    </h1>
  </div>
  
  <div class="flex flex-wrap justify-center ">
    <!-- Card Template -->
    <div class="max-w-xs mx-4 mb-8 group w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
      <div class="relative overflow-hidden rounded-lg shadow-lg">
        <img class="w-full h-96 object-cover" src="./assets/img/t1.png" alt="Team Member 7" />
        <div class="absolute inset-0 bg-[#004890] bg-opacity-50 flex items-end justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
          <div class="text-white text-center p-4">
            <h3 class="text-lg font-semibold">James Brown</h3>
            <p class="text-sm">Data Analyst</p>
          </div>
        </div>
      </div>
    </div>

    <div class="max-w-xs mx-4 mb-8 group w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
      <div class="relative overflow-hidden rounded-lg shadow-lg">
        <img class="w-full h-96 object-cover" src="./assets/img/t2.png" alt="Team Member 2" />
        <div class="absolute inset-0 bg-[#004890] bg-opacity-50 flex items-end justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
          <div class="text-white text-center p-4">
            <h3 class="text-lg font-semibold">Sarah Johnson</h3>
            <p class="text-sm">Creative Director</p>
          </div>
        </div>
      </div>
    </div>

    <div class="max-w-xs mx-4 mb-8 group w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
      <div class="relative overflow-hidden rounded-lg shadow-lg">
        <img class="w-full h-96 object-cover" src="./assets/img/t3.png" alt="Team Member 3" />
        <div class="absolute inset-0 bg-[#004890] bg-opacity-50 flex items-end justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
          <div class="text-white text-center p-4">
            <h3 class="text-lg font-semibold">Michael Smith</h3>
            <p class="text-sm">Marketing Manager</p>
          </div>
        </div>
      </div>
    </div>

    <div class="max-w-xs mx-4 mb-8 group w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
      <div class="relative overflow-hidden rounded-lg shadow-lg">
        <img class="w-full h-96 object-cover" src="./assets/img/t4.png" alt="Team Member 4" />
        <div class="absolute inset-0 bg-[#004890] bg-opacity-50 flex items-end justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
          <div class="text-white text-center p-4">
            <h3 class="text-lg font-semibold">Linda Green</h3>
            <p class="text-sm">Project Coordinator</p>
          </div>
        </div>
      </div>
    </div>

    <div class="max-w-xs mx-4 mb-8 group w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
      <div class="relative overflow-hidden rounded-lg shadow-lg">
        <img class="w-full h-96 object-cover" src="./assets/img/t5.png" alt="Team Member 5" />
        <div class="absolute inset-0 bg-[#004890] bg-opacity-50 flex items-end justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
          <div class="text-white text-center p-4">
            <h3 class="text-lg font-semibold">Chris Lee</h3>
            <p class="text-sm">Lead Developer</p>
          </div>
        </div>
      </div>
    </div>

    <div class="max-w-xs mx-4 mb-8 group w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
      <div class="relative overflow-hidden rounded-lg shadow-lg">
        <img class="w-full h-96 object-cover" src="./assets/img/t6.png" alt="Team Member 6" />
        <div class="absolute inset-0 bg-[#004890] bg-opacity-50 flex items-end justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
          <div class="text-white text-center p-4">
            <h3 class="text-lg font-semibold">Emma Wilson</h3>
            <p class="text-sm">UX/UI Designer</p>
          </div>
        </div>
      </div>
    </div>

    <div class="max-w-xs mx-4 mb-8 group w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
      <div class="relative overflow-hidden rounded-lg shadow-lg">
        <img class="w-full h-96 object-cover" src="./assets/img/t7.png" alt="Team Member 7" />
        <div class="absolute inset-0 bg-[#004890] bg-opacity-50 flex items-end justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
          <div class="text-white text-center p-4">
            <h3 class="text-lg font-semibold">James Brown</h3>
            <p class="text-sm">Data Analyst</p>
          </div>
        </div>
      </div>
    </div>

    <div class="max-w-xs mx-4 mb-8 group w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
      <div class="relative overflow-hidden rounded-lg shadow-lg">
        <img class="w-full h-96 object-cover" src="./assets/img/t8.png" alt="Team Member 8" />
        <div class="absolute inset-0 bg-[#004890] bg-opacity-50 flex items-end justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
          <div class="text-white text-center p-4">
            <h3 class="text-lg font-semibold">Sophia Taylor</h3>
            <p class="text-sm">Content Strategist</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


    <!-- mission section start -->
    <section
      class="lg:py-12 md:py-12 py-4 lg:px-12 md:px-12 px-1 bg-[#F5F8FB]"
      
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
            We are passionate, inspired, and driven 24/7 to conceptualize,
            create, and deliver world-class brand events and marketing
            campaigns. Our focus is on adding tangible value to our clients'
            commercial propositions, catalyzing business potential, enhancing
            brand awareness, and enriching their reputation.
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
            We continuously challenge ourselves to innovate and excite global
            audiences with engaging, purposeful content. As the go-to
            destination service for our ever-expanding international client
            portfolio, we work tirelessly to secure our position as an agile
            market leader in a transformative global economy.
          </p>
        </div>
      </div>
    </section>

    <!-- mission section end -->
<?php
require_once('./inc/bottom.php');
?>