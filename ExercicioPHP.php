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
        <form method="POST">
            <input type="text" name="nome"><br>
            <input type="number" name="idade"><br>
            <input type="email" name="email"><br>
            <input type="password" name="senha"><br>
            <input type="submit" value="Enviar"><br>
        </form>
        <?php
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $soma = $idade +10;
            echo "Nome: $nome<br>Idade: $idade<br>E-mail: $email<br>Senha: $senha";
        ?>
    </body>
</html>
