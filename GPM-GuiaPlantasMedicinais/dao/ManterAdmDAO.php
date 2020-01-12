<?php

require_once (__DIR__ .'/../controller/IManterAdmDAO.php');
require_once (__DIR__ .'/../to/Administrador.php');

/**
 * Description of ManterAdmDAO
 *
 * @author ferna
 */
class ManterAdmDAO implements IManterAdmDAO{
    
    public function cadastrarAdm($administrador) { //Método não usado
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=gpm', "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $pdo->prepare('INSERT INTO administrador(nome, email, senha) VALUES'
                    . '(:nome, :email, :senha)');
            $stmt->execute(array(
                ':nome' => $administrador->getNome(),
                ':email' => $administrador->getEmail(),
                ':senha' => $administrador->getSenha()
            ));
            echo 'Cadastrado com sucesso';
        } catch (PDOException $e) {
            return 'Erro ao cadastrar Administrador: ' . $e->getMessage();
        }
    }
    
    public function atualizarAdm($administrador) {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=gpm', "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $pdo->prepare('UPDATE administrador SET nome, email, senha WHERE idAdministrador=:id');
            $stmt->execute(array(
                ':id' => $administrador->getId(),
                ':nome' => $administrador->getNome(),
                ':email' => $administrador->getEmail(),
                ':senha' => $administrador->getSenha()
            ));
            echo 'Atualizado com sucesso';
        } catch (PDOException $e) {
            return 'Erro ao atualizar administrador: ' . $e->getMessage();
        }
    }
    
    public function excluirAdm($administrador) {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=gpm', "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $pdo->prepare('DELETE FROM administrador WHERE nome=:nome');
            if ($stmt->execute()){
                if ($stmt->rowCount() > 0){
                    return true;
                } else {
                    return false;
                }
            }
            echo 'Removido com sucesso';
        } catch (PDOException $e) {
            return 'Erro ao remover administrador: ' . $e->getMessage();
        }
    }
    
    public function verificarAdm($administrador){
        $pdo = new PDO('mysql:host=localhost;dbname=gpm', "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        $consulta = $pdo->query("SELECT email FROM administrador WHERE email = '" . $administrador->getEmail() . "'");
        
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            if ($linha->getEmail() === $linha["email"])
            {
                return 1;
            }
        }
        return 0;
    }
    
    public function logarAdm($administrador){
        $pdo = new PDO('mysql:host=localhost;dbname=gpm', "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        $consulta = $pdo->query("SELECT * FROM administrador WHERE email= '$email' AND senha= '$senha'");
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $administrador = new Administrador();
            $administrador->setEmail($linha['email']);
            $administrador->setSenha($linha['senha']);
            return $administrador;
        }
    }
    
    public function recuperarAdmPorEmail($email) {
        $pdo = new PDO('mysql:host=localhost;dbname=gpm', "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $consulta = $pdo->query("SELECT * FROM administrador WHERE email = '" . $email . "'");
        
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $administrador = new Administrador();
            $administrador->setId($linha["idAdministrador"]);
            $administrador->setNome($linha["nome"]);
            $administrador->setEmail($linha["email"]);
            $administrador->setSenha($linha["senha"]);
            return $administrador;
        }
        return 0;
    }



    public function recuperarTodosAdms() {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=gpm', "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $stmt = $pdo->prepare('SELECT * FROM administrador');
            $stmt->execute(array(
                ':nome' => $administrador->getNome(),
                ':email' => $administrador->getEmail(),
                ':senha' => $administrador->getSenha()
            ));
        } catch (PDOException $e) {
            return 'Erro ao recuperar Administradores: ' . $e->getMessage();
        }
    }
}
