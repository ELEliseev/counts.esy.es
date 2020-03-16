ï»¿<meta http-equiv='refresh' content='1; url=http://counts.esy.es/admin.php'> 
<meta charset="UTF-8" />
<?php

$date = date('Y-m-d H:i:s');
$dataunix = (1000)*(time());

echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><p> ÐžÐ±ÑŠÑÐ²Ð»ÐµÐ½Ð¸Ðµ Ð´Ð¾Ð±Ð°Ð²Ð»ÐµÐ½Ð¾ Ð½Ð° ÑÑ‚Ñ€Ð°Ð½Ð¸Ñ†Ñƒ Ñ€Ð°Ð±Ð¾Ñ‚Ð° </p> ";
$insert_sql = "INSERT INTO `u646641855_count`.`count` (`id`, `date`,`cold`,`hot`,`deltacold`,`deltahot`,`dataunix`) VALUES (NULL, '$date', '$cwt', '$hwt', 
'$deltacold','$deltahot','$dataunix')";
mysqli_query($dbase, $insert_sql);
?>
<br>
