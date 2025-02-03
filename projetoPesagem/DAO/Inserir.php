<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Inserir{
        function cadastrarCliente(Conexao $conexao, string $cpf, string $nome, string $endereco, string $telefone, float $totalDePeso)
        {
            try{
                $conn = $conexao->conectar();// abrir o banco
                $sql = "Insert into cliente(codigo,nome,telefone,endereco,total)
                    values('$cpf','$nome','$telefone','$endereco','$totalDePeso')";
                $result = mysqli_query($conn,$sql);
                mysqli_close($conn);
                //Verificar o resultado
                if($result){
                    return "<br><br>Inserido com sucesso!";
                }
                return "<br><br>Não Inserido!";
            }catch(Except $erro)
            {
                return "<br><br>Algo deu errado".$erro;
            }

        }// fim do método

        function cadastrarFuncionario(Conexao $conexao, string $cpf, string $nome, string $endereco, string $telefone, float $salario)
        {
            try{
                $conn = $conexao->conectar();
                $sql = "Insert into Funcionario(codigo,nome,telefone,endereco,salario)
                values('$cpf','$nome','$telefone','$endereco','$salario')";
                $result = mysqli_query($conn,$sql);
                mysqli_close($conn);
                if($result){
                    return "<br><br>Inserido com sucesso!";
                }
                return "<br><br>Não Inserido!";
            }
            catch(Except $erro)
            {
                return "<br>Algo deu errado".$erro;
            }
        } //fim do metodo 
    }// fim da classe
?>