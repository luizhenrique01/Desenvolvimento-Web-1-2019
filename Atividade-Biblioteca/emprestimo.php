<?php
$livro = $_GET["livro"];
?>
<html>
<head>
    <title>Empresitimo</title>
    <meta charset="UTF-8">
    <title>Emprestimo</title>
    <!--Importar bototstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--importar javascript-->
    <script src="ja/bootstrap.min.ja"></script>

</head>
<body>
<div class = "row">
    <div class = "col-md-4"></div>
    <div class ="col-md-4" >
        <h3>Emprestimo</h3><br><br><br>
        <form action="recibo.php" method="post">


        <label>Nome Do livro</label><br>
        <input type="text" value="<?php echo $livro ?>" name="livro" class = "form-control" disabled/><br><br>

        <label>Usuario</label>
        <select name="tipo" class = "form-control">
            <option value="Professor">Professor</option>
            <option value="Aluno">Aluno</option>
        </select><br><br>

            <label>Data de emprestimo</label><br>
            <input type="date" name="data" class = "form-control"><br><br>

        <input type="submit" class = "btn btn-outline-success" value="Confirmar">
        <input type="reset"  class = "btn btn-outline-danger" value="Limpar">


        </form>