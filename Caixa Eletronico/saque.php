<?php
$saque = $_POST["saque"];
$reais100 = 0;
$reais100G = 0;

$reais50 = 0;
$reais50G = 0;

$reais20 = 0;
$reais20G = 0;

$reais10 = 0;
$reais10G = 0;

$reais5 = 0;
$reais5G = 0;

$reais01 = 0;
$reais01G = 0;

$reais100 = floor($saque / 100);
$reais100G = $reais100 % 100;

$reais50 = floor($reais100G / 50);
$reais50G = $reais50 % 50;

$reais20 = floor($reais50G / 20);
$reais20G = $reais50 % 20;

$reais10 = floor($reais20G / 10);
$reais10G = $reais20 % 10;

$reais5 = floor($reais10G / 5);
$reais5G = $reais10 % 5;

$reais01 = floor($reais01G / 1);



echo ("<br><br>Notas de 100: ".$reais100);
echo "<br><br><br><img src='img_notas/100reais.jpg'></td>";
echo ("<br><br> Notas de 50: ".$reais50);
echo "<br><br><br><img src='img_notas/50reais.jpg'></td>";
echo ("<br><br>Notas de 20:".$reais20);
echo "<br><br><br><img src='img_notas/100reais.jpg'></td>";
echo ("<br><br>Notas de 10:".$reais10);
echo "<br><br><br><img src='img_notas/100reais.jpg'></td>";
echo ("<br><br>Notas de 5:".$reais5);
echo "<br><br><br><img src='img_notas/5reais.jpg'></td>";
echo ("<br><br>Notas de 1:".$reais01);
echo "<br><br><br><img src='img_notas/1real.jpg'></td>";

