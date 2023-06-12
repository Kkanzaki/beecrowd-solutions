<?php
$NUMBER = fgets(STDIN);
$WORKED = fgets(STDIN);
$HOUR = fgets(STDIN);
$SALARY = $WORKED * $HOUR;
$SALARY = number_format($SALARY, 2, ".", "");
echo "NUMBER = $NUMBER";
echo "SALARY = U$ $SALARY\n";
?>