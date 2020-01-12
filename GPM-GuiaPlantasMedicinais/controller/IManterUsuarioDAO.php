<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IManterUsuarioDAO
 *
 * @author ferna
 */
interface IManterUsuarioDAO {
    
    public function cadastrarUsuario($usuario);
    
    public function atualizarUsuario($usuario);
    
    public function excluirUsuario($usuario);
    
    public function verificarUsuario($usuario);
    
    public function logarUsuario($usuario);
    
    public function recuperarUsuarioPorEmail($email);
    
    public function recuperarTodosUsuarios();
}
