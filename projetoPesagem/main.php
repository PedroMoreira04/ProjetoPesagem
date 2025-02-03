<?php
    namespace PHP\Modelo;
    require_once('Cliente.php');
    require_once('Funcionario.php');
    use PHP\Modelo\Cliente;
    use PHP\Modelo\Funcionario;

    //Criando o objeto
    $cliente1 = new Cliente("933-473-883-48","Vitor","1199999-5656","Rua Nelson Mandela,120",1500);

    $funcionario1= new Funcionario("972-887-131-08","Alicia","1199999-5656","Rua Novo Horizonte,18",3500);

    //Visualizar
    echo $cliente1->imprimir();
    echo "<br>".$funcionario1->imprimir();



?>