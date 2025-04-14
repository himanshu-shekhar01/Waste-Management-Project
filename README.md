# ♻️ Waste Management and Recycling Portal

A responsive and interactive web portal built with HTML, CSS, JavaScript, and PHP that allows users to sign up, log in, and request waste collection and recycling services.

---

## 🌟 Features

- 🧑‍💼 User Authentication (Sign Up / Sign In)
- 🔒 Login with Google (OAuth)
- 🪪 Secure password field with toggle visibility
- 📄 Clean and modern UI with TailwindCSS
- 📦 Reusable form components
- 🌱 Informative sections promoting eco-awareness
- 💻 Backend: PHP + MySQL (XAMPP)
- ✅ Responsive for mobile & desktop

---

## 🚀 Technologies Used

- HTML5 / CSS3 / JavaScript
- Tailwind CSS for styling
- PHP (with XAMPP)
- MySQL (for user data)
- Google OAuth 2.0
- Font Awesome icons

---

## 🔐 Google Login Setup

1. Go to [Google Cloud Console](https://console.cloud.google.com/)
2. Create a new project.
3. Go to **APIs & Services > Credentials**
4. Create an **OAuth Client ID**
5. Set **Authorized Redirect URI** to:  
   `http://localhost/google-login/callback.php`
6. Copy your `Client ID` and `Client Secret` into your PHP file:
   ```php
   $client->setClientId('YOUR_CLIENT_ID');
   $client->setClientSecret('YOUR_CLIENT_SECRET');