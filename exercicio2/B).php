<?php
//acento
header("Content-type:text/html; charset=utf8");
//variavel
$euro = 4.32;
$dolar = 3.81;
$libraesterina = 5.06;
$iene = 0.034;
$bitcoin = 14.695;
$dolarcanadense = 2.87;
$real = 10;
$valoreuro = 0;
$valordolar = 0;
$valorlibraesterina = 0;
$valoriene = 0;
$valorbitcoin = 0;
$valordolarcanada = 0;
//logica
$valoreuro = $real / $euro;
$valordolar = $real / $dolar;
$valorlibraesterina = $real / $libraesterina;
$valoriene = $real / $iene;
$valorbitcoin = $real / $bitcoin;
$valordolarcanada = $real / $dolarcanadense;
//cosmetico
echo ("<body bgcolor=#663399>");
echo ("<br> <img src='imagens/moeda.jfif' width='300px' height='300'>");
echo ("<h1 style='color:#52bd2e; font-size: 50; background-color: #663399;font-family: Arial'>Cotação 10 Reais</h1>");
echo ("<br><h2>TABELA INCIAL DE COTAÇÃO</h2>");
echo ("<br>Real: $".$real);
echo ("<br>Euro: $".$euro);
echo ("<br>Dolar: $".$dolar);
echo ("<br>Libra Esterina: $".$libraesterina);
echo ("<br>Bitcoin: $".$bitcoin);
echo ("<br>iene: $".$iene);
echo ("<br>Dolar Canadense: $".$dolarcanadense);
echo ("<br><h2> Valor da cotação partindo de 10R$</h2>");
echo ("<br>Valor Euro convertido: $".$valoreuro);
echo ("<br>Valor Dolar convertido: $".$valordolar);
echo ("<br>Valor Libra Esterina convertido: $".$valorlibraesterina);
echo ("<br>Valor Bitcoin convertido: $".$bitcoin);
echo ("<br>Valor Ienes convertido: $".$valoriene);
echo ("<br>Valor Dolar Canadense convertido: $".$valordolarcanada);
