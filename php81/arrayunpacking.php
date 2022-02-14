<?php
$array1 = ["a" => 1];
$array2 = ["a" => 2];
$array = ["a" => 0, ...$array1, ...$array2];
var_dump($array); // ["a" => 2]

$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$array = [...$array1, ...$array2];
var_dump($array); // [1, 2, 3, 4, 5, 6]
// Which is [0 => 1, 1 => 2, 2 => 3, 3 => 4, 4 => 5, 5 => 6]
// where the original integer keys have not been retained.



$array1 = ['john' => 'doe'];
$array2 = ['harry' => 'potter'];
$array = [...$array1, ...$array2];
echo "<pre>";
var_dump($array);
// ['john' => 'doe', 'harry' => 'potter']

$array1 = ['john' => 'doe'];
$array2 = ['john' => 'potter'];
$array = [...$array1, ...$array2];
echo "<pre>";
var_dump($array);
// ['john' => 'potter']

$array1 = ['c' => 'red', 'b' => 'green'];
$array2 = ['a' => 'blue', 'c' => 'gray'];
$array = [...$array1, ...$array2];
 
print_r($array); // ([c] => gray [b] => green [a] => blue)

 
$array1 = [2 => 'red', 4 => 'green'];
$array2 = [1 => 'blue', 2 => 'gray'];
$array = [...$array1, ...$array2];
 
print_r($array); // ([0] => red [1] => green [2] => blue [3] => gray)

?>