<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<meta charset="utf-8">
	<link type="text/css" href="../css/bootstrap.css" rel="stylesheet">
        <title>Cadastro de usuario</title>
    </head>
    <body class="cor3">

   

<h1>Cadastro de usuario</h1>
    
    <?php

	require_once(__DIR__ .'/../../controller/ManterUsuarioControl.php');
        require_once (__DIR__ .'/../../to/Usuario.php');

	$manterUsuario = new ManterUsuarioControl();

	$usuario = new Usuario();
        
        $usuario->setNome($_POST['nome']);
        $usuario->setEmail($_POST['email']);
        $usuario->setSenha($_POST['senha']);
        
        $manterUsuario->cadastrarUsuario($usuario);

?>
<a href="../../index.php">Voltar Para Home</a>

 </body>

</html>
