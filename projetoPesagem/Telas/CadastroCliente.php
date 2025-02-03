<?php
    namespace PHP\Modelo\Tela;
    require_once('..\Cliente.php');
    require_once('..\DAO\Conexao.php');
    require_once('..\DAO\Inserir.php');
    use PHP\Modelo\Cliente;
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Inserir;
?>

<!Doctype HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Cliente </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
        <form method="POST">
        <div class="mb-3">
            <label for="xCpf" class="form-label">CPF</label>
            <input type="text" class="form-control" id="xzCpf" name="xzCPF" placeholder="000-000-000-00">
        </div>
        <div class="mb-3">
            <label for="xNome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="xzNome" name="xzNome" placeholder="Nome Completo">
        </div>
        <div class="mb-3">
            <label for="xTelefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="xzTelefone" name="xzTelefone" placeholder="(99)99999-9999">
        </div>
        <div class="mb-3">
            <label for="xEndereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="xzEndereco" name="xzEndereco" placeholder="Insira seu endereço">
        </div>
        <div class="mb-3">
            <label for="xTotalDePeso" class="form-label">Total de Compras</label>
            <input type="text" class="form-control" id="xzTotalDePeso"  name="xzTotalDePeso" placeholder="Insira o total de peso">
        </div>

        <button type="submit">Cadastrar
            <?php
            $conexao = new Conexao();//conectar o banco
            if(isset($_POST['xzCPF'])){
                $cpf = $_POST['xzCPF'];
                $nome = $_POST['xzNome'];
                $telefone = $_POST['xzTelefone'];
                $endereco = $_POST['xzEndereco'];
                $totalDePeso = $_POST['xzTotalDePeso'];


               $inserir = new Inserir();
               echo $inserir->cadastrarCliente($conexao,$cpf,$nome,$telefone,$endereco,$totalDePeso);
            }
            ?>
        </button>
        </form>
    </body>
</html>