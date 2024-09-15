<?php
// Validate and sanitize input
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

// Save the message to a file (example)
$file = 'guestbook.txt';
$current = file_get_contents($file);
$current .= "Name: $name\nEmail: $email\nMessage: $message\n\n";
file_put_contents($file, $current);

// Redirect back to the guestbook page
header('Location: guestbook.php');
exit();
?>
