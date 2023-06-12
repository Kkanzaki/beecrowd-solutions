<?php
$NOME = fgets(STDIN);
$FIXO = fgets(STDIN);
$VENDAS = fgets(STDIN);
$SALARIO = $FIXO + $VENDAS * 0.15;
$SALARIO = number_format($SALARIO, 2, ".", "");
echo "TOTAL = R$ $SALARIO\n";
?>