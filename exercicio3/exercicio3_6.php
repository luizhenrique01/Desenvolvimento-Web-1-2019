<?php
//acento
header("Content-type:text/html; charset=utf8");
//variavel
$y =0;
$x =5;
//conta
$y = ($x * $x) + 5 * $x +6;
//logica
echo("<body bgcolor=#663399>");
echo("<h1 style='color:#52bd2e; font-size: 50; background-color: #663399;font-family: Arial'>Calculo de Y</h1>");
echo("<br> y=(x.x)+5.x+6");
echo("<br>Valor de X: ".$x);
echo("<br>Valor da y: ".$y);
echo ("<br> <img src='imagens/zap.png' width='300px' height='300'>");