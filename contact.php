<?php

if (isset($_POST)) {
  // Replace YOUR_API_KEY with your actual API key
  $api_key = '6690032683:AAHmnsM6DqinqMSaSi-ToZLk3QDvHNYdVPg';

  // Get the user's IP address
  $user_ip = $_SERVER['REMOTE_ADDR'];

  // Use the GeoPlugin API to get the user's geolocation data
  $geo_data = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));

  // Get the form data from the POST request
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Format the message with the form data and geolocation data
  $formatted_message = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message\n\n";
  $formatted_message .= "IP Address: $user_ip\n";
  $formatted_message .= "Location: " . $geo_data['geoplugin_city'] . ", " . $geo_data['geoplugin_region'] . ", " . $geo_data['geoplugin_countryName'];

  // Send the message to a Telegram bot
  $chat_id = '5086819565';
  $telegram_url = "https://api.telegram.org/bot$api_key/sendMessage?chat_id=$chat_id&text=" . urlencode($formatted_message);
  file_get_contents($telegram_url);

  // Redirect the user to a thank you page
  header('Location: https://vanshfr.tech ');
  exit();
}

?>