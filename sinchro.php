 ﻿<meta http-equiv='refresh' content='1; url=http://counts.esy.es/index.php'> 
<meta charset="UTF-8" />
 <?php
 session_start();
  if($_SESSION['auth']!=true){
?>
 <p>  ВЫ НЕ АВТОРИЗОВАНЫ ! </p>
  <?php
}
else{
	
?> 
<?php

function writedata($cwt,$hwt) {
include ('connectcount.php');
$deltacold = 0 ;
$deltahot = 0 ;

$date = date('Y-m-d H:i:s');
$dataunix = (1000)*(time());
$insert_sql = "INSERT INTO `u646641855_count`.`count` (`id`, `date`,`cold`,`hot`,`deltacold`,`deltahot`,`dataunix`) VALUES (NULL, '$date', '$cwt', '$hwt', 
'$deltacold','$deltahot','$dataunix')";
mysqli_query($dbase, $insert_sql);
}

  
if (isset($_POST['sinchrocold'])&&(isset($_POST['sinchrohot']))) {
$cwt = $_POST['sinchrocold'];
$hwt = $_POST['sinchrohot'];
writedata($cwt,$hwt);


}
echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><p>&#1044;&#1072;&#1085;&#1085;&#1099;&#1077; &#1089;&#1080;&#1085;&#1093;&#1088;&#1086;&#1085;&#1080;&#1079;&#1080;&#1088;&#1086;&#1074;&#1072;&#1085;&#1099;! </p> ";


?>
 <?php
}
?>   