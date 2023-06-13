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
            Login <input type="text" name="login">
            Senha <input type="password" name="senha">
            <input type="submit">
        </form>
        <?php
            include 'UsuarioDAO.php';
            session_start();
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $login = $_POST['login'];
                $senha = $_POST['senha'];
                $usuario = new UsuarioDAO();
                if($id_usuario = $usuario->logar($login, $senha)){
                    $_SESSION['usuario'] = $id_usuario;
                    header('Location: cadastrarUsuario.php');
                } else {
                    echo 'Usuário ou senha inválidos';
                }
                
            }
        ?>
    </body>
</html>
