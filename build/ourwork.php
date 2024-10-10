<?php
$webtitle='Our Work';
require_once('./inc/top.php');
?>

<!-- Client Section Start -->
<section class="py-12 px-12">
  <!-- Row 1 -->
  <div class="flex flex-col items-center md:flex-row md:space-x-8 justify-between">
    <!-- Left Image -->
    <div class="mb-4 md:mb-0 hidden sm:block image-container" data-aos="flip-left">
      <img src="./assets/img/accedit1.png" alt="Left Image" class="rotating-image w-16 h-16 md:w-20 md:h-20 lg:w-24 lg:h-24 lg:mt-6 object-cover" />
    </div>

    <!-- Center Heading -->
    <h1 class="herofont uppercase font-extrabold text-center text-[#004890] lg:text-6xl md:text-4xl text-2xl md:mx-4" data-aos="fade-up">
      Our Previous Projects
    </h1>

    <!-- Right Image -->
    <div class="mt-4 md:mt-0 hidden sm:block image-container" data-aos="flip-right">
      <img src="./assets/img/accedit2.png" alt="Right Image" class="rotating-image w-16 h-16 md:w-20 md:h-20 lg:w-24 lg:h-24 object-cover" />
    </div>
  </div>

  <!-- Gallery Section -->
  <div class="my-12">
    <div class="flex justify-center">
      <div class="tabs flex space-x-4 mb-4">
        <button class="tab active" data-target="gallery1">Project Alpha</button>
        <button class="tab" data-target="gallery2">Project Beta</button>
        <button class="tab" data-target="gallery3">Project Gamma</button>
        <button class="tab" data-target="gallery4">Project Delta</button>
      </div>
    </div>

    <!-- Image Galleries -->
    <div class="gallery" id="gallery1">
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <img src="./assets/img/p1.png" alt="Project Alpha Image 1" class="w-full h-auto object-cover rounded-md shadow-lg" />
        <img src="./assets/img/p2.png" alt="Project Alpha Image 2" class="w-full h-auto object-cover rounded-md shadow-lg" />
        <img src="./assets/img/p3.png" alt="Project Alpha Image 3" class="w-full h-auto object-cover rounded-md shadow-lg" />
        <img src="./assets/img/p4.png" alt="Project Alpha Image 4" class="w-full h-auto object-cover rounded-md shadow-lg" />
        <img src="./assets/img/p1.png" alt="Project Alpha Image 1" class="w-full h-auto object-cover rounded-md shadow-lg" />
        <img src="./assets/img/p2.png" alt="Project Alpha Image 2" class="w-full h-auto object-cover rounded-md shadow-lg" />
        <img src="./assets/img/p3.png" alt="Project Alpha Image 3" class="w-full h-auto object-cover rounded-md shadow-lg" />
        <img src="./assets/img/p4.png" alt="Project Alpha Image 4" class="w-full h-auto object-cover rounded-md shadow-lg" />
      </div>
    </div>

    <div class="gallery hidden" id="gallery2">
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <img src="https://via.placeholder.com/150" alt="Project Beta Image 1" class="w-full h-auto object-cover rounded-md shadow-lg" />
        <img src="./assets/img/p1.png" alt="Project Alpha Image 1" class="w-full h-auto object-cover rounded-md shadow-lg" />
        <img src="./assets/img/p2.png" alt="Project Alpha Image 2" class="w-full h-auto object-cover rounded-md shadow-lg" />
        <img src="./assets/img/p3.png" alt="Project Alpha Image 3" class="w-full h-auto object-cover rounded-md shadow-lg" />
        <img src="./assets/img/p4.png" alt="Project Alpha Image 4" class="w-full h-auto object-cover rounded-md shadow-lg" />
        <img src="./assets/img/p1.png" alt="Project Alpha Image 1" class="w-full h-auto object-cover rounded-md shadow-lg" />
        <img src="./assets/img/p2.png" alt="Project Alpha Image 2" class="w-full h-auto object-cover rounded-md shadow-lg" />
        <img src="./assets/img/p3.png" alt="Project Alpha Image 3" class="w-full h-auto object-cover rounded-md shadow-lg" />
        <img src="./assets/img/p4.png" alt="Project Alpha Image 4" class="w-full h-auto object-cover rounded-md shadow-lg" />
        <img src="https://via.placeholder.com/150" alt="Project Beta Image 4" class="w-full h-auto object-cover rounded-md shadow-lg" />
      </div>
    </div>

    <div class="gallery hidden" id="gallery3">
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <img src="./assets/img/p1.png" alt="Project Alpha Image 1" class="w-full h-auto object-cover rounded-md shadow-lg" />
        <img src="./assets/img/p2.png" alt="Project Alpha Image 2" class="w-full h-auto object-cover rounded-md shadow-lg" />
        <img src="./assets/img/p3.png" alt="Project Alpha Image 3" class="w-full h-auto object-cover rounded-md shadow-lg" />
        <img src="./assets/img/p3.png" alt="Project Alpha Image 3" class="w-full h-auto object-cover rounded-md shadow-lg" />
        <img src="./assets/img/p4.png" alt="Project Alpha Image 4" class="w-full h-auto object-cover rounded-md shadow-lg" />
      </div>
    </div>

    <div class="gallery hidden" id="gallery4">
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
      <img src="./assets/img/p3.png" alt="Project Alpha Image 3" class="w-full h-auto object-cover rounded-md shadow-lg" />
        <img src="./assets/img/p4.png" alt="Project Alpha Image 4" class="w-full h-auto object-cover rounded-md shadow-lg" />
        <img src="./assets/img/p1.png" alt="Project Alpha Image 1" class="w-full h-auto object-cover rounded-md shadow-lg" />
        <img src="./assets/img/p2.png" alt="Project Alpha Image 2" class="w-full h-auto object-cover rounded-md shadow-lg" />
        <img src="https://via.placeholder.com/150" alt="Project Delta Image 4" class="w-full h-auto object-cover rounded-md shadow-lg" />
      </div>
    </div>
  </div>
</section>

<?php
require_once('./inc/bottom.php');
?>

<script>
  // JavaScript for tab functionality
  const tabs = document.querySelectorAll('.tab');
  const galleries = document.querySelectorAll('.gallery');

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      const target = tab.getAttribute('data-target');

      // Hide all galleries
      galleries.forEach(gallery => {
        gallery.classList.add('hidden');
      });

      // Show the targeted gallery
      document.getElementById(target).classList.remove('hidden');

      // Remove active class from all tabs and add to the clicked tab
      tabs.forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
    });
  });
</script>
