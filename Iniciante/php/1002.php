<?php

$π = 3.14159;
$raio = trim(fgets(STDIN));
$area = $π * ($raio * $raio);
$area = number_format($area, 4, ".", "");
echo "A=$area\n";

?>