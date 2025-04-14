<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Recycling Request Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      background-image: url('images/recyclebanner.webp');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    .overlay {
      background-color: rgba(255, 255, 255, 0.92);
      backdrop-filter: blur(4px);
    }

    /* Custom float animation */
    @keyframes float {

      0%,
      100% {
        transform: translateY(0);
      }

      50% {
        transform: translateY(-15px);
      }
    }

    .animate-float {
      animation: float 4s ease-in-out infinite;
    }
  </style>
</head>

<body class="min-h-screen flex flex-col items-center justify-start p-6 bg-gradient-to-br from-green-100 via-blue-100 to-yellow-100">

  <!-- Image Banner with Animation -->
  <div class="w-full max-w-6xl mb-8 text-center">
    <img src="images/selective-waste-collection.jpg" alt="Recycling" class="mx-auto w-96 h-auto rounded-3xl shadow-2xl animate-float border-4 border-green-400" />
    <h1 class="text-4xl font-extrabold text-green-700 mt-6 drop-shadow-lg">Join the Green Movement!</h1>
    <p class="text-gray-800 text-lg mt-3 font-medium">Recycling helps build a cleaner, greener world. Fill the form and take the first step. 🌍</p>
  </div>

  <!-- Recycling Form -->
  <form action="submit1.php" method="POST" class="overlay max-w-xl w-full mx-auto p-8 rounded-2xl shadow-2xl border-2 border-green-300">
    <div class="text-5xl mb-4 text-green-600 text-center">♻️</div>
    <h2 class="text-3xl font-bold mb-4 text-center text-green-700">Recycling Request Form</h2>
    <p class="text-gray-700 text-center mb-6">Your contribution matters. Let's recycle smarter!</p>

    <!-- Name Input -->
    <div class="relative mb-4">
      <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-blue-500">
        <i class="fas fa-user"></i>
      </span>
      <input type="text" name="name" placeholder="Enter your name"
        class="w-full pl-10 p-3 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-300 bg-blue-50" required />
    </div>

    <!-- Address Input -->
    <div class="relative mb-4">
      <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-green-500">
        <i class="fas fa-map-marker-alt"></i>
      </span>
      <input id="addressInput" type="text" name="address" placeholder="Enter your address" class="w-full pl-10 p-3 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-green-300 bg-green-50"
        required />
      <div id="suggestions" class="absolute top-full left-0 w-full bg-white border rounded shadow-md mt-1 hidden z-50"></div>
    </div>

    <!-- Waste Type Selection -->
    <label class="block mb-2 font-medium text-green-700">Select Recycling Waste Type:</label>
    <select name="waste_type" class="w-full p-3 border rounded shadow-sm bg-yellow-50 focus:outline-none focus:ring-2 focus:ring-yellow-400" required>
      <option value="">Select Garbage</option>
      <option>Wet Garbage</option>
      <option>Dry Waste</option>
      <option>Plastic</option>
      <option>Metal</option>
      <option>Glass</option>
      <option>Paper</option>
    </select>

    <!-- Submit Button -->
    <button type="submit"
      class="bg-gradient-to-r from-green-500 to-lime-500 text-white px-6 py-3 rounded-full font-bold hover:from-green-600 hover:to-lime-600 transition w-full mt-6 shadow-lg">
      Submit Waste Info
    </button>
  </form>


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