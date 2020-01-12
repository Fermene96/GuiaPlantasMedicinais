<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author aluno
 */
interface IManterComentarioControl {
    
    public function adicionarComentario($comentario);
    
    public function atualizarComentario($comentario);
    
    public function excluirComentario($comentario);
}
