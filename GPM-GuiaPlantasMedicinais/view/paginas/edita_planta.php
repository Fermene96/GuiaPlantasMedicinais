<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<meta charset="utf-8">
	<link type="text/css" href="../css/bootstrap.css" rel="stylesheet">
        <title>Edição de Plantas</title>
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
                        <li><a href="lista_user.php">Lista de Usuários</a></li>
                        <li><a href="login_adm.php">Login de Administrador</a></li>
                        <li><a href="cadastra_planta.php">Cadastrar Planta</a></li>
    		</ul>
  		</div>
	</nav>
<?php
            require_once (__DIR__ .'/../../to/Planta.php');
            require_once (__DIR__ .'/../../controller/ManterPlantaControl.php');
            
            $manterPlanta = new ManterPlantaControl();
            
            $plantas = $manterPlanta->recuperarTodasPlantas();
            foreach ($plantas as $planta) {
                
                $id = $planta->getId();
                $nome = $planta->getNome();
                $descricao = $planta->getDescricao();
                $foto = $planta->getFoto();
                $preparo = $planta->getPreparo();
                $cultivo = $planta->getCultivo();
             
            echo <<<HTML
                <table class="cor2" border="0" align="center" width="1200">
            <th class="fonte">$nome <a href="../imgs/$foto"> Imagem da Planta</a><br>
                <form class="subtitu" action="apagar_planta.php" method="post" enctype="multipart/form-data">
                    <br>
                    <label for="$id">$id </label>
                    <input type="hidden" id="$id" name="id" value="">
                    <br>
                    <label for="$nome">$nome </label>
                    <input type="hidden" id="$nome" name="nome" value="">
                    <br>
                    <label for="$descricao">$descricao </label>
                    <input type="hidden" id="$descricao" name="descricao" value="">
                    <br>
                    <label for="$preparo">$preparo</label>
                    <input type="hidden" id="$preparo" name="preparo" value="">
                    <br>
                    <label for="$cultivo">$cultivo</label>
                    <input type="hidden" id="$cultivo" name="cultivo" value="">
                    <br>
                    <input align="center" type="submit" value="Excluir" name="Excluir">
                </form>
            <tr>
                <td class="subtitu">Nome</td>
                <td class="subtitu">Código</td>
                <td class="subtitu">Descrição</td>
                <td class="subtitu">Modo de Preparo</td>
                <td class="subtitu">Modo de Cultivo</td>

            </tr>
                
            <tr>
                    <td>$nome</>
                <td>$id</td>
                    <td>$descricao</td>
                    <td>$preparo</td>
                    <td>$cultivo</td>
                    <td>
                        <a href="apagar_planta.php?delete=<?php echo $id; ?>";
                        class="btn btn-danger">Delete</a>
                    </td>
                    <td>
                        <a href="altera_planta.php?editar=<?php echo $id; ?>";
                        class="btn btn-info">Editar</a>
                    </td>
                    
                    
                    
                    <br>
                </tr>
                    
    </table>
    </body>

HTML;
}     

