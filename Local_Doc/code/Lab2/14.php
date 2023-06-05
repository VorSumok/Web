<?php
echo "Математические функции";
echo "<br/><br/>";

echo "Работа с %";
echo "<br/><br/>";

echo "1. ";

$a = 10;
$b = 3;

echo $a % $b;

echo "<br/>";
echo "2. ";

if ($a % $b == 0) {
    echo "Делится";
    echo $a / $b;
}
else {
    echo "Не делится: ";
    echo $a % $b;
}
echo "<br/><br/>";
echo "Работа со степенью и корнем";
echo "<br/><br/>";

echo "1. ";

$st = pow(2, 10);
echo $st;

echo "<br/>";
echo "2. ";

echo sqrt(245);

echo "<br/>";
echo "3. ";

$set = [4, 2, 5, 19, 13, 0, 10];
$squares_sum = 0;

foreach ($set as $item)
{
    $item **= 2;
    $squares_sum += $item;
}

echo sqrt($squares_sum);

echo "<br/><br/>";
echo "Работа с функциями округления";
echo "<br/><br/>";

echo "1. ";

$pvt1 = sqrt(379);

echo round($pvt1)." ".round($pvt1, 1)." ".round($pvt1, 2);

echo "<br/>";
echo "2. ";

$pvt2 = sqrt(587);

$pvt = ['floor' => floor($pvt2), 'ceil' => ceil($pvt2)];

$pivot = '';

foreach($pvt as $key => $value){
    $pivot .= $key . "=>" . $value . " ";
}
echo $pivot;

echo "<br/><br/>";
echo "Работа с min и max";
echo "<br/><br/>";

$arm = [4, -2, 5, 19, -130, 0, 10];

echo max($arm)." ".min($arm);

echo "<br/><br/>";
echo "Работа с рандомом";
echo "<br/><br/>";

echo "1. ";

echo rand(1, 100);

echo "<br/>";

echo "2. ";

$aof = [0,0,0,0,0,0,0,0,0,0];
for ($i=0; $i<10; $i++) {
    $aof[$i] = rand();
}
print_r($aof);// решил попробовать, хотя ещё не до конца понимаю как она работает


echo "<br/><br/>";
echo "Работа с модулем";
echo "<br/><br/>";

echo "1. ";

$a1 = 7;
$b1 = 1000;

echo abs($a1 - $b1);

echo "<br/>";
echo "2. ";

$ufaec = [1, 2, -1, -2, -3];

foreach($ufaec as $item)
{
    if ($item < 0){ $item = abs($item); }
    echo $item." ";
}

echo "<br/><br/>";
echo "Общее";
echo "<br/><br/>";

echo "1. ";

$c = 88;

$r = [];
for ($t = 1; $t * $t < $c; ++$t) {
    if ($c % $t == 0) {
        $r[] = $t;
        $r[] = $c / $t;
    }
}
if ($t * $t == $c) { $r[] = $t; }

foreach ($r as $item) { echo $item." "; }

echo "<br/>";
echo "2. ";

$sample = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$sum = 0;
$count = 0;

foreach($sample as $item){
    $sum += $item;
    ++$count;
    if ($sum > 10){ break; }
}
echo $count;
