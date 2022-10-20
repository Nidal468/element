<?php
$to = "nidal411511@gmail.com";
$subject = "My subject";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
?>
