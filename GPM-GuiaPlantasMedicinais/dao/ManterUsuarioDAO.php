<?php

require_once (__DIR__ .'/../to/Usuario.php');
require_once (__DIR__ .'/../controller/IManterUsuarioDAO.php');

/**
 * Description of ManterUsuarioDAO
 *
 * @author ferna
 */
class ManterUsuarioDAO implements IManterUsuarioDAO{
    
    public function cadastrarUsuario($usuario) {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=gpm', "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $stmt = $pdo->prepare('INSERT INTO usuario(nome, email, senha) VALUES'
                    . '(:nome, :email, :senha)');
            $stmt->execute(array(
                ':nome' => $usuario->getNome(),
                ':email' => $usuario->getEmail(),
                ':senha' => $usuario->getSenha()
            ));
            echo 'Cadastrado com sucesso!';
        } catch (PDOException $e) {
            return 'Erro ao cadastrar Usuario!: ' . $e->getMessage();
        }
    }
    
    public function atualizarUsuario($usuario) {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=gpm', "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $stmt = $pdo->prepare('UPDATE usuario SET nome, email, senha WHERE idUsuario=:id');
            $stmt->execute(array(
                ':id' => $usuario->getId(),
                ':nome' => $usuario->getNome(),
                ':email' => $usuario->getEmail(),
                ':senha' => $usuario->getSenha()
            ));
            echo 'Atualizado com sucesso!';
        } catch (PDOException $e) {
            return 'Erro ao atualizar Usuario: ' . $e->getMessage();
        }
    }
    
    public function excluirUsuario($usuario) {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=gpm', "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $stmt = $pdo->prepare('DELETE FROM usuario WHERE nome=:nome');
            if ($stmt->execute()){
                if ($stmt->rowCount() > 0){
                    return true;
                } else {
                    return false;
                }
                
            }
            echo 'Removido com scesso';
        } catch (PDOException $e) {
            return 'Erro ao remover usuario: ' . $e->getMessage();
        }
    }
    
    public function verificarUsuario($usuario){
        $pdo = new PDO('mysql:host=localhost;dbname=gpm', "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $consulta = $pdo->query("SELECT email FROM usuario WHERE email = '". $usuario->getEmail(). "'");
        
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            if ($linha->getEmail() === $linha["email"])
            {
                return 1;
            }
        }
        return 0;
    }
    
    public function logarUsuario($usuario){
        $pdo = new PDO('mysql:host=localhost;dbname=gpm', "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        $consulta = $pdo->query("SELECT * FROM usuario WHERE email= '$email' AND senha= '$senha'");
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $usuario = new Usuario();
            $usuario->setEmail($linha['email']);
            $usuario->setSenha($linha['senha']);
            return $usuario;
        }
        
    }  
    
    public function recuperarUsuarioPorEmail($email){
        $pdo = new PDO('mysql:host=localhost;dbname=gpm', "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $consulta = $pdo->query("SELECT * FROM usuario WHERE email = '" . $email . "'");
        
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $usuario = new Usuario();
            $usuario->setId($linha["idUsuario"]);
            $usuario->setNome($linha["nome"]);
            $usuario->setEmail($linha["email"]);
            $usuario->setSenha($linha["senha"]);
            return $usuario;
        }
        return 0;
    }

    public function recuperarTodosUsuarios() {
       
    $pdo = new PDO('mysql:host=localhost;dbname=gpm', "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $consulta = $pdo->query('SELECT * FROM usuario');
    
    $usuarios = array();
    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        $usuario = new Usuario();
        $usuario->setId($linha["idUsuario"]);
        $usuario->setNome($linha["nome"]);
        $usuario->setEmail($linha["email"]);
        array_push($usuarios, $usuario);
    }
    return $usuarios;
    
    }    
}
