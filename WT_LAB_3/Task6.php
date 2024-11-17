<?php

$arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
$search = 3;
$found = false;

echo "Given array: ";
for ($i = 0; $i < count($arr); $i++) 
{
    echo $arr[$i] . " ";
}
echo "<br>";

foreach ($arr as $array) 
{
    if ($search == $array) 
	{
        echo "Element ".$search." is found!<br>";
        $found = true;
    }
}

if (!$found) 
{
    echo "Element ".$search." is not found!<br>";
}
?>
