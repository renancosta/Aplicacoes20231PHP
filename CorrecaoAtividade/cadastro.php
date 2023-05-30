<?php
include("Cliente.php");
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nome = $_POST['nome'];
    $saldo = $_POST['saldo'];
    $conta = $_POST['conta'];
    if(!empty($nome) && !empty($saldo) && !empty($conta))
    {
        $cliente = new Cliente($nome,$saldo,$conta);
        $_SESSION['clientes'][] = $cliente;
    } else {
        echo '<script>'
                . 'alert("Informe todos os campos");'
           . '</script>';
    }
    if(!empty($_SESSION['clientes'])){
        foreach($_SESSION['clientes'] as $cliente){
            echo "<br/>Nome do Cliente: ".$cliente->nomeCliente; 
            echo "<br/>Valor do Saldo: ".$cliente->saldoConta;
            echo "<br/>Valor do Saldo: ".$cliente->numeroConta;
        }
    } else {
        echo 'Nenhum cliente cadastrado';
    }
}