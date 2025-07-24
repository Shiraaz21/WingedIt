<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = strip_tags(trim($_POST["name"]));
  $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
  $message = trim($_POST["message"]);

  // Set your email address here
  $to = "yourname@example.com";
  $subject = "New Contact Form Message from $name";
  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";
  $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

  if (mail($to, $subject, $body, $headers)) {
    echo "Thank you! Your message has been sent.";
  } else {
    echo "Oops! Something went wrong and we couldn’t send your message.";
  }
}
?>
Replace "yourname@example.com" with your real email address.

🚨 Important Notes:
This works only if your hosting supports PHP and has mail() enabled.

If you're using free hosting, email functions might be disabled.

For Gmail or business-level email delivery, it's better to use authenticated SMTP (more secure) — I can help with that if you want.

Would you like to use SMTP for better reliability (e.g. emails landing in inbox, not spam)?








