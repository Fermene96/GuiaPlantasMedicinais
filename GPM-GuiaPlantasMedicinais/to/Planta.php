<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Planta
 *
 * @author ferna
 */
class Planta {
    
    private $id;
    private $nome;
    private $descricao;
    private $preparo;
    private $cultivo;
    private $foto;
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getPreparo() {
        return $this->preparo;
    }

    function getCultivo() {
        return $this->cultivo;
    }

    function getFoto() {
        return $this->foto;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setPreparo($preparo) {
        $this->preparo = $preparo;
    }

    function setCultivo($cultivo) {
        $this->cultivo = $cultivo;
    }

    function setFoto($imagem) {
        $this->foto = $imagem;
    }




}
