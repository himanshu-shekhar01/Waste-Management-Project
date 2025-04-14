# ♻️ Waste Management and Recycling Portal

A responsive and interactive web portal built with HTML, CSS, JavaScript, and PHP that allows users to sign up, log in, and request waste collection and recycling services.

---

## 🌟 Features

- 🧑‍💼 User Authentication (Sign Up / Sign In)
- 🔒 Login with Google (OAuth 2.0)
- 📍 Location Search with OpenStreetMap (Nominatim API)
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


---


## 🗺️ Live Location Auto-Suggestion with OpenStreetMap

To enhance user experience while filling the address field, the site uses the **Nominatim API** (from OpenStreetMap) to provide live suggestions based on user input.

### ✨ How It Works

- When the user starts typing in the address field:
  - If the input is more than 2 characters, it triggers an API call.
  - Suggestions are shown in a dropdown below the input.
  - Clicking a suggestion fills the input box with the full address.

### ⚙️ JavaScript Code

```js
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

```
---

### 🗃️ Database Integration

The application uses **MySQL** via **phpMyAdmin** to store recycling requests.

- 📂 Databases Name: `recycling_db`, `waste_collection`, `ecospark_db`
- 📄 Table: `recycling_requests`, `requests`, `green_pledges`
- 🔗 Connected using PHP (MySQLi)

Each time a user submits a recycling request, their data (like address and other) are stored in the `recycling_requests`, `requests`, `green_pledges` table for tracking and processing.


---

## ✉️ Feedback Form (Email Integration)

The website includes a feedback form that allows users to send their suggestions or concerns directly to our Gmail inbox.

- 📬 Form data is collected using an HTML form.
- 📤 PHP `mail()` function or PHPMailer is used to send the form details to our Gmail.
- 🔐 Gmail SMTP is configured for secure email delivery.

This ensures all user feedback is received instantly.
