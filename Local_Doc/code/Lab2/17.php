<?php

echo "Массивы";
echo "<br/><br/>";

echo "1. ";

$store = [];
for ($i = 0; $i < 5; ++$i){
    $store[] = str_repeat('x', $i+1);
}
var_dump($store);

echo "<br/>";
echo "2. ";

function arrayFill(string $myString, int $my_int)
{
    $set = array_fill(0, $my_int, $myString);
    var_dump($set);
}

arrayFill('x', 5);

echo "<br/>";
echo "3. ";

function binArraySum(array $arr)
{
    $sum = null;
    foreach($arr as $item){
        $sum += is_array($item) ? binArraySum($item):$item;
    }
    return $sum;
}

$queues = [[1, 4, 3], [61, 70, 99, 105, 120]];
echo binArraySum($queues);

echo "<br/>";
echo "4. ";

$myQueue = [];

for ($i = 0, $k = 1; $i < 3; $i++){
    for ($j = 0; $j < 3; $j++){
        $myQueue[$i][$j] = $k++;
    }
}

var_dump($myQueue);

echo "<br/>";
echo "5. ";

$arr_5 = [2, 5, 3, 9];

$result = ($arr_5[0]*$arr_5[1])+($arr_5[2]*$arr_5[3]);
echo $result;

echo "<br/>";
echo "6. ";

$user = ['name'=>'Александр', 'surname'=>'Штейнберг', 'patronym'=>'Абрамович'];
echo $user['surname']." ".$user['name']." ".$user['patronym'];

echo "<br/>";
echo "7. ";

$date = ['year'=>2023, 'month'=>6, 'day'=>6];
echo $date['year']."-".$date['month']."-".$date['day'];

echo "<br/>";
echo "8. ";

$arr1 = ['a', 'b', 'c', 'd', 'e'];
echo count($arr1);

echo "<br/>";
echo "9. ";

echo $arr1[count($arr1)-1]." ".$arr1[count($arr1)-2];
