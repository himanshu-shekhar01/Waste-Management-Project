<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
  <style>
    body {
      background-image: url('img11.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    @keyframes fadeInOut {
      0% { opacity: 0; transform: translateY(10px); }
      50% { opacity: 1; transform: translateY(0); }
      100% { opacity: 0; transform: translateY(-10px); }
    }

    .animate-continuous {
      animation: fadeInOut 3s ease-in-out infinite;
    }

    #signUp {
      display: none;
    }
  </style>
</head>
<body>

  <!-- Display Message -->
  <?php 
    session_start();
    if (isset($_SESSION['success'])) {
      echo '<div class="text-green-700 font-bold mb-2">' . $_SESSION['success'] . '</div>';
      unset($_SESSION['success']);
    }
    if (isset($_SESSION['error'])) {
      echo '<script>alert("' . $_SESSION['error'] . '");</script>';
      unset($_SESSION['error']);
    }
  ?>

  <!-- Centered Form Container -->
  <div class="flex w-full max-w-2xl bg-white bg-opacity-30 backdrop-blur-md rounded-lg shadow-2xl p-4">

    <!-- Sign In Form -->
    <div class="w-full lg:w-1/2 p-4">
      <div class="text-center mb-4">
        <h1 class="font-bold text-black">Welcome to</h1>
        <p class="text-black">Waste Management and Recycling Request Portal.</p>
      </div>
      <form action="backend/signIn.php" method="POST">
        <div class="mb-3">
          <label for="email" class="block text-sm font-medium text-black">Email Address</label>
          <input type="email" name="email" placeholder="Enter your email"
            class="w-full px-3 py-2 mt-1 border rounded-lg bg-white bg-opacity-50 focus:outline-none focus:ring focus:ring-green-400" required />
        </div>
        <div class="mb-3">
          <label for="password" class="block text-sm font-medium text-black">Password</label>
          <div class="relative">
            <input type="password" id="loginPassword" name="password" placeholder="Enter your password"
              class="w-full px-3 py-2 mt-1 border rounded-lg bg-white bg-opacity-50 focus:outline-none focus:ring focus:ring-green-400" required />
            <i class="fa-solid fa-eye absolute right-3 top-3 cursor-pointer text-gray-600" onclick="toggleVisibility('loginPassword', this)"></i>
          </div>
        </div>
        <div class="flex items-center justify-between mb-3">
          <label class="inline-flex items-center">
            <input type="checkbox" class="form-checkbox text-green-600" />
            <span class="ml-2 text-sm text-black">Remember Me</span>
          </label>
          <a href="#" class="text-sm text-black hover:underline">Forgot Password?</a>
        </div>
        <button type="submit" name="signIn"
          class="w-full px-4 py-2 text-white bg-green-600 rounded-lg hover:bg-green-700 focus:outline-none focus:ring focus:ring-green-400">
          Sign In
        </button>
      </form>
      <p class="text-center my-3">................or................</p>
      <div class="text-center space-x-4 mb-3">
        <i class="fab fa-google text-lg"></i>
        <i class="fab fa-facebook text-lg"></i>
      </div>
      <p class="text-center text-sm text-black">
        Don't have an account?
        <button id="signUpButton" class="text-green-900 font-bold hover:underline">Sign Up</button>
      </p>
    </div>

    <div class="w-full lg:w-1/2 flex items-center justify-center text-center p-4">
      <div class="animate-continuous">
        <h2 class="text-2xl font-bold text-green-800">Recycle & Save Nature</h2>
        <p class="text-green-700 mt-2">
          Join us in making the world a greener place. Reduce waste, recycle, and make a difference for future generations.
        </p>
        <img src="img2.jpg" alt="Recycle" class="mt-4 w-24 mx-auto" />
      </div>
    </div>

  </div>

  <!-- Sign Up Form -->
  <div class="flex w-full max-w-2xl bg-white bg-opacity-30 backdrop-blur-md rounded-lg shadow-2xl p-4 mt-6" id="signUp">
    <div class="w-full lg:w-1/2 p-4">
      <div class="text-center mb-4">
        <h1 class="font-bold text-black">Create Your Account</h1>
        <p class="text-black">Join the Waste Management and Recycling Portal</p>
      </div>
      <form action="backend/signUp.php" method="POST">
        <div class="mb-3">
          <label for="firstname" class="block text-sm font-medium text-black">First Name</label>
          <input type="text" name="firstName" placeholder="Enter your first name"
            class="w-full px-3 py-2 mt-1 border rounded-lg bg-white bg-opacity-50 focus:outline-none focus:ring focus:ring-green-400" required />
        </div>
        <div class="mb-3">
          <label for="email" class="block text-sm font-medium text-black">Email Address</label>
          <input type="email" name="email" placeholder="Enter your email"
            class="w-full px-3 py-2 mt-1 border rounded-lg bg-white bg-opacity-50 focus:outline-none focus:ring focus:ring-green-400" required />
        </div>
        <div class="mb-3">
          <label for="password" class="block text-sm font-medium text-black">Password</label>
          <div class="relative">
            <input type="password" id="signupPassword" name="password" placeholder="Create a password"
              class="w-full px-3 py-2 mt-1 border rounded-lg bg-white bg-opacity-50 focus:outline-none focus:ring focus:ring-green-400" required />
            <i class="fa-solid fa-eye absolute right-3 top-3 cursor-pointer text-gray-600" onclick="toggleVisibility('signupPassword', this)"></i>
          </div>
        </div>
        <button type="submit" name="signUp"
          class="w-full px-4 py-2 text-white bg-green-600 rounded-lg hover:bg-green-700 focus:outline-none focus:ring focus:ring-green-400">
          Sign Up
        </button>
      </form>
      <p class="text-center my-3">................or................</p>
      <div class="text-center space-x-4 mb-3">
        <i class="fab fa-google text-lg"></i>
        <i class="fab fa-facebook text-lg"></i>
      </div>
      <p class="text-center text-sm text-black">
        Already have an account?
        <button id="signInButton" class="text-green-900 font-bold hover:underline">Sign In</button>
      </p>
    </div>

    <div class="w-full lg:w-1/2 flex items-center justify-center text-center p-4">
      <div class="animate-continuous">
        <h2 class="text-2xl font-bold text-green-800">Recycle & Save Nature</h2>
        <p class="text-green-700 mt-2">
          Join us in making the world a greener place. Reduce waste, recycle, and make a difference for future generations.
        </p>
        <img src="img2.jpg" alt="Recycle" class="mt-4 w-24 mx-auto" />
      </div>
    </div>

  </div>

  <script>
    const signUpButton = document.getElementById('signUpButton');
    const signInButton = document.getElementById('signInButton');
    const signInForm = document.getElementById('signIn');
    const signUpForm = document.getElementById('signUp');

    signUpButton.addEventListener('click', () => {
      signInForm.style.display = 'none';
      signUpForm.style.display = 'flex';
    });

    signInButton.addEventListener('click', () => {
      signInForm.style.display = 'flex';
      signUpForm.style.display = 'none';
    });

    function toggleVisibility(id, icon) {
      const input = document.getElementById(id);
      if (input.type === 'password') {
        input.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
      } else {
        input.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
      }
    }
  </script>
</body>
</html>
