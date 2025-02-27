<?php
$array = [];

array_push($array, "Elemento 1");
array_push($array, "Elemento 2");
array_push($array, "Elemento 3");

echo $array[0];
echo $array[1];

$array[] = "Elemento 4";

print_r($array);
?>
