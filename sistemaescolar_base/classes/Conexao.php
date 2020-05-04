<?php

class Conexao
{
    //atributos
 private $servidor;
 private $banco;
 private $usuario;
 private $senha;
     //metodos
function __construct()
{
    //definir os valores dos atributos
    $this->servidor = "localhost";
    $this->banco = "sistema_escolar2d2";
    $this->usuario = "root";
    $this->senha = "";
}

//criar o metodo para conectar o PDO

    public function conectar()
    {
      //validar execução do codigo
        try {
            //conexao cm PDO
            $con = new PDO("mysql:host=".$this->servidor.";dbname=".$this->banco
            .";charset=utf8;",$this->usuario,$this->senha);
            return $con;

        } catch (PDOException $msg){
            echo "Erro ao conectar ao banco de dados: ".$msg->getMessage();
        }


    }

}