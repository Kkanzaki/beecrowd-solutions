<?php
$A = trim(fgets(STDIN));
$B = trim(fgets(STDIN));
$A = $A * 3.5;
$B = $B * 7.5;
$NOTAS = $A + $B;
$MEDIA = $NOTAS / 11;
$MEDIA = number_format($MEDIA,5,"."," ");
echo "MEDIA = $MEDIA\n";
    ?>