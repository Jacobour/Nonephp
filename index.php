<?php
$to = "moaddahmani41@gmail.com";
$subject = "hellozz";
$message = "This is none";

// Sender information
$sender_name = "hamidon khendof";
$sender_email = "sender@github.none";

// Additional headers
$headers = "From: $sender_name <$sender_email>\r\n";
$headers .= "Reply-To: $sender_name <$sender_email>\r\n";
$headers .= "Content-Type: text/plain;charset=utf-8\r\n";

// Send email
mail($to, $subject, $message, $headers);

echo "Email sent successfully.";
?>

