<?php

$array = array(
    array(1, 2, 3, 'A'),
    array(1, 2, 'B', 'C'),
    array(1, 'D', 'E', 'F')
);

echo "The array to declare:<br>";
foreach ($array as $row) 
{
    foreach ($row as $element) 
    {
        echo $element." ";
    }
    echo "<br>";
}
echo "<br>";


for ($i=3;$i>=1;$i--)
{
    for ($j=1;$j<=$i;$j++) 
    {
        echo $j." ";
    }
    echo "<br>";
}
echo "<br>";


$char = 'A';
for ($i=0;$i<3;$i++)
{
    for ($j=0;$j<=$i;$j++) 
    {
        echo $char." ";
        $char++;
    }
    echo "<br>";
}


?>
