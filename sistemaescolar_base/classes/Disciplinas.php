<?php
//importar arquivos (include/ require)
//include importa arquivo,da mensagem ed erro mas nao para a edecução
//require importa arquivo, da mensagem de erro para execucao
//require_once / incluse_once -> importar uma unica vez

require_once "Conexao.php";

//Professor ->  Numero / Nome / Sexo / Email / Endereço Completo/ Matéria / Telefone / Senha
//Funcionario ->  Numero / Nome / Sexo / Email / Endereço Completo/ Setor / Telefone
//Disciplinas ->  Número / Nome / Conteudo / Turma / Curso

class Disciplinas
{
    //atributos
    public $numero;
    public $nome;
    public $conteudo;
    public $turma;
    public $curso;

    //metodos
    //listar todos alunos (select * from alunos)
    public function listarTodos(){

        //validar execucao do codigo
        try{
            //instacniar conexao
            $bd = new Conexao();

            //criar o objetivo contendo conexao PDO
            $con = $bd->conectar();

            //criar comando dql para enviar banco de dados
            $sql = $con->prepare("select * from disciplinas");

            //executar o comando
            $sql-> execute();

            //testar se retornou valores
            if($sql-> rowCount() > 0){
                //se tem alguma coisa devolver resultado ao html
                return $result = $sql->fetchAll(PDO::FETCH_CLASS);
                //fetchall devolve o resultado no formato array, linhas e colunas
            }

        } catch(PDOException $msg) {
            echo "Não foi possivel listar as disciplinas: ".$msg->getMessage();
        }

    }



    public function excluir($numero)
    {
        try {
            //verificar se recebeu a matricula
            if (isset($numero)) {
                //preencher o atributo com o valor enviado pelo formulario
                $this->numero = $numero;
                //instanciar  classe conexao
                $bd = new Conexao();
                //criar o objeto contendo a conexao
                $con = $bd->conectar();
                //cria o comando sql para enviar ao banco
                $sql = $con->prepare("delete from disciplinas where numero = ?");
                //executar o comando passando o parametro matricula
                $sql->execute(array($this->numero));
                //testar se retornou os valores
                if ($sql->rowCount() > 0) {
                    //se o aluno foi excluido retornar para tela index alunos
                    header("location:index_disciplinas.php");
                }
            } else { //se o usuario nao selecionou no codigo para excluir
                //retornar para index alunos
                header("location:index_disciplinas.php");
            }
        } catch (PDOException $msg) {
            echo "Não foi possivel excluir os disciplinas: " . $msg->getMessage();
        }
    }
//disciplinas ->  Numero / Nome / Sexo / Email / Endereço Completo/ Matéria / Telefone / Senha
    public function alterar()
    {
        try {
            //verificar se recebeu valores do formulario
            if (isset($_POST["Salvar"])) {
                $this->numero = $_GET["numero"];
                $this->nome = $_POST["nome"];
                $this->conteudo = $_POST["conteudo"];
                $this->turma = $_POST["Turma"];
                $this->curso = $_POST["curso"];
                //istanciar classe conexao
                $bd = new Conexao();
                //criar o obejeto contendo a conexao
                $con = $bd->conectar();
                //cria o comando sql para enviar ao banco passando parametros ?
                $sql = $con->prepare("update disciplinas set nome = ?,
                                  conteudo = ?,turma = ?,curso = ? where numero = ?");
                //executar comando passando os valores recebidos do formulario
                $sql->execute(array(
                    $this->nome,
                    $this->conteudo,
                    $this->turma,
                    $this->curso,
                    $this->numero
                ));
                //testar se retornou valores
                if ($sql->rowCount() > 0) {
                    //se conseguiu alterar no banco de dados retornar para pagina index_alunos
                    header("location:index_disciplinas.php");
                }
            } else {//se o usuario nao preencheu os valores devolver para o index
                header("location:index_disciplinas.php");
            }
        } catch (PDOException $msg) {
            echo "Não foi possivel alterar o disciplinas: " . $msg->getMessage();
        }
    }
//disciplinas ->  Numero / Nome / Sexo / Email / Endereço Completo/ Matéria / Telefone / Senha
    public function listarID($numero)
    {
        try {
            if (isset($numero)) {
                $this->numero = $numero;
                //instanciar classe conexao
                $bd = new Conexao();
                //criar o objeto contendo a conexao
                $con = $bd->conectar();
                //cria  o comando sql para enviar ao banco
                $sql = $con->prepare("select * from disciplinas where numero = ? ");
                //executar o comando
                $sql->execute(array($this->numero));
                //testar se retornou valores
                if ($sql->rowCount() > 0) {
                    //se tem resultado devolver dados do aluno ao html
                    return $result = $sql->fetchObject();
                    //techall -> linhas///colunas
                }
            }
        }catch (PDOException $msg){
            echo "Não foi possivel listar as disciplinas: ".$msg->getMessage();
        }
    }
//disciplinas ->  Numero / Nome / Sexo / Email / Endereço Completo/ Matéria / Telefone / Senha
    public function inserir(){
        try {

            //verificar se recebeu os valoers do formulario
            if (isset($_POST["nome"]) && isset($_POST["conteudo"])) {
                $this->nome = $_POST["nome"];
                $this->conteudo = $_POST["conteudo"];
                $this->turma = $_POST["turma"];
                $this->curso = $_POST["curso"];
                //instanciar classe conexao
                $bd = new Conexao();
                //criar o objeto contendo a conexao
                $con = $bd->conectar();
                //cria o comando sql para enviar ao banco passando parametros ?
                $sql = $con->prepare("insert into disciplinas(numero,nome,conteudo,turma,curso)
                values(null,?,?,?,?)");
                //executar o comando passando os valores recebidos do formulario
                $sql->execute(array(
                    $this->nome,
                    $this->conteudo,
                    $this->turma,
                    $this->curso
                ));
                var_dump($sql->errorInfo());
                //testar se retornou os valores
                if ($sql->rowCount() > 0) {
                    //se conseguiu gravor no banco de dados e retornar index
                    header("location:index_disciplinas.php");
                }
            } else {//se o usuario nao preencheu
                header("location:index_disciplinas.php");
            }
        }catch(PDOException $msg) {
            echo "Não foi possivel inserir as disciplinas: ".$msg->getMessage();}
    }


}