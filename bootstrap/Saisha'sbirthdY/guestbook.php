<?php
// Read messages from the file and display them
$file = 'guestbook.txt';
$messages = file_get_contents($file);
?>

<h2>Guestbook Messages</h2>
<div>
    <?php echo nl2br($messages); ?>
</div>
