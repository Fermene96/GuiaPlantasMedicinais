<?php

    require_once(__DIR__ .'/../../controller/ManterAdmControl.php');
    require_once (__DIR__ .'/../../to/Administrador.php');
    
    $manterAdm = new ManterAdmControl();
    
    $administrador = new Administrador();
    
    $administrador->setNome($_POST['nome']);
    $administrador->setEmail($_POST['email']);
    $administrador->setSenha($_POST['senha']);
    
    $manterAdm->cadastrarAdm($administrador);
