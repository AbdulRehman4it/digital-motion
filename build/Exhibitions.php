<?php
$webtitle='Services || Exhibitions
';
require_once('./inc/top.php');
?>
<!-- Preloader -->
<div id="preloader" class="fixed inset-0 bg-white flex justify-center items-center z-50">
    <img src="./assets/img/video.gif" alt="Loading..." class="w-16 h-16">
</div>
<section class="hidden sm:block w-full px-6 md:px-12 lg:px-24 pt-12">
  <div class="flex w-full">
    <!-- Left 50% Div -->
    <div class="w-1/2 flex justify-center items-center">
    <h1 class="uppercase font-extrabold text-[#004890] lg:text-6xl md:text-4xl text-2xl text-left">
 What we do
  </h1>
    </div>
    
    <!-- Right 50% Div -->
    <div class="w-1/2 flex justify-center items-center">
    <h1 class="uppercase font-extrabold text-[#004890] lg:text-6xl md:text-4xl text-2xl text-left">
 Our Projects
  </h1>
    </div>
  </div>
</section>

    <!-- Hero Section Start -->
    <section class="flex flex-wrap justify-between items-center py-6 md:py-12 lg:py-24 h-auto  px-6 lg:px-[100px]" data-aos="flip-left">
      <!-- Left Column (Heading and Paragraphs) -->
      <div class="w-full md:w-1/2 space-y-6 lg:space-y-10 md:space-y-10 lg:p-6 md:p-4 p-0">
        <!-- Heading -->
        <div class="flex items-center justify-between">
  <h1 class="uppercase font-extrabold text-[#004890] lg:text-6xl md:text-4xl text-2xl text-left">
  Exhibitions
  </h1>
  <img
    src="./assets/img/heroleft.png"
    alt="Left Image"
    class="hidden md:block rotating-image w-16 h-16 md:w-20 md:h-20 lg:w-24 lg:h-24 lg:mt-6 object-cover"
  />
</div>


        <!-- Paragraph 1 -->
        <p class="text-left text-lg md:text-xl lg:text-2xl text-[#444444] secondaryfont leading-relaxed">
        Dynamic Motion brings brands to life through captivating exhibition setups that make a memorable impact. Our services cover every stage, from creative concept development and design to construction and on-site management, delivering an effortless experience for both clients and attendees. Whether for trade shows, industry expos, or brand showcases, each exhibition is tailored to express the brand’s identity and engage audiences meaningfully. With expertise in interactive and visually engaging spaces, we help our clients attract attention, foster connections, and leave lasting impressions.

        </p>

      
      </div>

<!-- Right Column (3x3 Flexbox of Images) -->
<div class="w-full md:w-1/2 flex flex-col gap-4 ">
  <!-- Row 1 -->
  <div class="flex gap-4">
    <div class="w-[40%] h-[40%]">
      <img src="./assets/img/POSM1.jpg" alt="Image 1" class="w-[200px] h-[200px] object-cover" />
    </div>
    <div class="w-[40%] h-[40%]">
      <img src="./assets/img/POSM2.jpg" alt="Image 2" class="w-[200px] h-[200px] object-cover" />
    </div>
    <div class="w-[40%] h-[40%]">
      <img src="./assets/img/POSM3.jpg" alt="Image 3" class="w-[200px] h-[200px] object-cover" />
    </div>
  </div>

  <!-- Row 2 -->
  <div class="flex gap-4">
    <div class="w-[40%] h-[40%]">
      <img src="./assets/img/POSM4.jpg" alt="Image 4" class="w-[200px] h-[200px] object-cover"/>
    </div>
    <div class="w-[40%] h-[40%]">
      <img src="./assets/img/POSM5.jpg" alt="Image 5" class="w-[200px] h-[200px] object-cover"/>
    </div>
    <div class="w-[40%] h-[40%]">
      <img src="./assets/img/POSM6.jpg" alt="Image 6" class="w-[200px] h-[200px] object-cover"/>
    </div>
  </div>

  <!-- Row 3 -->
  <div class="flex gap-4">
    <div class="w-[40%] h-[40%]">
      <img src="./assets/img/POSM7.jpg" alt="Image 7" class="w-[200px] h-[200px] object-cover" />
    </div>
    <div class="w-[40%] h-[40%]">
      <img src="./assets/img/POSM8.jpg" alt="Image 8" class="w-[200px] h-[200px] object-cover" />
    </div>
    <div class="w-[40%] h-[40%]">
      <img src="./assets/img/POSM9.png" alt="Image 9" class="w-[200px] h-[200px] object-cover" />
    </div>
  </div>
</div>

    
    </section>
    <!-- Hero Section End -->

    <?php
require_once('./inc/bottom.php');
?>