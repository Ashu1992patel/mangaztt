mail
<?php
$msg = "First line of text\nSecond line of text";
$msg = wordwrap($msg,70);
mail("vibhukol@gmail.com","My subject",$msg);
?>