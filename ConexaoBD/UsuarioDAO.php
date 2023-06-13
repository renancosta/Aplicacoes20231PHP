<?php
include 'ConexaoBD.php';
class UsuarioDAO {
    
    public function incluir($nome,$email,$senha) {
        // Inserir registro
        $sql = "INSERT INTO `usuario` (`id_usuario`, "
                . "`nome`, `email`, `senha`) VALUES "
                . "(NULL, '$nome', '$email', '$senha');";
        $this->executarSQL($sql, "inclusão");
    }
    public function excluir($id) {
        $sql = "DELETE FROM usuario WHERE id_usuario=$id";
        $this->executarSQL($sql, "exclusão");
    }
    public function alterar($nome,$email,$senha,$id) {
        $sql = "UPDATE `usuario` SET"
                . " `nome` = '$nome', "
                . "`email` = '$email', "
                . "`senha` = '$senha' "
                . "WHERE `usuario`.`id_usuario` = $id;";
        $this->executarSQL($sql, "alteração");
    }
    
    private function executarSQL($sql,$msg){
        $conexao = new ConexaoBD();
        $conecta = $conexao->conectar();
        if ($conecta->query($sql) === TRUE) {
            echo "$msg realizada com sucesso<br>";
        } else {
            echo "Erro na $msg do registro: " . $conecta->error."<br>";
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
    
    public function buscarUsuario() {
        $conexao = new ConexaoBD();
        $conecta = $conexao->conectar();
        
        $sql = "SELECT id_usuario, nome, email FROM usuario";
        $resultado = $conecta->query($sql);
        if ($resultado->num_rows > 0) {
            return $resultado;
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
    
    public function buscarDisciplina($id_usuario) {
        $conexao = new ConexaoBD();
        $conecta = $conexao->conectar();
        
        $sql = "SELECT d.nome FROM disciplina d "
                . "INNER JOIN usuario u ON u.id_usuario=d.id_usuario"
                . " WHERE u.id_usuario = $id_usuario;";
        $resultado = $conecta->query($sql);
        if ($resultado->num_rows > 0) {
            // saída dos dados
            while($linha = $resultado->fetch_assoc()) {
                echo "Disciplina: " . $linha["nome"]."<br>";
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
                return $linha["id_usuario"];
                //Colocar a ação que irá fazer ao logar. Exemplo: redirecionamento com header  
            }
        } else {
            return FALSE;
        }
        
        $conexao->desconectar();
    }
    
}
