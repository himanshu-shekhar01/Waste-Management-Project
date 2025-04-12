<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Green Initiatives Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      background-image: url('images/green-initiatives-blog.webp');
      background-size: cover;
      background-position: center;
    }
    .overlay {
      background-color: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(2px);
    }
  </style>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-50 min-h-screen flex items-center justify-center p-4">

  <div class="overlay max-w-xl w-full mx-auto p-8 rounded-lg shadow-2xl">
    <div class="text-5xl mb-4 text-green-500 text-center">🌱</div>
    <h2 class="text-2xl font-bold mb-4 text-center text-green-600">Green Initiatives</h2>
    <p class="text-center text-gray-600 mb-6">
      Sustainable waste management consulting and solutions.
    </p>

    <div class="relative mb-4">
        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-green-500">
          <i class="fas fa-map-marker-alt"></i>
        </span>
        <input type="text" placeholder="Enter your address"
          class="w-full pl-10 p-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-green-300" />
      </div>

    <label class="block mb-2 font-medium">Choose Green Services:</label>
    <select id="greenService" class="w-full p-3 border rounded mb-4">
      <option>Select Initiative</option>
      <option>Composting Setup</option>
      <option>Sustainability Consulting</option>
      <option>Clean-up Drives</option>
      <option>Eco Workshops</option>
    </select>

    <button onclick="submitGreenForm()"
      class="bg-green-600 text-white px-6 py-2 rounded-full font-bold hover:bg-green-700 transition w-full">
      Submit Green Info
    </button>

    <div id="greenMsg" class="hidden text-green-600 font-semibold text-center mt-4">
      ✅ Request Submitted Successfully!
    </div>
  </div>

  <script>
    function submitGreenForm() {
      const address = document.getElementById('greenAddress').value.trim();
      const service = document.getElementById('greenService').value;

      if (!address || service === 'Select Initiative') {
        alert("Please enter your address and select a green service.");
        return;
      }

      document.getElementById('greenMsg').classList.remove('hidden');

      // Optionally clear form fields after submission
      document.getElementById('greenAddress').value = '';
      document.getElementById('greenService').value = 'Select Initiative';
    }
  </script>

</body>
</html>
