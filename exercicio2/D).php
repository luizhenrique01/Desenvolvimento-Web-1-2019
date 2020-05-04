<?php
//acento
header("Content-type:text/html; charset=utf8");
//variaveis
$desconto5 = 0.50;
$elemental = 290.00;
$maxsteal = 310.00;
$imaginex = 460.00;
$boneca = 180.00;
$kitfogao = 300.00;
$elementaldesconto = 0;
$maxstealdesconto = 0;
$imaginexdesconto = 0;
$bonecadesconto = 0;
$kitfogaodesconto =0;
//logica desconto de 5% valor * 0.05
$elementaldesconto = $elemental * $desconto5;
$maxstealdesconto = $maxsteal * $desconto5;
$imaginexdesconto = $imaginex * $desconto5;
$bonecadesconto = $boneca * $desconto5;
$kitfogaodesconto = $kitfogao * $desconto5;
//cosmetico
echo ("<body bgcolor=#663399>");
echo ("<br> <img src='imagens/gerente.jfif' width='300px' height='300'>");
echo ("<marquee <h1 style='color:#52bd2e; font-size: 50; background-color: #663399;font-family: Arial'>O GERENTE FICOU MALUCO</h1></marquee>");
echo ("<br><h2>PREÇOS PROMOCIONAIS COM INSANOS 50%... ISSO MESMO 50% DE DESCONTO</h2>");
echo ("<br>Elemental operação Artico de apenas:R$$elemental por apenas $elementaldesconto$");
echo ("<br>Max Steal operação Artico ed apenas:R$$maxsteal por apenas $maxstealdesconto$");
echo ("<br>Conjunto Imaginex de apenas:R$$imaginex por apenas $imaginexdesconto$");
echo ("<br>Kit Fogãozinho divertido de apenas:R$$kitfogao por apenas $kitfogaodesconto$");
echo ("<br>Bonecas linha BabyAlive de apenas:R$$boneca por apenas $bonecadesconto$");
