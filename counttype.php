<meta http-equiv='refresh' content='1; url=http://counts.esy.es/admin.php'> 
<meta charset="UTF-8" />
<?php
      function writetype($owt) {
       $type = "counts/type.txt";
       $opentype = fopen($type, 'w') or die("can't open file");
       fwrite($opentype, $owt);
       fclose($opentype);}
if (isset($_POST['counttype'])) {
	$owt = $_POST['counttype'];
   
    writetype($owt);

}
echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><p>
Тип датчика изменен! </p> ";

                  		
 
?>