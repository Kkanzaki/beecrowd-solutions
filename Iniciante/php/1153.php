<?php
$n = trim(fgets(STDIN));
$j = 1;
for ($i = 1; $i <= $n; $i++) {
    $j *= $i;
}
echo "$j\n";
?>