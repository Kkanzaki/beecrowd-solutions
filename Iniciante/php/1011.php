<?php
$raio = trim(fgets(STDIN));
$pi = 3.14159;
$volume = (4 / 3.0) * $pi * ($raio * $raio * $raio);
$volume = number_format($volume, 3, ".", "");
echo "VOLUME = $volume\n";
?>