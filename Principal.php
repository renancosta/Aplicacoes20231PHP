<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include("Cliente.php"); 
            $aux = new Cliente(); 
            $aux->nomeCliente = "Renan Costa"; 
            $aux->saldoConta = 500;
            $aux->numeroConta = 123;
            $aux->confirmarRecebimento(); 
            $aux->pagarConta(100); 
            echo "<br/>Nome do Cliente: ".$aux->nomeCliente; 
            echo "<br/>Valor do Saldo: ".$aux->saldoConta;
            echo "<br/>Valor do Saldo: ".$aux->numeroConta;
        ?>
    </body>
</html>
