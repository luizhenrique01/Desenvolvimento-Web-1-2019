<?php
header("Content-type:text/html; charset=utf8");
//variavel
$numero = $_POST["numero"];
//logica
if ($numero > 3 || $numero > 25){
    echo "Número valido";
} else{
    echo "Número invalido";
}
echo "<br><a href='index.html'>Voltar</a>";