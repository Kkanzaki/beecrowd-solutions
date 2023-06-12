<?php
$valores = trim(fgets(STDIN));
$vlist = explode(" ", $valores);
$a = floatval($vlist[0]);
$b = floatval($vlist[1]);
$c = floatval($vlist[2]);

$triangulo = ($a * $c) / 2;
$triangulo = number_format($triangulo, 3, ".", "");
echo "TRIANGULO: $triangulo\n";

$pi = 3.14159;
$circulo = $pi * ($c * $c);
$circulo = number_format($circulo, 3, ".", "");
echo "CIRCULO: $circulo\n";

$trapezio = (($a + $b) * $c) / 2;
$trapezio = number_format($trapezio, 3, ".", "");
echo "TRAPEZIO: $trapezio\n";

$quadrado = $b * $b;
$quadrado = number_format($quadrado, 3, ".", "");
echo "QUADRADO: $quadrado\n";

$retangulo = $a * $b;
$retangulo = number_format($retangulo, 3, ".", "");
echo "RETANGULO: $retangulo\n";
?>