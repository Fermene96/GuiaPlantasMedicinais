<?php

    require_once (__DIR__ .'/../../to/Usuario.php');
    require_once (__DIR__ .'/../../controller/ManterUsuarioControl.php');
    
    $manterUsuario = new ManterUsuarioControl();
    
    $usuario = new Usuario();
    
    $usuario->setEmail($_POST['email']);
    $usuario->setSenha($_POST['senha']);
    
    if ($manterUsuario->logarUsuario($usuario) != false){
        $id = $manterUsuario->recuperarUsuarioPorEmail($usuario->getEmail())->getId();
        $nome = $manterUsuario->recuperarUsuarioPorEmail($usuario->getEmail())->getNome();
        echo <<<HTML
        <center>
        <br><br><br>
            <form action="lista_plantas.php" method="POST">
                
                <p> Bem vindo, $nome</p>
                <input type="submit" value="Acessar">
            </form>
        </center>
                <br><br>
            
HTML;
                
        } else {
            echo 'Dados incorretos';
        }
                
                
