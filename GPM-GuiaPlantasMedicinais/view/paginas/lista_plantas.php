<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<meta charset="utf-8">
	<link type="text/css" href="../css/bootstrap.css" rel="stylesheet">
        <title>Lista de Plantas Medicinais</title>
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
            <th class="fonte">$nome <a href="../imgs/$foto"> Imagem da Planta</a></th>
            <tr>
                <td class="subtitu">Código</td>
                <td class="subtitu">Descrição</td>
                <td class="subtitu">Modo de Preparo</td>
                <td class="subtitu">Modo de Cultivo</td>

            </tr>
                
            <tr>
                    <td>$id</td>
                    <td>$descricao</td>
                    <td>$preparo</td>
                    <td>$cultivo</td>
                    
                    
                    <br>
                </tr>
                    
    </table>
    </body>

HTML;
}     