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
        <form method="post">
            <input type="text" name="nome"><br>
            <input type="submit" value="Enviar" name="enviar">
        </form>
        <?php
           include 'UsuarioDAO.php';
           session_start();
           if(empty($_SESSION['usuario'])){
               header('Location: index.php');
           }
           if($_SERVER["REQUEST_METHOD"]=="POST"){
            $usuario = new UsuarioDAO();
            $nome = $_POST['nome'];
            $usuario->buscarNome($nome);
            $usuario->buscarDisciplina($_SESSION['usuario']);
           }
           
        ?>
    </body>
</html>
