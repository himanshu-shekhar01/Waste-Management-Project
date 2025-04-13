<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Message Sent</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-100 min-h-screen flex flex-col items-center justify-center text-center">

  <div class="bg-white p-10 rounded-2xl shadow-xl max-w-md">
    <div class="flex justify-center mb-4">
      <!-- Animated Success SVG -->
      <svg class="h-24 w-24 text-green-600 animate-bounce" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
      </svg>
    </div>
    <h1 class="text-2xl font-bold text-green-700">Message Sent Successfully!</h1>
    <p class="text-gray-600 mt-2">Thank you for contacting us. We will get back to you soon.</p>

    <a href="main.php" class="mt-6 inline-block px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">Back to Dashboard</a>
  </div>

</body>
</html>
