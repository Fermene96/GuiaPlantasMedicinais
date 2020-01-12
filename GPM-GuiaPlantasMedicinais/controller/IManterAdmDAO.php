<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IManterAdmDAO
 *
 * @author ferna
 */
interface IManterAdmDAO {
    
    public function cadastrarAdm($administrador);
    
    public function atualizarAdm($administrador);
    
    public function excluirAdm($administrador);
    
    public function verificarAdm($administrador);
    
    public function logarAdm($administrador);
    
    public function recuperarAdmPorEmail($email);

    public function recuperarTodosAdms();
}
