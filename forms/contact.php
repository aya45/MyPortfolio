

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>


<?php
  // استبدل البريد الإلكتروني بعنوان بريدك
  $to = 'ayahamam582@gmail.com';
  $subject = $_POST['subject'];
  $message = "From: " . $_POST['name'] . "\nEmail: " . $_POST['email'] . "\nMessage: " . $_POST['message'];
  $headers = 'From: ' . $_POST['email'];

  // إرسال البريد الإلكتروني
  if(mail($to, $subject, $message, $headers)) {
    echo "Message sent successfully!";
  } else {
    echo "Failed to send message.";
  }
?>
