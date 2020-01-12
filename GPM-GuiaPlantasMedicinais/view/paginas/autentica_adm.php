<?php

    require_once (__DIR__ .'/../../to/Administrador.php');
    require_once (__DIR__ .'/../../controller/ManterAdmControl.php');
    
    $manterAdm = new ManterAdmControl();
    
    $administrador = new Administrador();
    
    $administrador->setEmail($_POST['email']);
    $administrador->setSenha($_POST['senha']);
    
    if ($manterAdm->logarAdm($administrador) != false){
        $id = $manterAdm->recuperarAdmPorEmail($administrador->getEmail())->getId();
        $nome = $manterAdm->recuperarAdmPorEmail($administrador->getEmail())->getNome();
        echo <<<HTML
        <center>
        <br><br><br>
            <form action="edita_planta.php" method="POST">
                
                <p> Bem vindo, $nome</p>
                <input type="submit" value="Acessar">
            </form>
        </center>
                <br><br>
            
HTML;
                
        } else {
            echo 'Dados incorretos';
        }