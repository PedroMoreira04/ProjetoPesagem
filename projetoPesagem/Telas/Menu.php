<?php
    namespace PHP\Modelo\Telas;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reciclagem - Menu</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">

</head>
<body>

<header>
    <div class="logo">
        <img src="logo.png" alt="Logo da Reciclagem">
    </div>
    <nav>
        <ul>
            <li><a href="#">Início</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Contato</a></li>
        </ul>
    </nav>
</header>

<div class="container">
    <h2>Bem-vindo ao Sistema de Reciclagem</h2>
    <p>Gerencie funcionários e clientes facilmente.</p>

    <div class="menu-buttons">
        <a href="cadastroFuncionario.php"><button>Cadastrar Funcionário</button></a>
        <a href="cadastroCliente.php"><button>Cadastrar Cliente</button></a>
        <a href="consultarCliente.php"><button>Consultar Cliente</button></a>
        <a href="consultarFuncionario.php"><button>Consultar Funcionário</button></a>
        <a href="atualizarCliente.php"><button>Atualizar Cliente</button></a>
        <a href="atualizarFuncionario.php"><button>Atualizar Funcionário</button></a>
        <a href="excluirCliente.php"><button>Excluir Cliente</button></a>
        <a href="excluirFuncionario.php"><button>Excluir Funcionário</button></a>
    </div>
</div>

<footer>
    © 2025 Reciclagem Sustentável - Todos os direitos reservados.
</footer>

</body>
</html>
