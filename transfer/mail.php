

<?php
include ('sendmail.php');
include ('../config.php');
 

if (isset($name2) && isset($house2) && isset($kv2) 
 && isset($text2) && isset($cold) && isset($hot)
  && isset($sub2)){
 
$mes = "$name2 \n $house2 \n $kv2 \n $text2 \n $cold \n $hot ";
$send = mail ($address2,$sub2,$mes, "From: $adresssait2");
if ($send == 'true')
{echo  '<html>
        <head>
        <link href="php.css" rel="stylesheet" type="text/css">
        </head>
	    <p class="echo"> Сообщение отправлено успешно!</p>
	    </html>'
                 ;}
else {echo '<html>
           <head>
           <link href="php.css" rel="stylesheet" type="text/css">
           </head>
	       <p class="echo"> Ошибка, сообщение не отправлено! </p>
	       </html>'
                 ;}
 
}
else
{echo '<html>
      <head>
      <link href="php.css" rel="stylesheet" type="text/css">
      </head>
	  <p class="echo"> Вы заполнили не все поля,  заполните необходимые поля! </p>
	  </html>'
                ;}
?>






