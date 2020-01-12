<?php

require_once (__DIR__ .'/../to/Usuario.php');
require_once (__DIR__ .'/../dao/ManterUsuarioDAO.php');
require_once (__DIR__ .'/../view/IManterUsuarioControl.php');

/**
 * Description of ManterUsuarioControl
 *
 * @author ferna
 */
class ManterUsuarioControl implements IManterUsuarioControl{
    
    public function cadastrarUsuario($usuario) {
        $manterUsuarioDAO = new ManterUsuarioDAO();
        return $manterUsuarioDAO->cadastrarUsuario($usuario);
    }
    
    public function atualizarUsuario($usuario) {
        $manterUsuarioDAO = new ManterUsuarioDAO();
        return $manterUsuarioDAO->atualizarUsuario($usuario);
    }
    
    public function excluirUsuario($usuario) {
        $manterUsuarioDAO = new ManterUsuarioDAO();
        return $manterUsuarioDAO->excluirUsuario($usuario);
    }
    
    public function verificarUsuario($usuario){
        $manterUsuarioDAO = new ManterUsuarioDAO();
        return $manterUsuarioDAO->verificarUsuario($usuario);
    }
    
    public function logarUsuario($usuario){
        $manterUsuarioDAO = new ManterUsuarioDAO();
        return $manterUsuarioDAO->logarUsuario($usuario);
    }
    
    public function recuperarUsuarioPorEmail($email){
        $manterUsuarioDAO = new ManterUsuarioDAO();
        return $manterUsuarioDAO->recuperarUsuarioPorEmail($email);
    }
    
    public function recuperarTodosUsuarios() {
        $manterUsuarioDAO = new ManterUsuarioDAO();
        return $manterUsuarioDAO->recuperarTodosUsuarios();
    }
     
}
