<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $webtitle;?></title>
    <link rel="stylesheet" href="./assets/css/output.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  </head>
  <body class="overflow-x-hidden">
    <!-- navbar start -->
    <nav class="shadow-lg bg-[#004890] py-6 md:py-4 px-12">
      <div class="max-w-full">
        <div class="flex justify-between items-center h-16">
          <!-- Logo and Navigation -->
          <div class="flex items-center space-x-6 md:space-x-4">
            <!-- Logo -->
            <div class="flex-shrink-0 md:w-[120px] lg:w-[120px]">
              <a href="#">
                <img
                  src="./assets/img/logo.png"
                  alt="Company Logo"
                  class="md:h-10 h-12 w-auto"
                />
              </a>
            </div>
            <!-- Navigation Links -->
            <div>
              <ul class="hidden md:flex space-x-6 md:space-x-4 items-center">
                <li class="relative group">
                  <a
                    href="index.php"
                    class="secondaryfont text-white font-semibold text-xs md:text-xs lg:text-xl uppercase"
                    >Home</a
                  >
                  <span
                    class="block h-[2px] bg-white absolute bottom-0 left-0 w-0 group-hover:w-full transition-all duration-300 ease-in-out"
                  ></span>
                </li>
                <li class="relative group">
                  <a
                    href="about.php"
                    class="secondaryfont text-white font-semibold text-xs md:text-xs lg:text-xl uppercase"
                    >About</a
                  >
                  <span
                    class="block h-[2px] bg-white absolute bottom-0 left-0 w-0 group-hover:w-full transition-all duration-300 ease-in-out"
                  ></span>
                </li>
                <li class="relative group">
                  <a
                    href="service.php"
                    class="secondaryfont text-white font-semibold text-xs md:text-xs lg:text-xl uppercase"
                    >Services</a
                  >
                  <span
                    class="block h-[2px] bg-white absolute bottom-0 left-0 w-0 group-hover:w-full transition-all duration-300 ease-in-out"
                  ></span>
                </li>
                <li class="relative group">
                  <a
                    href="acceeditations.php"
                    class="secondaryfont text-white font-semibold text-xs md:text-xs lg:text-xl uppercase"
                    >Work</a
                  >
                  <span
                    class="block h-[2px] bg-white absolute bottom-0 left-0 w-0 group-hover:w-full transition-all duration-300 ease-in-out"
                  ></span>
                </li>
                <li class="relative group">
                  <a
                    href="blog.php"
                    class="secondaryfont text-white font-semibold text-xs md:text-xs lg:text-xl uppercase"
                    >Blog</a
                  >
                  <span
                    class="block h-[2px] bg-white absolute bottom-0 left-0 w-0 group-hover:w-full transition-all duration-300 ease-in-out"
                  ></span>
                </li>
                <li class="relative group">
                  <a
                    href="contact.php"
                    class="secondaryfont text-white font-semibold text-xs md:text-xs lg:text-xl uppercase"
                    >Contact</a
                  >
                  <span
                    class="block h-[2px] bg-white absolute bottom-0 left-0 w-0 group-hover:w-full transition-all duration-300 ease-in-out"
                  ></span>
                </li>
              </ul>
            </div>
          </div>

          <!-- Buttons and Social Icons -->
          <div class="lg:flex items-center space-x-4 md:flex hidden">
            <a href="#" class="hover:text-gray-400 md:w-4 lg:w-6">
              <img
                src="./assets/img/facebook.png"
                alt="Facebook Icon"
                class="md:w-5 w-8"
              />
            </a>
            <a href="#" class="hover:text-gray-400 md:w-4 lg:w-6">
              <img
                src="./assets/img/insta.png"
                alt="Instagram Icon"
                class="md:w-5 w-8"
              />
            </a>
            <a href="#" class="hover:text-gray-400 md:w-4 lg:w-6">
              <img
                src="./assets/img/link.png"
                alt="LinkedIn Icon"
                class="md:w-5 w-8"
              />
            </a>
            <button
              class="bg-white text-[#004890] md:px-3 lg:px-4 md:py-1 lg:py-2 secondaryfont rounded-xl font-bold flex items-center space-x-1 uppercase md:text-xs lg:text-base"
            >
              Make an Inquiry
            </button>
          </div>

          <!-- Mobile Menu Button -->
          <div class="lg:hidden md:hidden">
            <button
              id="mobile-menu-button"
              class="text-white focus:outline-none"
            >
              <svg
                class="w-6 h-6"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4 6h16M4 12h16m-7 6h7"
                ></path>
              </svg>
            </button>
          </div>
        </div>
      </div>

      <!-- Mobile Menu -->
      <div class="md:hidden hidden space-y-4" id="mobile-menu">
        <ul class="space-y-4 px-4 pt-4 pb-3">
          <li>
            <a
              href="#"
              class="block secondaryfont text-white font-semibold text-sm uppercase"
              >Home</a
            >
          </li>
          <li>
            <a
              href="#"
              class="block secondaryfont text-white font-semibold text-sm uppercase"
              >About</a
            >
          </li>
          <li>
            <a
              href="#"
              class="block secondaryfont text-white font-semibold text-sm uppercase"
              >Services</a
            >
          </li>
          <li>
            <a
              href="#"
              class="block secondaryfont text-white font-semibold text-sm uppercase"
              >Our Work</a
            >
          </li>
          <li>
            <a
              href="#"
              class="block secondaryfont text-white font-semibold text-sm uppercase"
              >Blog</a
            >
          </li>
          <li>
            <a
              href="#"
              class="block secondaryfont text-white font-semibold text-sm uppercase"
              >Contact</a
            >
          </li>
        </ul>
        <button
          class="bg-white text-[#004890] px-4 py-2 secondaryfont rounded-xl font-bold flex items-center space-x-2 text-sm"
        >
          Make an Inquiry
        </button>
      </div>
    </nav>

    <!-- navbar end -->