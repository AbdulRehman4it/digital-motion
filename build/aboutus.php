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
    Dynamic Motion was founded in 2000 as a vision shared between Dubai and Lebanon, driven by a passion for creativity and excellence. We began with small projects—creating custom gift items, POSM displays, and brand-focused stands for companies looking to make an impact. Our commitment to quality and innovation quickly attracted attention, enabling us to expand into large-scale events, immersive brand experiences, and more.
Today, with over two decades of experience, Dynamic Motion has grown to include three additional countries and a team of over 200 talented professionals. Our production hubs and offices in the UAE, KSA, Egypt, and China empower us to collaborate with world-leading brands across various industries. Whether it’s a high-impact retail activation, a striking POSM setup, or an innovative event production, every project we undertake aims to create engaging, memorable experiences that resonate with audiences.
As we continue to evolve, Dynamic Motion remains committed to growth, creativity, and collaboration—ensuring that each project is a fresh, standout experience that connects our clients with their target audience in meaningful ways.

    </p>
  </div>


</section>



<section class="lg:py-12 md:py-12 py-4 lg:px-12 md:px-12 px-1 bg-[#F5F8FB]">
  <!-- Row 3: Team Members and Center Content -->
  <div class="flex flex-col lg:flex-row justify-center items-center lg:items-start lg:space-x-8 space-y-8 lg:space-y-0 gap-x-40">
    
    <!-- Center Heading and Paragraph (Move to Top on sm/md) -->
    <div class="w-full lg:w-1/2 order-1 lg:order-2 text-center px-4 lg:px-0 py-0 md:py-0 lg:py-20" data-aos="fade-up">
      <h1 class="text-3xl lg:text-4xl herofont uppercase font-extrabold text-[#004890] mb-4">
        Meet Our Team
      </h1>
      <p class="text-lg lg:text-xl text-[#444444] secondaryfont">
        We pride ourselves on a talented team that delivers top-notch services for our clients globally. Our team consists of experts in marketing, creativity, and innovation.
      </p>
    </div>

    <!-- Team Member 1 (Left) (Move to Bottom on sm/md) -->
    <div class="max-w-xs w-full lg:w-1/2 order-2 lg:order-1 text-center bg-white shadow-lg rounded-lg p-6 space-y-4 lg:mx-0 mb-8 lg:mb-0" data-aos="fade-up">
      <img class="rounded-lg" src="./assets/img/team1.png" alt="John Smith" />
      <h3 class="text-2xl herofont uppercase font-extrabold text-[#004890] mt-4">ELIE ABOURIZK</h3>
      <p class="text-[#444444] secondaryfont">CEO</p>
      <p class="text-[#444444] secondaryfont">
      With over 25 years of experience, Elie leads Dynamic Motion with a hands-on, team-driven approach. As a true team player, he brings a passion for creativity and a love for challenges, inspiring those around him to push boundaries and deliver top-tier solutions. Elie’s commitment to excellence and his vision for innovative, impactful experiences have made Dynamic Motion a trusted partner for clients worldwide.

      </p>
    </div>

    <!-- Team Member 2 (Right) (Move to Bottom on sm/md) -->
    <!-- <div class="max-w-xs w-full lg:w-1/3 order-3 text-center bg-white shadow-lg rounded-lg p-6 space-y-4 lg:mx-0" data-aos="fade-up">
      <img class="rounded-lg" src="./assets/img/team2.png" alt="Jane Doe" />
      <h3 class="text-2xl herofont uppercase font-extrabold text-[#004890] mt-4">JANE DOE</h3>
      <p class="text-[#444444] secondaryfont">Creative Director</p>
      <p class="text-[#444444] secondaryfont">
        A visionary in design, Jane transforms concepts into visually stunning experiences, ensuring every project maintains a high standard of creativity and cohesion.
      </p>
    </div> -->

  </div>
</section>

 
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


   <?php
require_once('./inc/bottom.php');
?>