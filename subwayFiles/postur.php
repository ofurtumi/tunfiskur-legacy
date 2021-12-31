<?php
// the message
$linkur = $_POST["linkurinn"];
echo $linkur;
$msg = "Hιrna er pφntunin ώνn\n $linkur";
echo $msg;
// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("thorvaldur.tumi@gmail.com","Test",$msg);
?>