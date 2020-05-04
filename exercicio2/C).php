<?php
//acento
header("Content-type:text/html; charset=utf8");
//variaveis
$desconto10 = 0.50;
$creme = 40.00;
$esmalte = 17.00;
$pomada = 30.00;
$gel = 16.00;
$fixador = 23.50;
$cremedesconto = 0;
$esmaltedesconto = 0;
$pomadadesconto = 0;
$geldesconto = 0;
$fixadordesconto = 0;
//logica desconto 10% do $valor -> %valor * 0.9
$cremedesconto = $creme * $desconto10;
$esmaltedesconto = $esmalte * $desconto10;
$pomadadesconto = $pomada * $desconto10;
$geldesconto = $gel * $desconto10;
$fixadordesconto = $fixador * $desconto10;
//cosmetico
echo ("<body bgcolor=#663399>");
echo ("<br> <img src='imagens/desconto.jfif' width='300px' height='300'>");
echo ("<marquee <h1 style='color:#52bd2e; font-size: 50; background-color: #663399;font-family: Arial'>LOJAS REDE</h1></marquee>");
echo ("<br><h2>PREÇOS PROMOCIONAIS COM 50% DE DESCONTO</h2>");
echo ("<br>Creme de apenas:R$$creme por apenas $cremedesconto$");
echo ("<br>Esmalte de apenas:R$$esmalte por apenas $esmaltedesconto$");
echo ("<br>Pomada Debacetim de apenas:R$$pomada por apenas $pomadadesconto");
echo ("<br>Gel Black de apenas:R$$gel por apenas $geldesconto$");
echo ("<br>Fixador de cilíos de apenas:R$$fixador por apenas $fixadordesconto$");