<?php
//importar arquivos (include/ require)
//include importa arquivo,da mensagem ed erro mas nao para a edecução
//require importa arquivo, da mensagem de erro para execucao
//require_once / incluse_once -> importar uma unica vez

require_once "Conexao.php";

//Professor ->  codigo / Nome / Sexo / Email / Endereço Completo/ Matéria / Telefone / Senha
//Funcionario ->  codigo / Nome / Sexo / Email / Endereço Completo/ Setor / Telefone
//Disciplinas ->  Número / Nome / Conteudo / Turma / Curso

class Curso
{
    //atributos
    public $codigo;
    public $nome;
    public $serie;

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
            $sql = $con->prepare("select * from curso");

            //executar o comando
            $sql-> execute();

            //testar se retornou valores
            if($sql-> rowCount() > 0){
                //se tem alguma coisa devolver resultado ao html
                return $result = $sql->fetchAll(PDO::FETCH_CLASS);
                //fetchall devolve o resultado no formato array, linhas e colunas
            }

        } catch(PDOException $msg) {
            echo "Não foi possivel listar os cursos : ".$msg->getMessage();
        }

    }



    public function excluir($codigo)
    {
        try {
            //verificar se recebeu a matricula
            if (isset($codigo)) {
                //preencher o atributo com o valor enviado pelo formulario
                $this->codigo = $codigo;
                //instanciar  classe conexao
                $bd = new Conexao();
                //criar o objeto contendo a conexao
                $con = $bd->conectar();
                //cria o comando sql para enviar ao banco
                $sql = $con->prepare("delete from curso where codigo = ?");
                //executar o comando passando o parametro matricula
                $sql->execute(array($this->codigo));
                //testar se retornou os valores
                if ($sql->rowCount() > 0) {
                    //se o aluno foi excluido retornar para tela index alunos
                    header("location:index_funcionarios.php");
                }
            } else { //se o usuario nao selecionou no codigo para excluir
                //retornar para index alunos
                header("location:index_funcionarios.php");
            }
        } catch (PDOException $msg) {
            echo "Não foi possivel excluir os funcionarios: " . $msg->getMessage();
        }
    }
//funcionario ->  codigo / Nome / Sexo / Email / Endereço Completo/ Matéria / Telefone / Senha
    public function alterar()
    {
        try {
            //verificar se recebeu valores do formulario
            if (isset($_POST["Salvar"])) {
                $this->codigo = $_GET["codigo"];
                $this->nome = $_POST["nome"];
                $this->serie = $_POST["serie"];

                //istanciar classe conexao
                $bd = new Conexao();
                //criar o obejeto contendo a conexao
                $con = $bd->conectar();
                //cria o comando sql para enviar ao banco passando parametros ?
                $sql = $con->prepare("update funcionario set nome = ?,serie = ? where codigo = ?");
                //executar comando passando os valores recebidos do formulario
                $sql->execute(array(
                    $this->nome,
                    $this->serie,
                    $this->codigo
                ));
                //testar se retornou valores
                if ($sql->rowCount() > 0) {
                    //se conseguiu alterar no banco de dados retornar para pagina index_alunos
                    header("location:index_cursos.php");
                }
            } else {//se o usuario nao preencheu os valores devolver para o index
                header("location:index_cursos.php.php");
            }
        } catch (PDOException $msg) {
            echo "Não foi possivel alterar o curso: " . $msg->getMessage();
        }
    }
//funcionario ->  codigo / Nome / Sexo / Email / Endereço Completo/ Matéria / Telefone / Senha
    public function listarID($codigo)
    {
        try {
            if (isset($codigo)) {
                $this->codigo = $codigo;
                //instanciar classe conexao
                $bd = new Conexao();
                //criar o objeto contendo a conexao
                $con = $bd->conectar();
                //cria  o comando sql para enviar ao banco
                $sql = $con->prepare("select * from funcionario where codigo = ? ");
                //executar o comando
                $sql->execute(array($this->codigo));
                //testar se retornou valores
                if ($sql->rowCount() > 0) {
                    //se tem resultado devolver dados do aluno ao html
                    return $result = $sql->fetchObject();
                    //techall -> linhas///colunas
                }
            }
        }catch (PDOException $msg){
            echo "Não foi possivel listar o funcionario: ".$msg->getMessage();
        }
    }
//funcionario ->  codigo / Nome / Sexo / Email / Endereço Completo/ Matéria / Telefone / Senha
    public function inserir(){
        try {

            //verificar se recebeu os valoers do formulario
            if (isset($_POST["nome"]) && isset($_POST["serie"])) {

                $this->nome = $_POST["nome"];
                $this->serie = $_POST["serie"];
                //instanciar classe conexao
                $bd = new Conexao();
                //criar o objeto contendo a conexao
                $con = $bd->conectar();
                //cria o comando sql para enviar ao banco passando parametros ?
                $sql = $con->prepare("insert into funcionario(codigo,nome,serie)
                values(null,?,?)");
                //executar o comando passando os valores recebidos do formulario
                $sql->execute(array(
                    $this->nome,
                    $this->serie,
                    $this->senha
                ));
                var_dump($sql->errorInfo());
                //testar se retornou os valores
                if ($sql->rowCount() > 0) {
                    //se conseguiu gravor no banco de dados e retornar index
                    header("location:index_funcionarios.php");
                }
            } else {//se o usuario nao preencheu
                header("location:index_funcionarios.php");
            }
        }catch(PDOException $msg) {
            echo "Não foi possivel inserir o funcionario: ".$msg->getMessage();}
    }


}