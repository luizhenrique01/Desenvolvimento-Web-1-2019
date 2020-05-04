<?php
//bloquear usariario que tentou entrar sem login
//isset() funcao para validar se a varaiavel exist
if(!isset($_POST["usuario"]) && !isset($_POST["senha"]) && !isset($_POST["tipo"])){
//devolver usuario para login
//com mensagem animadora de trollagem

    echo "<script>
      alert('Formatando seu pc em 3.2.1...');
      window.location.href = 'index.html';
      </script>";
} else{ //validar se o usario e senha estao corretos
  $loginpadrao = "21902267";
  $senhapadrao = "123456";
  if($loginpadrao == $_POST["usuario"] && $senhapadrao == $_POST["senha"] ){
      //login ou senha errados
      header("location: index_adm.html");
  }else{//login e senha errados

      echo "<script>
      alert('Login e senhas incorretos');
      window.location.href = 'index.html';
      </script>";

  }



}


