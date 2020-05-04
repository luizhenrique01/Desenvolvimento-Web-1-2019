<?php
//variavel
$perimetro = 0;
$area = 0;
$base_retangulo = 5;
$altura = 10;
//conta
$area = $base_retangulo * $altura;
$perimetro = ($base_retangulo + $altura) * 2;
//logica
echo("<body bgcolor=#663399>");
echo("<h1 style='color:#52bd2e; font-size: 50; background-color: #663399;font-family: Arial'>Calculo area & perimetro</h1>");
echo("<br>Valor da base do retangulo: ".$base_retangulo);
echo("<br>Valor da altura: ".$altura);
echo("<br>Valor da area: ".$area);
echo("<br>Valor do perimetro: ".$perimetro);
echo ("<br> <img src='imagens/tringulo.jpg' width='300px' height='300'>");