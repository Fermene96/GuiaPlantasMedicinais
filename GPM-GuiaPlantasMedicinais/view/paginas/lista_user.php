<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<meta charset="utf-8">
	<link type="text/css" href="../css/bootstrap.css" rel="stylesheet">
        <title>Edição de Usuários</title>
    </head>
    <body class="cor3">
        <nav class="navbar navbar-default">
  		<div class="container-fluid">
    		<div class="navbar-header">
                    <a class="navbar-brand cor1" href="../../index.php">GPM</a>
    		</div>
    		<ul class="nav navbar-nav">
                    <li class="active"><a href="../../index.php">Home</a></li>
                    <li><a href="contato.php">Contato</a></li>
                        <li><a href="login_adm.php">Login de Administrador</a></li>
                        <li><a href="cadastra_planta.php">Cadastrar Planta</a></li>
    		</ul>
  		</div>
	</nav>
        
        <?php
        require_once (__DIR__ .'/../../to/Usuario.php');
        require_once (__DIR__ .'/../../controller/ManterUsuarioControl.php');
        
        $manterUsuario = new ManterUsuarioControl();
        
        $usuarios = $manterUsuario->recuperarTodosUsuarios();
        foreach ($usuarios as $usuario) {
            
            $id = $usuario->getId();
            $nome = $usuario->getNome();
            $email = $usuario->getEmail();
            
            
        echo <<<HTML
            <table class="cor2" border="0" align="center" width="1200">
            <th class="fonte">Usuario</th>
            <tr>
                <td class="subtitu">Codigo:</td>
                <td class="subtitu">Nome:</td>
                <td class="subtitu">Email:</td>

            </tr>
                
            <tr>
                    <td>$id</td>
                    <td>$nome</td>
                    <td>$email</td>
                    
                    
                    <br>
                </tr>
                <tr>
                <td><a href='altera_user.php?email=" . $email . "'>Editar</a><br> </td>   
                </tr>


    </body>
</html>
HTML;
                }