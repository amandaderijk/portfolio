<div class="contact-form">
<?php
$name = _POST['name'];
$email = _POST['email'];
$subject = _POST['subject'];
$message = _POST['message'];
$to = 'amandaderijk@gmail.com';
$subject = 'New message send by portfolio';

mail ($to, $subject, $message, "From: " . $name);
echo "Thanks! I will reply as soon as possible!";
?>
<div>