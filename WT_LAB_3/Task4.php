<?php

$num1 = 51;
$num2 = 61;
$num3 = 71;

echo "Given 3 numbers = ".$num1.", ".$num2.", ".$num3." <br>"; 

if( $num1 > $num2 && $num1 > $num3 ) 
{
    echo " $num1 is the largest number.<br>";
} 
elseif ($num2 > $num1 && $num2 > $num3 ) 
{
    echo " $num2 is the largest number.<br>";
} 
else 
{
    echo " $num3 is the largest number.<br>";
} 

?>