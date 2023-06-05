<?php

echo "Конструкция if-else";
echo "<br/></br>";

echo "1. ";

function sum_restrict(int $am, int $an): string
{
    if ($am + $an > 10){ return "true"; }
    else { return "false"; }
}

echo sum_restrict(-2, 8)." ".sum_restrict(7, 9);

echo "<br/>";
echo "2. ";

function ifequal(int $en, int $em): string
{
    if ($en === $em) { return "true"; }
    else { return "false"; }
}

echo ifequal(525, 525)." ".ifequal(412, 83);

echo "<br/>";
echo "3. ";

$test = 0;
echo ($test === 0 ? 'верно' : '');

echo "<br/>";
echo "4. ";

$age = 96;

if ($age < 10 || $age > 99){
    echo "Заданное число меньше десяти или больше девяноста девяти";
}
else {
    $vzhukh = $age;
    $count1 = 0;

    while ($vzhukh > 0){
        $vzhukh = floor($vzhukh/10);
        ++$count1;
    }

    $diff1 = $count1-1;
    $s1 = floor($age/pow(10, $diff1));

    $darr = [];
    $darr[] = $s1;
    while ($diff1 >= 1){
        $s1 = floor($age/pow(10, $diff1-1))%10;
        $darr[] = $s1;
        --$diff1;
    }

    $esum = array_sum($darr);
    if ($esum <= 9){
        echo "Сумма цифр заданного числа однозначна";
    }
    else {
        echo "Сумма цифр заданного числа двузначна";
    }
}

echo "<br/>";
echo "5. ";

$arr = [5, 9, 3];
if (count($arr) === 3){
    echo array_sum($arr);
}
