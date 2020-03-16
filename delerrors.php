<meta http-equiv='refresh' content='1; url=http://counts.esy.es/admin.php'> 
<meta charset="UTF-8" />
<?php

      function writeerrors($ewt) {
       $errors = "counts/errors.txt";
       $openerrors = fopen($errors, 'w') or die("can't open file");
       fwrite($openerrors, $ewt);
       fclose($openerrors);}
	  function writealarm($text) {
       $alarm = "counts/alarm.txt";
       $openalarm = fopen($alarm, 'w') or die("can't open file");
       fwrite($openalarm, $text);
       fclose($openalarm);}
    $ewt='&#1086;&#1096;&#1080;&#1073;&#1086;&#1082; &#1085;&#1077;&#1090;';
	$text = 'ДАТЧИКИ В НОРМЕ';
    writeerrors($ewt);
    writealarm($text);

echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><p>&#1086;&#1096;&#1080;&#1073;&#1082;&#1080; &#1091;&#1076;&#1072;&#1083;&#1077;&#1085;&#1099;! </p> ";

                  		
 
?>