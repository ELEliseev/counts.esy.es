<?php
session_start();
include ('connect.php');
if($_POST['logoff']=='ok') $_SESSION['auth'] = false;
if($_POST['login_start']=="ok"){
  $login = addslashes(strip_tags(trim($_POST['login'])));
  $password = md5(addslashes(strip_tags(trim($_POST['password']))));
  $sql = "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' LIMIT 1";
  $query = mysqli_query($dbase, $sql);
  if(!$query){
    echo 'Не удалось выполнить авторизацию!';
  }
  else{
    if (mysqli_num_rows($query) > 0){
      $res = mysqli_fetch_array($query);
      $_SESSION['auth'] = true;
      $_SESSION['login'] = $res['login'];
    }
    else{
      $sys_msg = 'Вы не авторизованы. Проверьте правильность Логина и Пароля!';
   }
  }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="admin.css" rel="stylesheet" type="text/css">
</head>
<body>
  <?php
    include ('formindex.php');
    echo $sys_msg;
  ?>
</body>
</html>
