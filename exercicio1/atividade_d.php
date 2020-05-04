<?php
//aceitar acento
header("Content-type:text/html; charset=utf8");
//variaveis
$nome1 = "Jurandir:";
$nome2 = "Maria:";
$nome3 = "Paulo:";
$nome4 = "Farlen:";
$nome5 = "Thiago:";
$nome6 = "Ilg:";
$materias1 = "Matematica";
$materias2 = "Filosofia";
$materias3 = "Quimica";
$materias4 = "DevWeb";
$materias5 = "TEP";
$materias6 ="Matematica2";
//cosmetico
echo ("<body bgcolor=#add8e6>");
//resultado
echo("<h1 style='color:#52bd2e; font-size: 50;font-family: Arial'>Professores e Materias</h1>");
echo ("<br>".$nome1 . " " .$materias1);
echo ("<br>".$nome2 . " " .$materias2);
echo ("<br>".$nome3 . " " .$materias3);
echo ("<br>".$nome4 . " " .$materias4);
echo ("<br>".$nome5 . " " .$materias5);
echo ("<br>".$nome6 . " " .$materias6);
echo ("<br> <img src='imagens/BD.jfif' width='300px' height='300'>");
?>