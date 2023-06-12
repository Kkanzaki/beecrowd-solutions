<?php
$p1 = trim(fgets(STDIN));
$p1list = explode(" ", $p1);
$x1 = floatval($p1list[0]);
$y1 = floatval($p1list[1]);

$p2 = trim(fgets(STDIN));
$p2list = explode(" ", $p2);
$x2 = floatval($p2list[0]);
$y2 = floatval($p2list[1]);

$distancia = sqrt((pow($x2 - $x1, 2)) + (pow($y2 - $y1, 2)));
$distancia = number_format($distancia, 4, ".", "");
echo "$distancia\n";
?>