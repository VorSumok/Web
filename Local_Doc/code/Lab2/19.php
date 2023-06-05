<?php

echo "Циклы";
echo "<br/><br/>";

$exploit = "xxxxxxxxxxxxxxxxxxxx";
for ($i = 0; $i < strlen($exploit)+1; ++$i){
    $j = 0;
    while ($j < $i){
        echo "{$exploit[$j]}";
        $j++;
    }
    echo "<br/>";
}
