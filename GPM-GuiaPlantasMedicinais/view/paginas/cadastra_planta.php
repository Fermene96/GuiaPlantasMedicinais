<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<meta charset="utf-8">
	<link type="text/css" href="../css/bootstrap.css" rel="stylesheet">
	<title>Cadastro de Planta</title>
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
		<th class="fonte">Insira os dados da planta</th>
		<tr>
			<td>
                            <form action="registra_planta.php" method="post" enctype="multipart/form-data">
					<br>
					<div class="form-group">
						<label for="namePlanta">Nome da Planta: </label>
						<br>
						<input class="form-control"type="text" name="nomePlanta" id="namePlanta" required>
					</div>
						<br>
					<div class="form-group">
						<label for="descricao">Faça uma descrição: </label>
						<br>
						<input class="form-control" type="text" name="descricao" id="descricao" required>
					</div>
						<br>
					<div class="form-group">
						<label for="cultivo">Modo de cultivo: </label>
						<br>
						<input class="form-control" type="text" name="cultivo" id="cultivo" required>
					</div>
					<div class="form-group">
						<label for="preparo">Modo de preparo: </label>
						<br>
						<input class="form-control" type="text" name="preparo" id="preparo" required>	
					</div>
					<div class="form-group">
						<label for="imagem">Imagem: </label>
						<br>
                                                <input type="file" name="imagem"required>
					</div>
					<br>
					<br>
                                        <input class="btn btn-lg btn-primary" align="center" type="submit" value="Enviar" name="enviar">
                                        <input class="btn btn-lg btn-danger" align="center" type="reset" value="Cancelar" name="Cancelar">

					
				</form>
			</td>
		</tr>
	</table>
</body>
</html>