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
      $cwt = $res['cold'];
      
    }
    else{
      echo  'В  таблице нет данных !';
   }
  }





echo $cwt;

            ?>