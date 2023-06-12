<?php
$x = trim(fgets(STDIN));
$y = trim(fgets(STDIN));

$z = $x / $y;
$z = number_format($z, 3, ".", "");
echo "$z km/l\n";
?>