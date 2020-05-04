<?php
header("Content-type:text/html; charset=utf8");
//variavel
$numero = $_POST["numero"];
//logica
if (($numero % 2 == 0)){
    echo "Número par";
} else{
    echo "Número ímpar";
}
echo "<br><a href='index.html'>Voltar</a>";