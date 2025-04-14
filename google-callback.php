<?php
require_once 'vendor/autoload.php';
use Google\Client as Google_Client;
use Google\Service\Oauth2 as Google_Service_Oauth2;

$client = new Google_Client();
$client->setClientId('YOUR_GOOGLE_CLIENT_ID');
$client->setClientSecret('YOUR_GOOGLE_CLIENT_SECRET');
$client->setRedirectUri('http://localhost:8000/google-callback.php');
$client->addScope("email");
$client->addScope("profile");

if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    
    if (!isset($token['error'])) {
        $client->setAccessToken($token['access_token']);

        $oauth = new Google_Service_Oauth2($client);
        $userData = $oauth->userinfo->get();

        echo "<h2>Welcome, " . htmlspecialchars($userData->name) . "!</h2>";
        echo "<p>Email: " . htmlspecialchars($userData->email) . "</p>";
        echo "<img src='" . $userData->picture . "' alt='Profile Picture'>";
    } else {
        echo "Error fetching token: " . $token['error_description'];
    }
} else {
    echo "No authorization code received.";
}
