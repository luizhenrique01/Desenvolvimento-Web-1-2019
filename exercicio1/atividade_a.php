<?php


//aceitar acento
header("Content-type:text/html; charset=utf8");

//variaveis

$numero1 = 20;
$numero2 = 30;
//cosmetico
echo ("<body bgcolor='#7fffd4'>");
echo("<h1 style='color:#52bd2e; font-size: 50; background-color: #7fffd4;font-family: Arial'>Calculadora Basica</h1>");

//resultado
//parenteses para realizar calculos
echo ("<br> A soma dos números: ".($numero1 + $numero2));
echo ("<br> A subtração dos números: ".($numero1 - $numero2));
echo ("<br> A multiplicação dos números: ".($numero1 * $numero2));
echo ("<br> A divisão dos números($numero1 $numero2) = ". number_format(($numero1 / $numero2),2));
echo ("<br> <img src='imagens/queijo.jfif' width='300px' height='300'>");



?>

