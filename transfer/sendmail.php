<?php 

include ('../connectcount.php');
	 $sql = "SELECT * FROM `count` ORDER BY  id DESC LIMIT 1";
     $query = mysqli_query($dbase, $sql);          
  if(!$query){
    echo 'Не удалось выполнить авторизацию!';
    }
  else {
    if (mysqli_num_rows($query) > 0){
      $res = mysqli_fetch_array($query);
      $hwt = $res['hot'];
      $cwt = $res['cold'];
    }
    else{
      echo  'В  таблице нет данных !';
   }
  }
$cwt=intval($cwt/1000);
$hwt=intval($hwt/1000);
$cold="Хол 10-08-12517-AB ($cwt)";
$hot="Гор 12-04-18910-AB ($hwt)";


               ?>