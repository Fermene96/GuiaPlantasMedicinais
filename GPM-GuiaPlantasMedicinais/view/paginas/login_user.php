<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<meta charset="utf-8">
	<link type="text/css" href="../css/bootstrap.css" rel="stylesheet">
        
        <title>Login de Usuario</title>
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
                        <li><a href="cadastro.php">Cadastrar-se</a></li>
                        <li><a href="login_user.php">Login</a></li>
                        <li><a href="login_adm.php">Login de Administrador</a></li>
    		</ul>
  		</div>
	</nav>
        <table class="cor2" border="0" align="center" width="990">
            <th class="fonte">Informe seus dados</th>
            <tr>
                <td>
                    <form action="autentica_user.php" method="POST" enctype="multipart/form-data">
                    <br>
                    <div class="form-group">
                        <label for="email">Email: </label>
                        <br>
                        <input class="form-control" type="email" name="email" id="email" placeholder="Digite seu email(Exemplo: nome@email.com)" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="senha">Senha: </label>
                        <br>
                        <input class="form-control" type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
                    </div>
                    <br>
                    <br>
                    <input class="btn btn-lg btn-primary" align="center" type="submit" name="Enviar">
                    <input class="btn btn-lg btn-danger" align="center" type="reset" value="Cancelar" name="Canecelar"> 
                </form>
            </td>
            </tr>
            
                
        </table>
        
    </body>
</html>
