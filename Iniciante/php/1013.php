<?php
$abc = trim(fgets(STDIN));
$abclist = explode(" ", $abc);
$a = intval($abclist[0]);
$b = intval($abclist[1]);
$c = intval($abclist[2]);

$maiorab = ($a + $b + abs($a - $b)) / 2;
$maiorabc = ($maiorab + $c + abs($maiorab - $c)) / 2;

echo "$maiorabc eh o maior\n";
?>