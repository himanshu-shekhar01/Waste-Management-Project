<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Waste Collection Request</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      background-color: #f3f4f6;
      font-family: 'Segoe UI', sans-serif;
      scroll-behavior: smooth;
    }

    .glass {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(10px);
      border-radius: 1.5rem;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
    }

    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-6px); }
    }

    .floaty {
      animation: float 3s ease-in-out infinite;
    }

    @keyframes fadeSlide {
      0% { opacity: 0; transform: translateY(30px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    .animate-fade-slide {
      animation: fadeSlide 1s ease-out forwards;
    }

    /* Header - Sticky and Minimal */
    header {
      background: linear-gradient(90deg, rgba(63,94,251,1) 0%, rgba(252,70,107,1) 100%);
      color: white;
      padding: 20px 0;
      position: sticky;
      top: 0;
      z-index: 10;
      text-align: center;
    }

    header h1 {
      font-size: 2.5rem;
      font-weight: bold;
    }

    header p {
      font-size: 1.1rem;
      margin-top: 10px;
    }

    header .scroll-down-btn {
      background: #ff4c60;
      padding: 10px 20px;
      border-radius: 30px;
      margin-top: 20px;
      color: white;
      font-weight: bold;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    header .scroll-down-btn:hover {
      background: #ff2c47;
    }
  </style>
</head>
<body class="text-gray-800">

  <!-- 🌿 Header Section - Sticky and Clean -->
  <header>
    <h1>EcoCollect: Smart Waste Pickup</h1>
    <p>Join us in creating a cleaner, greener environment.</p>
    <button class="scroll-down-btn" onclick="scrollToForm()">Request Pickup</button>
  </header>

  <!-- 📝 Form Section -->
  <main class="relative mt-24 z-10 px-6 flex justify-center">
    <div class="glass max-w-2xl w-full p-10 animate-fade-slide">

      <div class="text-center mb-6">
        <div class="text-5xl text-lime-600 mb-2">🚛</div>
        <h2 class="text-2xl font-bold text-indigo-700">Request Waste Collection</h2>
        <p class="text-gray-600">Easy, eco-friendly service at your doorstep.</p>
      </div>

      <!-- 📝 Form Start -->
      <form action="submit2.php" method="POST" class="space-y-4">
        
        <!-- 🔤 Name Input -->
        <div class="relative mb-4">
          <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-indigo-500">
            <i class="fas fa-user"></i>
          </span>
          <input type="text" name="userName" placeholder="Enter your name"
            class="w-full pl-10 p-3 border border-indigo-300 rounded-full focus:outline-none focus:ring-2 focus:ring-indigo-400" required />
        </div>

        <!-- 📍 Address Input -->
        <div class="relative mb-4">
          <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-lime-600">
            <i class="fas fa-map-marker-alt"></i>
          </span>
          <input type="text" name="greenAddress" placeholder="Enter your address"
            class="w-full pl-10 p-3 border border-indigo-300 rounded-full focus:outline-none focus:ring-2 focus:ring-indigo-400" required />
        </div>

        <!-- ♻️ Waste Type -->
        <label class="block mb-2 text-indigo-800 font-medium">Select Waste Type:</label>
        <select name="greenService" class="w-full p-3 border border-indigo-300 rounded-full mb-4 focus:outline-none focus:ring-2 focus:ring-indigo-400" required>
          <option disabled selected>Select Garbage</option>
          <option value="Household Waste">Household Waste</option>
          <option value="Commercial Waste">Commercial Waste</option>
          <option value="Garden Waste">Garden Waste</option>
          <option value="Bulk Items">Bulk Items</option>
        </select>

        <!-- Submit Button -->
        <button type="submit"
          class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 rounded-full transition duration-300">
          <i class="fas fa-paper-plane mr-2"></i>Submit Request
        </button>

        <div id="msg2" class="hidden text-emerald-600 font-semibold text-center mt-4">
          ✅ Request Submitted Successfully!
        </div>
      </form>
      <!-- 📝 Form End -->
    </div>
  </main>

  <script>
    function scrollToForm() {
      document.querySelector('main').scrollIntoView({ behavior: 'smooth' });
    }
  </script>
</body>
</html>
