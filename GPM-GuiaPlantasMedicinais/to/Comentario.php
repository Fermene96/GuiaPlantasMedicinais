<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Comentario
 *
 * @author ferna
 */
class Comentario {
    
    private $autor;
    private $comentario;
    
    function getAutor() {
        return $this->autor;
    }

    function getComentario() {
        return $this->comentario;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setComentario($comentario) {
        $this->comentario = $comentario;
    }


}
