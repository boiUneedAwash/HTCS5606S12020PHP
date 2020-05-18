<?php
date_default_timezone_set('Pacific/Auckland');
//take the time from system or online
//data function to take the time out from system or online
$t = date("Y-m-d"); //https://www.php.net/manual/en/function.date.php
$t1 = date("H:i:s");
echo $t." ".$t1;

$hour = date("H");
$minutes = date("i");

if ($hour<"10" && $minutes < "10"){
    echo "<p>"."Have a good morning"."</p>";
}elseif ($hour<"20"){
    echo "<p>"."Have a good day"."</p>";
}else {
    echo "<p>"."Have a good night"."</p>";
}