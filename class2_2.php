<?php
date_default_timezone_set('Pacific/Auckland');
//take the time from system or online
//data function to take the time out from system or online
$t = date("Y-m-d"); //https://www.php.net/manual/en/function.date.php
$t1 = date("H:i:s");
echo $t." ".$t1;

$hour = intval(date("H"));
$minutes = intval(date("i"));
echo "<p>h: ".$hour."</p>";
echo "<p>m: ".$minutes."</p>";

if ($hour>=10 && $minutes <= 30){ //&& means and || means or.
    //work before 10:30
    echo "<p>"."Have a good morning"."</p>";
}elseif ($hour<20){
    //work before 21:00
    echo "<p>"."Have a good day"."</p>";
}else {
    //work after 21:00 to 10:20
    echo "<p>"."Have a good night"."</p>";
}