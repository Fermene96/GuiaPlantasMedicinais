<?php

require_once (__DIR__ .'/../to/Comentario.php');
require_once (__DIR__ .'/../dao/ManterComentarioDAO.php');
require_once (__DIR__ .'/../view/IManterAdmControl.php');

/**
 * Description of ManterComentarioControl
 *
 * @author ferna
 */
class ManterComentarioControl implements IManterComentarioControl{
    
    public function adicionarComentario($comentario) {
        $manterComentarioDAO = new ManterComentarioDAO();
        return $manterComentarioDAO->adicionarComentario($comentario);
    }
    
    public function atualizarComentario($comentario) {
        $manterComentarioDAO = new ManterComentarioDAO();
        return $manterComentarioDAO->atualizarComentario($comentario);
    }
    
    public function excluirComentario($comentario) {
        $manterComentarioDAO = new ManterComentarioDAO();
        return $manterComentarioDAO->excluirComentario($comentario);
    }
}
