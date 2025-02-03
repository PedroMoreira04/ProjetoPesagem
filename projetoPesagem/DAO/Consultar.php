<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Consultar{
        function consultarClienteIndividual(
            Conexao $conexao,
            string $cpf
        )
        {
            try{
                $conn = $conexao->conectar();
                $sql = "select * from cliente where codigo = '$cpf'";
                $result = mysqli_query($conn, $sql);
                while($dados = mysqli_fetch_Array($result)){
                    if($dados['codigo'] == $cpf){
                        echo "<br>CPF: ".$dados['codigo']. 
                            "<br>Nome: ".$dados['nome'].
                            "<br>Telefone: ".$dados['telefone'].
                            "<br>Endereço: ".$dados['endereco'].
                            "<br>Total: ".$dados['total'];
                            return;// finalizar o while
                    }
                    return "Código digitado inválido!";
                }// fim do while
            }catch(Except $erro)
            {
                echo $erro;
            }
        }

        function consultarFuncionarioIndividual(
            Conexao $conexao,
            string $cpf
        )
        {
            try{
                $conn = $conexao->conectar();
                $sql = "select * from funcionario where codigo = '$cpf'";
                $result = mysqli_query($conn, $sql);
                while($dados = mysqli_fetch_Array($result)){
                    if($dados['codigo'] == $cpf){
                        return  "<br>CPF: ".$dados['codigo']. 
                            "<br>Nome: ".$dados['nome'].
                            "<br>Telefone: ".$dados['telefone'].
                            "<br>Endereço: ".$dados['endereco'].
                            "<br>Salario: ".$dados['salario'];
                            // finalizar o while
                    }
                }// fim do while
                return "Digite um CPF válido!";
            }catch(Except $erro)
            {
                echo $erro;
            }
        }


    }
?>