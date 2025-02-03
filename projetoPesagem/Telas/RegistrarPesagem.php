<?php
    namespace PHP\Modelo\DAO;


    class Conexao{
        function conectar(){
            try{
                $conn = mysqli_connect('localhost', 'root','','Pesar');
                if($conn){
                    echo "<br>Conectado com sucesso!";
                    return $conn;
                }
                echo "<br>Algo deu errado!";
            }catch(Except $erro)
            {
                return "Algo deu errado!<br><br>".$erro;
            }

        }//fim do conectar
    }//fim da classe 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = $_POST['data'];
    $categoria = $_POST['categoria'];
    $peso = $_POST['peso'];

    // Prepara a inserção de dados no banco de dados
    $sql = "INSERT INTO registros (data, categoria, peso) VALUES ('$data', '$categoria', '$peso')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro salvo com sucesso!";
    } else {
        echo "Erro ao salvar: " . $conn->error;
    }
}

// Fecha a conexão APÓS o uso
if (isset($conn)) {
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registro de Pesagem</title>
</head>
<body>
    <h2>Registro de Pesagem de Resíduos</h2>
    <form method="POST">
        <label>Data:</label>
        <input type="date" name="data" required><br><br>

        <div class="container">
    <h2>Registro de Pesagem de Resíduos</h2>
    <form method="POST">
        <label>Data:</label>
        <input type="date" name="data" required>
        
        <label>Categoria do Resíduo:</label>
        <select name="categoria" required>
            <option value="não reciclável">Não Reciclável</option>
            <option value="reciclável">Reciclável</option>
            <option value="óleo">Óleo</option>
            <option value="tampinhas plásticas">Tampinhas Plásticas</option>
            <option value="lacres de alumínio">Lacres de Alumínio</option>
            <option value="tecidos">Tecidos</option>
            <option value="meias">Meias</option>
            <option value="material de escrita">Material de Escrita</option>
            <option value="esponjas">Esponjas</option>
            <option value="eletrônicos">Eletrônicos</option>
            <option value="pilhas e baterias">Pilhas e Baterias</option>
            <option value="infectante">Infectante</option>
            <option value="químicos">Químicos</option>
            <option value="lâmpada fluorescente">Lâmpada Fluorescente</option>
            <option value="tonners de impressora">Tonners de Impressora</option>
            <option value="esmaltes">Esmaltes</option>
            <option value="cosméticos">Cosméticos</option>
            <option value="cartela de medicamento">Cartela de Medicamento</option>
        </select>
        
        <label>Peso (kg):</label>
        <input type="number" step="0.01" name="peso" required>

        <button type="submit">Registrar</button>
    </form>

    <div class="footer">♻️ Juntos pelo meio ambiente! ♻️</div>
</div>
