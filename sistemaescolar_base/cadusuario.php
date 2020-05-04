<?php
header("Content-type:text/html; charset=utf8");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="tudo">
     <div class="login">
<!--          logo da empresa-->
         <div align="center">

             <img src="img/logo.png">

                  </div>
         <form action="">

             <div class="form-group">
                 <label for="email">Nome</label>
                 <input type="text" name="nome" class="form-control" placeholder="Nome Completo" required>
             </div>

             <div class="form-group">
                 <label for="email">E-mail</label>
                 <input type="email" name="email" class="form-control" placeholder="email@email.com.br" required>
             </div>
             <div class="form-group">
                 <label for="senha">Senha</label>
                 <input type="password" name="senha" class="form-control" minlength="6" maxlength="15" required>
             </div>
             <div align="center">
                 <button class="btn btn-success" type="submit">Salvar</button>
                 <a href="index.php" class="btn btn-outline-danger"     >Voltar</a>
             </div>


         </form>

     </div>
</div>


</body>
</html