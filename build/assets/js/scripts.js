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

window.addEventListener("scroll", () => {
  const section = document.querySelector("section");
  const sectionTop = section.getBoundingClientRect().top;
  const windowHeight = window.innerHeight;

  if (sectionTop < windowHeight) {
    resetCounters(); // Reset counters before starting animation
    counters.forEach((counter) => {
      animateCounter(counter.id, counter.endValue, counter.duration);
    });
  }
});

const mobileMenuButton = document.getElementById("mobile-menu-button");
const mobileMenu = document.getElementById("mobile-menu");

mobileMenuButton.addEventListener("click", () => {
  mobileMenu.classList.toggle("hidden");
});
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

AOS.init();