<?php
$input = array(10, 12, 20, 22 , 30, 32, 40, 42, 50, 52);
echo (var_dump($input)) . "<br>";
$rand_keys = array_rand($input, 2);
echo ($input[$rand_keys[0]]) . "\n";
echo ($input[$rand_keys[1]]) . "\n"; 
 $number = 42; 
echo ("Le nombre  " .$number. " est dans le tableau");
?>