<?php
echo "Регулярные выражения";
echo "<br/><br/>";

echo "a. ";

$str = 'ahb acb aeb aeeb adcb axeb';
$regout = '/a[a-zA-Z]{2}b/i';
$matches = [];

$count = preg_match_all($regout, $str, $matches);
echo "Найдено соответствий: {$count}\n";
var_dump($matches);

echo "<br/>";
echo "b. ";

$mah = 'a1b2c3';
$regexp = '/([a-zA-Z]{1})([0-9]{1})([a-zA-Z]{1})([0-9]{1})([a-zA-Z]{1})([0-9]{1})/';
$result = preg_replace($regexp, '$1 1 $3 8 $5 27', $mah);

echo $result;
