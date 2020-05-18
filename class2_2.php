<?php
date_default_timezone_set('Pacific/Auckland');
//take the time from system or online
//data function to take the time out from system or online
$t = date("Y-m-d"); //https://www.php.net/manual/en/function.date.php
$t1 = date("H:i:s");
echo $t." ".$t1;
