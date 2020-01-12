<?php

require_once (__DIR__ .'/../to/Administrador.php');
require_once (__DIR__ .'/../dao/ManterAdmDAO.php');
require_once (__DIR__ .'/../view/IManterAdmControl.php');

/**
 * Description of ManterAdmControl
 *
 * @author ferna
 */
class ManterAdmControl implements IManterAdmControl{
    
    public function cadastrarAdm($administrador) {
        $manterAdmDAO = new ManterAdmDAO();
        return $manterAdmDAO->cadastrarAdm($administrador);
    }
    
    public function atualizarAdm($administrador) {
        $manterAdmDAO = new ManterAdmDAO();
        return $manterAdmDAO->atualizarAdm($administrador);
    }
    
    public function excluirAdm($administrador) {
        $manterAdmDAO = new ManterAdmDAO();
        return $manterAdmDAO->excluirAdm($administrador);
    }
   
    public function verificarAdm($administrador){
        $manterAdmDAO = new ManterAdmDAO();
        return $manterAdmDAO->verificarAdm($administrador);
    }
    
    public function logarAdm($administrador) {
        $manterAdmDAO = new ManterAdmDAO();
        return $manterAdmDAO->logarAdm($administrador);
    }
    
    public function recuperarAdmPorEmail($email) {
        $manterAdmDAO = new ManterAdmDAO();
        return $manterAdmDAO->recuperarAdmPorEmail($email);
    }

    public function recuperarTodosAdms() {
        $manterAdmDAO = new ManterAdmDAO();
        return $manterAdmDAO->recuperarTodosAdms();
    }
    
}
