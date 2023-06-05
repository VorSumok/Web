<?php
echo "Комбинация функций";
echo "<br/><br/>";

echo "1. ";

$numb = [10, 11, 12, 13, 14];
echo array_sum($numb)/count($numb);

echo "<br/>";
echo "2. ";

echo array_sum(range(1, 100));

echo "<br/>";
echo "3. ";

$vinad = [52, 19, 756, 23, 93, 9];
$virtud = array_map('sqrt', $vinad);
var_dump($virtud);

echo "<br/><br/>";
echo "4. ";

$keys = range('a', 'z');
$elems = range(1, 26);
$albe = array_combine($keys, $elems);
var_dump($albe);

echo "<br/><br/>";
echo "5. ";

$socket = '1234567890';
$drawer = str_split($socket, 2);
$result = array_sum($drawer);
echo $result;
