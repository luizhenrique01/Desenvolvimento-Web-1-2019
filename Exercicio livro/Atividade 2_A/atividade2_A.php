<?php
//variavel
$num1 =  $_POST["num1"];
$num2 = $_POST["num2"];

//logica

if($num1 > $num2){
echo  "O maior numero e o $num2";
} else{
    echo "O maior valor e o $num1";
}
echo "<br><a href='index.html'>Voltar</a>";