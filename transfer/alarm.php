<?php
 include ('../config.php');
function writealarm($textalarm) {
       $alarm = "../counts/alarm.txt";
       $openalarm = fopen($alarm, 'w') or die("can't open file");
       fwrite($openalarm, $textalarm);
       fclose($openalarm);}
 
 
 if (isset($_POST['ALARM'])) {
 $mes = "$name \n $house \n $kv \n $textalarm  ";
 $send = mail ($address,$sub,$mes, "From: $adresssait");

    writealarm($textalarm);

	}

if ($send == 'true')
{echo  '<html>
        <head>
        <link href="php.css" rel="stylesheet" type="text/css">
        </head>
	    <p class="echo"> Сообщение отправлено успешно!</p>
	    </html>'
                 ;}

 


?>