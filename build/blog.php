<?php
$webtitle='Blogs';
require_once('./inc/top.php');

// Assume you already have a PDO connection established as $pdo

// Fetch the most recent blogs
$query = "SELECT `id`, `image`, `first_title`, `second_title`, `author` FROM `blogs` ORDER BY `date` DESC LIMIT 6";
$stmt = $conn->prepare($query);
$stmt->execute();
$recent_blogs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!-- Slider Section -->
<section class="py-12 px-12">
  <div class="flex flex-col items-center md:flex-row md:space-x-8 justify-between">
    <!-- Left Image -->
    <div class="mb-4 md:mb-0 hidden sm:block image-container" data-aos="flip-left">
      <img src="./assets/img/shape3.png" alt="Left Image" class="rotating-image w-16 h-16 md:w-20 md:h-20 lg:w-24 lg:h-24 lg:mt-6 object-cover" />
    </div>

    <!-- Center Heading -->
    <h1 class="herofont uppercase font-extrabold text-center text-[#004890] lg:text-6xl md:text-4xl text-2xl md:mx-4 px-2 py-1 leading-tight" data-aos="fade-up">
      Trends & Tips for
      <br class="hidden sm:block" />
      <span class="typewriter lg:text-6xl md:text-4xl text-2xl herofont uppercase font-extrabold text-center bg-[#004890] text-white px-2 py-1 rounded-lg block mt-2">Success</span>
    </h1>

    <!-- Right Image -->
    <div class="mt-4 md:mt-0 hidden sm:block image-container" data-aos="flip-right">
      <img src="./assets/img/shape4.png" alt="Right Image" class="rotating-image w-16 h-16 md:w-20 md:h-20 lg:w-24 lg:h-24 object-cover" />
    </div>
  </div>

  <!-- Row 2 -->
  <div class="my-12 text-center">
    <p class="text-lg md:text-xl lg:text-2xl leading-relaxed text-[#444444] secondaryfont" data-aos="fade-up">
      Stay updated with the latest trends, tips, and stories in marketing, design, and event production. Explore our expert insights to help your brand thrive.
    </p>
  </div>

  <div class="swiper-container overflow-hidden h-auto py-28">
  <div class="swiper-wrapper flex items-center h-full">
    <?php foreach ($recent_blogs as $blog): ?>
      <div class="swiper-slide">
        <a href="singleblog.php?id=<?= $blog['id']; ?>&title=<?= urlencode($blog['first_title']); ?>" class="relative overflow-hidden rounded-lg shadow-lg h-full flex flex-col">
          <img class="w-full h-full object-cover" src="<?= $blog['image']; ?>" alt="<?= htmlspecialchars($blog['first_title']); ?>" />
          <div class="absolute inset-0 bg-[#004890] bg-opacity-50 flex items-end justify-center opacity-0 hover:opacity-100 transition-opacity duration-300">
            <div class="text-white text-center p-4">
              <h3 class="text-lg font-semibold"><?= htmlspecialchars($blog['first_title']); ?></h3>
              <p class="text-sm"><?= htmlspecialchars($blog['author']); ?></p>
            </div>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</div>

</section>

<?php

// Get category name from URL
$category_name = isset($_GET['name']) ? $_GET['name'] : '';

// Prepare and execute the SQL statement
$stmt = $conn->prepare("SELECT `id`, `image`, `first_title`, `blog_data`, `date` FROM `blogs` WHERE `categories` = :category_name");
$stmt->bindParam(':category_name', $category_name);
$stmt->execute();

// Fetch all blogs in the specified category
$blogs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<section class="py-12 px-12">
    <div class="relative w-full max-w-full mb-8">
        <input 
            type="text" 
            id="search-input" 
            placeholder="Search..." 
            class="w-full p-4 pl-12 border border-gray-300 rounded-lg shadow-lg focus:outline-none focus:ring-2 focus:ring-[#004890]"
            oninput="searchBlogs()"
        >
        <img src="./assets/img/serach.png" alt="Search" class="absolute top-1/2 left-3 transform -translate-y-1/2 h-6 w-6">
    </div>

    <!-- Cards Section -->
    <div id="blog-cards" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- Blog Cards will be injected here dynamically -->
    </div>
    <div id="pagination" class="flex justify-center items-center my-8">
    <button id="prev-btn" class="px-4 py-2 bg-[#004890] text-white rounded-lg disabled:opacity-50" onclick="changePage(-1)">Previous</button>
    <span class="mx-4" id="current-page">1</span>
    <button id="next-btn" class="px-4 py-2 bg-[#004890] text-white rounded-lg" onclick="changePage(1)">Next</button>
</div>
</section>

<script>
    const blogs = <?php echo json_encode($blogs); ?>; // Passing PHP blogs data to JavaScript
    const blogsPerPage = 8; // Number of blogs to display per page
    let currentPage = 1; // Current page
    let filteredBlogs = blogs; // Blogs to display (default is all blogs)

    function displayBlogs(blogsToDisplay) {
        const blogCardsContainer = document.getElementById('blog-cards');
        blogCardsContainer.innerHTML = ''; // Clear existing cards

        // Calculate start and end indices for pagination
        const startIndex = (currentPage - 1) * blogsPerPage;
        const endIndex = startIndex + blogsPerPage;
        const blogsToShow = blogsToDisplay.slice(startIndex, endIndex); // Get blogs for the current page

        blogsToShow.forEach(blog => {
            const card = `
            
                <div class="bg-[#F5F8FB] rounded-lg shadow-lg overflow-hidden flex flex-col">
                    <img src="${blog.image}" alt="Card ${blog.id}" class="h-40 sm:h-48 md:h-56 lg:h-64 w-full object-cover">
                    <div class="p-4 flex-grow flex flex-col space-y-4">
                       <a href="singleblog.php?id=${blog.id}&title=${encodeURIComponent(blog.first_title)}" class=""> <h3 class="text-lg herofont uppercase font-extrabold text-center text-[#004890]">${blog.first_title}</h3></a>
                        <p class="text-center text-[#444444] secondaryfont">${blog.blog_data}</p>
                        <span class="mt-auto text-right text-sm text-gray-500">Date: ${blog.date}</span>
                    </div>
                </div>
            `;
            blogCardsContainer.innerHTML += card; // Append new card
        });

        updatePaginationControls(blogsToDisplay.length); // Update pagination controls
    }

    function updatePaginationControls(totalBlogs) {
        const totalPages = Math.ceil(totalBlogs / blogsPerPage);
        document.getElementById('current-page').innerText = `${currentPage}`;
        document.getElementById('prev-btn').disabled = currentPage === 1; // Disable previous button on first page
        document.getElementById('next-btn').disabled = currentPage === totalPages; // Disable next button on last page
    }

    function searchBlogs() {
        const searchTerm = document.getElementById('search-input').value.toLowerCase();
        filteredBlogs = blogs.filter(blog => blog.first_title.toLowerCase().includes(searchTerm));
        currentPage = 1; // Reset to first page on search
        displayBlogs(filteredBlogs); // Display filtered blogs
    }

    function changePage(direction) {
        currentPage += direction; // Update current page
        displayBlogs(filteredBlogs); // Re-display blogs
    }

    // Display all blogs on page load
    displayBlogs(blogs);
</script>









<!-- <section class="py-12 px-12">
  <div class="relative w-full max-w-full mb-8">
 
    <input type="text" placeholder="Search..." class="w-full p-4 pl-12 border border-gray-300 rounded-lg shadow-lg focus:outline-none focus:ring-2 focus:ring-[#004890]">
    
    <img src="./assets/img/serach.png" alt="Search" class="absolute top-1/2 left-3 transform -translate-y-1/2 h-6 w-6">
  </div>


  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
   
    <div class="bg-[#F5F8FB] rounded-lg shadow-lg overflow-hidden flex flex-col">
      <img src="./assets/img/b1.png" alt="Card 1" class="h-40 sm:h-48 md:h-56 lg:h-64 w-full object-cover">
      <div class="p-4 flex-grow flex flex-col space-y-4">
        <h3 class="text-lg herofont uppercase font-extrabold text-center text-[#004890]">Elevating Brands Through Immersive Events</h3>
        <p class="text-center text-[#444444] secondaryfont">Our custom events engage audiences and boost brand success globally.</p>
        <span class="mt-auto text-right text-sm text-gray-500">Date: 2024-10-05</span>
      </div>
    </div>

   
    <div class="bg-[#F5F8FB] rounded-lg shadow-lg overflow-hidden flex flex-col">
      <img src="./assets/img/b2.png" alt="Card 2" class="h-40 sm:h-48 md:h-56 lg:h-64 w-full object-cover">
      <div class="p-4 flex-grow flex flex-col space-y-4">
        <h3 class="text-lg herofont uppercase font-extrabold text-center text-[#004890]">Elevating Brands Through Immersive Events</h3>
        <p class="text-center text-[#444444] secondaryfont">Our custom events engage audiences and boost brand success globally.</p>
        <span class="mt-auto text-right text-sm text-gray-500">Date: 2024-10-05</span>
      </div>
    </div>

   
    <div class="bg-[#F5F8FB] rounded-lg shadow-lg overflow-hidden flex flex-col">
      <img src="./assets/img/b3.png" alt="Card 3" class="h-40 sm:h-48 md:h-56 lg:h-64 w-full object-cover">
      <div class="p-4 flex-grow flex flex-col space-y-4">
        <h3 class="text-lg herofont uppercase font-extrabold text-center text-[#004890]">Elevating Brands Through Immersive Events</h3>
        <p class="text-center text-[#444444] secondaryfont">Our custom events engage audiences and boost brand success globally.</p>
        <span class="mt-auto text-right text-sm text-gray-500">Date: 2024-10-05</span>
      </div>
    </div>

   
    <div class="bg-[#F5F8FB] rounded-lg shadow-lg overflow-hidden flex flex-col">
      <img src="./assets/img/b4.png" alt="Card 4" class="h-40 sm:h-48 md:h-56 lg:h-64 w-full object-cover">
      <div class="p-4 flex-grow flex flex-col space-y-4">
        <h3 class="text-lg herofont uppercase font-extrabold text-center text-[#004890]">Elevating Brands Through Immersive Events</h3>
        <p class="text-center text-[#444444] secondaryfont">Our custom events engage audiences and boost brand success globally.</p>
        <span class="mt-auto text-right text-sm text-gray-500">Date: 2024-10-05</span>
      </div>
    </div>

  
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
</section> -->







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
