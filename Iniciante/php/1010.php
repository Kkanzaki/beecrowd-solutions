<?php
$p1 = trim(fgets(STDIN));
$p2 = trim(fgets(STDIN));

$p1list = explode(" ",$p1);
$p1cod = intval($p1list[0]);
$p1num = intval($p1list[1]);
$p1val = floatval($p1list[2]);

$p2list = explode(" ",$p2);
$p2cod = intval($p2list[0]);
$p2num = intval($p2list[1]);
$p2val = floatval($p2list[2]);

$preco1 = $p1val * $p1num;
$preco2 = $p2val * $p2num;
$preco = $preco1 + $preco2;
$preco = number_format($preco, 2, ".", "");

echo "VALOR A PAGAR: R$ $preco\n";
?>