<?php
    require_once(__DIR__ .'/../../controller/ManterUsuarioControl.php');
    require_once (__DIR__ .'/../../to/Usuario.php'); 
    
    $manterUsuario = new ManterUsuarioControl();
    
    $usuario = new Usuario();
    
    $manterUsuario->recuperarUsuarioPorEmail($email);
    
    $id = $usuario->getId();
    $nome = $usuario->getNome();
    $email = $usuario->getEmail();
    
    
    
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<meta charset="utf-8">
	<link type="text/css" href="../css/bootstrap.css" rel="stylesheet">
        <title>Altera Dados de Usuário</title>
    </head>
    <body class="cor3">
        
        <form>
            <label>Nome: </label>
            <input type="text" value="<?php $nome ?>">    
        </form>
        
    </body>
</html>


