<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<meta charset="utf-8">
	<link type="text/css" href="../css/bootstrap.css" rel="stylesheet">
	<title>Cadastro</title>
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
	<?php

	if (isset($_POST['nome']) && empty( $_POST['nome'])) {
		echo "Preecha o campo nome";
	}
	?>

	<table class="cor2" border="0" align="center" width="990">
		<th class="fonte">Insira seus dados</th>
		<tr>
			<td>
                            <form action="registra_usuario.php" method="post" enctype="multipart/form-data">
					<br>
					<div class="form-group">
					<label for="name">Nome: </label>
					<br>
                                        <input class="form-control" type="text" name="nome" id="name" placeholder="Digite seu nome" required>
					</div>
					<br>
					<div class="form-group">
					<label for="endereco">Email: </label>
					<br>
                                        <input class="form-control" type="email" name="email" id="endereco" placeholder="Digite seu email (Exemplo: fulano@gmail.com)" required>
					</div>
					<br>
					<div class="form-group">
					<label for="senha">Senha: </label>
					<br>
                                        <input class="form-control" type="password" name="senha" id="senha" placeholder="Digite uma senha com no minino 6 caracteres" required>
					</div>
					<br>
					<br>
                                        <input class="btn btn-lg btn-primary" align="center" type="submit" name="enviar">
                                        <input class="btn btn-lg btn-danger" align="center" type="reset" value="Cancelar" name="Cancelar">
				</form>	
			</td>
			
		</tr>
	</table>

</body>
</html>