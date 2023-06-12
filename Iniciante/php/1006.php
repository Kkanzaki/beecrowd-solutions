<?php
$A = fgets(STDIN);
$B = fgets(STDIN);
$C = fgets(STDIN);
$A = $A * 2;
$B = $B * 3;
$C = $C * 5;
$NOTAS = $A + $B + $C;
$MEDIA = $NOTAS / 10;
$MEDIA = number_format($MEDIA,1,"."," ");
echo "MEDIA = $MEDIA\n";
    ?>