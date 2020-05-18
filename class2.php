<?php

$grating = "Hello ";
$who = "James";

echo $grating;
echo $who;

echo "<h1>".$grating." ".$who."</h1>"; //dot means merge strings in php

$x = 4 ;
$y = 5 ;
echo "<p1>""x = ".$x"</p1>";
echo "<p2>""y = ".$y"</p2>";
echo "<p3>""z = x + y ".($x + $y)"</p3>";

//length of string
echo "<br>".strlen($grating)." string length<br>";
//word count -- count number of words in that string
echo str_word_count($grating)." string word count<br>";
//string reverse
echo strrev($grating)."<br> string reverse";
//string string position
echo strpos($grating, "hello")."word position<br>";
//string replace
echo str_replace($grating, "hello", "byebye")."
word replace<br>";
//to uppercase
echo strtoupper($grating)."To Uppercase<br>";
//to lower
echo strtolower($grating)."To lower case<br>";
