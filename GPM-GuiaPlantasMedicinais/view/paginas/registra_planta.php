<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<meta charset="utf-8">
	<link type="text/css" href="../css/bootstrap.css" rel="stylesheet">
        <title>Upload de Plantas</title>
    </head>
    <body class="cor3">
        <h1>Upload de Plantas</h1>
    
<?php 

        	
    
    require_once (__DIR__ .'/../../controller/ManterPlantaControl.php');
    require_once (__DIR__ .'/../../to/Planta.php');
    

            $manterPlanta = new ManterPlantaControl();
            
            $planta = new Planta();
            
            //$extensao = strtolower(substr($_FILES['imagem']['name'], -4));
            //$novo_nome = md5(time()) . $extensao;
            //$diretorio = '../imgs/';
            
            //move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio);
            
            $destino = '../imgs/' . $_FILES['imagem']['name'];
 
            $arquivo_tmp = $_FILES['imagem']['tmp_name'];
 
            move_uploaded_file( $arquivo_tmp, $destino  );
            
            $planta->setNome($_POST['nomePlanta']);
            $planta->setFoto($_FILES['imagem']['name']);
            $planta->setDescricao($_POST['descricao']);
            $planta->setPreparo($_POST['preparo']);
            $planta->setCultivo($_POST['cultivo']);
            
            
            
            $manterPlanta->cadastrarPlanta($planta);
            
            
           
	
?>

        <a href="edita_planta.php">Voltar Para Home</a>


    </body>
</html>
