<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>EcoSpark – Green Initiatives Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #e0f7fa, #f1f8e9, #ede7f6);
      background-size: 300% 300%;
      animation: gradientBG 20s ease infinite;
    }

    @keyframes gradientBG {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .floating-label {
      position: relative;
    }

    .floating-label input,
    .floating-label select {
      padding-top: 1.5rem;
    }

    .floating-label label {
      position: absolute;
      top: 0.75rem;
      left: 1rem;
      color: #7e57c2;
      font-size: 0.875rem;
      transition: all 0.3s ease;
      pointer-events: none;
    }

    .floating-label input:focus + label,
    .floating-label select:focus + label,
    .floating-label input:not(:placeholder-shown) + label,
    .floating-label select:not(:placeholder-shown) + label {
      top: 0.1rem;
      left: 1rem;
      font-size: 0.75rem;
      color: #5e35b1;
    }

    .success-popup {
      animation: pop 0.4s ease-out forwards;
    }

    @keyframes pop {
      0% { transform: scale(0.7); opacity: 0; }
      100% { transform: scale(1); opacity: 1; }
    }

    /* Animated leaf */
    .leaf {
      position: absolute;
      top: -50px;
      width: 30px;
      height: 30px;
      animation: floatLeaf 12s linear infinite;
      opacity: 0.6;
    }

    .leaf:nth-child(1) { left: 10%; animation-delay: 0s; }
    .leaf:nth-child(2) { left: 30%; animation-delay: 3s; }
    .leaf:nth-child(3) { left: 50%; animation-delay: 6s; }
    .leaf:nth-child(4) { left: 70%; animation-delay: 1.5s; }
    .leaf:nth-child(5) { left: 90%; animation-delay: 4.5s; }

    @keyframes floatLeaf {
      0% { transform: translateY(0) rotate(0); }
      100% { transform: translateY(100vh) rotate(360deg); }
    }
  </style>
</head>
<body class="flex flex-col items-center min-h-screen overflow-y-auto scroll-smooth p-6 relative">

  <!-- Floating leaves -->
  <img src="https://cdn-icons-png.flaticon.com/128/2909/2909764.png" class="leaf" />
  <img src="https://cdn-icons-png.flaticon.com/128/2909/2909764.png" class="leaf" />
  <img src="https://cdn-icons-png.flaticon.com/128/2909/2909764.png" class="leaf" />
  <img src="https://cdn-icons-png.flaticon.com/128/2909/2909764.png" class="leaf" />
  <img src="https://cdn-icons-png.flaticon.com/128/2909/2909764.png" class="leaf" />

  <!-- Header -->
  <div class="w-full max-w-4xl bg-white/80 backdrop-blur-md shadow-lg p-6 rounded-xl mb-8 border border-purple-200">
    <div class="flex items-center justify-between">
      <h1 class="text-3xl font-extrabold text-green-600 flex items-center gap-2">
        <i class="fas fa-seedling text-green-500"></i>
        EcoSpark
      </h1>
      <span class="text-green-500 font-medium hidden md:block">💫 Let’s make Earth bloom again 🌼</span>
    </div>
    <p class="mt-3 text-gray-600 text-center md:text-left italic text-lg">
      Your effort counts. Every little act makes a huge impact!
    </p>
  </div>

  <!-- Form -->
  <form action="submit3.php" method="POST" class="bg-white/90 backdrop-blur-lg shadow-2xl p-10 rounded-2xl max-w-xl w-full space-y-6 border border-purple-100">
    <div class="text-center">
      <div class="text-6xl mb-2 text-purple-400 animate-pulse">🌸</div>
      <h2 class="text-3xl font-bold text-green-700">Be a Part of the Greener Tomorrow</h2>
      <p class="text-gray-600">Sign up and choose your green action 💚</p>
    </div>

    <!-- Name -->
    <div class="floating-label">
      <input id="userName" name="userName" type="text" placeholder=" " required
        class="w-full px-4 py-3 border border-purple-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-300 bg-purple-50" />
      <label for="userName"><i class="fas fa-user mr-2"></i>Your Name</label>
    </div>

    <!-- Address -->
    <div class="floating-label">
      <input id="addressInput" name="greenAddress" type="text" placeholder=" " required
        class="w-full px-4 py-3 border border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-400 bg-purple-50" />
      <label for="greenAddress"><i class="fas fa-map-marker-alt mr-2"></i>Your address</label>
      <div id="suggestions" class="absolute top-full left-0 w-full bg-white border rounded shadow-md mt-1 hidden z-50"></div>
    </div>

    <!-- Service -->
    <div class="floating-label">
      <select id="greenService" name="greenService" required
        class="w-full px-4 py-3 border border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-400 bg-purple-50">
        <option value="" disabled selected hidden></option>
        <option>🌱 Composting Setup</option>
        <option>🌿 Sustainability Consulting</option>
        <option>🧹 Clean-up Drives</option>
        <option>📚 Eco Workshops</option>
      </select>
      <label for="greenService"><i class="fas fa-leaf mr-2"></i>Select a service</label>
    </div>

    <!-- Submit Button -->
    <button type="submit" onclick="submitGreenForm()"
      class="bg-green-600 text-white w-full py-3 rounded-lg font-semibold hover:bg-purple-700 transition duration-300 shadow-md">
      ✨ Submit My Green Pledge
    </button>

    <!-- Success Message -->
    <div id="greenMsg"
      class="hidden success-popup text-purple-700 font-semibold text-center bg-purple-100 p-4 rounded-lg shadow-md">
      🎉 Thank you! You've taken the first step toward a cleaner planet!
    </div>
  </form>

  <script>
    function submitGreenForm() {
      const name = document.getElementById('userName').value.trim();
      const address = document.getElementById('greenAddress').value.trim();
      const service = document.getElementById('greenService').value;

      if (!name || !address || !service || service === "") {
        alert("🚫 Please fill in all fields before submitting.");
        return;
      }

      document.getElementById('greenMsg').classList.remove('hidden');

      setTimeout(() => {
        document.getElementById('greenMsg').classList.add('hidden');
        document.getElementById('userName').value = '';
        document.getElementById('greenAddress').value = '';
        document.getElementById('greenService').value = '';
      }, 5000);
    }
  </script>

<script>
    const addressInput = document.getElementById('addressInput');
    const suggestionsBox = document.getElementById('suggestions');

    addressInput.addEventListener('input', async () => {
      const query = addressInput.value.trim();
      if (query.length < 3) {
        suggestionsBox.innerHTML = '';
        suggestionsBox.classList.add('hidden');
        return;
      }

      const url = `https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(query)}`;
      const response = await fetch(url);
      const data = await response.json();

      suggestionsBox.innerHTML = '';
      if (data.length > 0) {
        suggestionsBox.classList.remove('hidden');
        data.forEach(place => {
          const item = document.createElement('div');
          item.className = 'px-4 py-2 cursor-pointer hover:bg-green-100 text-sm';
          item.textContent = place.display_name;
          item.addEventListener('click', () => {
            addressInput.value = place.display_name;
            suggestionsBox.classList.add('hidden');
          });
          suggestionsBox.appendChild(item);
        });
      } else {
        suggestionsBox.classList.add('hidden');
      }
    });

    document.addEventListener('click', (e) => {
      if (!suggestionsBox.contains(e.target) && e.target !== addressInput) {
        suggestionsBox.classList.add('hidden');
      }
    });
  </script>

</body>
</html>
