<?php
    namespace PHP\Modelo\Telas;
    require_once('..\DAO\Conexao.php');
    require_once('..\DAO\Atualizar.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Atualizar;
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Atualizar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <form method = "POST">
        <label>CPF: </label>
        <input type="string" name="tCPF"/><br><br>

        <label>Escolha o campo que deseja atualizar:</label>
        <select name="tCampo">
            <option value="nome">Nome</option>
            <option value="telefone">Telefone</option>
            <option value="endereco">Endereço</option>
            <option value="total">Total de Peso</option>
        </select><br><br>

        <label>Novo dado: </label>
        <input type="text" name="tNovoDado"/><br><br>
        <button type="submit">Atualizar
            <?php
            $conexao = new Conexao();
            if(isset($_POST['tCPF'])){
            $atualizar = new Atualizar();

            $cpf = $_POST['tCPF'];
            $campo = $_POST['tCampo'];
            $novoDado = $_POST['tNovoDado'];
            }
            ?>

        </button>
    </form>
    <?php
        if(isset($_POST['tCPF'])){
        echo $atualizar->atualizarCliente($conexao, $campo,$novoDado,$cpf);
        }
    ?>
</body>
</html>