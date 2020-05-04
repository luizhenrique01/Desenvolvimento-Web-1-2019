<?php
//acento
header("Content-type:text/html; charset=utf8");
//variaveis
$pessoas = 5;
$conta = 150.00;
$extras = 10.00;
$garcom = 1.1;
$totalconta = 0;
$valorpessoa = 0;
//cosmetico

echo ("<body bgcolor=#663399>");
echo ("<br> <img src='imagens/garcom.jfif' width='300px' height='300'>");


// calcular porcentagem na matematica -> 10% 50 == 50 * (10/100)
// calcular porcentagem na programacao
// 10% de $valor -> $valor * 0.1
// desconto 10% do $valor -> %valor * 0.9
// acrescentar 10% do $valor -> $valor * 1.1

//logica
$totalconta =$conta + $extras + $garcom;
$valorpessoa = $totalconta / $pessoas;

//resultado

echo ("<h1 style='color:#52bd2e; font-size: 50; background-color: #663399;font-family: Arial'>Racha da Conta</h1>");
echo ("<br>Quantidade de pessoas: ".$pessoas);
echo ("<br>Extras: $".$extras);
echo ("<br>10% do garçom: $".$totalconta * 0.1);
echo ("<br>Total a pagar: $".$totalconta);
echo ("<br>Valor a pagar por pessoas: $".$valorpessoa);



