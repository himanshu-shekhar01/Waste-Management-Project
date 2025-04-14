<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EcoWaste Solutions</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <style>
    .fade-section {
      opacity: 0;
      transform: translateY(20px);
      transition: all 1s ease-out;
    }

    .fade-section.visible {
      opacity: 1;
      transform: translateY(0);
    }

    .active-service {
      animation: popUp 0.6s ease-out forwards;
    }
    
    @keyframes popUp {
      0% {
        transform: scale(0.8);
        opacity: 0.5;
      }

      100% {
        transform: scale(1);
        opacity: 1;
      }
    }

    .slideshow-container {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      z-index: 0;
    }

    .slideshow {
      display: flex;
      animation: slideShow 25s linear infinite;
      height: 100%;
    }

    .slideshow img {
      min-width: 100%;
      height: 100%;
      object-fit: cover;
      flex-shrink: 0;
    }

    @keyframes slideShow {
      0% {
        transform: translateX(0);
      }

      20% {
        transform: translateX(0);
      }

      25% {
        transform: translateX(-100%);
      }

      45% {
        transform: translateX(-100%);
      }

      50% {
        transform: translateX(-200%);
      }

      70% {
        transform: translateX(-200%);
      }

      75% {
        transform: translateX(-300%);
      }

      95% {
        transform: translateX(-300%);
      }

      100% {
        transform: translateX(-400%);
      }
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: scale(0.95);
      }

      to {
        opacity: 1;
        transform: scale(1);
      }
    }

    .animate-fadeIn {
      animation: fadeIn 0.3s ease-out;
    }
  </style>
</head>

<body>
  <script>
    AOS.init();
  </script>

  <!-- Navigation -->
  <header class="text-white bg-red-200">
    <nav class="flex justify-between items-center p-6 bg-white shadow-md">
      <div class="flex items-end font-bold text-xl space-x">
        <span class="text-green-600 text-4xl cursor-pointer leading-none">Z</span>
        <span class="text-green-600 cursor-pointer">ERO</span>
        <span class="text-black text-4xl cursor-pointer leading-none">W</span>
        <span class="text-black cursor-pointer">ASTE</span>
      </div>


      <div class="space-x-6 hidden md:flex">
        <a href="main.php" id="home" class="nav-link text-xl text-gray-700 font-medium hover:text-green-600">Home</a>
        <a href="#about" class="nav-link text-xl text-gray-700 font-medium hover:text-green-600">About Us</a>
        <a href="#services" class="nav-link text-xl text-gray-700 font-medium hover:text-green-600">Services</a>
      </div>
      <div class="space-x-4">
        <button onclick="window.location.href='contact.html';" class="px-3 py-2 text-black font-bold border rounded-lg hover:bg-green-400 transition-all duration-300 ease-in-out">Feedback</button>
        <button onclick="window.location.href='logout.php';" class="px-3 py-2 text-black font-bold border rounded-lg hover:bg-red-400 transition-all duration-300 ease-in-out">Log out</button>
      </div>
    </nav>
  </header>

  <!-- Hero Section with Sliding Background -->
  <section class="relative h-screen overflow-hidden">
    <!-- Slideshow Background -->
    <div class="slideshow-container">
      <div class="slideshow">
        <img src="img10.jpg" alt="Slide 1">
        <img src="img9.jpg" alt="Slide 2">
        <img src="img11.jpg" alt="Slide 3">
        <img src="img8.jpg" alt="Slide 4">
        <img src="img4.jpg" alt="Slide 5">
      </div>
      <div class="absolute inset-0 bg-black opacity-40 z-10"></div>
    </div>

    <!-- Foreground Content -->
    <div class="relative z-20 flex justify-center items-center h-full">
      <div class="text-center text-white px-6">
        <h1 class="text-5xl font-bold mb-4" data-aos="fade-down">Welcome to</h1>
        <p class="text-4xl mb-10" data-aos="fade-up">Waste Management and Recycling Request Portal.</p>

        <button onclick="scrollToSection('explore')"
          class="relative inline-flex items-center justify-center px-8 py-2.5 overflow-hidden tracking-tighter text-green-600 bg-white rounded-full group font-bold transition duration-300 ease-in-out">

          <!-- Background animation SVGs and spans -->
          <span
            class="absolute w-0 h-0 transition-all duration-500 ease-out bg-green-400 rounded-full group-hover:w-56 group-hover:h-56">
          </span>
          <span class="absolute bottom-0 left-0 h-full -ml-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-auto h-full opacity-100 object-stretch"
              viewBox="0 0 487 487">
              <path fill-opacity=".1" fill-rule="nonzero" fill="#FFF"
                d="M0 .3c67 2.1 134.1 4.3 186.3 37 52.2 32.7 89.6 95.8 112.8 150.6 23.2 54.8 32.3 101.4 61.2 149.9 28.9 48.4 77.7 98.8 126.4 149.2H0V.3z">
              </path>
            </svg>
          </span>
          <span class="absolute top-0 right-0 w-12 h-full -mr-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="object-cover w-full h-full" viewBox="0 0 487 487">
              <path fill-opacity=".1" fill-rule="nonzero" fill="#FFF"
                d="M487 486.7c-66.1-3.6-132.3-7.3-186.3-37s-95.9-85.3-126.2-137.2c-30.4-51.8-49.3-99.9-76.5-151.4C70.9 109.6 35.6 54.8.3 0H487v486.7z">
              </path>
            </svg>
          </span>
          <span
            class="absolute inset-0 w-full h-full -mt-1 px-8 py-3 rounded-full font-bold opacity-30 bg-gradient-to-b from-transparent via-transparent to-gray-200">
          </span>
          <span class="relative text-base font-semibold transition duration-300 ease-in-out group-hover:text-black">
            Start Exploring
          </span>
        </button>

        <script>
          function scrollToSection(sectionId) {
            document.getElementById(sectionId).scrollIntoView({
              behavior: 'smooth'
            });
          }
        </script>
      </div>
    </div>
  </section>

  <!-- Animated Counter Section -->
  <section id="explore" class="py-16 text-green-700 fade-section">
    <div class="container mx-auto px-6">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
        <div class="p-6">
          <h3 id="clients" class="text-4xl font-bold">0+</h3>
          <p class="mt-2 font-bold text-black">Clients Served</p>
        </div>
        <div class="p-6">
          <h3 id="recycling" class="text-4xl font-bold">0%</h3>
          <p class="mt-2 font-bold text-black">Recycling Rate</p>
        </div>
        <div class="p-6">
          <h3 id="experience" class="text-4xl font-bold">0+</h3>
          <p class="mt-2 font-bold text-black">Years Experience</p>
        </div>
        <div class="p-6">
          <h3 class="text-4xl font-bold ">24/7</h3>
          <p class="mt-2 font-bold text-black">Support</p>
        </div>
      </div>
    </div>
  </section>

  <script>
    function animateValue(id, end, suffix = "", duration = 100) {
      const el = document.getElementById(id);
      let start = 0;
      let increment = end / (duration / 10);

      const counter = setInterval(() => {
        start += increment;
        if (start >= end) {
          start = end;
          clearInterval(counter);
        }
        el.innerText = Math.floor(start) + suffix;
      }, 10);
    }

    // Animate each counter
    animateValue("clients", 500, "+", 2000);
    animateValue("recycling", 95, "%", 2000);
    animateValue("experience", 15, "+", 2000);
  </script>


  <!-- Hover Effect Section -->
  <section class="py-20 bg-gradient-to-r from-[#0f2027] via-[#203a43] to-[#2c5364] text-white relative overflow-hidden">

    <!-- Glowing Particles (Just for Vibe) -->
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/stardust.png')] opacity-10"></div>

    <div class="container mx-auto px-6 relative z-10">
      <h2 class="text-5xl font-bold text-center mb-16 tracking-wide glow-text">Why Choose Us?</h2>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-12">

        <!-- CARD 1 -->
        <div class="bg-white/10 backdrop-blur-md rounded-xl p-8 shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-500 border border-white/20 hover:border-cyan-400">
          <div class="mb-6 w-16 h-16 flex items-center justify-center rounded-full bg-gradient-to-br from-cyan-400 to-blue-600 shadow-xl animate-bounce">
            <span class="text-3xl">🌱</span>
          </div>
          <h3 class="text-2xl font-semibold mb-3 text-cyan-200">Sustainable Future</h3>
          <p class="text-gray-200">We're on a mission to build a greener tomorrow. Every action we take reduces waste and nurtures our planet.</p>
        </div>

        <!-- CARD 2 -->
        <div class="bg-white/10 backdrop-blur-md rounded-xl p-8 shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-500 border border-white/20 hover:border-pink-400">
          <div class="mb-6 w-16 h-16 flex items-center justify-center rounded-full bg-gradient-to-br from-pink-400 to-fuchsia-600 shadow-xl animate-spin-slow animate-bounce">
            <span class="text-3xl">🤖</span>
          </div>
          <h3 class="text-2xl font-semibold mb-3 text-pink-200">modification</h3>
          <p class="text-gray-200">According to need of customer we are flexible tobring new changes as per your feedback.</p>
        </div>

        <!-- CARD 3 -->
        <div class="bg-white/10 backdrop-blur-md rounded-xl p-8 shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-500 border border-white/20 hover:border-green-400">
          <div class="mb-6 w-16 h-16 flex items-center justify-center rounded-full bg-gradient-to-br from-green-400 to-lime-600 shadow-xl animate-bounce">
            <span class="text-3xl">⚡</span>
          </div>
          <h3 class="text-2xl font-semibold mb-3 text-green-200">Speed & Efficiency</h3>
          <p class="text-gray-200">Fast, reliable, and eco-friendly services at your doorstep. Waste collection, recycling, and processing—done in no time.</p>
        </div>

      </div>
    </div>
  </section>


  <!-- Add your Services, About, Footer, and Script sections below (as in your earlier code) -->

  <!-- Services Section -->
  <section class="py-20 bg-gray-50 fade-section" id="services">
    <div class="container mx-auto px-6">
      <h2 class="text-4xl font-bold text-center mb-12">Our Services</h2>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- ♻️ Recycling Services Card -->
        <div class="bg-white p-8 rounded-lg shadow-lg transition transform hover:scale-105 hover:bg-green-50 hover:shadow-2xl">
          <div class="text-5xl mb-4 text-green-500 text-center">♻️</div>
          <h3 class="text-2xl font-semibold mb-4 text-center">Recycling Services</h3>
          <p class="text-gray-600 text-center text-sm">
            Professional recycling solutions for residential and commercial needs.
          </p>

          <div class="mt-4 flex justify-center">
            <a href="recycling-form.php">
              <button
                class="bg-green-600 text-white px-6 py-2 rounded-full font-bold hover:bg-green-700 transition">
                Start Request
              </button>
            </a>
          </div>
        </div>


        <!-- 🚛 Waste Collection Card -->
        <div class="bg-white p-8 rounded-lg shadow-lg transition transform hover:scale-105 hover:bg-green-50 hover:shadow-2xl">
          <div class="text-5xl mb-4 text-green-500 text-center">🚛</div>
          <h3 class="text-2xl font-semibold mb-4 text-center">Waste Collection</h3>
          <p class="text-gray-600 text-center">Regular and reliable waste collection services.</p>

          <div class="mt-4 flex justify-center">
            <a href="waste-collection-form.php">
              <button
                class="bg-green-600 text-white px-6 py-2 rounded-full font-bold hover:bg-green-700 transition">
                Start Request
              </button>
            </a>
          </div>
        </div>


        <!-- 🌱 Green Initiatives Card -->
        <div class="bg-white p-8 rounded-lg shadow-lg transition transform hover:scale-105 hover:bg-green-50 hover:shadow-2xl">
          <div class="text-5xl mb-4 text-green-500 text-center">🌱</div>
          <h3 class="text-2xl font-semibold mb-4 text-center">Green Initiatives</h3>
          <p class="text-gray-600 text-center">Sustainable waste management consulting and solutions.</p>

          <div class="mt-4 flex justify-center">
            <a href="green-initiatives-form.php">
              <button
                class="bg-green-600 text-white px-6 py-2 rounded-full font-bold hover:bg-green-700 transition">
                Start Request
              </button>
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- 🔁 Shared JS Functionality -->
  <script>
    function toggleForm(id) {
      const form = document.getElementById(id);
      form.classList.toggle('hidden');
    }

    function submitService(btn, msgId) {
      btn.disabled = true;
      btn.innerText = "Submitted ✅";
      document.getElementById(msgId).classList.remove('hidden');
    }
  </script>

  <!-- About Section -->
  <section class="py-20 bg-gradient-to-br from-green-50 via-white to-green-100 fade-section" id="about">
    <div class="container mx-auto px-6">
      <div class="flex flex-col md:flex-row items-center gap-8">

        <!-- Image Section -->
        <div class="md:w-1/2 w-full flex justify-center">
          <div class="relative w-[80%] h-[150px] md:h-[350px] overflow-hidden rounded-xl ">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQT5E5mYLf3XmvexGS_zMB1DD-_SUKXQRvTOA&s"
              class=" w-full h-full   transition-transform duration-500 ease-in-out  rounded-xl">
            <div class="absolute inset-0 bg-black bg-opacity-10 opacity-0 "></div>
          </div>
        </div>

        <!-- Text Content -->
        <div class="md:w-1/2 w-full text-center md:text-left">
          <h2 class="text-3xl md:text-4xl font-bold mb-4 text-green-700 animate-fade-in">About Us</h2>
          <p class="text-base md:text-lg text-gray-700 mb-6 leading-relaxed">
            We are committed to providing sustainable waste management solutions that protect our environment for future generations. Our team of experts works tirelessly to ensure proper waste disposal and maximize recycling efforts.
          </p>



          <!-- Icons Row -->
          <div class="grid grid-cols-3 gap-6 mb-6">
            <div class="text-center w-12 h-12">
              <img src="data:image/png;base64,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" class="mx-auto mb-2">
              <p class="text-sm font-semibold">Recycling</p>
            </div>
            <div class="text-center">
              <img src="https://img.icons8.com/fluency/48/leaf.png" class="mx-auto mb-2">
              <p class="text-sm font-semibold">Eco-Friendly</p>
            </div>
            <div class="text-center">
              <img src="https://img.icons8.com/fluency/48/organic-food.png" class="mx-auto mb-2">
              <p class="text-sm font-semibold">Sustainability</p>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Counters -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center mt-16">
      <div>
        <p class="text-4xl font-bold text-green-700">12K+</p>
        <p class="text-gray-600">Tons Recycled</p>
      </div>
      <div>
        <p class="text-4xl font-bold text-green-700">500+</p>
        <p class="text-gray-600">Volunteers</p>
      </div>
      <div>
        <p class="text-4xl font-bold text-green-700">25+</p>
        <p class="text-gray-600">Communities Helped</p>
      </div>
      <div>
        <p class="text-4xl font-bold text-green-700">100%</p>
        <p class="text-gray-600">Eco Commitment</p>
      </div>
    </div>

    <!-- Testimonial -->
    <div class="mt-16 bg-white p-8 rounded-lg shadow-lg max-w-3xl mx-auto text-center">
      <p class="text-xl italic text-gray-700 mb-4">"Their dedication to sustainability is truly inspiring. We've reduced 70% of our office waste thanks to their service."</p>
    </div>
    </div>
  </section>

  <!-- feedback -->
  <section class="px-6 py-12 bg-white">
    <h2 class="text-3xl font-bold mb-6 text-center">Frequently Asked Questions</h2>
    <div class="max-w-2xl mx-auto space-y-4">
      <details class="group border border-gray-300 rounded-lg p-4 bg-gray-50 hover:shadow-lg transition">
        <summary
          class="font-semibold text-lg cursor-pointer flex justify-between items-center group-open:text-green-600">
          What items can be recycled?
          <span class="ml-2 transform group-open:rotate-180 transition-transform">▼</span>
        </summary>
        <p class="mt-2 text-gray-700 leading-relaxed">Plastic, paper, glass, and metals are recyclable.</p>
      </details>
      <details class="group border border-gray-300 rounded-lg p-4 bg-gray-50 hover:shadow-lg transition">
        <summary
          class="font-semibold text-lg cursor-pointer flex justify-between items-center group-open:text-green-600">
          How do I schedule a pickup?
          <span class="ml-2 transform group-open:rotate-180 transition-transform">▼</span>
        </summary>
        <p class="mt-2 text-gray-700 leading-relaxed">You can schedule through the portal or mobile app.</p>
      </details>
      <details class="group border border-gray-300 rounded-lg p-4 bg-gray-50 hover:shadow-lg transition">
        <summary
          class="font-semibold text-lg cursor-pointer flex justify-between items-center group-open:text-green-600">
          What is the best way to reduce waste at home?
          <span class="ml-2 transform group-open:rotate-180 transition-transform">▼</span>
        </summary>
        <p class="mt-2 text-gray-700 leading-relaxed">Use reusable items, compost organic waste, and avoid single-use
          plastics.</p>
      </details>
      <details class="group border border-gray-300 rounded-lg p-4 bg-gray-50 hover:shadow-lg transition">
        <summary
          class="font-semibold text-lg cursor-pointer flex justify-between items-center group-open:text-green-600">
          Where can I drop off hazardous waste?
          <span class="ml-2 transform group-open:rotate-180 transition-transform">▼</span>
        </summary>
        <p class="mt-2 text-gray-700 leading-relaxed">Check local government or recycling centers that handle hazardous
          materials.</p>
      </details>
      <details class="group border border-gray-300 rounded-lg p-4 bg-gray-50 hover:shadow-lg transition">
        <summary
          class="font-semibold text-lg cursor-pointer flex justify-between items-center group-open:text-green-600">
          Do you offer services for businesses?
          <span class="ml-2 transform group-open:rotate-180 transition-transform">▼</span>
        </summary>
        <p class="mt-2 text-gray-700 leading-relaxed">Yes, we offer tailored waste management solutions for businesses
          and organizations.</p>
      </details>
    </div>
  </section>


  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-12">
    <div class="container mx-auto px-6">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <div>
          <h3 class="text-xl font-bold mb-4">EcoWaste Solutions</h3>
          <p class="text-gray-400">Making waste management sustainable and efficient.</p>
        </div>
        <div>
          <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
          <ul class="space-y-2">
            <li><a href="#home" class="text-gray-400 hover:text-white transition">Home</a></li>
            <li><a href="#services" class="text-gray-400 hover:text-white transition">Services</a></li>
            <li><a href="#about" class="text-gray-400 hover:text-white transition">About</a></li>
            <li><a href="contact.html" class="text-gray-400 hover:text-white transition">Contact</a></li>
          </ul>
        </div>
        <div>
          <h4 class="text-lg font-semibold mb-4">Contact Info</h4>
          <ul class="space-y-2 text-gray-400">
            <li>Phagwara</li>
            <li>Green City, 144411</li>
            <li>Phone: (123) 456-7890</li>
            <li>Email: Ecowaste@gmail.com</li>
          </ul>
        </div>
        <div>
          <h4 class="text-lg font-semibold mb-4">Follow Us</h4>
          <div class="flex space-x-4">
            <a href="#" class="text-gray-400 hover:text-white transition text-xl">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-white transition text-xl">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-white transition text-xl">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </div>


      </div>
      <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
        <p>&copy; 2025 EcoWaste Solutions. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <!-- JavaScript -->
  <script>
    const fadeSections = document.querySelectorAll('.fade-section');
    const fadeObserver = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          if (entry.target.id === "services") {
            const cards = entry.target.querySelectorAll(".service-card");
            cards.forEach((card, index) => {
              setTimeout(() => {
                card.classList.add("active-service");
              }, index * 500);
            });
          }
        }
      });
    });
    fadeSections.forEach(section => fadeObserver.observe(section));

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth'
          });
        }
      });
    });

    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');

    function activateLinkOnScroll() {
      let scrollY = window.scrollY;
      sections.forEach(current => {
        const sectionHeight = current.offsetHeight;
        const sectionTop = current.offsetTop - 100;
        const sectionId = current.getAttribute('id');
        if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
          navLinks.forEach(link => {
            link.classList.remove('text-green-600', 'font-bold');
            if (link.getAttribute('href') === `#${sectionId}`) {
              link.classList.add('text-green-600', 'font-bold');
            }
          });
        }
      });
    }
    window.addEventListener('scroll', activateLinkOnScroll);
  </script>
  <script>
    let autocomplete;

    function initAutocomplete() {
      const input = document.getElementById('addressInput');
      autocomplete = new google.maps.places.Autocomplete(input, {
        types: ['geocode'],
        componentRestrictions: {
          country: "in"
        } // Restrict to India or change if needed
      });

      autocomplete.addListener('place_changed', function() {
        const place = autocomplete.getPlace();
        console.log("Selected place:", place.formatted_address); // For your reference
      });
    }
  </script>
  <!-- <script
  src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"
  async defer>
</script> -->
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdyYPQz3-Q3fV6QsJYZ5cp8z05hcnSjRY&libraries=places&callback=initAutocomplete"
    async defer></script>
</body>

</html>