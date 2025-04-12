<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Recycling Request Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      background-image: url('images/recyclebanner.webp');
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
<body class="min-h-screen flex items-center justify-center p-10">
  

  <div class="overlay max-w-xl w-full mx-auto p-8 rounded-lg shadow-2xl">
    <div class="text-5xl mb-4 text-green-500 text-center">♻️</div>
    <h2 class="text-2xl font-bold mb-4 text-center text-green-600">Recycling Request Form</h2>
    <p class="text-gray-700 text-center mb-6">Help us manage recyclables better with your contribution.</p>

    <div class="relative mb-4">
      <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-green-500">
        <i class="fas fa-map-marker-alt"></i>
      </span>
      <input type="text" placeholder="Enter your address"
        class="w-full pl-10 p-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-green-300" />
    </div>

    <label class="block mb-2 font-medium">Select Recycling Waste Types:</label>
    <select class="w-full p-3 border rounded shadow-sm">
      <option>Select Garbage</option>
      <option>Wet Garbage</option>
      <option>Dry Waste</option>
      <option>Plastic</option>
      <option>Metal</option>
      <option>Glass</option>
      <option>Paper</option>
    </select>

    <button onclick="submitService(this, 'msg1')"
      class="bg-green-600 text-white px-6 py-3 rounded-full font-bold hover:bg-green-700 transition w-full mt-6">
      Submit Waste Info
    </button>

    <div id="msg1" class="hidden text-green-700 font-semibold text-center mt-4">
      ✅ Request Submitted Successfully!
    </div>
  </div>

  <script>
    function submitService(btn, msgId) {
      btn.disabled = true;
      setTimeout(() => {
        document.getElementById(msgId).classList.remove('hidden');
      }, 500);
    }
  </script>

</body>
</html>
