<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post">
            <input type="text" name="nome"><br>
            <input type="email" name="email"><br>
            <input type="password" name="senha"><br>
            <input type="text" name="id"><br>
            <input type="submit" value="Enviar" name="enviar">
            <input type="submit" value="Excluir" name="excluir">
            <input type="submit" value="Alterar" name="alterar">
        </form>
        <?php
           include 'UsuarioDAO.php';
           $usuario = new UsuarioDAO();
           if($_SERVER["REQUEST_METHOD"]=="POST"){
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $id = $_POST['id'];
            
           // $usuario->incluir($nome, $email, $senha);
           // $usuario->excluir($id);
            
           }
           $usuario->buscar();
        ?>
    </body>
</html>
