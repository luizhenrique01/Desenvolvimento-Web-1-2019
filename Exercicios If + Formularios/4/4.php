<?php
//variavel
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];
//logica
if ($n1 > $n2 && $n1 > $n3){
    echo "O maior numero e: ".$n1;
} else if ($n2 > $n1 && $n2 > $n3){
    echo "O maior numero e: ".$n2;
} else if ($n3 > $n2 && $n3 > $n1){
    echo "O maior numero e: ".$n3;
}
echo "<br><a href='index.html'>Voltar</a>";
