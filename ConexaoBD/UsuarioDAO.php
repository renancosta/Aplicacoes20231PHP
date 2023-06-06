<?php
include 'ConexaoBD.php';
class UsuarioDAO {
    
    public function incluir($nome,$email,$senha) {
        $conexao = new ConexaoBD();
        $conecta = $conexao->conectar(); 
        // Inserir registro
        $sql = "INSERT INTO `usuario` (`id_usuario`, "
                . "`nome`, `email`, `senha`) VALUES "
                . "(NULL, '$nome', '$email', '$senha');";
        if ($conecta->query($sql) === TRUE) {
            echo "Novo registro criado com sucesso";
        } else {
            echo "Erro: " . $sql . "<br>" . $conecta->error."<br>";
        }
        $conexao->desconectar();
    }
    public function excluir($id) {
        $conexao = new ConexaoBD();
        $conecta = $conexao->conectar();
        $sql = "DELETE FROM usuario WHERE id_usuario=$id";
        if ($conecta->query($sql) === TRUE) {
            echo "Registro apagado com sucesso<br>";
        } else {
            echo "Erro ao apagar o registro: " . $conecta->error."<br>";
        }
        $conexao->desconectar();
    }
    public function alterar($nome,$email,$senha,$id) {
        $conexao = new ConexaoBD();
        $conecta = $conexao->conectar();
        $sql = "UPDATE `usuario` SET"
                . " `nome` = '$nome', "
                . "`email` = '$email', "
                . "`senha` = '$senha' "
                . "WHERE `usuario`.`id_usuario` = $id;";
        if ($conecta->query($sql) === TRUE) {
            echo "Registro atualizado com sucesso<br>";
        } else {
            echo "Erro na atualização do registro: " . $conecta->error."<br>";
        }
        $conexao->desconectar();
    }
    public function buscar() {
        $conexao = new ConexaoBD();
        $conecta = $conexao->conectar();
        
        $sql = "SELECT id_usuario, nome, email FROM usuario";
        $resultado = $conecta->query($sql);
        if ($resultado->num_rows > 0) {
        // saída dos dados
        while($linha = $resultado->fetch_assoc()) {
            echo "id: " . $linha["id_usuario"]. " - Name: " . $linha["nome"]. " " . $linha["email"]. "<br>";
        }
        } else {
            echo "0 results";
        }
        
        $conexao->desconectar();
    }
    
    public function buscarNome($nome) {
        $conexao = new ConexaoBD();
        $conecta = $conexao->conectar();
        
        $sql = "SELECT id_usuario, nome, email FROM usuario WHERE nome like '%$nome%'";
        $resultado = $conecta->query($sql);
        if ($resultado->num_rows > 0) {
        // saída dos dados
        while($linha = $resultado->fetch_assoc()) {
            echo "id: " . $linha["id_usuario"]. " - Name: " . $linha["nome"]. " " . $linha["email"]. "<br>";
        }
        } else {
            echo "0 results";
        }
        
        $conexao->desconectar();
    }
    
    public function logar($email,$senha) {
        $conexao = new ConexaoBD();
        $conecta = $conexao->conectar();
        
        $sql = "SELECT id_usuario, nome, email FROM usuario WHERE senha='$senha' and email='$email'";
        $resultado = $conecta->query($sql);
        if ($resultado->num_rows > 0) {
        // saída dos dados
        while($linha = $resultado->fetch_assoc()) {
            echo "id: " . $linha["id_usuario"]. " - Name: " . $linha["nome"]. " " . $linha["email"]. "<br>";
            //Colocar a ação que irá fazer ao logar. Exemplo: redirecionamento com header  
        }
        } else {
            echo "Usuário ou senha incorretos";
        }
        
        $conexao->desconectar();
    }
}
