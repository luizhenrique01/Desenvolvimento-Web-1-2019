<?php
//aceitar acento
header("Content-type:text/html; charset=utf8");

//variaveis
$nome = "Luiz";
$sobrenome = "Henrique";
//cosmetico
echo ("<body bgcolor=#663399>");
echo ("<br> <img src='imagens/google.png' width='300px' height='300'>");

//resultado
echo("<h1 style='color:#52bd2e; font-size: 50;font-family: Arial'>Exibir Meu Nome</h1>");
echo ("<br> Nome: ".$nome);
echo ("<br> Sobre nome ".$sobrenome);
echo ("<br> Nome completo ".($nome . " " .$sobrenome));
?>