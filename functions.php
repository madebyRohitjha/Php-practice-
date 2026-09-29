
<?php


//5 STRING FUNCTIONS


echo strlen("Hello");
echo "<br>";

echo strtoupper("hello");
echo "<br>";

echo strtolower("HELLO");
echo "<br>";

echo trim(" Hello ");
echo "<br>";

echo str_replace("World", "PHP", "Hello World");
echo "<br>";



// 5 MATH FUNCTIONS


echo rand(1, 10);
echo "<br>";

echo round(4.7);
echo "<br>";

echo ceil(4.2);
echo "<br>";

echo floor(4.8);
echo "<br>";

echo abs(-10);
echo "<br>";



// 5 ARRAY FUNCTIONS


$my_array = [5, 2, 8, 1, 3];

echo count($my_array);
echo "<br>";

sort($my_array);
print_r($my_array);
echo "<br>";

$numbers = [10, 20, 30];
echo array_sum($numbers);
echo "<br>";

$numbers2 = [1, 2, 3];
print_r(array_reverse($numbers2));
echo "<br>";

$fruits = ["Apple", "Banana"];
array_push($fruits, "Mango");
print_r($fruits);

?>

