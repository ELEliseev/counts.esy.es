<?php 

$alarm = "../counts/alarm.txt";

$openalarm = fopen($alarm, 'r');

$awt = fread($openalarm, filesize($alarm));

fclose($openalarm);

echo $awt;

            ?>