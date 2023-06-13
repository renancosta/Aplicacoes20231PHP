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
           session_start();
           $usuario = new UsuarioDAO();
           if($_SERVER["REQUEST_METHOD"]=="POST"){
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $id = $_POST['id'];
            
           // $usuario->incluir($nome, $email, $senha);
           // $usuario->excluir($id);
            
           }
           $resultado = $usuario->buscarUsuario();
        ?>
        <h2>Lista de usuário</h2>
        <table>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>E-mail</th>
            </tr>
            <?php while($linha = $resultado->fetch_assoc()):?>
                <tr>
                    <td><?php echo $linha["id_usuario"];?></td>
                    <td><?php echo $linha["nome"];?></td>
                    <td><?php echo $linha["email"];?></td>
                </tr>
            <?php endwhile; ?>
        </table>
        <a href="BuscarUsuarioNome.php">Visualizar Disciplinas</a>
    </body>
</html>
