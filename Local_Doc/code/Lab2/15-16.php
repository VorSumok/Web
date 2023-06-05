<?php
echo "Функции";
echo "<br/><br/>";

echo "1. ";
function printStringReturnNumber(): int
{
    echo "строка ";
    $my_num12 = rand();
    return $my_num12;
}
$my_num = printStringReturnNumber()
echo $my_num;

echo "<br/><br/>";
echo "2. ";

function increaseEnthusiasm(string $inlet): string
{
    return $inlet."!";
}

$myString = "О да, обожаю эти строки";
echo increaseEnthusiasm($myString);

echo "<br/>";
echo "3. ";

function repeatThreeTimes(string $spring): string
{
    return $spring.$spring.$spring;
}

$mantra = "ММММММ, эти строки \n";
echo repeatThreeTimes($mantra);

echo "<br/>";
echo "4. ";

$ping = repeatThreeTimes("СТРОКИ");
echo increaseEnthusiasm($ping);

echo "<br/><br/>";
echo "5. ";

function cut(string $dirk, int $howirst = 10): string
{
    $remainer = substr($dirk, 0, $howirst);
    return $remainer;
}

$example = "Сколько всего сстрок в этой работе?";
echo cut($example,20);

echo "<br/>";
echo "6. ";

function printFromTheArray(array $afdaf)
{
    var_dump(array_shift($afdaf));

    if (count($afdaf) !== 0){
        printFromTheArray($afdaf);
    }
}

$comfa = array(1, 4333, 94221, 541, 66, 754321);
echo printFromTheArray($comfa);

echo "<br/>";
echo "7. ";

function CypherIndeed(int $num): int
{
    $plii = $num;
    $count = 0;

    while ($plii > 0){
        $plii = floor($plii/10);
        ++$count;
    }

    $diff = $count-1;
    $s = floor($num/pow(10,$diff));

    $arr = [];
    $arr[] = $s;
    while ($diff >= 1){
        $s = floor($num/pow(10,$diff-1))%10;
        $arr[] = $s;
        --$diff;
    }

    $result = array_sum($arr);
    if ($result > 9) {
        $result = CypherIndeed($result);
    }
    return $result;
}

$faler = 13579;
echo CypherIndeed($faler);
