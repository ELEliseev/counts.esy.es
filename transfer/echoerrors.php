<?php 

$errors = "../counts/errors.txt";

$openerrors = fopen($errors, 'r');

$ewt = fread($openerrors, filesize($errors));

fclose($openerrors);

echo $ewt;

            ?>